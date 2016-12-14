<?php 
function error_exit($message)
{
	echo json_encode(array("success"=>false,"error_message"=>$message)); 
	die();
}
if(isset($_POST['nombre'])&&isset($_POST['email'])):
	    $email_to = "franquicias@chilesandbeer.com"; 
    	$email_subject ='Franquicia';
    	$email_message=$_POST['nombre'].":".$_POST['email'];
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
    	echo json_encode(array("success"=>true,"error_message"=>null)); 
else:
	error_exit("Formulario no encontrado o incompleto");
endif;
header('Location: franquicias.php')
?>