@extends('layout.template')

@section('content')

@if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

<div class="card shadow mb-4">
    <div class="card-body">
    	<h1 class="h3 mb-0 text-gray-800">Data Pengunjung</h1>
    	<hr class="divider">
    	<form class="row g-3" action="{{ route('klinik.update', $klinik->id) }}" method="POST">
        @csrf
  			<div class="col-md-6">
    			<label class="form-label">Nama</label>
    			<input type="text" name="Nama" value="{{$klinik->Nama}}" class="form-control">
  			</div>
  			<div class="col-md-6">
    			<label class="form-label">No. Telepon</label>
    			<input type="number" name="No_Telepon" value="{{$klinik->No_Telepon}}" class="form-control">
  			</div>
  			<div class="col-md-12">
    			<label class="form-label">Alamat</label>
    			<input type="text" name="Alamat" value="{{$klinik->Alamat}}" class="form-control">
  			</div>
            <div class="col-6">
                <label class="form-label">Jenis Peliharaan</label>
                <input type="text" name="Jenis_Peliharaan" value="{{$klinik->Jenis_Peliharaan}}" class="form-control">
            </div>
            <div class="col-md-3">
                <label class="form-label">Tanggal Kunjungan</label>
                <input type="date" name="tgl_kunjungan" value="{{$klinik->tgl_kunjungan}}" class="form-control">
            </div>
            <div class="col-md-3">
                <label class="form-label">Sesi Kunjungan</label>
                <select name="Sesi" class="form-control">
                    <option>{{$klinik->Sesi}}</option>
                    <option>Sesi 1 : 08:00 - 10:00</option>
                    <option>Sesi 2 : 10:00 - 12:00</option>
                    <option>Sesi 3 : 13:00 - 15:00</option>
                    <option>Sesi 4 : 15:00 - 17:00</option>
                </select>
            </div>
  			<div class="col-12">
    			<label class="form-label">Keluhan</label>
    			<textarea class="form-control" name="Keluhan" rows="4">{{$klinik->Keluhan}}
    			</textarea>
    			<br>
  			</div>
  			<div class="col-12">
    			<button type="submit" class="btn btn-secondary">Simpan</button>
  			</div>
		</form>
    </div>
</div>
@endsection
