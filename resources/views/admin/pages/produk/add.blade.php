@extends('admin.main')
@section('title','Tambah Produk')
@section('content')
<h1>Produk <small>Tambah</small></h1>
<hr>

<div class="row">
	<div class="col-md-6 mb-3">
		<form method="post" action="{{ route('admin.produk.add') }}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="card">
				<div class="card-header">
					<h5>Buat Produk Baru</h5>
				</div><!-- End Card Header -->

				<div class="card-body">
					
					<!-- Input Gambar -->
					<div class="form-group form-label-group">
						<input type="file" name="gambar"
<<<<<<< HEAD
						class="form-control"
						accept="image/*"
						id="iGambar" placeholder="Gambar Produk" required>
						<label for="iGambar">Gambar Produk</label>
=======
						class="form-control {{$errors->has('gambar')?'is-invalid':''}}"
						accept="image/*"
						id="iGambar" placeholder="Gambar Produk" required>
						<label for="iGambar">Gambar Produk</label>
						@if($errors->has('gambar'))
						<div class="invalid-feedback">{{$errors->first('gambar')}}</div>
						@endif
>>>>>>> tokap 35
					</div>


					<!-- Input kode produk -->
					<div class="form-group form-label-group">
						<input type="text" name="kode"
<<<<<<< HEAD
						class="form-control"
						value="{{ old('kode') }}"
						id="iKode" placeholder="Kode Produk" required>
						<label for="iKode">Kode Produk</label>
=======
						class="form-control {{$errors->has('kode')?'is-invalid':''}}"
						value="{{ old('kode') }}"
						id="iKode" placeholder="Kode Produk" required>
						<label for="iKode">Kode Produk</label>
						@if($errors->has('kode'))
						<div class="invalid-feedback">{{$errors->first('kode')}}</div>
						@endif
>>>>>>> tokap 35
					</div>

					<!-- Input nama produk -->
					<div class="form-group form-label-group">
						<input type="text" name="nama_produk"
<<<<<<< HEAD
						class="form-control"
						value="{{ old('nama_produk') }}"
						id="iNamaProduk" placeholder="Nama Produk" required>
						<label for="iNamaProduk">Nama Produk</label>
=======
						class="form-control {{$errors->has('nama_produk')?'is-invalid':''}}"
						value="{{ old('nama_produk') }}"
						id="iNamaProduk" placeholder="Nama Produk" required>
						<label for="iNamaProduk">Nama Produk</label>
						@if($errors->has('nama_produk'))
						<div class="invalid-feedback">{{$errors->first('nama_produk')}}</div>
						@endif
						
>>>>>>> tokap 35
					</div>

					<!-- Input harga -->
					<div class="form-group form-label-group">
						<input type="number" name="harga"
<<<<<<< HEAD
						class="form-control"
						value="{{ old('harga') }}"
						id="iHarga" placeholder="Harga" required>
						<label for="iHarga">Harga</label>
=======
						class="form-control {{$errors->has('harga')?'is-invalid':''}}"
						value="{{ old('harga') }}"
						id="iHarga" placeholder="Harga" required>
						<label for="iHarga">Harga</label>
						@if($errors->has('harga'))
						<div class="invalid-feedback">{{$errors->first('harga')}}</div>
						@endif
>>>>>>> tokap 35
					</div>

					<!-- Input stok -->
					<div class="form-group form-label-group">
						<input type="number" name="stok"
<<<<<<< HEAD
						class="form-control"
						value="{{ old('stok') }}"
						id="iStok" placeholder="Stok" required>
						<label for="iStok">Stok</label>
=======
						class="form-control {{$errors->has('stok')?'is-invalid':''}}"
						value="{{ old('stok') }}"
						id="iStok" placeholder="Stok" required>
						<label for="iStok">Stok</label>
						@if($errors->has('stok'))
						<div class="invalid-feedback">{{$errors->first('stok')}}</div>
						@endif
>>>>>>> tokap 35
					</div>

					<!-- Input kategori -->
					<div class="form-group">
						<select name="kategori"
<<<<<<< HEAD
						class="form-control"
						required> 
						<option value="">Pilih Kategori :</option>
						@foreach(\App\Kategori::orderBy('nama_kategori','asc')->get() as $d)
						<option value="{{ $d->id }}">
=======
						class="form-control {{$errors->has('kategori')?'is-invalid':''}}"
						required> 

						<?php 
						$val = old('kategori');
						 ?>
						<option value="">Pilih Kategori :</option>
						@foreach(\App\Kategori::orderBy('nama_kategori','asc')->get() as $d)
						<option value="{{ $d->id }}" {{$val==$d->id?'selected':''}}>
>>>>>>> tokap 35
							{{ $d->nama_kategori }}
						</option>
						@endforeach
					</select>
<<<<<<< HEAD
=======
					@if($errors->has('kategori'))
						<div class="invalid-feedback">{{$errors->first('kategori')}}</div>
						@endif
>>>>>>> tokap 35
					</div>


				</div><!-- End Card Body-->

				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div><!-- End Card footer  -->

			</div><!-- End Card  -->
		</form>
	</div>
</div><!-- End Row -->
@endsection

@push('js')
<script type="text/javascript">
	/*perintah menampilkan gambar yang dipilih */
	function filePreview(input) {
		if(input.files && input.files[0]){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#iGambar + img').remove();
				$('#iGambar').after('<img src="'+e.target.result+'" width="100" class="mt-3" />');

			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	/*perintah menjalankan fungsi filePreview */
	$(function(){
		$('#iGambar').change(function(){
			filePreview(this);
		})
	})
</script>
@endpush