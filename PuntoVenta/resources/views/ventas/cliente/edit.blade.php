@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Cliente: {{$persona->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
			<!--almacen.categoria.update  se elimina en esta version y se deja como categoria.update -->
		</div>
	</div>

			{!!Form::model($persona,['method'=>'PATCH','route'=>['cliente.update',$persona->idpersona]])!!}
			{{Form::token()}}
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" required values="{{$persona->nombre}}" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="nombre">Direccion</label>
							<input type="text" name="direccion" values="{{$persona->direccion}}" class="form-control" placeholder="Direccion...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Tipo de Doc.</label>
							<select name="tipo_documento" class="form-control">
								@if ($persona->tipo_documento == 'DNI')
									<option value="DNI" selected>DNI</option>
									<option value="RFC">RFC</option>
									<option value="PAS">PAS</option>
								@elseif ($persona->tipo_documento == 'RFC')
									<option value="DNI">DNI</option>
									<option value="RFC" selected>RFC</option>
									<option value="PAS">PAS</option>
								@else
									<option value="DNI">DNI</option>
									<option value="RFC">RFC</option>
									<option value="PAS" selected>PAS</option>
								@endif
							</select>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="codigo">Numero de Doc.</label>
							<input type="text" name="num_documento" values="{{$persona->num_documento}}" class="form-control" placeholder="Numero de documento...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="stock">Telefono</label>
							<input type="text" name="telefono" values="{$pesrona->telefono}" class="form-control" placeholder="Telefono...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="descripcion">Email</label>
							<input type="email" name="email" values="{{$persona->email}}" class="form-control" placeholder="Email...">
						</div>
					</div>

					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<button class="btn btn-primary" type="submit">Guardar</button>
							<button class="btn btn-danger" type="reset">Cancelar</button>
						</div>
					</div>
				</div>
			{!!Form::close()!!}
@endsection