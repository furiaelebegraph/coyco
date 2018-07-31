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
                            <a class="btn_menu_nav h-100 alineado_centro activado" href="#inicio">
                                <div class='btn_header'>QUIÉNES SOMOS 
                                </div>
                            </a>
                            <a class="btn_menu_nav h-100  alineado_centro" href="#nuestros-valores">
                                <div class='btn_header'>NUESTROS VALORES
                                </div>
                            </a> 
                            <a class="btn_menu_nav h-100 alineado_centro" href="#proyectos">
                                <div class='btn_header'>PROYECTOS
                                </div>
                            </a> 
                            <a class="btn_menu_nav h-100 alineado_centro" href="#contacto">
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
                  <a class="ligaMenuMobil" href="#inicio">QUIÉNES SOMOS</a>
                  <a class="ligaMenuMobil" href="#nuestros-valores">NUESTROS VALORES</a>
                  <a class="ligaMenuMobil" href="#proyectos">PROYECTOS</a>
                  <a class="ligaMenuMobil" href="#contacto">CONTACTO</a>
                </div>
            </div>
        </div>
        
    </nav>



    <div id="carouselExampleSlidesOnly" class="carousel slide m-t-70" data-ride="carousel">
      <div class="carousel-inner" id='inicio'> 
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/coycoce_fondo_1.jpg" alt="Coycoce - Contrucción Obras">
          <div class="carousel-caption d-none d-md-block">
            <div class="ancho_800">
                <img class="imagen_construyendo_embergadura" src="img/construyendo_obras.svg" alt="Construyendo obras de gran enbergadura">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/coycoce_fondo_2.jpg" alt="Coycoce - Vanguardia en Construcción" >
          <div class="carousel-caption d-none d-md-block">
            <div class="ancho_800">
                <img class="imagen_construyendo_embergadura" src="img/construyendo_obras.svg" alt="Construyendo obras de gran enbergadura">
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="img/coycoce_fondo_3.jpg" alt="Coycoce - Expertos Bienes Raices" >
          <div class="carousel-caption d-none d-md-block">
            <div class="ancho_800">
                <img class="imagen_construyendo_embergadura" src="img/construyendo_obras.svg" alt="Construyendo obras de gran enbergadura">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row p-t-30 p-b-50">
        <div class="col-12">
            <div class="alineado_centro w-100">
                <img class="imagen_bola_magica" src="img/bola.svg" alt="coycoce">
            </div>
            <div class="p-t-30 alineado_centro w-100">
                <img class="ancho_800" src="img/quienes_somos.svg" alt="quienes somos">
            </div>
            <div class="alineado_centro p-t-30">
                <h1 class="especialistasInge">Especialistas en Ingenería Cívil y Arquitectura</h1>
            </div>
            <div class="ancho_800 m-t-30">
                <div class="row no-gutters justify-content-center align-items-center">
                    <div class="col-7">
                        <img class="w-100" src="img/coycoce_quienes_somos.jpg" alt="quienes somos coycoce">
                    </div>
                    <div class="col-5 align-self-center">
                        <p class="texto_book p-l-30">
                            Somos una Empresa que busca ser líder a
                            nivel nacional de obras de gran envergadura,
                            mediante años de dedicación por parte de los
                            socios en sus respectivos giros y ahora
                            integrándonos como equipo comprometido
                            en satisfacer las expectativas de nuestros
                            clientes, construyendo obras de gran
                            inversión en diversas partes de la República
                            Mexicana. 
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row fondo_azul_1 p-t-80 p-b-50">
        <div class="col-12">
            <div class="ancho_800">
                <div class="row" id=''>
                    <div class="col-12">
                        <div class="alineado_centro">
                            <h1>APS ASSEMBLING & PACKAGING SOLUTIONS</h1>
                        </div>
                    </div>
                    <div class="col-12 m-t-20">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <img class='w-100' src='img/aps_empaque_1.jpg' alt="">
                            </div>
                            <div class="col-12 col-md-6 texto_blanco m-t-30-m alineado_justificado">
                                <p>APS es una empresa mexicana fundada el 25 de Agosto de 2005. Nuestro propósito es ofrecerle los mejores servicios en maquila de promociones armadas, presentaciones  especiales (tiendas club), etiquetado de productos y manejo de líneas de empacado para cualquier variedad de producto; con la finalidad de satisfacer las necesidades de todo tipo de industria o empresa. Que a su vez dichas maquilas sirvan para el crecimiento de nuestros clientes,  proveedores y de nosotros mismos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 m-t-40">
                        <div class="row">
                            <div class="col-12 col-md-6 texto_blanco alineado_justificado">
                                <h4>Política de calidad</h4>
                                <p>
                                    En APS hemos visto la necesidad de crear un servicio que ayude a nuestros clientes a deslindarse de la operación de ensamble en su proceso, de tal forma que puedan enfocar sus esfuerzos de la generación de utilidades de negocio.
                                </p>
                                <p>
                                    Nuestra política de calidad es proveer de empaque y embalaje mediante procesos de manufactura y administrativos cumpliendo con los requisitos del cliente, aplicando sistemas de mejora continua.
                                </p>
                            </div>
                            <div class="col-12 col-md-6">
                                <img class='w-100' src="img/aps_empaque_2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row fondo_gris p-t-80 p-b-50"  id="servicio">
        <div class="col-12">
            <div class="ancho_800">
                <div class="row justify-content-center">
                    <div class="col-12 alineado_centro m-b-20">
                        <h2 class='texto_azul_1' >SERVICIOS</h2>
                    </div>
                    <div class="col-11 col-md-4">
                        <div class="row">
                            <div class="col-12 alineado_centro">
                                <img class='imagen_servicio' src="img/empacado.png" alt="">
                            </div>
                            <div class="col-12 alineado_centro p-t-10 p-b-10">
                                <h4 class='texto_azul_1'>Empacado y armado de promociones </h4>
                            </div>
                            <div class="col-12">
                                <div class="div">
                                    <ul class="alineado_justificado alineado_justificado">
                                        <li>Empacado y armado de promociones en Poliolefina, Polietileno, PET y PVC</li>
                                        <li class="m-t-10">Blister, Corrugados, Estuches de cartón</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4">
                        <div class="row align-items-center">
                            <div class="col-12 alineado_centro">
                                <img class='imagen_servicio' src="img/etiquetado.png" alt="">
                            </div>
                            <div class="col-12 alineado_centro p-t-10 p-b-10">
                                <h4 class='texto_azul_1'>Etiquetado</h4>
                            </div>
                            <div class="col-12">
                                <div class="div">
                                    <ul class="alineado_justificado">
                                        <li>Etiquetado de promociones, productos para cumplimineto de la NOM</li>
                                        <li class="m-t-10">Impresión de códigos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-11 col-md-4">
                        <div class="row">
                            <div class="col-12 alineado_centro">
                                <img class='imagen_servicio' src="img/out.png" alt="">
                            </div>
                            <div class="col-12 alineado_centro p-t-10 p-b-10">
                                <h4 class='texto_azul_1'>Outsourcing manejo de líneas de empacado</h4>
                            </div>
                            <div class="col-12">
                                <div class="div">
                                    <ul class="alineado_justificado">
                                        <li>Contratación de Personal, Manejo de Nóminas, Capacitaciones
</li>
                                        <li class="m-t-10">Manejo de líneas de empacado</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row fondo_azul_2" id='galeria'>
        <div class="col-12  fondo_marca_2">
            <div class="row no-gutters p-t-80 p-b-50">
                <div class="col-12 alineado_centro m-b-10">
                    <h2 class='texto_blanco galeria_separacion'>GALERIA</h2>
                </div>
                <div class="col-12">
                 <div class="row no-gutters justify-content-center">
                        <div class="col-sm-11 col-lg-8" id="slider">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- main slider carousel items -->
                                    <div class="carousel-inner">
                                        <div class="active item carousel-item" data-slide-number="0">
                                            <img src="img/aps_galeria_1.jpg" class="img-fluid">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="1">
                                            <img src="img/aps_galeria_2.jpg" class="img-fluid">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="2">
                                            <img src="img/aps_galeria_3.jpg" class="img-fluid">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="3">
                                            <img src="img/aps_galeria_4.jpg" class="img-fluid">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="4">
                                            <img src="img/aps_galeria_5.jpg" class="img-fluid">
                                        </div>
                                        <div class="item carousel-item" data-slide-number="5">
                                            <img src="img/aps_galeria_6.jpg" class="img-fluid">
                                        </div>

                                        <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                        <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

                                    </div>
                                    <!-- main slider carousel nav controls -->


                                    <ul class="row justify-content-center alineado_centro m-b-10">
                                        <li class="col-4 col-sm-3 col-md-2 m-t-10 active">
                                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                                <img src="img/aps_galeria_1.jpg" class="w-100">
                                            </a>
                                        </li>
                                        <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                                <img src="img/aps_galeria_2.jpg" class="w-100">
                                            </a>
                                        </li>
                                        <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                            <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                                <img src="img/aps_galeria_3.jpg" class="w-100">
                                            </a>
                                        </li>
                                        <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                            <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                                <img src="img/aps_galeria_4.jpg" class="w-100">
                                            </a>
                                        </li>
                                        <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                            <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                                <img src="img/aps_galeria_5.jpg" class="w-100">
                                            </a>
                                        </li>
                                        <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                            <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                                <img src="img/aps_galeria_6.jpg" class="w-100">
                                            </a>
                                        </li>
                                    </ul>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="row fondo_azul_1" id='contacto'>
        <div class="col-12 fondo_marca_1">
            <div class="ancho_800">
                <div class="row  p-t-80 p-b-80">
                    <div class="col-11 col-md-5  p-t-30 p-b-30">
                        <h3 class='texto_azul_2'>CONTÁCTANOS</h3>
                        <p class='texto_blanco'>Etiquetado de promociones, productos para cumplimineto de la NOM. Impresión de códigos.</p>
                        <a class="link_tele" href="tel:018004390288">01 800 439 0288</a>
                        <p class='texto_blanco'>contacto@aps.com</p>
                    </div>
                    <div class="col-11 col-md-7  p-t-30 p-b-30">
                        <div class="row">
                            <div class="col-11 col-md-6 texto_blanco">
                                <div class="row">
                                    <div class="col-12 p-b-20">
                                        <h4>Irapuato</h4> 
                                    </div>
                                    <div class="col-12 p-b-20">
                                        <h4>Léon</h4> 
                                    </div>
                                    <div class="col-12 p-b-20">
                                        <h4>Lagos de Moreno </h4> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-11 col-md-6 texto_blanco">
                                <div class="row">
                                    <div class="col-12 p-b-20">
                                        <h4>Nuevo León</h4> 
                                    </div>
                                    <div class="col-12 p-b-20">
                                        <h4>Toluca</h4> 
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php if (!empty($msg)) {
                        echo "<h2>$msg</h2>";
                                            } ?>
                    <div class="col-12 col-centered">
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
    <div class="footer p-t-10 p-b-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-5">
                  <!-- <div class="row">
                      <div class="col-12 margen_10">
                          <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/pin_direccion.png" alt="">
                          Dirección, Dirección, Dirección, Dirección, Direc.

                      </div>
                      <div class="col-12 margen_10">
                          <img src="http://elebeweb.com/2016/emprendedor/layout-ocho/images/reloj.png" alt="">
                          Horario, Horario,Horario,Horario,Horario,Horario,Hr.

                      </div>
                  </div> -->
                </div>
            </div>
        </div>
        <div class='alineado_cent'>
            All rights reserved © 2018 Elebegraph.com
        </div>
    </div>
    

        <script src='js/jquery.js'></script>
        <script src='js/bootstrap.js'></script>
        <script src='js/general.js'></script>
    </body>
</html>
