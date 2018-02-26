@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sd-8 col-xs-12">
			<h3>Listado de Categorias <a href="categoria/create"><button class="btn btn-success">Nuevo</button></a></h3>
			@include('almacen.categoria.search')
		</div>
	</div>

	<di class="row">
		<div class="col-lg-12 col-md-12 col-sd-12 col-xs-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-condensed table-hover">
					<thead>
						<th>Id</th>
						<th>Nombre</th>
						<th>Descripcion</th>
						<th>Opciones</th>
					</thead>
					@foreach($categorias as $catego)
					<tr>
						<td>{{$catego->idcategoria}}</td>
						<td>{{$catego->nombre}}</td>
						<td>{{$catego->descripcion}}</td>
						<td>
							<a href="{{URL::action('CategoriaController@edit',$catego->idcategoria)}}"><button class="btn btn-info">Editar</button></a>
							<a href=""><button class="btn btn-danger">Eliminar</button></a>
						</td>
					</tr>
					@endforeach
				</table>
			</div>
			{{$categorias->render()}}
		</div>
	</di>
@endsection