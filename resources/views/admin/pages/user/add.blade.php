@extends('admin.main')
@section('title','User Tambah')
@section('content')
<h1>User <small class="text-muted">Tambah</small></h1>
<hr>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
@if(session('result') == 'fail')
<div class="alert alert-danger alert-dismissible fade show">
	<strong>Failed!</strong> Gagal disimpan.
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
<div class="row">
	<div class="col-md-6">
		<form method="POST" action="{{ route('admin.user.add') }}">
			{{ csrf_field() }}
			<div class="card">
				<div class="card-header">
					<h5>Buat User Baru</h5>
				</div><!--End Card Header-->
				<div class="card-body">
					
					<div class="form-group form-label-group">
						<input type="text" name="name"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
						class="form-control"
						value="{{ old('name') }}"
						id="iName" placeholder="Name" required>
						<label for="iName">Name</label>
=======
=======
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
						class="form-control {{ $errors->has('name')?'is-invalid':''  }}"
						value="{{ old('name') }}"
						id="iName" placeholder="Name" required>
						<label for="iName">Name</label>
						@if($errors->has('name'))
						<div class="invalid-feedback">{{ $errors->first('name') }}</div>
						@endif
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap13
=======
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
					</div><!-- End Form Group-->



					<div class="form-group form-label-group">
						<input type="email" name="email"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
						class="form-control"
						value="{{ old('email') }}"
						id="iEmail" placeholder="Email" required>
						<label for="iEmail">Email</label>
=======
=======
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
						class="form-control {{ $errors->has('name')?'is-invalid':''  }}"
						value="{{ old('email') }}"
						id="iEmail" placeholder="Email" required>
						<label for="iEmail">Email</label>
						@if($errors->has('email'))
						<div class="invalid-feedback">{{ $errors->first('email') }}</div>
						@endif
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap13
=======
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
					</div><!-- End Form Group-->


					<div class="form-group form-label-group">
						<input type="password" name="password"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
						class="form-control"
						value="{{ old('password') }}"
						id="iPassword" placeholder="Password" required>
						<label for="iPassword">Password</label>
=======
=======
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
						class="form-control {{ $errors->has('password')?'is-invalid':''  }}"
						
						id="iPassword" placeholder="Password" required>
						<label for="iPassword">Password</label>
						@if($errors->has('password'))
						<div class="invalid-feedback">{{ $errors->first('password') }}</div>
						@endif
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap13
=======
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
					</div><!-- End Form Group-->


					<div class="form-group form-label-group">
						<input type="password" name="repassword"
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
						class="form-control"
						value="{{ old('repassword') }}"
						id="iRePassword" placeholder="Re Password" required>
						<label for="iRePassword">Re Password</label>
					</div><!-- End Form Group-->

					<div class="form-group form-label-group">
						<select class="form-control"
						name="akses">
							<option value="">Pilih Akses Sebagai :</option>
							<option value="operator">Operator</option>
							<option value="admin">Administrator</option>
							
						</select>

=======
=======
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
						class="form-control {{ $errors->has('repassword')?'is-invalid':''  }}"
						id="iRePassword" placeholder="Re Password" required>
						<label for="iRePassword">Re Password</label>
						@if($errors->has('repassword'))
						<div class="invalid-feedback">{{ $errors->first('repassword') }}</div>
						@endif
					</div><!-- End Form Group-->

					<div class="form-group form-label-group">
						<?php 
						$val = old('akses');
						 ?>
						<select class="form-control {{ $errors->has('akses')?'is-invalid':'' }}"
						name="akses">
							<option value="" {{ $val==""?'selected':'' }}>Pilih Akses Sebagai :</option>
							<option value="operator" {{ $val=="operator"?'selected':'' }}>Operator</option>
							<option value="admin"" {{ $val=="adminr"?'selected':'' }}>Administrator</option>
							
						</select>
						@if($errors->has('akses'))
						<div class="invalid-feedback">{{ $errors->first('akses') }}</div>
						@endif
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> tokap13
=======
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
						</div><!-- End Form Group-->

				</div><!-- End Card Body-->

				<div class="card-footer">
					<button class="btn btn-primary" type="submit">Simpan</button>
				</div><!-- End Card Footer-->

			</div><!-- End Card-->
		</form>
	</div>
</div>
@endsection