@extends('admin.main')
@section('title','Kategori Tambah')
@section('content')
<h1>Kategori <small class="text-muted">Tambah</small></h1>
<hr>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
=======
>>>>>>> tokap 36
@if( session('result') == 'fail' )
<div class=" alert alert-danger alert-dismissible fade show">
	<strong>Faild !</strong> Gagal disimpan.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
=======
>>>>>>> tokap 36
<div class="row">
	<div class="col-md-6 mb-3">
		<form method="POST" action="{{ route('admin.kategori.add') }}">
		{{ csrf_field() }}
		<div class="card">
			
			<div class="card-header">
				<h5>Buat Kategori Baru</h5>
			</div><!--End Card Header -->


			<div class="card-body">
				<div class="form-group form-label-group">
					<input type="text" name="kategori"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
					class="form-control"
					value="{{ old('kategori') }}"
					id="iKategori" placeholder="Kategori" required>
					<label for="iKategori">Kategori</label>
=======
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
=======
>>>>>>> tokap 36
					class="form-control {{ $errors->has('kategori')?'is-invalid':'' }}"
					value="{{ old('kategori') }}"
					id="iKategori" placeholder="Kategori" required>
					<label for="iKategori">Kategori</label>
					@if( $errors->has('kategori') )
					<div class="invalid-feedback">{{ $errors->first('kategori') }}</div>
					@endif
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
=======
>>>>>>> tokap27
=======
>>>>>>> tokap 28-29
=======
>>>>>>> tokap 30-31
=======
>>>>>>> tokap 32
=======
>>>>>>> tokap 33
=======
>>>>>>> tokap 35
=======
>>>>>>> tokap 36
				</div><!-- End Form Group -->
			</div><!-- End Card Body -->


			<div class="card-footer">
			<button class="btn btn-primary" type="submit">Simpan</button>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		</div><!--End Card Footer ->
=======
		</div><!--End Card Footer-->
>>>>>>> tokap23
=======
		</div><!--End Card Footer-->
>>>>>>> tokap24
=======
		</div><!--End Card Footer-->
>>>>>>> tokap25
=======
		</div><!--End Card Footer-->
>>>>>>> tokap26
=======
		</div><!--End Card Footer-->
>>>>>>> tokap27
=======
		</div><!--End Card Footer-->
>>>>>>> tokap 28-29
=======
		</div><!--End Card Footer-->
>>>>>>> tokap 30-31
=======
		</div><!--End Card Footer-->
>>>>>>> tokap 32
=======
		</div><!--End Card Footer-->
>>>>>>> tokap 33
=======
		</div><!--End Card Footer-->
>>>>>>> tokap 35
=======
		</div><!--End Card Footer-->
>>>>>>> tokap 36

		</div><!--End Card --> 
	</form>
	</div>
</div>
@endsection