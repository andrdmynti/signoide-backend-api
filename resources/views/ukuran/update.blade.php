@extends('template.admin')
@section('konten')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Data Jenis Desain</h1>
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('ukuran.update', $ukuran->id) }}" method="post" class="was-validate">
            @csrf
            {{-- <input value="{{ $bank->id }}" name="id" hidden> --}}
            <div class="row">
                <div class="col-sm-3">

                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="uname">Ukuran:</label>
                        <input type="text" class="form-control" id="ukuran" placeholder="Enter jenis desain" name="ukuran" value="{{ $ukuran->ukuran }}" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="uname">Detail Ukuran:</label>
                        <textarea name="detail" type="text" id="detail" class="form-control" cols="30" rows="10">{{ $ukuran->detail }}</textarea>
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