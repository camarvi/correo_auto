<?php


require_once('class.phpmailer.php');
require_once('class.smtp.php');

//include("class.phpmailer.php");
//include("class.smtp.php"); // note, this is optional - gets called from main class if not already loaded


          
            $mail= new PHPMailer();
            
            $mail->IsSMTP(); // telling the class to use SMTP
           //$mail->Host       = "mail.yourdomain.com"; // SMTP server
            $mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
            $mail->Host       = "mail.juntadeandalucia.es";      // sets GMAIL as the SMTP server
            $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
            $mail->Username   = "formacion.dalm.sspa";  // GMAIL username
            $mail->Password   = "XXXXX";            // GMAIL password

            $mail->CharSet="UTF-8";
            
           
            
            $body="ENVIO AUTOMATICO   SE HA REGISTRADO CORRECTAMENTE";
                
               
            $mail->SetFrom('formacion.dalm.sspa@juntadeandalucia.es', 'Formacion DA');

            //$mail->AddReplyTo("name@yourdomain.com","First Last");

            $mail->Subject    = "Formacion DA";

           //$mail->AltBody    = "Hola Rafa este es un mensaje de prueba desde php"; // optional, comment out and test

            $mail->MsgHTML($body);
            
       
            $address = $_POST["email"] ;
         
               
            $mail->AddAddress($address, $_POST["nombre"]);
            
            $mail->AddBCC($direccioncentro1);
            $mail->AddBCC($direccioncentro2);
            $mail->AddBCC($direccioncentro3); 
               
            $mail->Send();
     
 


?>      

