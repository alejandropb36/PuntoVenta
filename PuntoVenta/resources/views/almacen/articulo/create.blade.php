@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Articulo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			{!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
			{{Form::token()}}
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" required values="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label>Categoria</label>
							<select name="idcategoria" class="form-control">
								@foreach ($categorias as $cat)
									@if($cate->idcategoria == $articulo->idcategoria)
										<option value="{{$cat->idcateoria}}" selected>{{$cat->nombre}}</option>
									@else
										<option value="{{$cat->idcateoria}}">{{$cat->nombre}}</option>
									@endif
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="codigo">Codigo</label>
							<input type="text" name="codigo" required values="{{$articulo->codigo}}" class="form-control">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="stock">Stock</label>
							<input type="text" name="stock" required values="{{$articulo->stock}}" class="form-control" >
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="descripcion">Descripcion</label>
							<input type="text" name="descripcion" required values="{{$articulo->descripcion}}" class="form-control" placeholder="Descripcion del articulo...">
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
						<div class="form-group">
							<label for="imagen">Imagen</label>
							<input type="file" name="imagen" required  class="form-control" >
							@if (($articulo->imagen) != "")
								<img src="{{asset('imagenes/articulo'.$articulo->imagen)}}" height="300px" widht="300px" >
							@endif
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