@extends('template.admin')
@section('konten')
    <h1 class="h3 mb-2 text-gray-800">Bank</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <br>
            <div class="row">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6" align="right">
                    <a href="{{ route('bank.create')}}">
                        <button type="button" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Tambah Data
                        </button>
                    </a>
                </div>
            </div>
            <br><br>
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
                                <td>
                                    <a href="{{ url('/bank/show') }}/{{ $item->id }}"><button type="button" class="btn btn-success btn-sm" title="Lihat Data"><i class="fa fa-eye"></i></button></a>
                                    <a href="{{ url('/bank/edit') }}/{{ $item->id }}"><button type="button" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></button></a>
                                    <input type="checkbox" data-id="{{ $item->id }}" class="toggle-class" data-onstyle="primary" data-offstyle="danger" data-toggle="toggle" {{ $item->status ? 'checked' : '' }}>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0; 
                var id = $(this).data('id'); 
                console.log("status="+status+" id="+id);
                
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/bank/status',
                    data: {
                    'status': status,
                    'id': id,
                    },
                    success: function(data){
                    console.log(data.success)
                    }
                });
            })
        })
    </script>
@endsection