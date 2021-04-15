<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
		body
		{
			background:#fffff;
			font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
			font-size:small;
			margin:8px 0 16px;
			text-align:center;
		}

		#form_container
		{
			background:#fff;
			border:1px solid #ccc;
			margin:0 auto;
			text-align:left;
			width:640px;
		}

		#top
		{
			display:block;
			height:10px;
			margin:10px auto 0;
			width:650px;
		}

		#footer
		{
			width:640px;
			clear:both;
			color:#999999;
			text-align:center;
			width:640px;
			padding-bottom: 15px;
			font-size: 85%;
		}

		#footer a{
			color:#999999;
			text-decoration: none;
			border-bottom: 1px dotted #999999;
		}

		#bottom
		{
			display:block;
			height:10px;
			margin:0 auto;
			width:650px;
		}

		form.appnitro
		{
			margin:20px 20px 0;
			padding:0 0 20px;
		}

		/**** Logo Section  *****/
		h1
		{
			background-color:#dedede;
			margin:0;
			min-height:0;
			padding:0;
			text-decoration:none;
			text-indent:-8000px;

		}

		h1 a
		{

			display:block;
			height:100%;
			min-height:40px;
			overflow:hidden;
		}

		.appnitro
		{
			font-family:Lucida Grande, Tahoma, Arial, Verdana, sans-serif;
			font-size:small;
		}

		.appnitro li
		{
			width:61%;
		}

		form ul
		{
			font-size:100%;
			list-style-type:none;
			margin:0;
			padding:0;
			width:100%;
		}

		form li
		{
			display:block;
			margin:0;
			padding:4px 5px 2px 9px;
			position:relative;
		}

		form li:after
		{
			clear:both;
			content:".";
			display:block;
			height:0;
			visibility:hidden;
		}

		.buttons:after
		{
			clear:both;
			content:".";
			display:block;
			height:0;
			visibility:hidden;
		}

		.buttons
		{
			clear:both;
			display:block;
			margin-top:10px;
		}

		* html form li
		{
			height:1%;
		}

		* html .buttons
		{
			height:1%;
		}

		* html form li div
		{
			display:inline-block;
		}

		form li div
		{
			color:#444;
			margin:0 4px 0 0;
			padding:0 0 8px;
		}

		form li span
		{
			color:#444;
			float:left;
			margin:0 4px 0 0;
			padding:0 0 8px;
		}

		form li div.left
		{
			display:inline;
			float:left;
			width:48%;
		}

		form li div.right
		{
			display:inline;
			float:right;
			width:48%;
		}

		form li div.left .medium
		{
			width:100%;
		}

		form li div.right .medium
		{
			width:100%;
		}

		.clear
		{
			clear:both;
		}

		form li div label
		{
			clear:both;
			color:#444;
			display:block;
			font-size:9px;
			line-height:9px;
			margin:0;
			padding-top:3px;
		}

		form li span label
		{
			clear:both;
			color:#444;
			display:block;
			font-size:9px;
			line-height:9px;
			margin:0;
			padding-top:3px;
		}

		form li .datepicker
		{
			cursor:pointer !important;
			float:left;
			height:16px;
			margin:.1em 5px 0 0;
			padding:0;
			width:16px;
		}

		.form_description
		{
			border-bottom:1px dotted #ccc;
			clear:both;
			display:inline-block;
			margin:0 0 1em;
		}

		.form_description[class]
		{
			display:block;
		}

		.form_description h2
		{
			clear:left;
			font-size:160%;
			font-weight:400;
			margin:0 0 3px;
		}

		.form_description p
		{
			font-size:95%;
			line-height:130%;
			margin:0 0 12px;
		}

		form hr
		{
			display:none;
		}

		form li.section_break
		{
			border-top:1px dotted #ccc;
			margin-top:9px;
			padding-bottom:0;
			padding-left:9px;
			padding-top:13px;
			width:97% !important;
		}

		form ul li.first
		{
			border-top:none !important;
			margin-top:0 !important;
			padding-top:0 !important;
		}

		form .section_break h3
		{
			font-size:110%;
			font-weight:400;
			line-height:130%;
			margin:0 0 2px;
		}

		form .section_break p
		{
			font-size:85%;

			margin:0 0 10px;
		}

		input.button_text
		{
			overflow:visible;
			padding:0 7px;
			width:auto;
		}

		.buttons input
		{
			font-size:120%;
			margin-right:5px;
		}

		label.description
		{
			border:none;
			color:#222;
			display:block;
			font-size:95%;
			font-weight:700;
			line-height:150%;
			padding:0 0 1px;
		}

		span.symbol
		{
			font-size:115%;
			line-height:130%;
		}

		input.text
		{
			border-bottom:1px solid #ddd;
			border-left:1px solid #c3c3c3;
			border-right:1px solid #c3c3c3;
			border-top:1px solid #7c7c7c;
			color:#333;
			font-size:100%;
			margin:0;
			padding:2px 0;
		}

		input.file
		{
			color:#333;
			font-size:100%;
			margin:0;
			padding:2px 0;
		}

		textarea.textarea
		{
			border-bottom:1px solid #ddd;
			border-left:1px solid #c3c3c3;
			border-right:1px solid #c3c3c3;
			border-top:1px solid #7c7c7c;
			color:#333;
			font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
			font-size:100%;
			margin:0;
			width:99%;
		}

		select.select
		{
			color:#333;
			font-size:100%;
			margin:1px 0;
			padding:1px 0 0;
			border-bottom:1px solid #ddd;
			border-left:1px solid #c3c3c3;
			border-right:1px solid #c3c3c3;
			border-top:1px solid #7c7c7c;
		}


		input.currency
		{
			text-align:right;
		}

		input.checkbox
		{
			display:block;
			height:13px;
			line-height:1.4em;
			margin:6px 0 0 3px;
			width:13px;
		}

		input.radio
		{
			display:block;
			height:13px;
			line-height:1.4em;
			margin:6px 0 0 3px;
			width:13px;
		}

		label.choice
		{
			color:#444;
			display:block;
			font-size:100%;
			line-height:1.4em;
			margin:-1.55em 0 0 25px;
			padding:4px 0 5px;
			width:90%;
		}

		select.select[class]
		{
			margin:0;
			padding:1px 0;
		}

		*:first-child+html select.select[class]
		{
			margin:1px 0;
		}

		.safari select.select
		{
			font-size:120% !important;
			margin-bottom:1px;
		}

		input.small
		{
			width:25%;
		}

		select.small
		{
			width:25%;
		}

		input.medium
		{
			width:50%;
		}

		select.medium
		{
			width:50%;
		}

		input.large
		{
			width:99%;
		}

		select.large
		{
			width:100%;
		}

		textarea.small
		{
			height:5.5em;
		}

		textarea.medium
		{
			height:10em;
		}

		textarea.large
		{
			height:20em;
		}
	</style>
</head>
<body id="main_body" >
	<?php
	if(!isset($_POST['form_id']) && !isset($_GET['step'])) {
		?>
		<div id="form_container">
			<h1><a> Form</a></h1>
			<form id="form_1" class="appnitro"  method="post" action="?step=2">
				<div class="form_description">
					<h2>Wypełnij formularz</h2>
				</div>						
				<ul >

					<li id="li_8" >
						<label class="description" for="element_8">Ilość osób </label>
						<div>
							<select class="element select medium" id="element_8" name="element_8" required> 
								<option value="1" >1</option>
								<option value="2" >2</option>
								<option value="3" >3</option>
								<option value="4" >4</option>

							</select>
						</div> 
					</li>		<li id="li_1" >
						<label class="description" for="name">Imię </label>
						<div>
							<input id="name" name="name" class="element text medium" type="text" maxlength="255" minlength="2"  value="" required/> 
						</div> 
					</li>		<li id="li_2" >
						<label class="description" for="surname">Nazwisko </label>
						<div>
							<input id="surname" name="surname" class="element text medium" type="text" maxlength="255" minlength="2" value="" required/> 
						</div> 
					</li>		<li id="li_3" >
						<label class="description" for="creditcard">numer karty kredytowej </label>
						<div>
							<input id="creditcard" name="creditcard" class="element text medium" type="text" maxlength="16" minlength="16" value="" required/> 
						</div> 
					</li>		<li id="li_4" >
						<label class="description" for="element_4">Adres </label>

						<div>
							<input id="element_4_1" name="element_4_1" class="element text large" value="" type="text" minlength="2" required>
							<label for="element_4_1">Ulica</label>
						</div>

						<div>
							<input id="element_4_2" name="element_4_2" class="element text large" value="" type="text" minlength="2" required>
							<label for="element_4_2">Adres</label>
						</div>

						<div class="left">
							<input id="element_4_3" name="element_4_3" class="element text medium" value="" type="text" minlength="2" required>
							<label for="element_4_3">Miasto</label>
						</div>

						<div class="right">
							<input id="element_4_4" name="element_4_4" class="element text medium" value="" type="text">
							<label for="element_4_4"> Prowincja / Region / Obwód</label>
						</div>

						<div class="left">
							<input id="element_4_5" name="element_4_5" class="element text medium" value="" type="number">
							<label for="element_4_5">Kod pocztowy</label>
						</div>

						<div class="right">
							<select class="element select medium" id="element_4_6" name="element_4_6" required> 
								<option value="" selected="selected"></option>
								<option value="Afghanistan" >Afghanistan</option>
								<option value="Albania" >Albania</option>
								<option value="Algeria" >Algeria</option>
								<option value="Andorra" >Andorra</option>
								<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
								<option value="Argentina" >Argentina</option>
								<option value="Armenia" >Armenia</option>
								<option value="Australia" >Australia</option>
								<option value="Austria" >Austria</option>
								<option value="Azerbaijan" >Azerbaijan</option>
								<option value="Bahamas" >Bahamas</option>
								<option value="Bahrain" >Bahrain</option>
								<option value="Bangladesh" >Bangladesh</option>
								<option value="Barbados" >Barbados</option>
								<option value="Belarus" >Belarus</option>
								<option value="Belgium" >Belgium</option>
								<option value="Belize" >Belize</option>
								<option value="Benin" >Benin</option>
								<option value="Bhutan" >Bhutan</option>
								<option value="Bolivia" >Bolivia</option>
								<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
								<option value="Botswana" >Botswana</option>
								<option value="Brazil" >Brazil</option>
								<option value="Brunei" >Brunei</option>
								<option value="Bulgaria" >Bulgaria</option>
								<option value="Burkina Faso" >Burkina Faso</option>
								<option value="Burundi" >Burundi</option>
								<option value="Cambodia" >Cambodia</option>
								<option value="Cameroon" >Cameroon</option>
								<option value="Canada" >Canada</option>
								<option value="Cape Verde" >Cape Verde</option>
								<option value="Central African Republic" >Central African Republic</option>
								<option value="Chad" >Chad</option>
								<option value="Chile" >Chile</option>
								<option value="China" >China</option>
								<option value="Colombia" >Colombia</option>
								<option value="Comoros" >Comoros</option>
								<option value="Congo" >Congo</option>
								<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
								<option value="Costa Rica" >Costa Rica</option>
								<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
								<option value="Croatia" >Croatia</option>
								<option value="Cuba" >Cuba</option>
								<option value="Cyprus" >Cyprus</option>
								<option value="Czech Republic" >Czech Republic</option>
								<option value="Denmark" >Denmark</option>
								<option value="Djibouti" >Djibouti</option>
								<option value="Dominica" >Dominica</option>
								<option value="Dominican Republic" >Dominican Republic</option>
								<option value="East Timor" >East Timor</option>
								<option value="Ecuador" >Ecuador</option>
								<option value="Egypt" >Egypt</option>
								<option value="El Salvador" >El Salvador</option>
								<option value="Equatorial Guinea" >Equatorial Guinea</option>
								<option value="Eritrea" >Eritrea</option>
								<option value="Estonia" >Estonia</option>
								<option value="Ethiopia" >Ethiopia</option>
								<option value="Fiji" >Fiji</option>
								<option value="Finland" >Finland</option>
								<option value="France" >France</option>
								<option value="Gabon" >Gabon</option>
								<option value="Gambia" >Gambia</option>
								<option value="Georgia" >Georgia</option>
								<option value="Germany" >Germany</option>
								<option value="Ghana" >Ghana</option>
								<option value="Greece" >Greece</option>
								<option value="Grenada" >Grenada</option>
								<option value="Guatemala" >Guatemala</option>
								<option value="Guinea" >Guinea</option>
								<option value="Guinea-Bissau" >Guinea-Bissau</option>
								<option value="Guyana" >Guyana</option>
								<option value="Haiti" >Haiti</option>
								<option value="Honduras" >Honduras</option>
								<option value="Hong Kong" >Hong Kong</option>
								<option value="Hungary" >Hungary</option>
								<option value="Iceland" >Iceland</option>
								<option value="India" >India</option>
								<option value="Indonesia" >Indonesia</option>
								<option value="Iran" >Iran</option>
								<option value="Iraq" >Iraq</option>
								<option value="Ireland" >Ireland</option>
								<option value="Israel" >Israel</option>
								<option value="Italy" >Italy</option>
								<option value="Jamaica" >Jamaica</option>
								<option value="Japan" >Japan</option>
								<option value="Jordan" >Jordan</option>
								<option value="Kazakhstan" >Kazakhstan</option>
								<option value="Kenya" >Kenya</option>
								<option value="Kiribati" >Kiribati</option>
								<option value="North Korea" >North Korea</option>
								<option value="South Korea" >South Korea</option>
								<option value="Kuwait" >Kuwait</option>
								<option value="Kyrgyzstan" >Kyrgyzstan</option>
								<option value="Laos" >Laos</option>
								<option value="Latvia" >Latvia</option>
								<option value="Lebanon" >Lebanon</option>
								<option value="Lesotho" >Lesotho</option>
								<option value="Liberia" >Liberia</option>
								<option value="Libya" >Libya</option>
								<option value="Liechtenstein" >Liechtenstein</option>
								<option value="Lithuania" >Lithuania</option>
								<option value="Luxembourg" >Luxembourg</option>
								<option value="Macedonia" >Macedonia</option>
								<option value="Madagascar" >Madagascar</option>
								<option value="Malawi" >Malawi</option>
								<option value="Malaysia" >Malaysia</option>
								<option value="Maldives" >Maldives</option>
								<option value="Mali" >Mali</option>
								<option value="Malta" >Malta</option>
								<option value="Marshall Islands" >Marshall Islands</option>
								<option value="Mauritania" >Mauritania</option>
								<option value="Mauritius" >Mauritius</option>
								<option value="Mexico" >Mexico</option>
								<option value="Micronesia" >Micronesia</option>
								<option value="Moldova" >Moldova</option>
								<option value="Monaco" >Monaco</option>
								<option value="Mongolia" >Mongolia</option>
								<option value="Montenegro" >Montenegro</option>
								<option value="Morocco" >Morocco</option>
								<option value="Mozambique" >Mozambique</option>
								<option value="Myanmar" >Myanmar</option>
								<option value="Namibia" >Namibia</option>
								<option value="Nauru" >Nauru</option>
								<option value="Nepal" >Nepal</option>
								<option value="Netherlands" >Netherlands</option>
								<option value="New Zealand" >New Zealand</option>
								<option value="Nicaragua" >Nicaragua</option>
								<option value="Niger" >Niger</option>
								<option value="Nigeria" >Nigeria</option>
								<option value="Norway" >Norway</option>
								<option value="Oman" >Oman</option>
								<option value="Pakistan" >Pakistan</option>
								<option value="Palau" >Palau</option>
								<option value="Panama" >Panama</option>
								<option value="Papua New Guinea" >Papua New Guinea</option>
								<option value="Paraguay" >Paraguay</option>
								<option value="Peru" >Peru</option>
								<option value="Philippines" >Philippines</option>
								<option value="Poland" >Poland</option>
								<option value="Portugal" >Portugal</option>
								<option value="Puerto Rico" >Puerto Rico</option>
								<option value="Qatar" >Qatar</option>
								<option value="Romania" >Romania</option>
								<option value="Russia" >Russia</option>
								<option value="Rwanda" >Rwanda</option>
								<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
								<option value="Saint Lucia" >Saint Lucia</option>
								<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
								<option value="Samoa" >Samoa</option>
								<option value="San Marino" >San Marino</option>
								<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
								<option value="Saudi Arabia" >Saudi Arabia</option>
								<option value="Senegal" >Senegal</option>
								<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
								<option value="Seychelles" >Seychelles</option>
								<option value="Sierra Leone" >Sierra Leone</option>
								<option value="Singapore" >Singapore</option>
								<option value="Slovakia" >Slovakia</option>
								<option value="Slovenia" >Slovenia</option>
								<option value="Solomon Islands" >Solomon Islands</option>
								<option value="Somalia" >Somalia</option>
								<option value="South Africa" >South Africa</option>
								<option value="Spain" >Spain</option>
								<option value="Sri Lanka" >Sri Lanka</option>
								<option value="Sudan" >Sudan</option>
								<option value="Suriname" >Suriname</option>
								<option value="Swaziland" >Swaziland</option>
								<option value="Sweden" >Sweden</option>
								<option value="Switzerland" >Switzerland</option>
								<option value="Syria" >Syria</option>
								<option value="Taiwan" >Taiwan</option>
								<option value="Tajikistan" >Tajikistan</option>
								<option value="Tanzania" >Tanzania</option>
								<option value="Thailand" >Thailand</option>
								<option value="Togo" >Togo</option>
								<option value="Tonga" >Tonga</option>
								<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
								<option value="Tunisia" >Tunisia</option>
								<option value="Turkey" >Turkey</option>
								<option value="Turkmenistan" >Turkmenistan</option>
								<option value="Tuvalu" >Tuvalu</option>
								<option value="Uganda" >Uganda</option>
								<option value="Ukraine" >Ukraine</option>
								<option value="United Arab Emirates" >United Arab Emirates</option>
								<option value="United Kingdom" >United Kingdom</option>
								<option value="United States" >United States</option>
								<option value="Uruguay" >Uruguay</option>
								<option value="Uzbekistan" >Uzbekistan</option>
								<option value="Vanuatu" >Vanuatu</option>
								<option value="Vatican City" >Vatican City</option>
								<option value="Venezuela" >Venezuela</option>
								<option value="Vietnam" >Vietnam</option>
								<option value="Yemen" >Yemen</option>
								<option value="Zambia" >Zambia</option>
								<option value="Zimbabwe" >Zimbabwe</option>

							</select>
							<label for="element_4_6">Kraj</label>
						</div> 
					</li>		<li id="li_5" >
						<label class="description" for="element_5">Data przyjazdu </label>
						<span>
							<input id="date" name="date" class="element text" type="date" min="2021-04-11" required/>
						</span>
						<span>
						</span>

					</li>		<li id="li_6" >
						<label class="description" for="element_6">Planowana godzina przyjazdu </label>
						<span>
							<input id="element_6_1" name="element_6_1" class="element text " size="2" type="number" min=0 max=24 value=00 required/> : 
							<label>HH</label>
						</span>
						<span>
							<input id="element_6_2" name="element_6_2" class="element text " size="2" type="number" min=0 max=60 value=00 required/> : 
							<label>MM</label>
						</span>
						<span>
							<select class="element select" style="width:4em" id="element_6_4" name="element_6_4" required>
								<option value="AM" >AM</option>
								<option value="PM" >PM</option>
							</select>
							<label>AM/PM</label>
						</span> 
					</li>		<li id="li_7" >
						<label class="description" for="element_7">Email </label>
						<div>
							<input id="element_7" name="element_7" class="element text medium" type="email" maxlength="255" value="" required/> 
						</div> 
					</li>
					<label class="description" for="element_9">Udogodnienia </label>
					<span>
						<input id="element_9_1" name="element_9_1" class="element checkbox" type="checkbox" value="1" />
						<label class="choice" for="element_9_1">łóżko dla dziecka</label>
						<input id="element_9_2" name="element_9_2" class="element checkbox" type="checkbox" value="1" />
						<label class="choice" for="element_9_2">klimatyzacja</label>
						<input id="element_9_3" name="element_9_3" class="element checkbox" type="checkbox" value="1" />
						<label class="choice" for="element_9_3">popielniczka dla palacza</label>

					</span> 

					<li class="buttons">
						<input type="hidden" name="form_id" value="1" />

						<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
					</li>
				</ul>
			</form>	
		</div>

		<?php
	}
	if (isset($_POST['form_id']) && $_GET['step'] == 2) {
		?>

		<div id="form_container">
			<h1><a> Form</a></h1>
			<form id="form_2" class="appnitro"  method="post" action="?step=3">
				<h2>Podaj dane osobowe gości:</h2>
				<ul>
				<?php 
					foreach($_POST as $key => $value) {
						echo ('<input type="hidden" name="'.$key.'" value="'.$value.'" />');
					}
				?>
				<?php for ($i = 1; $i<=intval($_POST['element_8']); $i++) { ?>
				<li id="li_1" >
					<?php echo ('<label class="description" for="name">Imię '.$i.'</label>'); ?>
					<div>
						<?php echo ('<input id="name_'.$i.'" name="name_'.$i.'" class="element text medium" type="text" maxlength="255" minlength="2"  value="" required/>'); ?>
					</div> 
				</li>		
				<li id="li_2" >
					<?php echo ('<label class="description" for="surname">Nazwisko '.$i.'</label>'); ?>
					<div>
						<?php echo ('<input id="surname_'.$i.'" name="surname_'.$i.'" class="element text medium" type="text" maxlength="255" minlength="2" value="" required/>'); ?>
					</div> 
				</li>		
				<li id="li_3" >
				<?php echo ('<label class="description" for="surname">Data urodzenia '.$i.'</label>'); ?>
					<div>
						<?php echo ('<input id="birthday_'.$i.'" name="birthday_'.$i.'" class="element text" type="date" min="1900-01-01" required/>'); ?>
					</div> 
				</li>	
			    <?php } ?>
			    <li class="buttons">
						<input type="hidden" name="form_id" value="2" />
						<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				</li>	
				</ul>
			</form>	
		</div>


		<?php
	}
	if (isset($_POST['form_id']) && $_GET['step'] == 3) {
		?>
		<h2> Podsumowanie rezerwacji: </h2>
		<span><b>Klient: </b></span><?php echo ($_POST['name']." ".$_POST['surname']);?></br>
		<span><b>Ilość osób: </b></span><?php echo ($_POST['element_8']);?></br>
		<span><b>Numer karty kredytowej: </b></span><?php echo ($_POST['creditcard']);?></br>
		<span><b>Adres: </b></span>
		<?php echo ($_POST['element_4_1']." ".$_POST['element_4_2']." ".
			$_POST['element_4_3']." ".$_POST['element_4_4']." ".$_POST['element_4_5'].
			" ".$_POST['element_4_6']." ");?></br>
			<span><b>Data przyjazdu: </b></span><?php echo ($_POST['date']." ".$_POST['element_6_1'].":".$_POST['element_6_2']);?></br>
			<span><b>Email: </b></span><?php echo ($_POST['element_7']);?></br>
			<ul>
				<?php if($_POST['element_9_1']==1) { ?>
					<li>łóżko dla dziecka</li>
				<?php } ?>
				<?php if($_POST['element_9_2']==1) { ?>
					<li>klimatyzacja</li>
				<?php } ?>
				<?php if($_POST['element_9_3']==1) { ?>
					<li>popielniczka dla palacza</li>
				<?php } ?>
			</ul>
		<?php for ($i = 1; $i<=intval($_POST['element_8']); $i++) { 
		echo ("<span><b>Gość ".$i.": </b></span>".$_POST['name_'.$i]." ".$_POST['surname_'.$i]." ".$_POST['birthday_'.$i]."</br>");
		}
		?>
		<?php }
		?>
	</body>
	</html>