@extends('layouts.index')
@section('content')
@php
$rs = App\jenis::all();
$rs2 = App\lokasi::all();
$rs3 = App\pengguna::all();

@endphp
<div class="p-3 mb-2 bg-primary text-white text-center">Silahkan Menambahkan Barang</div>
<br>
<form method="POST" action="{{ route('barang.store') }}" enctype="multipart/form-data">
	{{-- crud foto --}}
	{{-- <form role="form" method="POST" action="{{ route('barang.store') }}"
	enctype="multipart/form-data"> --}}
	@csrf
	<div class="container">
		<div class="row">
			<div class="col">

				<div class="form-group">

					<br>
					</br>
					<select name="namapengguna" class="form-control">
						<option value="">-- Pilih user --</option>
						@foreach ($rs3 as $row)

						<option value="{{ $row['id'] }}"> {{ $row['nama'] }}</option>
						@endforeach
					</select>
				</div>




				<div class="form-group">

					<br>
					</br>
					{{-- untuk @error  dan old  ('nama_barang') diambiil dari tabel barang nama_barang  '(nama_barang)'=>$request->nama1,  yang dikasih tanda kurung--}}
					<input type="text" class="form-control" placeholder="Nama Barang" name="nama1" value="" />
					{{-- name=("nama1" ) diambil dari barang controller  'nama_barang'=>$request->(nama1,) --}}



				</div>

				<div class="form-group">

					<br>
					</br>
					<select name="jeniss" class="form-control">
						<option value="">-- Pilih jenis --</option>
						@foreach ($rs as $row)
						<option value="{{ $row['id'] }}"> {{ $row['nama'] }}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">

					<br>
					</br>
					<select name="donaturss" class="form-control">
						<option value="">-- Pilih Donatur -- </option>

						<option value="External">External</option>
						<option value="Internal">Internal</option>
					</select>
				</div>
				<div class="form-group">

					<br>
					</br>

				</div>

				{{-- pembatas --}}
			</div>
			<div class="col">
				{{-- pembatas --}}





				<div class="form-group">

					<br>
					</br>
					<input type="text" class="form-control" placeholder="Masukan Jumlah" name="stok" />
				</div>
				<br><br>
				<div class="col">
					<div class="form-group">


						<select name="kondisis" class="form-control">
							<option value="">-- Pilih Kondisi barang --</option>

							<option value="baru">Baru</option>
							<option value="bekas">Bekas</option>
						</select>
					</div>
					<div class="form-group">


						{{-- <select name="statuss" class="form-control">
								<option value="">-- Pilih Kondisi barang --</option>
	
								<option value="aktif">Aktif</option>
								<option value="nonaktif">Nonaktif</option>
								<option value="rusak">Rusak</option>
								<option value="hilang">Hilang</option>
							</select> --}}
					</div>

					<div class="form-group">

						<br>
						</br>
						<input type="date" class="form-control" name="tglmasuks" value="" />

					</div>


					<div class="form-group">

						<br>
						</br>
						<input type="file" class="form-control" name="fotos" />
					</div>
					<br>
					<br>

					<button type="submit" class="btn btn-primary" name="proses" value="simpan">Simpan</button>

					<button type="reset" class="btn btn-danger" name="unproses" value="batal">Batal</button>
				</div>
			</div>
		</div>
	</div>

</form>
@endsection