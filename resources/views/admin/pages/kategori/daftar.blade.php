@extends('admin.main')
@section('title','Kategori')
@section('content')
<h1>Kategori</h1>
<hr>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
<div class="row">
	<div class="col-md-6 mb-3">
		<a href="#" class="btn btn-primary">[+] Tambah</a>
=======
<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.kategori.add') }}" class="btn btn-primary">[+] Tambah</a>
>>>>>>> tokap22
=======
<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.kategori.add') }}" class="btn btn-primary">[+] Tambah</a>
>>>>>>> tokap23
=======
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26

@if( session('result') == 'success')
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Saved!</strong> Berhasil disimpan.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.kategori.add') }}" class="btn btn-primary">[+] Tambah</a>
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
	</div>

	<div class="col-md-6 mb-3">
		<form method="GET" action="{{ route('admin.kategori') }}">
			<div class="input-group">
				<input type="text" name="keyword" class="form-control"
				value="{{ request('keyword') }}">
				<div class="input-group-append">
					<button type="submit" class="btn btn-primary">
							Cari !
					</button>
				</div>
			</div><!-- End Input Group -->
		</form>
	</div>
</div><!-- End Row -->

<table class="table table-striped mb-3">
	<tr>
			<th>Kategori</th><th>&nbsp;</th>
			@foreach($data as $dt)
			<tr>
				<td>{{ $dt->nama_kategori }}</td>
				<td>
<<<<<<< HEAD
<<<<<<< HEAD
					<a href="#" class="btn btn-success btn-sm">
=======
					<a href="{{route('admin.kategori.edit',['id'=>$dt->id])}}" class="btn btn-success btn-sm">
>>>>>>> tokap25
=======
					<a href="{{route('admin.kategori.edit',['id'=>$dt->id])}}" class="btn btn-success btn-sm">
>>>>>>> tokap26
						<i class="fa fa-w fa-edit"></i>
					</a>
					<button type="button" class="btn btn-danger btn-sm">
						<i class="fa fa-w fa-trash"></i>
					</button>
				</td>
			</tr>
	</tr>
	@endforeach
</table>

{{
	$data->appends( request()->only('keyword') )
	->links('vendor.pagination.bootstrap-4')
}}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap21
=======
>>>>>>> tokap22
=======
>>>>>>> tokap23
=======
>>>>>>> tokap24
=======
>>>>>>> tokap25
=======
>>>>>>> tokap26
@endsection