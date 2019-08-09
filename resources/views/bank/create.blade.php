@extends('template.admin')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Bank</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('bank.store') }}" method="post" class="was-validate">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="uname">Nama Bank:</label>
                            <input type="text" class="form-control" id="nama_bank" placeholder="Enter nama bank" name="nama_bank" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="uname">Atas Nama Kepemilikan:</label>
                            <input type="text" class="form-control" id="atas_nama" placeholder="Enter atas nama kepemilikan" name="atas_nama" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="uname">No. Rekening:</label>
                            <input type="text" class="form-control" id="no_rek" placeholder="Enter nomor rekening" name="no_rek" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="uname">Cabang Bank:</label>
                            <input type="text" class="form-control" id="cabang" placeholder="Enter cabang bank" name="cabang" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12" align="right">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Submit
                        </button>
                    </div>
                </div>
            </form>   
        </div>     
    </div>
@endsection