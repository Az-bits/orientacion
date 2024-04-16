<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <!-- Meta Tags For Seo + Page Optimization -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Hugo Vladimir Ajno Huchani">
    <!-- Insert Favicon Here -->
    <link href="<?php echo base_url(); ?>assets_/libs/img/UPEA.png" rel="icon">
    <!-- Page Title(Name)-->
    <title>Test</title>
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/bootstrap.min.css">
    <!-- Font-Awesome CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/all.min.css">
    <!-- Animate CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/animate.css">
    <!--  Fancy Box CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/jquery.fancybox.min.css">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets_/libs/css/style.css">

    <style>
        img {
            -webkit-transform: scale(1, 1);
            -webkit-transition-timing-function: ease-out;
            -webkit-transition-duration: 250ms;
            -moz-transform: scale(1, 1);
            -moz-transition-timing-function: ease-out;
            -moz-transition-duration: 250ms;
        }

        img:hover {
            -webkit-transform: scale(1.12, 1.12);
            -webkit-transition-timing-function: ease-out;
            -webkit-transition-duration: 250ms;
            -moz-transform: scale(1.12, 1.12);
            -moz-transition-timing-function: ease-out;
            -moz-transition-duration: 250ms;



        }
    </style>
</head>

<body>
    <div class="page_content_parent_demo">
        <div class="body-demo">
            <!--PreLoader-->
            <div class="loader">
                <div class="loader-inner">
                    <div class="cssload-loader"></div>
                </div>
            </div>
            <!--PreLoader Ends-->
            <!--Banner-->
            <div class="demo-banner parallaxie">
                <div class="container">
                    <div class="section-overlay overlay-dark"></div>
                    <div class="row py-4">
                        <div class="col-6">
                            <img alt="logo" src="<?php echo base_url(); ?>assets_/logos/upea1.png" class="demo-brand wow fadeInLeft" data-wow-delay="500ms">
                        </div>
                        <div class="col-6 text-right">
                            <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="2000ms" href="https://www.upea.bo/" target="_blank">UPEA</a>&nbsp;
                            <a class="button raleway btn-transparent wow fadeInRight" data-wow-delay="2000ms" href="<?= base_url(Hasher::make(71)) ?>">INICIAR SESIÓN</a>
                        </div>
                    </div>
                    <!--Contenido-->
                    <?php $this->load->view($contenido_p)?>
                </div>
            </div>
            <!--video -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: black; color:white; text-align: center">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-sm">
                            <img src="<?php echo base_url(); ?>assets_/img/imagen_1.jpg" width="320" height="400">
                        </div> -->
                        <div class="col-sm">
                            <div>
                                <h4><br>Tutorial de esta Página</h4>
                                <iframe style="border-radius: 1em; border: 2px solid cyan" width="335" height="200" src="https://www.youtube.com/embed/by5cRoUaLtk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div>
                                <ul>
                                    <h3> Contactanos: </h3><br>
                                    <a href=<?php echo $obj[1]->acceso; ?> target="_blank"><abbr title=<?php echo $obj[1]->descripcion; ?>><img src="<?php echo base_url(); ?>assets_/logos/whatsapp.png" width="35" height="35"></abbr></a>&nbsp;
                                    <a href=<?php echo $obj[2]->acceso; ?> target="_blank"><abbr title=<?php echo $obj[2]->descripcion; ?>><img src="<?php echo base_url(); ?>assets_/logos/whatsapp.png" width="35" height="35"></abbr></a>&nbsp;
                                    <a href=<?php echo $obj[3]->acceso; ?> target="_blank"><abbr title=<?php echo $obj[3]->descripcion; ?>><img src="<?php echo base_url(); ?>assets_/logos/whatsapp.png" width="35" height="35"></abbr></a>&nbsp;

                                    <a href=<?php echo $obj[4]->acceso; ?> target="_blank"><img src="<?php echo base_url(); ?>assets_/logos/facebook.png" width="35" height="35"></a>&nbsp;


                                    <a href=<?php echo $obj[0]->acceso; ?> target="_blank"><img src="<?php echo base_url(); ?>assets_/logos/zoom.png" width="35" height="35"></a>&nbsp;
                                    <a href="https://zoom.us/meeting/tJMvduuqqDIqH9CvKfkPtYCtsteHDHSwGmKU/ics?icsToken=98tyKuCvrDooGNKcsByDRowEAIj4a-rwplhfgvp-ijTjCBBHWyDiJfZHGpZXI8_3" target="_blank"><img src="<?php echo base_url(); ?>assets_/logos/calendario.png" width="35" height="35"></a>&nbsp;
                                    <a href="https://goo.gl/maps/an8jJi8ueJcXUpSY7" target="_blank"><img src="<?php echo base_url(); ?>assets_/logos/mapa.png" width="35" height="35"></a>
                                </ul><br>
                            </div>
                        </div>
                        <!-- <div class="col-sm">
                            <img src="<?php echo base_url(); ?>assets_/img/imagen_2.jpg" width="320" height="400">
                        </div> -->
                    </div>
                </div>

            </div>
            <!--Footer -->
            <div class="footer all_big_padding">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-xs-12">
                            <h3>Universidad Pública de El Alto.<br><a href="https://goo.gl/maps/an8jJi8ueJcXUpSY7" target="_blank">Av. Sucre A s/n Zona Villa Esperanza</a><br>Area: Ciencias de Educación<br><a href="https://web.cceupea.com/" target="_blank">Carrera: Ciencias de Educación</a></h3>
                        </div>

                        <div style="text-align: center" class="col-sm-6 col-xs-12" id="copyright">Copyright&copy; 2021 - V 2.0 :. Hugo V. Ajno H.<br>Todos los derechos reservados</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jquery version 3.4.1-->
    <script src="<?php echo base_url(); ?>assets_/libs/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets_/libs/js/bootstrap.min.js"></script>
    <!-- Wow JavaScript -->
    <script src="<?php echo base_url(); ?>assets_/libs/js/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets_/libs/js/parallaxie.js"></script>
    <script src="<?php echo base_url(); ?>assets_/libs/js/jquery.fancybox.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="<?php echo base_url(); ?>assets_/libs/js/script.js">

    </script>

</body>

</html>