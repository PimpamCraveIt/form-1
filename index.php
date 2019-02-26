<?php
require_once 'Form.php';
?>
<!DOCTYPE html>
<html lang="en">
<form method="POST" action="insert()">

<body style="background:url('https://ceparisien.goodbarber.com/docs/Plugin1/fond.jpg') no-repeat; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; background-origin: border-box; -webkit-background-origin: border-box; -moz-background-origin: border-box; margin:0; padding:0; min-height: 100%;">

<label for="bar"><h2 style="vertical-align: top; text-align: left; color:#cccccc; font-weight: bold; font-size: 20px; padding:0; margin:0;" type="texte" name="bar" id="bar">Le Repaire</h2></label>

<h1 style="text-align:center; font-weight: bold; color:#ffffff; font-family: Raleway; font-size: 30px; font-style: normal; font-variant: normal; font-weight: 700; line-height: 42px;">Nombre de personnes avec toi</h1>

<label for="nombre">
<p data-children-count="1"><select name="nombre" id="nombre" size="1" style="
position:absolute; 
top:50%; left:50%; 
transform: translate(-50%, -50%); 
-webkit-transform: translate(-50%, -50%);
font-size: 4vh; 
width: 15vw; 
height: 8vh; 
margin: auto;
border: none;
border-radius: 4px;">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
</select></p>
</label>

<div>
<input type="submit" value="Valider" style="font-family:Raleway;
        padding: 20px 30px;
        margin-top: 3vh;
	color: #f8f8f8;
	font-size: 28px;
	cursor: pointer;
	background-color: #111022;
	border-radius: 10%;
	-moz-border-radius: 10%;
	-webkit-border-radius: 10%;
	-o-border-radius: 10%;
    position:absolute; 
    top: 75%; left: 50%; 
transform: translate(-50%, -25%); 
-webkit-transform: translate(-50%, -25%); 
    url:"aprèsvalide.html" "></input></div>

</article>
</div>
</body>
</form>
