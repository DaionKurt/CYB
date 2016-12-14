<?php 
function error_exit($message)
{
    header('Location: contacto.php');
	die();
}
if(isset($_POST['asunto'])&&isset($_POST['mensaje'])&&isset($_POST['email'])):
	$email_to = "contacto@chilesandbeer.com"; 
    	$email_subject ='Contacto: '.$_POST['asunto']; //cambiar
    	$email_message=$_POST['mensaje'];
    	$email_from = $_POST['email']; //cambiar
    	$headers = 'From: '.$email_from."\r\n".
    	'Reply-To: '.$email_from."\r\n";
 
    	if(!filter_var($email_from, FILTER_VALIDATE_EMAIL)):
    		error_exit("El correo provisto no es válido");
    	endif;
    	if(empty($email_message)):
    		error_exit("Por favor, escriba un mensaje");
    	endif;
    	str_replace("\n.", "\n..", $email_message);
    	
    	mail($email_to, $email_subject, $email_message,$headers); 
        header('Location: contacto.php');
        exit();
else:
	error_exit("Formulario no encontrado o incompleto");
endif;
header('Location: contacto.php');
exit();
?>