<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
        require_once "lib/PHPMailer/PHPMailerAutoload.php";
        if(isset($_POST['submit'])){
            $message=
            'Nombre: '.$_POST['nombre'].'<br />
            Email:  '.$_POST['correo'].'<br />
            Mensaje:   '.$_POST['contenido'].'
            ';
              
            // Instantiate Class  
            $mail = new PHPMailer(true); 
            try {
            // Set up SMTP  
            $mail->isSMTP();                // Sets up a SMTP connection  
            $mail->SMTPAuth = true;         // Connection with the SMTP does require authorization    
            $mail->SMTPSecure = "ssl";      // Connect using a TLS connection  
            $mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
            $mail->Port = 465;  //Gmail SMTP port
            $mail->Encoding = '7bit';
            
            // Authentication  
            $mail->Username   = "emmanegr@gmail.com"; // Your full Gmail address
            $mail->Password   = "PinoPitata"; // Your Gmail password
              
            // Compose
            $mail->SetFrom($_POST['correo'], $_POST['nombre']);
            $mail->AddReplyTo($_POST['correo'], $_POST['nombre']);
            $mail->Subject = "Nuevo correo";      // Subject (which isn't required)  
            $mail->MsgHTML($message);
         
            // Send To  
            $mail->AddAddress("emmanegr@gmail.com", "Furis"); // Where to send it - Recipient
            $result = $mail->send();        // Send!  
            $msg = $result ? '<div class="alert alert-success" role="alert"><strong>Mensaje Enviado!</strong></div>' : '<div class="alert alert-danger" role="alert"><strong>No se pudo enviar el mensaje!</strong>.</div>';  
            unset($mail);
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }

        }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>COYCOCE</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/helpers.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body id='main'>
        <div class="wrap_navegador">
            
            <div class="row justify-content-center align-items-center escritorio">
                <div class="col-12 h-100">
                    <div class="navegador_escritorio justify-content-center align-items-center">
                            <div class="col-3 align-self-end p-b-10">
                              <a class="marca-navegacion" href="#">
                                <img src="img/coycoce_logo.svg" class="d-inline-block align-top" alt="">
                                
                              </a>
                            </div>
                            <div class="col-9 h-100">
                                <div class="d-flex justify-content-end align-items-center h-100">
                                    <a class="btn_menu_nav h-100 alineado_centro" href="index.php">
                                        <div class='btn_header'>QUIÉNES SOMOS 
                                        </div>
                                    </a>
                                    <a class="btn_menu_nav h-100  alineado_centro" href="nuestros-valores.php">
                                        <div class='btn_header'>NUESTROS VALORES
                                        </div>
                                    </a> 
                                    <a class="btn_menu_nav h-100 alineado_centro" href="proyectos.php">
                                        <div class='btn_header'>PROYECTOS
                                        </div>
                                    </a> 
                                    <a class="btn_menu_nav h-100 alineado_centro" href="bienes-raices.php">
                                        <div class='btn_header'>BIENES RAÍCES
                                        </div>
                                    </a> 
                                    <a class="btn_menu_nav h-100 alineado_centro activado" href="contacto.php">
                                        <div class='btn_header'>CONTACTO 
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <nav class="row no-gutters justify-content-between mobil">
        <!--         <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="navegador_escritorio">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-2">
                                    <div class="logo_empresa alinedo_centro">
                                        <img class='w-100' src="img/logo_aps.png" alt="">
                                    </div>
                                </div>
                                <div class="col-10 nav_escritorio escritorio padding_10">
                                    <div>Home</div>
                                    <div>Servicios</div>
                                    <div>Galería</div>
                                    <div>Contacto</div>
                                    <div>CINCO</div>
                                    <div>
                                        <a href="https://www.facebook.com">
                                            <img class='w-100' src="http://elebeweb.com/test/sexta/img/facebook.png" alt="">
                                        </a>
                                        <a href="https://www.twitter.com">
                                            <img class='w-100' src="http://elebeweb.com/test/sexta/img/twitter.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div> -->
                    <div class="col-12 wrap_navegador mobil">
                        <div class='navegador row no-gutters justify-content-between'>
                            <div class="col">
                                <span id='abrir' >&#9776;</span>
                                
                            </div>
                            <div class="col alineado_centro align-self-center">
                                <img src="img/coycoce_logo.svg"  class="d-inline-block align-top marca-navegacion" alt="">
                            </div>
                            <div class="col"></div>
                        </div>

                        <div id="mySidenav" class="sidenav">
                            <div class="logo_side">
                                <img src="img/coycoce_logo.svg" class="d-inline-block align-top w-100" alt="">
                            </div>
                          <a href="javascript:void(0)" class="closebtn cerrar">&times;</a>
                          <a class="ligaMenuMobil" href="index.php">QUIÉNES SOMOS</a>
                          <a class="ligaMenuMobil" href="nuestros-valores.php">NUESTROS VALORES</a>
                          <a class="ligaMenuMobil" href="proyectos.php">PROYECTOS</a>
                          <a class="ligaMenuMobil" href="bienes-raices.php">BIENES RAÍCES</a>
                          <a class="ligaMenuMobil" href="contacto.php">CONTACTO</a>
                        </div>
                    </div>
                </div>
                
            </nav>

            <div class="row" id='contacto'>
                <div class="col-12">
                    <div class="ancho_800">
                        <div class="row justify-content-center align-self-center no-gutters p-t-80 p-b-80">
                            <div class="col-12 alineado_centro">
                                <img class="celular_gigante" src="img/iphone.png" alt="contacto coycoce">
                            </div>
                            <div class="col-12 alineado_centro m-t-20">
                                <img class="w-100" src="img/contacto_barra.svg" alt="contacto coycoce">
                            </div>
                            <?php if (!empty($msg)) {
                                echo "<h2>$msg</h2>";
                            } ?>
                            <div class="col-12">
                                <form  name="form1" method='POST'>

                                    <div class="form-group">
                                        <input type="text" name='nombre' required class="form-control" id="exampleInputText" aria-describedby="nombreHelp" placeholder="Agregar nombre">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name='correo' required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agregar email">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" required name='contenido' id="exampleTextarea" rows="3" placeholder="Escriba su mensaje"></textarea>
                                    </div>
                                    <input  type="submit" value="Enviar" class="btn_submit">
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src='js/jquery.js'></script>
        <script src='js/bootstrap.js'></script>
        <script src='js/general.js'></script>
    </body>
</html>
