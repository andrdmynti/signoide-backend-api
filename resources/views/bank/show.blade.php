@extends('template.admin')
@section('konten')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Data Bank</h1>
    </div>
    <div class="card shadow mb-4">
        <div class="card-body">
            <table>
                <tbody>
                    <tr>
                        <th>Nama Bank</th>
                        <td>:</td>
                        <td>{{ $bank->nama_bank}}</td>
                    </tr>
                    <tr>
                        <th>No. Rekening</th>
                        <td>:</td>
                        <td>{{ $bank->no_rek }}</td>
                    </tr>
                    <tr>
                        <th>Atas Nama Kepemilikan</th>
                        <td>:</td>
                        <td>{{ $bank->atas_nama}}</td>
                    </tr>
                    <tr>
                        <th>Cabang</th>
                        <td>:</td>
                        <td>{{ $bank->cabang}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>
@endsection