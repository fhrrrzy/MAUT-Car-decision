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
                        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#create-car-modal">Tambah Mobil</button>

                        <table class="table dt-responsive nowrap w-100" id="car-table">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Umur Pemakaian</th>
                                    <th>Harga</th>
                                    <th>Kilometer Digunakan</th>
                                    <th>Efisiensi Bensin (km/l)</th>
                                    <th>Tipe Bensin</th>
                                    <th>Garansi (Showroom)</th>
                                    <th>Tipe Transmisi</th>
                                    <th></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--  Modal content for the Large example -->
    <div class="modal fade" id="create-car-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Tambah Mobil</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <form method="POST" id="create-car-form">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>


                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp. </span>
                                <input type="text" class="form-control" id="price" name="price" data-toggle="input-mask" data-mask-format="999.999.999.999" placeholder="-" data-reverse="true" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="release_date" class="form-label">Tanggal Rilis</label>
                            <input type="text" class="form-control datepicker" id="release_date" name="release_date" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                        </div>

                        <div class="mb-3">
                            <label for="first_registration_date" class="form-label">Tanggal Mulai Pemakaian</label>
                            <input type="text" class="form-control datepicker" id="first_registration_date" name="first_registration_date" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                        </div>

                        <div class="mb-3">
                            <label for="kilometer_used" class="form-label">Kilometer Digunakan</label>
                            <div class="input-group">
                                <span class="input-group-text">Km </span>
                                <input type="text" class="form-control" id="kilometer_used" name="kilometer_used" data-toggle="input-mask" data-mask-format="999.999.999.999" placeholder="-" data-reverse="true" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fuel_efficiency" class="form-label">Efisiensi Bensin</label>
                            <div class="input-group">
                                <span class="input-group-text">Km/Liter </span>
                                <input type="text" class="form-control" id="fuel_efficiency" name="fuel_efficiency" data-toggle="input-mask" data-mask-format="999.999.999.999" placeholder="-" data-reverse="true" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fuel_type" class="form-label">Jenis Bahan Bakar</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_bensin" value="bensin" checked>
                                <label class="form-check-label" for="fuel_bensin">Bensin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_diesel" value="diesel">
                                <label class="form-check-label" for="fuel_diesel">Diesel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_elektrik" value="elektrik">
                                <label class="form-check-label" for="fuel_elektrik">Elektrik</label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="warranty_showroom" class="form-label">Garansi (Showroom)</label>
                            <input type="text" class="form-control datepicker" id="warranty_showroom" name="warranty_showroom" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe transimis</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_manual" value="manual" checked>
                                <label class="form-check-label" for="type_manual">Manual</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_auto" value="auto">
                                <label class="form-check-label" for="type_auto">Auto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_semi_auto" value="semiauto">
                                <label class="form-check-label" for="type_semi_auto">Semi-Auto</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" name="image" class="dropify" data-max-file-size="3M" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="create-car-button">Simpan</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Modal content for the Large example -->
    <div class="modal fade" id="edit-car-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Edit Mobil</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <form method="POST" id="edit-car-form" data-car-uuid="">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Mobil</label>
                            <input type="text" class="form-control" id="edit-name" name="name" required>
                        </div>


                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <div class="input-group">
                                <span class="input-group-text">Rp. </span>
                                <input type="text" class="form-control" id="edit-price" name="price" data-toggle="input-mask" data-mask-format="999.999.999.999" placeholder="-" data-reverse="true" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="release_date" class="form-label">Tanggal Rilis</label>
                            <input type="text" class="form-control datepicker" id="edit-release_date" name="release_date" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                        </div>

                        <div class="mb-3">
                            <label for="first_registration_date" class="form-label">Tanggal Mulai Pemakaian</label>
                            <input type="text" class="form-control datepicker" id="edit-first_registration_date" name="first_registration_date" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                        </div>

                        <div class="mb-3">
                            <label for="kilometer_used" class="form-label">Kilometer Digunakan</label>
                            <div class="input-group">
                                <span class="input-group-text">Km </span>
                                <input type="text" class="form-control" id="edit-kilometer_used" name="kilometer_used" data-toggle="input-mask" data-mask-format="999.999.999.999" placeholder="-" data-reverse="true" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fuel_efficiency" class="form-label">Efisiensi Bensin</label>
                            <div class="input-group">
                                <span class="input-group-text">Km/Liter </span>
                                <input type="text" class="form-control" id="edit-fuel_efficiency" name="fuel_efficiency" data-toggle="input-mask" data-mask-format="999.999.999.999" placeholder="-" data-reverse="true" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="fuel_type" class="form-label">Jenis Bahan Bakar</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="edit-fuel_bensin" value="bensin" checked>
                                <label class="form-check-label" for="fuel_bensin">Bensin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="edit-fuel_diesel" value="diesel">
                                <label class="form-check-label" for="fuel_diesel">Diesel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="edit-fuel_elektrik" value="elektrik">
                                <label class="form-check-label" for="fuel_elektrik">Elektrik</label>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label for="warranty_showroom" class="form-label">Garansi (Showroom)</label>
                            <input type="text" class="form-control datepicker" id="edit-warranty_showroom" name="warranty_showroom" data-provide="datepicker" data-date-format="yyyy-mm-dd" required>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Tipe transimis</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="edit-type_manual" value="manual" checked>
                                <label class="form-check-label" for="type_manual">Manual</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="edit-type_auto" value="auto">
                                <label class="form-check-label" for="type_auto">Auto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="edit-type_semi_auto" value="semiauto">
                                <label class="form-check-label" for="type_semi_auto">Semi-Auto</label>
                            </div>
                        </div>

                        <div class="mb-3" id="image-upload-container">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" name="image" id="edit-image" class="dropify" data-default-file="" data-max-file-size="3M" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" id="edit-car-button">Simpan Perubahan</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <!--  Modal content for the Large example -->
    <div class="modal fade" id="detail-car-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Detail Mobil</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="" alt="image" id="detail-car-modal-image" class="img-fluid rounded">
                        </div>
                        <div class="col-md-8">
                            <h3 id="detail-car-modal-name">Mobil Keren</h3>
                            <h5 id="detail-car-modal-price" class="text-grey">Rp. 1.000.0000.000</h5>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <div class="widget-rounded-circle card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-1 mt-2">Tanggal Rilis</h5>
                                                    <p class="mb-2 text-muted" id="detail-car-modal-release_date"></p>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget-rounded-circle card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-1 mt-2">Mulai Dipakai</h5>
                                                    <p class="mb-2 text-muted" id="detail-car-modal-first_registration_date"></p>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget-rounded-circle card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-1 mt-2">Tipe Bensin</h5>
                                                    <p class="mb-2 text-muted" id="detail-car-modal-fuel_type"></p>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="widget-rounded-circle card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-1 mt-2">Tipe Transmisi</h5>
                                                    <p class="mb-2 text-muted" id="detail-car-modal-type"></p>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-rounded-circle card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-1 mt-2">Kilomter Digunakan</h5>
                                                    <p class="mb-2 text-muted" id="detail-car-modal-kilometer_used"></p>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-rounded-circle card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-1 mt-2">Efisiensi Bensin</h5>
                                                    <p class="mb-2 text-muted" id="detail-car-modal-fuel_efficiency"></p>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="widget-rounded-circle card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h5 class="mb-1 mt-2">Garansi Showroom</h5>
                                                    <p class="mb-2 text-muted" id="detail-car-modal-warranty_showroom"></p>
                                                </div>
                                            </div> <!-- end row-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
@endsection

@section('scripts')
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="https://coderthemes.com/ubold/layouts/assets/libs/dropify/js/dropify.min.js"></script>

    <script>
        $(document).ready(() => {
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });

            // add event createa-car-button on click will take all the data from the form and send it to the server
            $('#create-car-button').on('click', function() {
                const form = $('#create-car-form')[0];
                const formData = new FormData(form);

                //reformat the data to be sent to the server such as data price, kilometer_used, fuel_efficiency
                formData.set('price', formData.get('price').replaceAll('.', ''));
                formData.set('kilometer_used', formData.get('kilometer_used').replaceAll('.', ''));
                formData.set('fuel_efficiency', formData.get('fuel_efficiency').replaceAll('.', ''));

                $.ajax({
                    url: "/api/car",
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        Toast.fire({
                            icon: 'success',
                            title: 'Data mobil berhasil ditambahkan.'
                        });
                        $('#create-car-modal').modal('hide');
                        $('#create-car-form')[0].reset();
                        $('#car-table').DataTable().ajax.reload();
                    },
                    error: (xhr, status, error) => {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal menambahkan data mobil.'
                        });
                    }
                });
            });

            // Save button click event
            $('#edit-car-button').on('click', function() {
                const form = $('#edit-car-form')[0];
                const formData = new FormData(form);

                //reformat the data to be sent to the server such as data price, kilometer_used, fuel_efficiency
                formData.set('price', formData.get('price').replaceAll('.', ''));
                formData.set('kilometer_used', formData.get('kilometer_used').replaceAll('.', ''));
                formData.set('fuel_efficiency', formData.get('fuel_efficiency').replaceAll('.', ''));

                formData.append('_method', 'PUT');

                const carUuid = $('#edit-car-form').data('car-uuid');

                $.ajax({
                    url: `/api/car/${carUuid}`, // Assuming carId is accessible here
                    type: 'POST', // Use POST method for update
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: (response) => {
                        Toast.fire({
                            icon: 'success',
                            title: 'Data mobil berhasil diperbarui.'
                        });
                        $('#edit-car-modal').modal('hide');
                        $('#edit-car-form')[0].reset();
                        $('#car-table').DataTable().ajax.reload();
                    },
                    error: (xhr, status, error) => {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal memperbarui data mobil.'
                        });
                    }
                });
            });
                        
            $('.dropify').dropify({
                messages: {
                    'default': 'Tarik dan lepas file atau klik disini',
                    'replace': 'Tarik dan lepas file atau klik disini untuk mengganti',
                    'remove':  'Hapus',
                    'error':   'Ooops, ada yang salah.'
                }
            });



            let dataTable;

            // Function to handle the delete action
            function handleDelete(carUuid) {
                $.ajax({
                    url: `/api/car/${carUuid}`,
                    type: 'POST', // Send as POST with _method=DELETE
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "_method": "DELETE"
                    },
                    success: (response) => {
                        Toast.fire({
                            icon: 'success',
                            title: 'Data mobil berhasil dihapus.'
                        });
                        dataTable.ajax.reload();
                    },
                    error: (xhr, status, error) => {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal Menghapus data mobil.'
                        });
                    }

                });
            }

            // Function to bind delete event to buttons
            function bindActionButton() {
                $('.delete-btn').off('click').on('click', function() {
                    const carId = $(this).data('uuid');
                    Swal.fire({
                        title: 'Yakin ingin menghapus data ini?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            handleDelete(carId); // Call handleDelete function
                        }
                    });
                });

                $('.btn-detail').off('click').on('click', function() {
                    const carId = $(this).data('uuid');
                    $.ajax({
                        url: `/api/car/${carId}`,
                        type: 'GET',
                        success: (response) => {
                            const car = response;
                            $('#detail-car-modal').modal('show');
                            $('#detail-car-modal-name').text(car.name);
                            $('#detail-car-modal-price').text(`Rp. ${car.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".")}`);
                            $('#detail-car-modal-release_date').text(car.release_date);
                            $('#detail-car-modal-first_registration_date').text(car.first_registration_date);
                            $('#detail-car-modal-kilometer_used').text(`${car.kilometer_used.toLocaleString()} Kilometer`);
                            $('#detail-car-modal-fuel_efficiency').text(`${car.fuel_efficiency.toLocaleString()} Km/Liter`);
                            $('#detail-car-modal-fuel_type').text(car.fuel_type.charAt(0).toUpperCase() + car.fuel_type.slice(1));
                            $('#detail-car-modal-warranty_showroom').text(car.warranty_showroom);
                            $('#detail-car-modal-type').text(car.type.charAt(0).toUpperCase() + car.type.slice(1));
                            $('#detail-car-modal-image').attr('src', car.image);
                        },
                        error: (xhr, status, error) => {
                            Toast.fire({
                                icon: 'error',
                                title: 'Gagal mengambil data mobil.'
                            });
                        }
                    });
                });

                $('.btn-edit').off('click').on('click', function() {
                    const carId = $(this).data('uuid');
                    $.ajax({
                        url: `/api/car/${carId}`,
                        type: 'GET',
                        success: (response) => {
                            const car = response;

                            // Populate the form with car data
                            $('#edit-name').val(car.name);
                            $("#edit-car-form").attr('data-car-uuid', car.uuid);
                            $('#edit-price').val(car.price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
                            $('#edit-release_date').val(car.release_date);
                            $('#edit-first_registration_date').val(car.first_registration_date);
                            $('#edit-kilometer_used').val(car.kilometer_used.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
                            $('#edit-fuel_efficiency').val(car.fuel_efficiency.toString().replace(/\B(?=(\d{3})+(?!\d))/g, "."));
                            $(`input[name="fuel_type"][value="${car.fuel_type}"]`).prop('checked', true);
                            $('#edit-warranty_showroom').val(car.warranty_showroom);
                            $(`input[name="type"][value="${car.type}"]`).prop('checked', true);

                            $('#edit-image').attr("data-default-file", car.image);
                            $('#edit-image').dropify({
                                messages: {
                                    'default': 'Tarik dan lepas file atau klik disini',
                                    'replace': 'Tarik dan lepas file atau klik disini untuk mengganti',
                                    'remove':  'Hapus',
                                    'error':   'Ooops, ada yang salah.'
                                }
                            });


                            $('#edit-car-modal').modal('show');
                        },
                        error: (xhr, status, error) => {
                            Toast.fire({
                                icon: 'error',
                                title: 'Gagal mengambil data mobil.'
                            });
                        }
                    });
                });

            }

            // Function to initialize the DataTable
            function initializeDataTable() {
                dataTable = $('#car-table').DataTable({
                    processing: true,
                    serverSide: true,
                    stateSave: true,
                    ajax: "{{ route('dashboard.cars.index') }}",
                    columns: [{
                            data: 'name',
                            name: 'name',
                            render: function(data, type, row, meta) {
                                return data.toUpperCase(); // Capitalize the name
                            }
                        },
                        {
                            data: 'usage_age',
                            name: 'usage_age',
                            sClass: 'text-end',
                            render: function(data, type, row, meta) {
                                return data + ' Tahun'; // Append "Tahun" to usage_age
                            }
                        },
                        {
                            data: 'price',
                            name: 'price',
                            sClass: 'text-end',
                            render: function(data, type, row, meta) {
                                return 'Rp. ' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g,
                                    "."); // Add "Rp." and format as currency
                            }
                        },
                        {
                            data: 'kilometer_used',
                            name: 'kilometer_used',
                            sClass: 'text-end',
                            render: function(data, type, row, meta) {
                                return data
                            .toLocaleString(); // Format kilometer_used with thousand separators
                            }
                        },
                        {
                            data: 'fuel_efficiency',
                            name: 'fuel_efficiency',
                            sClass: 'text-center',
                        },
                        {
                            data: 'fuel_type',
                            name: 'fuel_type',
                            render: function(data, type, row, meta) {
                                return data.charAt(0).toUpperCase() + data.slice(
                                1); // Capitalize the first letter of fuel_type
                            }
                        },
                        {
                            data: 'warranty_showroom',
                            name: 'warranty_showroom',
                            // render: function(data, type, row, meta) {
                            //     // Parse date and format as DD/MM/YYYY
                            //     var date = new Date(data);
                            //     return date.toLocaleDateString('id-ID');
                            // }
                        },
                        {
                            data: 'type',
                            name: 'type',
                            render: function(data, type, row, meta) {
                                return data.charAt(0).toUpperCase() + data.slice(
                                1); // Capitalize the first letter of type
                            }
                        },
                        {
                            data: 'uuid',
                            name: 'uuid',
                            orderable: false,
                            searchable: false,
                            render: (data, type, full, meta) => `
                                <button class="btn-edit btn btn-sm btn-soft-primary delete-btn" data-uuid="${full.uuid}">
                                    <i class="fe-edit"></i>    
                                </button>
                                <button class="btn-detail btn btn-sm btn-soft-info delete-btn" data-uuid="${full.uuid}">
                                    <i class="fe-eye"></i>    
                                </button>
                                <button class="btn-delete btn btn-sm btn-soft-danger delete-btn" data-uuid="${full.uuid}">
                                    <i class="fe-trash-2"></i>    
                                </button>
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
                        bindActionButton(); // Bind delete event after table is drawn
                    }
                });

                // Handle responsive layout change event
                dataTable.on('responsive-display', function(e, datatable, row, showHide, update) {
                    if (showHide) {
                        // Re-bind delete event for newly displayed buttons in responsive mode
                        bindActionButton();
                    }
                });
            }

            // Initialize DataTable
            initializeDataTable();

            $('[data-toggle="input-mask"]').each(function (a, e) {
                 var t = $(e).data("maskFormat"),
                n = $(e).data("reverse");
                null != n ? $(e).mask(t, { reverse: n }) : $(e).mask(t);
            })
        });


    </script>
@endsection
