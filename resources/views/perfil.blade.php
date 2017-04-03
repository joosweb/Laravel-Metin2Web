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
                <td><img src="../../img/reino/{{ $rankingtops->empire }}.png" width="20"></td>
                <td><img src="../../img/country/{{ $rankingtops->zipcode }}.png" width="20"></td>
            </tr>
            @endforeach
          </table>
        </table>
@stop
@section('content')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Perfil de Usuario</h3>
  </div>
  <div class="panel-body">
    <table class="table table-striped table-bordered">
		<tr>
			<td rowspan="11" width="30%"><img src="../../img/raza/{{$data->job}}_big.png" alt=""></td>
			<td width="20%"><b><u>Nombre del Personaje: </u></b></td>
			<td>{{ $data->name }}</td>
		</tr>
		<tr>
			<td width="20%"><b><u>Nivel: </u></b></td>
			<td>{{ $data->level }}</td>
		</tr>
		<tr>
			<td width="20%"><b><u>Exp: </u></b></td>
			<td>{{ $data->exp }}</td>
		</tr>
		<tr>
			<td width="20%"><b><u>Tiempo Jugado: </u></b></td>
			<td>{{ $data->playtime }}</td>
		</tr>
		<tr>
			<td width="20%"><b><u>Pais: </u></b></td>
			<td><img src="../../img/country/{{ $data->zipcode }}.png" width="20"></td>
		</tr>
		<tr>
			<td width="20%"><b><u>Reino: </u></b></td>
			<td><img src="../../img/reino/{{$data->empire}}.png" width="20"></td>
		</tr>
		<tr>
			<td width="20%"><b><u>Gremio: </u></b></td>
			@if($data->guildname)
			<td>{{ @$data->guildname }}</td>
			@else
			<td> Sin Gremio</td>
			@endif
		</tr>
		<tr>
			<td width="20%"><b><u>Yang: </u></b></td>
			<td>{{ $data->gold }}</td>
		</tr>
    </table>
  </div>
</div>
@stop
