@extends('template.admin')
@section('konten')
    <h1 class="h3 mb-2 text-gray-800">Bank</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Bank</th>
                            <th>No. Rekening</th>
                            <th>Atas Nama</th>
                            <th>Cabang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bank as $item)
                            <tr>
                                <td>{{ $item->nama_bank }}</td>
                                <td>{{ $item->no_rek }}</td>
                                <td>{{ $item->atas_nama }}</td>
                                <td>{{ $item->cabang }}</td>
                                <td>aksi</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection