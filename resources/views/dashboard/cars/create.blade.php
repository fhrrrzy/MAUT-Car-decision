@extends('layout.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <h4 class="page-title">Tambah Mobil</h4>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('dashboard.cars.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Umur</label>
                            <input type="number" class="form-control" id="age" name="age" required>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Harga</label>
                            <input type="text" class="form-control" id="price" name="price" required>
                        </div>

                        <div class="mb-3">
                            <label for="kilometer_used" class="form-label">Kilometer Digunakan</label>
                            <input type="number" class="form-control" id="kilometer_used" name="kilometer_used" required>
                        </div>

                        <div class="mb-3">
                            <label for="condition" class="form-label">Kondisi</label><br>
                            @for ($i = 1; $i <= 10; $i++)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="condition" id="condition_{{ $i }}" value="{{ $i }}">
                                <label class="form-check-label" for="condition_{{ $i }}">{{ $i }}</label>
                            </div>
                            @endfor
                        </div>

                        <div class="mb-3">
                            <label for="fuel_type" class="form-label">Jenis Bahan Bakar</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_bensin" value="Bensin" checked>
                                <label class="form-check-label" for="fuel_bensin">Bensin</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_diesel" value="Diesel">
                                <label class="form-check-label" for="fuel_diesel">Diesel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_elektrik" value="Elektrik">
                                <label class="form-check-label" for="fuel_elektrik">Elektrik</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="safety_measurement" class="form-label">Pengukuran Keamanan</label><br>
                            @for ($i = 1; $i <= 10; $i++)
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="safety_measurement" id="safety_measurement_{{ $i }}" value="{{ $i }}">
                                <label class="form-check-label" for="safety_measurement_{{ $i }}">{{ $i }}</label>
                            </div>
                            @endfor
                        </div>

                        <div class="mb-3">
                            <label for="warranty_showroom" class="form-label">Garansi (Showroom)</label>
                            <input type="text" class="form-control datepicker" id="warranty_showroom" name="warranty_showroom" required>
                        </div>

                        <div class="mb-3">
                            <label for="warranty_store" class="form-label">Garansi (Toko)</label>
                            <input type="text" class="form-control datepicker" id="warranty_store" name="warranty_store" required>
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Jenis</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_manual" value="Manual" checked>
                                <label class="form-check-label" for="type_manual">Manual</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_auto" value="Auto">
                                <label class="form-check-label" for="type_auto">Auto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="type" id="type_semi_auto" value="Semi-Auto">
                                <label class="form-check-label" for="type_semi_auto">Semi-Auto</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<!-- Include Bootstrap Datepicker JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<!-- Include jQuery Mask Plugin -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize Bootstrap Datepicker for warranty fields
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd', // Adjust the date format as needed
            autoclose: true,
            todayHighlight: true
        });

        // Initialize input mask for price field (Rupiah format)
        $('#price').mask('000.000.000.000', { reverse: true });
    });
</script>
@endsection
