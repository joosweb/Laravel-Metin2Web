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
    <h3 class="panel-title">Registro de Usuarios</h3>
  </div>
  <div class="panel-body">
	<div class="row">
		<div class="col-md-12">
		 @if (!empty($success))
		 <div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <ul>
			  	<li>{{ $success }}</li>
			  </ul>
			</div>
			@endif
			@if (!empty($error))
			 <div class="alert alert-dismissible alert-success">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <ul>
			  	<li>{{ $error }}</li>
			  </ul>
			</div>
			@endif
		    @if($errors->any())
		     <div class="alert alert-dismissible alert-danger">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <ul>
			  @foreach( $errors->all() as $error )
			  <li>{{ $error }}</li>
			  @endforeach
			  </ul>
			</div>
			@endif
			<div id="formulario-registro" style="margin-left:20px;">
			<form method="post">
			 {!! csrf_field() !!}
			  <div class="form-group">
			    <label for="exampleInputEmail1" id="msg-usuario">Usuario </label>
			    <input type="text" class="form-control input-sm" name="login" value="{{ old('login') }}" style="width:80%;" id="exampleInputEmail1" placeholder="Usuario">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control input-sm" name="password" style="width:80%;" id="exampleInputPassword1" placeholder="Contraseña">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Real Name / Nombre Real</label>
			    <input type="text" class="form-control input-sm" name="real_name" value="{{ old('real_name') }}" style="width:80%;" id="exampleInputPassword1" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Social ID / Codigo de borrado de personajes</label>
			    <input type="text" class="form-control input-sm" name="social_id" value="{{ old('social_id') }}" style="width:80%;"  id="exampleInputPassword1" placeholder="Codigo de borrado">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Email</label>
			    <input type="email" class="form-control input-sm" name="email" value="{{ old('email') }}" style="width:80%;" id="exampleInputPassword1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Pais</label>
			   <select name="zipcode" id="account_tmp_ms_pais_id" class="form-control" style="width:80%; color:black !important;">
				<option value=" " >Seleccione país</option>
				<option value="af" >Afganistán</option>
				<option value="ax" >Islas Aland </option>
				<option value="al" >Albania</option>
				<option value="dz" >Argelia</option>
				<option value="as" >Samoa Americana</option>
				<option value="ad" >Andorra</option>

				<option value="ao" >Angola</option>
				<option value="ai" >Anguila</option>
				<option value="aq" >Antártida</option>
				<option value="ag" >Antigua y Barbuda</option>
				<option value="ar" >Argentina</option>
				<option value="am" >Armenia</option>

				<option value="aw" >Aruba</option>
				<option value="au" >Australia</option>
				<option value="at" >Austria</option>
				<option value="az" >Azerbaiyán</option>
				<option value="bs" >Bahamas</option>
				<option value="bh" >Bahréin</option>

				<option value="bd" >Bangladesh</option>
				<option value="bb" >Barbados</option>
				<option value="by" >Bielorusia</option>
				<option value="be" >Bélgica</option>
				<option value="bz" >Belice</option>
				<option value="bj" >Benin</option>

				<option value="bm" >Bermuda</option>
				<option value="bt" >Bután</option>
				<option value="bo" >Bolivia</option>
				<option value="ba" >Bosnia y Herzegovina</option>
				<option value="bw" >Botswana</option>
				<option value="bv" >Isla Bouvet</option>

				<option value="br" >Brasil</option>
				<option value="io" >Territorio Británico en el Océano Indico</option>
				<option value="vg" >Islas Vírgenes (Reino Unido)</option>
				<option value="bn" >Brunei</option>
				<option value="bg" >Bulgaria</option>
				<option value="bf" >Burkina Faso</option>

				<option value="bi" >Burundi</option>
				<option value="kh" >Camboya</option>
				<option value="cm" >Camerún</option>
				<option value="ca" >Canadá</option>
				<option value="cv" >Cabo Verde</option>
				<option value="ky" >Islas Caimán</option>

				<option value="cf" >República Centroafricana</option>
				<option value="td" >Chad</option>
				<option value="cl" >Chile</option>
				<option value="cn" >China</option>
				<option value="cx" >Isla de Navidad</option>
				<option value="cc" >Islas Cocos (Keeling)</option>

				<option value="co" >Colombia</option>
				<option value="km" >Comores</option>
				<option value="cg" >Congo</option>
				<option value="ck" >Islas Cook</option>
				<option value="cr" >Costa Rica</option>
				<option value="hr" >Croacia</option>

				<option value="cu" >Cuba</option>
				<option value="cy" >Chipre</option>
				<option value="cz" >República Checa</option>
				<option value="cd" >República Democrática del Congo</option>
				<option value="dk" >Dinamarca</option>
				<option value="xx" >Territorio en disputa</option>

				<option value="dj" >Djibouti</option>
				<option value="dm" >Dominica</option>
				<option value="do" >República Dominicana</option>
				<option value="tl" >Timor Occidental</option>
				<option value="ec" >Ecuador</option>
				<option value="eg" >Egipto</option>

				<option value="sv" >El Salvador</option>
				<option value="gq" >Guinea Ecuatorial</option>
				<option value="er" >Eritrea</option>
				<option value="ee" >Estonia</option>
				<option value="et" >Etiopía</option>
				<option value="fk" >Islas Malvinas</option>

				<option value="fo" >Islas Faroe</option>
				<option value="fm" >Estados Federados de Micronesia</option>
				<option value="fj" >Fiji</option>
				<option value="fi" >Finlandia</option>
				<option value="fr" >Francia</option>
				<option value="gf" >Guayana Francesa</option>

				<option value="pf" >Polinesia Francesa</option>
				<option value="tf" >Territorios Franceses del Sur</option>
				<option value="ga" >Gabón</option>
				<option value="gm" >Gambia</option>
				<option value="ge" >Georgia</option>
				<option value="de" >Alemania</option>

				<option value="gh" >Ghana</option>
				<option value="gi" >Gibraltar</option>
				<option value="gr" >Grecia</option>
				<option value="gl" >Groenlandia</option>
				<option value="gd" >Grenada</option>
				<option value="gp" >Guadalupe</option>

				<option value="gu" >Guam</option>
				<option value="gt" >Guatemala</option>
				<option value="gn" >Guinea</option>
				<option value="gw" >Guinea-Bissau</option>
				<option value="gy" >Guyana</option>
				<option value="ht" >Haití</option>

				<option value="hm" >Islas Heard y McDonald</option>
				<option value="hn" >Honduras</option>
				<option value="hk" >Hong Kong</option>
				<option value="hu" >Hungría</option>
				<option value="is" >Islandia</option>
				<option value="in" >India</option>

				<option value="id" >Indonesia</option>
				<option value="ir" >Irán</option>
				<option value="iq" >Iraq</option>
				<option value="xe" >Zona neutra Iraq-Arabia Saudí</option>
				<option value="ie" >Irlanda</option>
				<option value="il" >Israel</option>

				<option value="it" >Italia</option>
				<option value="ci" >Costa de Marfil</option>
				<option value="jm" >Jamaica</option>
				<option value="jp" >Japón</option>
				<option value="jo" >Jordania</option>
				<option value="kz" >Kazajstán</option>

				<option value="ke" >Kenia</option>
				<option value="ki" >Kiribati</option>
				<option value="kw" >Kuwait</option>
				<option value="kg" >Kirguistán</option>
				<option value="la" >Laos</option>
				<option value="lv" >Letonia</option>

				<option value="lb" >Líbano</option>
				<option value="ls" >Lesotho</option>
				<option value="lr" >Liberia</option>
				<option value="ly" >Libia</option>
				<option value="li" >Liechtenstein</option>
				<option value="lt" >Lituania</option>

				<option value="lu" >Luxemburgo</option>
				<option value="mo" >Macau</option>
				<option value="mk" >Macedonia</option>
				<option value="mg" >Madagascar</option>
				<option value="mw" >Malawi</option>
				<option value="my" >Malasia</option>

				<option value="mv" >Maldivas</option>
				<option value="ml" >Mali</option>
				<option value="mt" >Malta</option>
				<option value="mh" >Islas Marshall</option>
				<option value="mq" >Martinica</option>
				<option value="mr" >Mauritania</option>

				<option value="mu" >Mauricio</option>
				<option value="yt" >Mayotte</option>
				<option value="mx" >México</option>
				<option value="md" >Moldova</option>
				<option value="mc" >Mónaco</option>
				<option value="mn" >Mongolia</option>

				<option value="ms" >Montserrat</option>
				<option value="ma" >Marruecos</option>
				<option value="mz" >Mozambique</option>
				<option value="mm" >Myanmar</option>
				<option value="na" >Namibia</option>
				<option value="nr" >Nauru</option>

				<option value="np" >Nepal</option>
				<option value="nl" >Países Bajos</option>
				<option value="an" >Antillas Holandesas</option>
				<option value="nc" >Nueva Caledonia</option>
				<option value="nz" >Nueva Zelanda</option>
				<option value="ni" >Nicaragua</option>

				<option value="ne" >Níger</option>
				<option value="ng" >Nigeria</option>
				<option value="nu" >Niue</option>
				<option value="nf" >Isla Norfolk</option>
				<option value="kp" >Corea del Norte</option>
				<option value="mp" >Islas Mariana del Norte</option>

				<option value="no" >Noruega</option>
				<option value="om" >Omán</option>
				<option value="pk" >Pakistán</option>
				<option value="pw" >Palau</option>
				<option value="ps" >Territorios Palestinos Ocupados</option>
				<option value="pa" >Panamá</option>

				<option value="pg" >Papúa-Nueva Guinea</option>
				<option value="py" >Paraguay</option>
				<option value="pe" >Perú</option>
				<option value="ph" >Filipinas</option>
				<option value="pn" >Islas Pitcairn</option>
				<option value="pl" >Polonia</option>

				<option value="pt" >Portugal</option>
				<option value="pr" >Puerto Rico</option>
				<option value="qa" >Qatar</option>
				<option value="re" >Reunión</option>
				<option value="ro" >Rumanía</option>
				<option value="ru" >Rusia</option>

				<option value="rw" >Ruanda</option>
				<option value="sh" >Santa Elena y Dependencias</option>
				<option value="kn" >Saint Kitts y Nevis</option>
				<option value="lc" >Santa Lucía</option>
				<option value="pm" >San Pedro y Miquelón</option>
				<option value="vc" >San Vicente y Granadinas</option>

				<option value="ws" >Samoa</option>
				<option value="sm" >San Marino</option>
				<option value="st" >Santo Tomé y Príncipe</option>
				<option value="sa" >Arabia Saudí</option>
				<option value="sn" >Senegal</option>
				<option value="cs" >Serbia y Montenegro</option>

				<option value="sc" >Seychelles</option>
				<option value="sl" >Sierra Leona</option>
				<option value="sg" >Singapur</option>
				<option value="sk" >Eslovaquia</option>
				<option value="si" >Eslovenia</option>
				<option value="sb" >Islas Salomón</option>

				<option value="so" >Somalia</option>
				<option value="za" >Sudáfrica</option>
				<option value="gs" >Islas Georgia del Sur e Islas Sandwich del Sur</option>
				<option value="kr" >Corea del Sur</option>
				<option value="es" selected >España</option>
				<option value="pi" >Islas Spratly</option>

				<option value="lk" >Sri Lanka</option>
				<option value="sd" >Sudán</option>
				<option value="sr" >Surinám</option>
				<option value="sj" >Islas Svalbard y Jan Mayen</option>
				<option value="sz" >Swazilandia</option>
				<option value="se" >Suecia</option>

				<option value="ch" >Suiza</option>
				<option value="sy" >Siria</option>
				<option value="tw" >Taiwán</option>
				<option value="tj" >Tayikistán</option>
				<option value="tz" >Tanzania</option>
				<option value="th" >Tailandia</option>

				<option value="tg" >Togo</option>
				<option value="tk" >Tokelau</option>
				<option value="to" >Tonga</option>
				<option value="tt" >Trinidad y Tobago</option>
				<option value="tn" >Túnez</option>
				<option value="tr" >Turquía</option>

				<option value="tm" >Turkmenistán</option>
				<option value="tc" >Islas Turks y Caicos</option>
				<option value="tv" >Tuvalu</option>
				<option value="ug" >Uganda</option>
				<option value="ua" >Ucrania</option>
				<option value="ae" >Emiratos Árabes Unidos</option>

				<option value="uk" >Reino Unido</option>
				<option value="xd" >Zona neutra de las Naciones Unidas</option>
				<option value="us" >Estados Unidos</option>
				<option value="um" >Islas Menores de los Estados Unidos</option>
				<option value="uy" >Uruguay</option>
				<option value="vi" >Islas Vírgenes de los Estados Unidos</option>

				<option value="uz" >Uzbekistán</option>
				<option value="vu" >Vanuatu</option>
				<option value="va" >Vaticano</option>
				<option value="ve" >Venezuela</option>
				<option value="vn" >Vietnám</option>
				<option value="wf" >Wallis y Futuna</option>

				<option value="eh" >Sáhara Occidental</option>
				<option value="ye" >Yemen</option>
				<option value="zm" >Zambia</option>
				<option value="zw" >Zimbabwe</option></select>
				</select>
			   </div>
			   <div class="form-group">
				   <label> Captcha </label>
				   	{!! app('captcha')->display(); !!}
			   </div>
			  <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		</div>
		</div>
	</div>
  </div>
</div>
@stop
