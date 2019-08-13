@extends('template.admin')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Jenis Desain</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('jenis.store') }}" method="post" class="was-validate">
                @csrf
                <div class="row">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="uname">Jenis Desain:</label>
                            <input type="text" class="form-control" id="jenis" placeholder="Enter jenis desain" name="jenis" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="uname">Detail Jenis Desain:</label>
                            <textarea name="detail" type="text" id="detail" class="form-control" cols="30" rows="10"></textarea>
                            {{-- <input type="text" class="form-control" id="atas_nama" placeholder="Enter atas nama kepemilikan" name="atas_nama" required> --}}
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">

                    </div>
                    <div class="col-sm-6" align="right">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Submit
                        </button>
                    </div>
                </div>
            </form>   
        </div>     
    </div>
@endsection