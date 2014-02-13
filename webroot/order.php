<?php

include(__DIR__.'/config.php');

$shire['stylesheets'][] = 'css/form.css';
$shire['title'] = "Beställ";
$shire['topContent'] = "<h1>Beställ</h1>";
$shire['main'] = <<<EOD
<form method='POST'>
	<fieldset>
		<legend>
			Adressinformation.
		</legend>
		<p>
			<label for='firstName'>Förnamn:</label>
			<input id='firstName' class="text" type='text'> 
		</p>
		<p>
			<label for='lastName'>Efternamn:</label>
			<input id='lastName' class="text" type='text'>
		</p>
		<p>
			<label for='adress'>Leveransadress:</label>
			<input id='adress' class="text" type='text'>
		<p>
			<label for='postNr'>Postnr:</label>
			<input id='postNr' class="text" type='text'>
		</p>
		<p>
			<label for='city'>Ort:</label>
			<input id='city' class="text" type='text'>
		</p>
		<p>
			<label for='eMail'>E-postadress:</label>
			<input id='eMail' class="text" type='email'>
		</p>
		<p>
			<label for='phone'>Telefon:</label>
			<input id='phone' class="text" type='text'>
		</p>
		<p>
			<input id='checkBox' class='checkbox' type='checkbox' required>
			<lable for='checkBox'>Ja, jag godkänner köpvillkoren</label> 
		</p>
		<p>
			<input type='submit' class='submit' value='Bekräfta'>
		</p>
	</fieldset>
</form>
EOD;

include(SHIRE_THEME_PATH);