@extends('admin.main')
@section('title','User')
@section('content')
<h1>User</h1>
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
=======
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22

@if(session('result') == 'success')
<div class="alert alert-success alert-dismissible fade show">
	<strong>Saved!</strong> Berhasil disimpan.
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
=======
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
@if(session('result') == 'update')
<div class="alert alert-success alert-dismissible fade show">
	<strong>Update!</strong> Berhasil diupdate.
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
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
@if(session('result') == 'delete')
<div class="alert alert-success alert-dismissible fade show">
	<strong>Delete!</strong> Berhasil dihapus.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

@if(session('result') == 'fail-delete')
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Failde!</strong> Gagal dihapus.
	<button type="button" class="close" data-dismiss="alert">
		&times;
	</button>
</div>
@endif

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22

<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.user.add') }}" class="btn btn-primary">[+] Tambah</a>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap14
=======
>>>>>>> tokap15
=======
>>>>>>> tokap16
=======
>>>>>>> tokap17
=======
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap14
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap15
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap16
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap17
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap18
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap19
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap20
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap21
=======
		<th>Name</th><th>Email</th><th>Akses</th><th>&nbsp;</th>
>>>>>>> tokap22
	</tr>
	@foreach($data as $dt)
	<tr>
			<td>{{ $dt->name }}</td>
			<td>{{ $dt->email }}</td>
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
=======
			<td>{{ $dt->akses }}</td>
>>>>>>> tokap14
			<td>
				<a href="#" class="btn btn-success btn-sm">
=======
			<td>{{ $dt->akses }}</td>
			<td>
				<a href="{{ route('admin.user.edit',['id'=>$dt->id]) }}" class="btn btn-success btn-sm">
>>>>>>> tokap15
=======
			<td>{{ $dt->akses }}</td>
			<td>
				<a href="{{ route('admin.user.edit',['id'=>$dt->id]) }}" class="btn btn-success btn-sm">
>>>>>>> tokap16
=======
			<td>{{ $dt->akses }}</td>
			<td>
				<a href="{{ route('admin.user.edit',['id'=>$dt->id]) }}" class="btn btn-success btn-sm">
>>>>>>> tokap17
					<i class="fa fa-w fa-edit"></i>
				</a>
				@if($dt->id != Auth::id() )
				<button class="btn btn-danger btn-sm" type="button">
=======
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
			<td>{{ $dt->akses }}</td>
			<td>
				<a href="{{ route('admin.user.edit',['id'=>$dt->id]) }}" class="btn btn-success btn-sm">
					<i class="fa fa-w fa-edit"></i>
				</a>
				@if($dt->id != Auth::id() )
				<button class="btn btn-danger btn-sm btn-trash" 
				data-id="{{ $dt->id }}"
				type="button">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap18
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@endsection
=======
=======
>>>>>>> tokap19
=======
>>>>>>> tokap20
=======
>>>>>>> tokap21
=======
>>>>>>> tokap22
@endsection

@push('modal')
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			
			<div class="modal-header">
				<h5 class="modal-title">Delete</h5>
				<button class="close" type="button" data-dismiss="modal">
					<span>x</span>
				 </button>
			</div><!--End Modal Header-->

			<div class="modal-body">
				Apakah anda yakin ingin menghapusnya?
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
				<form id="form-delete" method="post" action="#">
=======
				<form id="form-delete" method="post" action="{{ route('admin.user') }} ">
>>>>>>> tokap19
=======
				<form id="form-delete" method="post" action="{{ route('admin.user') }} ">
>>>>>>> tokap20
=======
				<form id="form-delete" method="post" action="{{ route('admin.user') }} ">
>>>>>>> tokap21
=======
				<form id="form-delete" method="post" action="{{ route('admin.user') }} ">
>>>>>>> tokap22
					{{ csrf_field() }}
					{{ method_field('delete') }}
					<input type="hidden" name="id" id="input-id">
				</form>
			</div><!--End Modal Body-->

			<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
					<button class="btn btn-primary btn-delete" type="button">Delete</button>
			</div>

		</div><!--End Modal Content-->
	</div><!--End Modal Dialog-->
</div>
@endpush

@push('js')
<script type="text/javascript">
	$(function(){
		$('.btn-trash').click(function(){
			id = $(this).attr('data-id');
			$('#input-id').val(id);
			$('#deleteModal').modal('show');
		});

		$('.btn-delete').click(function(){
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
			alert( $('#input-id').val() );
=======
			$('#form-delete').submit();
>>>>>>> tokap19
=======
			$('#form-delete').submit();
>>>>>>> tokap20
=======
			$('#form-delete').submit();
>>>>>>> tokap21
=======
			$('#form-delete').submit();
>>>>>>> tokap22
		});
	})
</script>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@endpush
>>>>>>> tokap18
=======
@endpush
>>>>>>> tokap19
=======
@endpush
>>>>>>> tokap20
=======
@endpush
>>>>>>> tokap21
=======
@endpush
>>>>>>> tokap22
