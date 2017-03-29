@extends('layouts.master')
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
			    <label for="exampleInputEmail1">Usuario</label>
			    <input type="text" class="form-control" name="login" value="{{ old('login') }}" style="width:80%;" id="exampleInputEmail1" placeholder="Usuario">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Contraseña</label>
			    <input type="password" class="form-control" name="password" style="width:80%;" id="exampleInputPassword1" placeholder="Contraseña">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Real Name / Nombre Real</label>
			    <input type="text" class="form-control" name="real_name" value="{{ old('real_name') }}" style="width:80%;" id="exampleInputPassword1" placeholder="Nombre">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Social ID / Codigo de borrado de personajes</label>
			    <input type="text" class="form-control" name="social_id" value="{{ old('social_id') }}" style="width:80%;"  id="exampleInputPassword1" placeholder="Codigo de borrado">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Email</label>
			    <input type="email" class="form-control" name="email" value="{{ old('email') }}" style="width:80%;" id="exampleInputPassword1" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Pais</label>
			   <select name="zipcode" id="account_tmp_ms_pais_id" class="form-control" style="width:80%; color:black !important;">
				<option value="1" selected="selected">No especificado</option>
				<option value="2">Afganistán</option>
				<option value="3">Islas Gland</option>
				<option value="4">Albania</option>
				<option value="5">Alemania</option>
				<option value="6">Andorra</option>
				<option value="7">Angola</option>
				<option value="8">Anguilla</option>
				<option value="9">Antártida</option>
				<option value="10">Antigua y Barbuda</option>
				<option value="11">Antillas Holandesas</option>
				<option value="12">Arabia Saudí</option>
				<option value="13">Argelia</option>
				<option value="14">Argentina</option>
				<option value="15">Armenia</option>
				<option value="16">Aruba</option>
				<option value="17">Australia</option>
				<option value="18">Austria</option>
				<option value="19">Azerbaiyán</option>
				<option value="20">Bahamas</option>
				<option value="21">Bahréin</option>
				<option value="22">Bangladesh</option>
				<option value="23">Barbados</option>
				<option value="24">Bielorrusia</option>
				<option value="25">Bélgica</option>
				<option value="26">Belice</option>
				<option value="27">Benin</option>
				<option value="28">Bermudas</option>
				<option value="29">Bhután</option>
				<option value="30">Bolivia</option>
				<option value="31">Bosnia y Herzegovina</option>
				<option value="32">Botsuana</option>
				<option value="33">Isla Bouvet</option>
				<option value="34">Brasil</option>
				<option value="35">Brunéi</option>
				<option value="36">Bulgaria</option>
				<option value="37">Burkina Faso</option>
				<option value="38">Burundi</option>
				<option value="39">Cabo Verde</option>
				<option value="40">Islas Caimán</option>
				<option value="41">Camboya</option>
				<option value="42">Camerún</option>
				<option value="43">Canadá</option>
				<option value="44">República Centroafricana</option>
				<option value="45">Chad</option>
				<option value="46">República Checa</option>
				<option value="47">Chile</option>
				<option value="48">China</option>
				<option value="49">Chipre</option>
				<option value="50">Isla de Navidad</option>
				<option value="51">Ciudad del Vaticano</option>
				<option value="52">Islas Cocos</option>
				<option value="53">Colombia</option>
				<option value="54">Comoras</option>
				<option value="55">República Democrática del Congo</option>
				<option value="56">Congo</option>
				<option value="57">Islas Cook</option>
				<option value="58">Corea del Norte</option>
				<option value="59">Corea del Sur</option>
				<option value="60">Costa de Marfil</option>
				<option value="61">Costa Rica</option>
				<option value="62">Croacia</option>
				<option value="63">Cuba</option>
				<option value="64">Dinamarca</option>
				<option value="65">Dominica</option>
				<option value="66">República Dominicana</option>
				<option value="67">Ecuador</option>
				<option value="68">Egipto</option>
				<option value="69">El Salvador</option>
				<option value="70">Emiratos Árabes Unidos</option>
				<option value="71">Eritrea</option>
				<option value="72">Eslovaquia</option>
				<option value="73">Eslovenia</option>
				<option value="74" selected>España</option>
				<option value="75">Islas ultramarinas de Estados Unidos</option>
				<option value="76">Estados Unidos</option>
				<option value="77">Estonia</option>
				<option value="78">Etiopía</option>
				<option value="79">Islas Feroe</option>
				<option value="80">Filipinas</option>
				<option value="81">Finlandia</option>
				<option value="82">Fiyi</option>
				<option value="83">Francia</option>
				<option value="84">Gabón</option>
				<option value="85">Gambia</option>
				<option value="86">Georgia</option>
				<option value="87">Islas Georgias del Sur y Sandwich del Sur</option>
				<option value="88">Ghana</option>
				<option value="89">Gibraltar</option>
				<option value="90">Granada</option>
				<option value="91">Grecia</option>
				<option value="92">Groenlandia</option>
				<option value="93">Guadalupe</option>
				<option value="94">Guam</option>
				<option value="95">Guatemala</option>
				<option value="96">Guayana Francesa</option>
				<option value="97">Guinea</option>
				<option value="98">Guinea Ecuatorial</option>
				<option value="99">Guinea-Bissau</option>
				<option value="100">Guyana</option>
				<option value="101">Haití</option>
				<option value="102">Islas Heard y McDonald</option>
				<option value="103">Honduras</option>
				<option value="104">Hong Kong</option>
				<option value="105">Hungría</option>
				<option value="106">India</option>
				<option value="107">Indonesia</option>
				<option value="108">Irán</option>
				<option value="109">Iraq</option>
				<option value="110">Irlanda</option>
				<option value="111">Islandia</option>
				<option value="112">Israel</option>
				<option value="113">Italia</option>
				<option value="114">Jamaica</option>
				<option value="115">Japón</option>
				<option value="116">Jordania</option>
				<option value="117">Kazajstán</option>
				<option value="118">Kenia</option>
				<option value="119">Kirguistán</option>
				<option value="120">Kiribati</option>
				<option value="121">Kuwait</option>
				<option value="122">Laos</option>
				<option value="123">Lesotho</option>
				<option value="124">Letonia</option>
				<option value="125">Líbano</option>
				<option value="126">Liberia</option>
				<option value="127">Libia</option>
				<option value="128">Liechtenstein</option>
				<option value="129">Lituania</option>
				<option value="130">Luxemburgo</option>
				<option value="131">Macao</option>
				<option value="132">ARY Macedonia</option>
				<option value="133">Madagascar</option>
				<option value="134">Malasia</option>
				<option value="135">Malawi</option>
				<option value="136">Maldivas</option>
				<option value="137">Malí</option>
				<option value="138">Malta</option>
				<option value="139">Islas Malvinas</option>
				<option value="140">Islas Marianas del Norte</option>
				<option value="141">Marruecos</option>
				<option value="142">Islas Marshall</option>
				<option value="143">Martinica</option>
				<option value="144">Mauricio</option>
				<option value="145">Mauritania</option>
				<option value="146">Mayotte</option>
				<option value="147">México</option>
				<option value="148">Micronesia</option>
				<option value="149">Moldavia</option>
				<option value="150">Mónaco</option>
				<option value="151">Mongolia</option>
				<option value="152">Montserrat</option>
				<option value="153">Mozambique</option>
				<option value="154">Myanmar</option>
				<option value="155">Namibia</option>
				<option value="156">Nauru</option>
				<option value="157">Nepal</option>
				<option value="158">Nicaragua</option>
				<option value="159">Níger</option>
				<option value="160">Nigeria</option>
				<option value="161">Niue</option>
				<option value="162">Isla Norfolk</option>
				<option value="163">Noruega</option>
				<option value="164">Nueva Caledonia</option>
				<option value="165">Nueva Zelanda</option>
				<option value="166">Omán</option>
				<option value="167">Países Bajos</option>
				<option value="168">Pakistán</option>
				<option value="169">Palau</option>
				<option value="170">Palestina</option>
				<option value="171">Panamá</option>
				<option value="172">Papúa Nueva Guinea</option>
				<option value="173">Paraguay</option>
				<option value="174">Perú</option>
				<option value="175">Islas Pitcairn</option>
				<option value="176">Polinesia Francesa</option>
				<option value="177">Polonia</option>
				<option value="178">Portugal</option>
				<option value="179">Puerto Rico</option>
				<option value="180">Qatar</option>
				<option value="181">Reino Unido</option>
				<option value="182">Reunión</option>
				<option value="183">Ruanda</option>
				<option value="184">Rumania</option>
				<option value="185">Rusia</option>
				<option value="186">Sahara Occidental</option>
				<option value="187">Islas Salomón</option>
				<option value="188">Samoa</option>
				<option value="189">Samoa Americana</option>
				<option value="190">San Cristóbal y Nevis</option>
				<option value="191">San Marino</option>
				<option value="192">San Pedro y Miquelón</option>
				<option value="193">San Vicente y las Granadinas</option>
				<option value="194">Santa Helena</option>
				<option value="195">Santa Lucía</option>
				<option value="196">Santo Tomé y Príncipe</option>
				<option value="197">Senegal</option>
				<option value="198">Serbia y Montenegro</option>
				<option value="199">Seychelles</option>
				<option value="200">Sierra Leona</option>
				<option value="201">Singapur</option>
				<option value="202">Siria</option>
				<option value="203">Somalia</option>
				<option value="204">Sri Lanka</option>
				<option value="205">Suazilandia</option>
				<option value="206">Sudáfrica</option>
				<option value="207">Sudán</option>
				<option value="208">Suecia</option>
				<option value="209">Suiza</option>
				<option value="210">Surinam</option>
				<option value="211">Svalbard y Jan Mayen</option>
				<option value="212">Tailandia</option>
				<option value="213">Taiwán</option>
				<option value="214">Tanzania</option>
				<option value="215">Tayikistán</option>
				<option value="216">Territorio Británico del Océano Índico</option>
				<option value="217">Territorios Australes Franceses</option>
				<option value="218">Timor Oriental</option>
				<option value="219">Togo</option>
				<option value="220">Tokelau</option>
				<option value="221">Tonga</option>
				<option value="222">Trinidad y Tobago</option>
				<option value="223">Túnez</option>
				<option value="224">Islas Turcas y Caicos</option>
				<option value="225">Turkmenistán</option>
				<option value="226">Turquía</option>
				<option value="227">Tuvalu</option>
				<option value="228">Ucrania</option>
				<option value="229">Uganda</option>
				<option value="230">Uruguay</option>
				<option value="231">Uzbekistán</option>
				<option value="232">Vanuatu</option>
				<option value="233">Venezuela</option>
				<option value="234">Vietnam</option>
				<option value="235">Islas Vírgenes Británicas</option>
				<option value="236">Islas Vírgenes de los Estados Unidos</option>
				<option value="237">Wallis y Futuna</option>
				<option value="238">Yemen</option>
				<option value="239">Yibuti</option>
				<option value="240">Zambia</option>
				<option value="241">Zimbabue</option>
				</select>
			   </div>
			  <button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		</div>
		</div>
	</div>
  </div>
</div>
@stop