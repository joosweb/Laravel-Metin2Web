@extends('layouts.master')
@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">SHOP | TIENDA <span id="" style="float:right;">Monedas de Dragon: {{ $coins }}</span></h3>
  </div>
  <div class="panel-body">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-3">
			 @foreach($categoria as $categorias)
			 <a href="/tienda-de-articulos/categoria/{{ $categorias->id_categoria }}" style="width:100%; margin:1px !important;" class="btn btn-success btn-sm">
			 {{ $categorias->name_categoria }}</a>
			 @endforeach
			 </div>
			 <div class="col-md-9">
			 @if($mensaje)
			    <div class="alert alert-{{ $mensaje[1] }} alert-block">
			        <button type="button" class="close" data-dismiss="alert">&times;</button>
			        <ul>
			          <i class="fa fa-check-square-o" aria-hidden="true"></i> {{ $mensaje[0] }}
			        </ul>
			    </div>
			  @endif
			  <div class="panel panel-default" style="margin-top:-1px;">
				  <div class="panel-body">
				     @foreach($articulo as $articulos)
					 <table class="table">
						<tr>
							<td rowspan="3"><img src="http://www.uslanmam.com/customavatars1/avatar533620_2.gif" width="500"></td>
							<td><b><u>{{ $articulos->name }}</u></b></td>
							<td>Precio: <b>{{ $articulos->prices }}</b> COINS</td>
						   </tr>
						   <tr>
							<td colspan="2"><b><u>Descripcion:</u></b> {{ $articulos->content }}</td>
						   </tr>
						   <tr >
							<td colspan="3" class="text-right"><a href="" class="btn btn-info btn-sm"><i class="fa fa-search" aria-hidden="true"></i> Ver detalles</a> <a href="/tienda-de-articulos/{{ $articulos->vnum }}/comprar/" class="btn btn-warning btn-primary btn-sm"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</a>
							</td>
						</tr>
					</table>
				 	@endforeach
				  </div>
				</div>
				{{ $articulo->render() }}
			</div>
		 </div>
	  </div>
    </div>
 </div>
@stop
