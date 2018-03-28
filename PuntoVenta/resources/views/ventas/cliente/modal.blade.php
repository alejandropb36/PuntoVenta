<div class="modal fade modal-slide-in-right" arian-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$per->idpersona}}">
	{{Form::Open(array('action'=>array('ClienteController@destroy',$per->idpersona),'method'=>'delete'))}}
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" arial-label="Close">
						<span arial-hidden="true">X</span>
					</button>
					<h4 class="modal-title">Eliminar Cliente</h4>
				</div>
				<div class="modal-body">
					<p>Confime si desea Eliminar el Cliente</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn btn-primary" >Confirmar</button>
				</div>
			</div>
		</div>
	{{Form::Close()}}
</div>