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
    <h3 class="panel-title"><span class="glyphicon glyphicon-play"> </span> NOTICIAS IMPORTANTES</h3>
  </div>
  <div class="panel-body">
  <div style="margin-left:0px;">
     <table class="table">
       <tr>
         <td><span class="label label-success">Actualizacion Importante</span></td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo sint. Fuga sunt, officiis, quis quaerat iste a voluptate exercitationem deserunt excepturi dolor fugit at minima est autem corrupti quibusdam?</td>
       </tr>
       <tr>
         <td><span class="label label-danger">Actualizacion Importante</span></td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo sint. Fuga sunt, officiis, quis quaerat iste a voluptate exercitationem deserunt excepturi dolor fugit at minima est autem corrupti quibusdam?</td>
       </tr>
       <tr>
         <td><span class="label label-warning">Actualizacion Importante</span></td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo sint. Fuga sunt, officiis, quis quaerat iste a voluptate exercitationem deserunt excepturi dolor fugit at minima est autem corrupti quibusdam?</td>
       </tr>
       <tr>
         <td><span class="label label-info">Actualizacion Importante</span></td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo sint. Fuga sunt, officiis, quis quaerat iste a voluptate exercitationem deserunt excepturi dolor fugit at minima est autem corrupti quibusdam?</td>
       </tr>
       <tr>
         <td><span class="label label-primary">Actualizacion Importante</span></td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo sint. Fuga sunt, officiis, quis quaerat iste a voluptate exercitationem deserunt excepturi dolor fugit at minima est autem corrupti quibusdam?</td>
       </tr>
       <tr>
         <td><span class="label label-default">Actualizacion Importante</span></td>
         <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, illo sint. Fuga sunt, officiis, quis quaerat iste a voluptate exercitationem deserunt excepturi dolor fugit at minima est autem corrupti quibusdam?</td>
       </tr>
     </table>
    </div><!--  panel body fin -->
    </div>
    </div>
     <div class="panel panel-primary" style="margin-top:-1%;">
      <div class="panel-heading">
        <h3 class="panel-title">Galeria - Fotos subidas por Usuarios</h3>
      </div>
      <div class="panel-body">
        <table class="table" >
          <tr>
            <td><a href=""><img src="http://gf3.geo.gfsrv.net/cdn21/05320a01d57e92080eebe041d1e189.jpg" alt=""></a></td>
            <td><a href=""><img src="http://gf3.geo.gfsrv.net/cdn21/05320a01d57e92080eebe041d1e189.jpg" alt=""></a></td>
            <td><a href=""><img src="http://gf3.geo.gfsrv.net/cdn21/05320a01d57e92080eebe041d1e189.jpg" alt=""></a></td>
            <td><a href=""><img src="http://gf3.geo.gfsrv.net/cdn21/05320a01d57e92080eebe041d1e189.jpg" alt=""></a></td>
            <td><a href=""><img src="http://gf3.geo.gfsrv.net/cdn21/05320a01d57e92080eebe041d1e189.jpg" alt=""></a></td>
            <td><a href=""><img src="http://gf3.geo.gfsrv.net/cdn21/05320a01d57e92080eebe041d1e189.jpg" alt=""></a></td>
          </tr>
        </table>
    </div>
</div>
@stop
