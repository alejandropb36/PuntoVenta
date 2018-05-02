@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Usuario</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'seguridad/usuario','method'=>'POST','autocomplete'=>'off'))!!}
			{{Form::token()}}
				<div class="form-group row">
					<label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

					<div class="col-md-6">
						<input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

						@if ($errors->has('name'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
				</div>
				
				<div class="form-group row">
					<label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

					<div class="col-md-6">
						<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

						@if ($errors->has('email'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class="form-group row">
					<label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

					<div class="col-md-6">
						<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

						@if ($errors->has('password'))
							<span class="invalid-feedback">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>
				</div>

				<div class="form-group row">
					<label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Password</label>

					<div class="col-md-6">
						<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
					</div>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submit">Guardar</button>
					<button class="btn btn-danger" type="reset">Cancelar</button>
				</div>

			{!!Form::close()!!}
		</div>
	</div>
@endsection