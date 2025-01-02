@extends('layout.template')

@section('content')
@can('isAdmin')
<div class="card shadow mb-4">
    <div class="card-body">
        <h1 class="h3 mb-0 text-gray-800">Daftar Antrian</h1>
        <hr class="divider">
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" width="5%">No</th>
                    <th class="text-center" width="16%">Nama</th>
                    <th class="text-center" width="13%">No Telepon</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center" width="10%">Jenis Peliharaan</th>
                    <th class="text-center" width="10%">Tanggal Kunjungan</th>
                    <th class="text-center" width="17%">Sesi Kedatangan</th>
                    <th class="text-center" width="5%">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($klinik as $data)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $data->Nama }}</td>
                    <td>{{ $data->No_Telepon }}</td>
                    <td>{{ $data->Alamat }}</td>
                    <td>{{ $data->Jenis_Peliharaan }}</td>
                    <td>{{ $data->tgl_kunjungan }}</td>
                    <td>{{ $data->Sesi }}</td>
                    <td class="d-flex justify-content-center">
                    <a class="btn btn-secondary" href="{{ route('klinik.edit', $data->id ) }}"><i class="fas fa-edit"></i></a>&nbsp;
                        <form action="{{ route('klinik.destroy', $data->id ) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>

                @endforeach
            </tbody>
        </table>
        <a href="/klinik/cetak_pdf" class="btn btn-secondary" target="_blank">Report</a>
    </div>
</div>
@elsecan('isUser')
<div class="card shadow mb-4">
    <div class="card-body">
        <h1 class="h3 mb-0 text-gray-800">Daftar Antrian</h1>
        <hr class="divider">
        <table id="myTable" class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" width="5%">No</th>
                    <th class="text-center" width="16%">Nama</th>
                    <th class="text-center" width="10%">Jenis Peliharaan</th>
                    <th class="text-center" width="10%">Tanggal Kunjungan</th>
                    <th class="text-center" width="17%">Sesi Kedatangan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($klinik as $data)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $data->Nama }}</td>
                    <td>{{ $data->Jenis_Peliharaan }}</td>
                    <td>{{ $data->tgl_kunjungan }}</td>
                    <td>{{ $data->Sesi }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endcan
@endsection
