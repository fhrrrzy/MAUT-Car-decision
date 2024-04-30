@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Car List</div>

                <div class="card-body">
                    <table class="table table-bordered" id="car-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Price</th>
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
    $(document).ready(function() {
        $('#car-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('dashboard.cars.index') }}",
            columns: [
                { data: 'name', name: 'name' },
                { data: 'age', name: 'age' },
                { data: 'price', name: 'price' },
                { data: 'type', name: 'type' },
                { data: 'action', name: 'action', orderable: false, searchable: false }
            ]
        });
    });
</script>
@endsection
