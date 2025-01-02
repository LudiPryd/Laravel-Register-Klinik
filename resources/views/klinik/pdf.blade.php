<!DOCTYPE html>
<html>
<head>
	<title>Laporan PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <style type="text/css">
        table tr td,
        table tr th{
            font-size: 9pt;
        }
    </style>

    <center>
        <h5>Laporan Antrian Pengunjung</h4>
    </center>

	<table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center" width="5%">No</th>
                <th class="text-center" width="16%">Nama</th>
                <th class="text-center" width="13%">No Telepon</th>
                <th class="text-center">Alamat</th>
                <th class="text-center" width="10%">Jenis Peliharaan</th>
                <th class="text-center" width="10%">Tanggal Kunjungan</th>
                <th class="text-center" width="17%">Sesi Kedatangan</th>
                <th class="text-center">Keluhan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=0 @endphp
            @foreach ($klinik as $data)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $data->Nama }}</td>
                <td>{{ $data->No_Telepon }}</td>
                <td>{{ $data->Alamat }}</td>
                <td>{{ $data->Jenis_Peliharaan }}</td>
                <td>{{ $data->tgl_kunjungan }}</td>
                <td>{{ $data->Sesi }}</td>
                <td>{{ $data->Keluhan }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
