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
		<label for='firstName'>Förnamn:</label>
		<input id='firstName' class="text" type='text'> 
		<br />
		<label for='lastName'>Efternamn:</label>
		<input id='lastName' class="text" type='text'>
		<br />
		<label for='adress'>Leveransadress:</label>
		<input id='adress' class="text" type='text'>
		<br />
		<label for='postNr'>Postnr:</label>
		<input id='postNr' class="text" type='text'>
		<br />
		<label for='city'>Ort:</label>
		<input id='city' class="text" type='text'>
		<br />
		<label for='eMail'>E-postadress:</label>
		<input id='eMail' class="text" type='email'>
		<br />
		<label for='phone'>Telefon:</label>
		<input id='phone' class="text" type='text'>
		<br />
		<input id='checkBox' class='checkbox' type='checkbox' required>
		<lable for='checkBox'>Ja, jag godkänner köpvillkoren</label> 
		<br />
		<input type='submit' class='submit' value='Bekräfta'>
	</fieldset>
</form>
EOD;

include(SHIRE_THEME_PATH);