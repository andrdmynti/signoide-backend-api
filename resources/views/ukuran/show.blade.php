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
                        <th>Nama Ukuran</th>
                        <td>:</td>
                        <td>{{ $ukuran->ukuran}}</td>
                    </tr>
                    <tr>
                        <th>No. Rekening</th>
                        <td>:</td>
                        <td>{{ $ukuran->detail }}</td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
    </div>
@endsection