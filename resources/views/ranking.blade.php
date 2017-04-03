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
    <h3 class="panel-title">
    <form action="/ranking-general" class="form-inline" method="post">
         {!! csrf_field() !!}
          <div class="form-group">
              <input type="text" name="name" class="form-control input-sm" placeholder="Buscar..">
              <input type="submit"  value="Buscar" class="btn btn-success btn-sm">
          </div>
      </form>
      </h3>
    </div>
    <div class="panel-body"><div class="panel panel-default"  style="min-height:300px;" >
      <div class="panel-body">
        <table class="table table-striped table-hover" >
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Nivel</th>
                <th>Raza</th>
                <th>Reino</th>
                <th>Pais</th>
                <th>Gremio</th>
                </tr>
                @foreach($ranking as $rankings)
                <tr>
                @if(@$rank)
                    <td>{{ $rank }}</td>
                @else
                @if(@$_GET['page'] > 1)
                    <td> {{ @$rankings->rownum + (50 * @$_GET['page'] - 50) }}</td>
                @else
                    <td>{{ @$rankings->rownum }}</td>
                @endif
                @endif
                <td><a href="/perfil/ver/{{ $rankings->name }}">{{ $rankings->name }}</a></td>
                <td>{{ $rankings->level }}</td>
                <td><img src="../img/raza/{{ $rankings->job }}.png" width="20"></td>
                <td><img src="../img/reino/{{ $rankings->empire }}.png" width="20"></td>
                <td><img src="../img/country/{{ $rankings->zipcode }}.png" width="20"></td>
                @if(!$rankings->guildname)
                <td>Sin gremio</td>
                @else
                <td>{{ $rankings->guildname }}</td>
                @endif
            </tr>
            @endforeach
        </table>
      </div>
    </div>
    {{ $ranking->render() }}
  </div>
</div>
@stop
