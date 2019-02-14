@extends('admin.main')
@section('title','User')
@section('content')
<h1>User</h1>
<hr>
<div class="row">
	<div class="col-md-6 mb-3">
<<<<<<< HEAD
<<<<<<< HEAD
		<a href="#" class="btn btn-primary">[+] Tambah</a>
=======
		<a href="{{ route('admin.user.add') }}" class="btn btn-primary">[+] Tambah</a>
>>>>>>> tokap12
=======
		<a href="{{ route('admin.user.add') }}" class="btn btn-primary">[+] Tambah</a>
>>>>>>> tokap13
	</div>

	<div class="col-md-6 mb-3">
		<form method="GET" action="{{ route('admin.user') }}">
			<div class="input-group">
				<input type="text" name="keyword"
				value="{{ request('keyword') }}"
				class="form-control">
				<div class="input-group-append">
					<button type="submit"
					class="btn btn-primary">
						Cari !
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

<table class="table table-striped mb-3">
	<tr>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
		<th>Name</th><th>Email</th><th>&nbsp;</th>
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap11
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap12
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap13
	</tr>
	@foreach($data as $dt)
	<tr>
			<td>{{ $dt->name }}</td>
			<td>{{ $dt->email }}</td>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
			<td>{{ $dt->akses }}</td>
>>>>>>> tokap11
=======
			<td>{{ $dt->akses }}</td>
>>>>>>> tokap12
=======
			<td>{{ $dt->akses }}</td>
>>>>>>> tokap13
			<td>
				<a href="#" class="btn btn-success btn-sm">
					<i class="fa fa-w fa-edit"></i>
				</a>
				@if($dt->id != Auth::id() )
				<button class="btn btn-danger btn-sm" type="button">
					<i class="fa fa-w fa-trash"></i>
				</button>
				@endif
			</td>
	</tr>
	@endforeach
</table>

{{
		$data->appends( request()->only('keyword') )
		->links('vendor.pagination.bootstrap-4')
}}
@endsection