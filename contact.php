<?php

$your_email = "jgmwebs@gmail.com,info@bordaabogados.com,ebv@bordaabogados.com";

$headers= "From: ".$_POST['fname']." <".$_POST['email'].">\r\n";
$headers.='Content-type: text/html; charset=utf-8';
mail($your_email, $_POST['subject'],  "
<html>
<head>
 <title>Contact Message</title>
</head>
<body>
	Contact Message<br><br>
	Nombre : ".$_POST['fname']."<br>
	Email : ".$_POST['email']."<br>
	Asunto : ".$_POST['subject']."<br>
	Mensaje : ".$_POST['message']."<br>
</body>
</html>" , $headers);
header("Location: form_success.html");

?>
