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
                              <a class="marca-navegacion" href="index.php">
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
                                    <a class="btn_menu_nav h-100 alineado_centro activado" href="bienes-raices.php">
                                        <div class='btn_header'>BIENES RAÍCES
                                        </div>
                                    </a> 
                                    <a class="btn_menu_nav h-100 alineado_centro" href="contacto.php">
                                        <div class='btn_header'>CONTACTO 
                                        </div>
                                    </a>
                                    
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <nav class="row no-gutters justify-content-between mobil">
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
            
            
            <div class="row" id='galeria'>
                <div class="col-12">
                    <div class="ancho_800">
                        <div class="row no-gutters p-t-150 p-b-50">
                            <div class="col-12">
                                <div class="row no-gutters justify-content-center">
                                    <div class="col-sm-11 col-lg-12" id="slider">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- main slider carousel items -->
                                            <div class="carousel-inner thumbs_magicos p-20">
                                                <div class="active item carousel-item" data-slide-number="0">
                                                    <img src="img/galeria_1.jpg" class="img-fluid">
                                                </div>
                                                <div class="item carousel-item" data-slide-number="1">
                                                    <img src="img/galeria_2.jpg" class="img-fluid">
                                                </div>
                                                <div class="item carousel-item" data-slide-number="2">
                                                    <img src="img/galeria_3.jpg" class="img-fluid">
                                                </div>
                                                <div class="item carousel-item" data-slide-number="3">
                                                    <img src="img/galeria_4.jpg" class="img-fluid">
                                                </div>

                                                <a class="carousel-control left pt-3" href="#myCarousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
                                                <a class="carousel-control right pt-3" href="#myCarousel" data-slide="next"><i class="fa fa-chevron-right"></i></a>

                                            </div>
                                            <!-- main slider carousel nav controls -->


                                            <ul class="row justify-content-center alineado_centro m-t-20 m-b-10 thumbs_magicos">
                                                <li class="col-4 col-sm-3 col-md-2 m-t-10 active">
                                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                                        <img src="img/galeria_1.jpg" class="w-100">
                                                    </a>
                                                </li>
                                                <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                                        <img src="img/galeria_2.jpg" class="w-100">
                                                    </a>
                                                </li>
                                                <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                                    <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                                        <img src="img/galeria_3.jpg" class="w-100">
                                                    </a>
                                                </li>
                                                <li class="col-4 col-sm-3 col-md-2 m-t-10">
                                                    <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                                        <img src="img/galeria_4.jpg" class="w-100">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 proyectos_coyco">
                                <h2>CASA HABITACIÓN</h2>
                                <p>
                                    Dirección : en Zona residencial.......
                                </p>
                                <p>
                                    - 2 pisos.
                                </p>
                                <p>
                                    - 3 recámaras con vestidor
                                </p>
                                <p>
                                    - 5 baños, 3 completos.
                                </p>
                                <p>
                                    -  Recepción
                                </p>
                                <p>
                                    - Jardín trasero y frontal.
                                </p>
                                <p>
                                    - Estacionamiento 5 autos.
                                </p>
                                <p>
                                    - Cuarto para servicio.
                                </p>
                                <p>
                                    - Cuarto de servicio.
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id='map'></div>
                    
                </div>
            </div>
        </div>
            <script src='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.js'></script>
            <link href='https://api.mapbox.com/mapbox-gl-js/v0.47.0/mapbox-gl.css' rel='stylesheet' />


            <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZW1tYW5lZ3IiLCJhIjoiY2prYWw0Z2k1MG5hZTNsdDQ0bjFjZ254OCJ9.EAq9jdw1ynrDcviFJEqLcg';
            var map = new mapboxgl.Map({
                container: 'map', // container id
                style: 'mapbox://styles/mapbox/streets-v9',
                center: [-101.683081, 21.122797], // starting position
                zoom: 12 // starting zoom
            });

            // Add zoom and rotation controls to the map.
            map.addControl(new mapboxgl.NavigationControl());
            </script>
        <script src='js/jquery.js'></script>
        <script src='js/bootstrap.js'></script>
        <script src='js/general.js'></script>
    </body>
</html>



