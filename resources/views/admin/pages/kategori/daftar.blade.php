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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> tokap 37

@if( session('result') == 'success')
<div class=" alert alert-success alert-dismissible fade show">
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
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
@if( session('result') == 'update')
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated !</strong> Berhasil diupdate.
=======
@if( session('result') == 'update' )
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated!</strong> Berhasil diupdate.
>>>>>>> tokap 28-29
=======
@if( session('result') == 'update' )
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated!</strong> Berhasil diupdate.
>>>>>>> tokap 30-31
=======
@if( session('result') == 'update' )
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated!</strong> Berhasil diupdate.
>>>>>>> tokap 32
=======
@if( session('result') == 'update' )
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated!</strong> Berhasil diupdate.
>>>>>>> tokap 33
=======
@if( session('result') == 'update' )
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated!</strong> Berhasil diupdate.
>>>>>>> tokap 35
=======
@if( session('result') == 'update' )
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated!</strong> Berhasil diupdate.
>>>>>>> tokap 36
=======
@if( session('result') == 'update' )
<div class=" alert alert-success alert-dismissible fade show">
	<strong>Updated!</strong> Berhasil diupdate.
>>>>>>> tokap 37
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
<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.kategori.add') }}" class="btn btn-primary">[+] Tambah</a>
>>>>>>> tokap27
=======
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
=======
>>>>>>> tokap 37

@if(session('result') == 'delete')
<div class="alert alert-success alert-dismissible fade show">
	<strong>Deleted!</strong> Berhasil dihapus.
	<button type="button" class="close" data-dismiss="alert">
			&times;
	</button>
</div>
@endif


@if(session('result') == 'fail-delete')
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Failed!</strong> Gagal dihapus.
	<button type="button" class="close" data-dismiss="alert">
			&times;
	</button>
</div>
@endif



<div class="row">
	<div class="col-md-6 mb-3">
		<a href="{{ route('admin.kategori.add')}}" class="btn btn-primary">[+] Tambah</a>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> tokap 37
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
					<a href="#" class="btn btn-success btn-sm">
=======
					<a href="{{route('admin.kategori.edit',['id'=>$dt->id])}}" class="btn btn-success btn-sm">
>>>>>>> tokap25
=======
					<a href="{{route('admin.kategori.edit',['id'=>$dt->id])}}" class="btn btn-success btn-sm">
>>>>>>> tokap26
=======
					<a href="{{route('admin.kategori.edit',['id'=>$dt->id])}}" class="btn btn-success btn-sm">
>>>>>>> tokap27
						<i class="fa fa-w fa-edit"></i>
					</a>
					<button type="button" class="btn btn-danger btn-sm">
=======
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
=======
>>>>>>> tokap 37
					<a href="{{route('admin.kategori.edit',['id'=>$dt->id]) }}"
					class="btn btn-success btn-sm">
						<i class="fa fa-w fa-edit"></i>
					</a>
					<button type="button" class="btn btn-danger btn-sm btn-trash"
					data-id="{{ $dt->id }}">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> tokap 37
						<i class="fa fa-w fa-trash"></i>
					</button>
				</td>
			</tr>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	</tr>
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
=======
	
>>>>>>> tokap 37
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
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> tokap27
@endsection
=======
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
=======
>>>>>>> tokap 37
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
				<form id="form-delete" method="post" action="{{ route('admin.kategori') }} ">
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
		$('.btn-trash').click(function() {
			id = $(this).attr('data-id');
			$('#input-id').val(id);
			$('#deleteModal').modal('show');
		});

		$('.btn-delete').click(function(){
			$('#form-delete').submit();
		});
	})
</script>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
@endpush
>>>>>>> tokap 28-29
=======
@endpush
>>>>>>> tokap 30-31
=======
@endpush
>>>>>>> tokap 32
=======
@endpush
>>>>>>> tokap 33
=======
@endpush
>>>>>>> tokap 35
=======
@endpush
>>>>>>> tokap 36
=======
@endpush
>>>>>>> tokap 37
