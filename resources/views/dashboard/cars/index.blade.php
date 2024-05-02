@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Data Mobil</h4>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('dashboard.cars.create') }}" class="btn btn-primary mb-3">Tambah Mobil</a>
                    <table class="table dt-responsive nowrap w-100" id="car-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Price</th>
                                <th>Kilometer Used</th>
                                <th>Condition</th>
                                <th>Fuel Efficiency (km/l)</th>
                                <th>Fuel Type</th>
                                <th>Safety Measurement</th>
                                <th>Warranty (Showroom)</th>
                                <th>Warranty (Store)</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(() => {
    let dataTable;

    // Function to handle the delete action
    function handleDelete(carId) {
        $.ajax({
            url: `{{ route('dashboard.cars.destroy', ['car' => '__carId__']) }}`.replace('__carId__', carId),
            type: 'POST', // Send as POST with _method=DELETE
            data: {
                "_token": "{{ csrf_token() }}",
                "_method": "DELETE"
            },
            success: (response) => {
                Swal.fire(
                    'Deleted!',
                    'Car has been deleted.',
                    'success'
                );
                dataTable.ajax.reload();
            },
            error: (xhr, status, error) => {
                Swal.fire(
                    'Error!',
                    'Failed to delete car.',
                    'error'
                );
            }
        });
    }

    // Function to bind delete event to buttons
    function bindDeleteEvent() {
        $('.delete-btn').off('click').on('click', function() {
            const carId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    handleDelete(carId); // Call handleDelete function
                }
            });
        });
    }

    // Function to initialize the DataTable
    function initializeDataTable() {
        dataTable = $('#car-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('dashboard.cars.index') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'age', name: 'age' },
                { data: 'price', name: 'price' },
                { data: 'kilometer_used', name: 'kilometer_used' },
                { data: 'condition', name: 'condition' },
                { data: 'fuel_efficiency', name: 'fuel_efficiency' },
                { data: 'fuel_type', name: 'fuel_type' },
                { data: 'safety_measurement', name: 'safety_measurement' },
                { data: 'warranty_showroom', name: 'warranty_showroom' },
                { data: 'warranty_store', name: 'warranty_store' },
                { data: 'type', name: 'type' },
                { 
                    data: 'action', 
                    name: 'action', 
                    orderable: false, 
                    searchable: false,
                    render: (data, type, full, meta) => `
                        <a href="{{ url('dashboard/cars') }}/${full.id}" class="btn btn-sm btn-info">Details</a>
                        <a href="{{ url('dashboard/cars') }}/${full.id}/edit" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger delete-btn" data-id="${full.id}">Delete</button>
                    `
                }
            ],
            language: {
                paginate: {
                    previous: "<i class='mdi mdi-chevron-left'></i>",
                    next: "<i class='mdi mdi-chevron-right'></i>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
                bindDeleteEvent(); // Bind delete event after table is drawn
            }
        });
    }

    // Initialize DataTable
    initializeDataTable();

    // Handle responsive layout change event
    dataTable.on('responsive-display', function(e, datatable, row, showHide, update) {
        if (showHide) {
            // Re-bind delete event for newly displayed buttons in responsive mode
            bindDeleteEvent();
        }
    });
});

</script>
@endsection

