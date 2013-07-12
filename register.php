<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HAWK BOTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style>
    
    backgrond{
	
     background: -moz-radial-gradient(center, ellipse cover,  rgba(0,110,46,0.73) 0%, rgba(0,110,46,1) 100%); /* FF3.6+ */
     background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(0,110,46,0.73)), color-stop(100%,rgba(0,110,46,1))); /* Chrome,Safari4+ */
     background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,110,46,0.73) 0%,rgba(0,110,46,1) 100%); /* Chrome10+,Safari5.1+ */
     background: -o-radial-gradient(center, ellipse cover,  rgba(0,110,46,0.73) 0%,rgba(0,110,46,1) 100%); /* Opera 12+ */
     background: -ms-radial-gradient(center, ellipse cover,  rgba(0,110,46,0.73) 0%,rgba(0,110,46,1) 100%); /* IE10+ */
     background: radial-gradient(ellipse at center,  rgba(0,110,46,0.73) 0%,rgba(0,110,46,1) 100%); /* W3C */
     filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ba006e2e', endColorstr='#006e2e',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */
  
   }
    </style>
    

  <link rel="stylesheet" type="text/css" href="assets/css/escenario.css">
  <link rel="stylesheet" href="style.css">

  </head>

  <body class="backgrond">
 

  </body>
</html>

<!--<?php

/*
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
 
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
 
    return $_SERVER['REMOTE_ADDR'];
}



include("conex.php");
$link=Conectarse(); 

$name =$_POST[name];
$email=$_POST[email];
$ip= getRealIP();
*/
/*	
$html = file_get_contents("http://ipinfodb.com/ip_locator.php?ip=".$ip);
	preg_match("/<li>Country : (.*?) <\/li>/",$html,$data);
	$pais['pais'] = $Pais1[1];
	preg_match("/<li>State\/Province : (.*?)<\/li>/",$html,$data);
	$estado['state'] = $Estado1[1];
	preg_match("/<li>City : (.*?)<\/li>/",$html,$data);
	$ciudad['city'] = $Ciudad1[1];	
	
$Consulta= "Insert into RegistroPagina (Correo,IP,Pais,Ciudad,Estado) Values ('$email','$ip','$pais','$ciudad','$estado')";
$Resultado= mysql_query ($Consulta, $link);
$my_error = mysql_error($link);

if(!empty($my_error)) { 

echo "Ha habido un error al insertar los valores. $my_error"; 

} else{
echo "los datos se introdujeron correctamente";
}

mysql_close($link);
*/

function iploc($ip) {
	$html = file_get_contents("http://ipinfodb.com/ip_locator.php?ip=".$ip);
	preg_match("/<li>Country : (.*?) <img/",$html,$data);
	$d['pais'] = $data[1];
	preg_match("/<li>State\/Province : (.*?)<\/li>/",$html,$data);
	$d['state'] = $data[1];
	preg_match("/<li>City : (.*?)<\/li>/",$html,$data);
	$d['city'] = $data[1];
	return ($d);
}
function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))
        return $_SERVER['HTTP_CLIENT_IP'];
 
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
 
    return $_SERVER['REMOTE_ADDR'];
}

include("conex.php");
$link=Conectarse(); 

$name =$_POST['name'];
$email=$_POST['email'];
$ip= getRealIP();
$iploc = iploc($ip);



/*echo $iploc["city"].", ".$iploc["state"].", ".$iploc["pais"];
*/


//$Consulta = "call SP_InsertarRegistro ('$email','$ip','{$iploc['city']}','{$iploc['state']}')','{$iploc['pais']}'";
//$Consulta= "Insert into RegistroPagina (Correo,IP,Pais,Ciudad,Estado) Values ('$email','$ip','{$iploc['pais']}','{$iploc['city']}','{$iploc['state']}')";
$Resultado= mysql_query ("CALL SP_InsertarRegistro('$email','$ip','{$iploc['city']}','{$iploc['state']}','{$iploc['pais']}');", $link);

$my_error = mysql_error($link);

if(!empty($my_error)) { 

echo "Ha habido un error al insertar los valores. $my_error"; 

} else{
echo "los datos se introdujeron correctamente";
}

mysql_close($link);


?>-->

