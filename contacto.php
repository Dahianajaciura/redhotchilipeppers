<?php
if(isset($_POST['email'])) {
   // EDIT THE 2 LINES BELOW AS REQUIRED
   $email_to = "djaciura@gmail.com";
   $email_subject = "Asunto del correo";

    function clean_string($string) {
   $bad = array("content-type","bcc:","to:","cc:","href");
   return str_replace($bad,"",$string);
 }

   $first_name = $_POST['nombre']; // required
   $last_name = $_POST['apellido']; // required
   $email_from = $_POST['email']; // required
   $talle_from = $_POST['talles']; // required
   

   $email_message = "Contacto desde la web.\n\n";
   $email_message .= "Nombre: ".clean_string($first_name)."\n";
   $email_message .= "Apellido: ".clean_string($last_name)."\n";
   $email_message .= "Email: ".clean_string($email_from)."\n";
   $email_message .= "talle: ".clean_string($talle_from)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

?>
<!-- ACA PUEDE IR CODIGO HTML, O SEA ARMAR UNA PAGINA DE GRACIAS -->
<!DOCTYPE html>
<html>
<head>
 <title>Gracias por contactarte</title>
</head>
<body>
 <h1>Gracias por enviar el mensaje.</h1>
</body>
</html>
<?php
}
?>