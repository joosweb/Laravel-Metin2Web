@extends('layouts.master')
@section('top5')
 <table class="table table-hover">
      <button class="btn btn-success" style="width:155px">Jugadores</button><button class="btn btn-warning" style="width:155px">Gremios</button>
        <table class="table">
          <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Nivel</th>
                <th>Reino</th>
                <th>Pais</th>
                </tr>
                  @foreach($rankingtop as $rankingtops)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td><a href="/perfil/ver/{{ $rankingtops->name }}">{{ $rankingtops->name }}</a></td>
                <td>{{ $rankingtops->level }}</td>
                <td><img src="../img/reino/{{ $rankingtops->empire }}.png" width="20"></td>
                <td><img src="../img/country/{{ $rankingtops->zipcode }}.png" width="20"></td>
            </tr>
            @endforeach
          </table>
     </table>
@stop
@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Panel de Usuario</h3>
  </div>
  <div class="panel-body">
    <div class="row">
    	<div class="col-md-3">
    		<table class="table">
    			<tr>
    				<td>
    					<button onclick="ChargeDiv('MisDatos')" class="btn btn-success btn-sm" style="width:100% !important;">Mis datos</button>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<button onclick="ChargeDiv('CambiarDatos')" class="btn btn-success btn-sm" style="width:100% !important;">Cambiar Datos</button>
    				</td>
    			</tr>
    			<tr>
    				<td>
    					<button onclick="ChargeDiv('MisPersonajes')" class="btn btn-success btn-sm" style="width:100% !important;">Mis Personajes</button>
    				</td>
    			</tr>
    		</table>
    	</div>
    	<div class="col-md-9" style="min-height:300px;">
			<div id="MisDatos">
			<div class="panel panel-default" style="margin-top:0px;">
			  <div class="panel-body">
			    <table class="table">
					<tr>
						<td width="30%"><b><u>Correo Registrado:</u></b> </td>
						<td>{{ Auth::user()->email }}</td>
					</tr>
					<tr>
						<td width="30%"><b><u>Codigo de Borrado:</u></b> </td>
						<td>{{ Auth::user()->social_id }}</td>
					</tr>
					<tr>
						<td width="30%"><b><u>Estado de cuenta:</u></b> </td>
						<td>{{ Auth::user()->status }}</td>
					</tr>
					<tr>
						<td width="30%"><b><u>Ultima vez conectado:</u></b> </td>
						<td>{{ Auth::user()->last_play }}</td>
					</tr>
					<tr>
						<td width="30%"><b><u>Pais:</u></b> </td>
						<td><img src="../img/country/{{ Auth::user()->zipcode}}.png" width="20"></td>
					</tr>
				</table>
				</div>
			</div>
			</div>
			<!-- -->
			<div id="CambiarDatos" style="display:none;">
			<div class="panel panel-default" style="margin-top:0px;">
			  <div class="panel-body">
			  	<p class="">Se enviara un link a su correo con las intrucciones para cambiar sus datos..</p>
					<form action="" method="POST">
					<div class="form-group">
					   	<label for="exampleInputName2">Email</label>
					   	<input type="text" class="form-control" name="email" id="exampleInputName2" placeholder="">
					   	<label for="exampleInputEmail2">&nbsp;</label>
					   	{!! app('captcha')->display(); !!}
					   	<br>
					   	<br>
					   	<div class="panel panel-default"  style="margin-top:-10px;">
						  <div class="panel-body">
						  <p>Que dato desea cambiar?</p>
						     <div class="checkbox">
							    <label>
							      <input type="radio" name="Cambiar">  Contraseña
							    </label>
							  </div>
							  <div class="checkbox">
							    <label>
							      <input type="radio"  name="Cambiar">  Email
							    </label>
							  </div>
						  </div>
						</div>
						<button class="btn btn-primary">Solicitar</button>
				   	</div>
				</form>
			  </div>
			</div>
		  </div>
		  <!-- -->
		  <div id="MisPersonajes" style="display:none;">
			<div class="panel panel-default" style="margin-top:0px;">
			  <div class="panel-body">
				<table class="table">
					<tr>
						@foreach($Player as $players)
						<td align="center">
						<button class="btn btn-info btn-xs" onclick="Desbloquear('{{ $players->name }}')"><i class="fa fa-unlock-alt" aria-hidden="true"></i>
 						Desbloquear</button>
						</td>
						@endforeach
					</tr>
					<tr>
						@foreach($Player as $players)
						<td align="center">
						{{ $players->name }}
						</td>
						@endforeach
					</tr>
					<tr>
						@foreach($Player as $players)
						<td align="center">
						<img src="../img/raza/{{ $players->job }}_big.png" alt="Jugador" width="100">
						</td>
						@endforeach
					</tr>
				</table>
			  </div>
			</div>
		  </div>
        </div>
    </div>
  </div>
</div>
@stop
