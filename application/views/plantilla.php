<?php if ($this->session->userdata('is_logued_in')) {
  $user_id = $this->session->userdata('user_id');
  $obj = $this->db->query("SELECT first_name,last_name,imagen FROM users WHERE id='$user_id' ")->row();
?>
  <!DOCTYPE html>
  <html lang="es">

  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ORIENTACIÓN VOCACIONAL</title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/admin/assets/images/favicon.ico" type="image/x-icon">
    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/css/sidebar-menu.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/css/app-style.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/jquery-multi-select/multi-select.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/themes/alertify.core.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/themes/alertify.default.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/alert/style_fer.css" />
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/alert/lib/alertify.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/jquery.min.js"></script>

  </head>

  <body>
    <div id="wrapper" >
      <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
          <a href="<?php echo base_url(Hasher::make(1)); ?>">
            <img src="<?php echo base_url(); ?>assets/assets_login/demo/img/cienciaseducacion.png" class="logo-icon" alt="logo icon">
            <h6  style="color: white;" > ADMIN TEST VOCACIONAL</h6>
          </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
          <li class="dropdown-item user-details">
            <a href="javaScript:void();">
              <div class="media">
                <div class="avatar" >
                  <?php if ($obj->imagen) { ?>
                    <img src="<?php echo base_url(); ?>assets/img_perfil/<?php echo $obj->imagen; ?>" alt="" class="align-self-start mr-3">
                  <?php } else { ?>
                    <img src="<?php echo base_url(); ?>assets/alert/no-image.png" alt="" class="align-self-start mr-3">
                  <?php } ?>
                </div>
                <div class="media-body">
                  <h6 class="mt-2 user-title"><?php echo $obj->first_name; ?></h6>
                  <p class="user-subtitle"><?php echo $obj->last_name; ?></p>
                </div>
              </div>
            </a>
          </li>
          <li   class="sidebar-header">MENU SISTEMA</li>
          <li class="<?php if (($menu_a == '1'))  echo "active"; ?>">
            <a href="<?php echo base_url(Hasher::make(1)); ?>" class="waves-effect">
              <i class="icon-home"></i> <span>INICIO</span>
            </a>
          </li>
          <?php if ((!empty($menu['admin_usuarios'])) || (!empty($menu['privilegios'])) ) { ?>
            <li class="<?php if (($menu_a == '2') || ($menu_a == '3')  || ($menu_a == '4'))  echo "active"; ?>"><a href="javascript:;" class="waves-effect">
                <i class="fa fa-user"></i> <span>MODULO USUARIO</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="sidebar-submenu">
                <?php if (!empty($menu['admin_usuarios'])) if ($menu['admin_usuarios'] == 'admin_usuarios') { ?>
                  <li><a href="<?php echo base_url(Hasher::make(11)); ?>"><i class="fa fa-ellipsis-h"></i> ADMIN USUARIOS</a></li>
                <?php } ?>
                 <?php if (!empty($menu['privilegios']))  if ($menu['privilegios'] == 'privilegios') { ?>
                  <li><a href="<?php echo base_url(Hasher::make(12)); ?>"><i class="fa fa-ellipsis-h"></i> PRIVILEGIOS</a></li>
                <?php  } ?> 

              </ul>
            </li>
          <?php } ?>
          <?php if ((!empty($menu['admin_blog'])) || (!empty($menu['slider'])) || (!empty($menu['visitas']))) { ?>
            <li class="<?php if (($menu_a == '10'))  echo "active"; ?>">
              <a href="javaScript:void();" class="waves-effect">
                <i class="icon-briefcase"></i>
                <span>ADMINISTRACION</span> <i class="fa fa-angle-left pull-right"></i>
              </a>

              <!-- Datos $menu -->
              <!-- <script>console.log(<?php echo json_encode($menu) ?>)</script> -->

              <ul class="sidebar-submenu">
                <?php if (!empty($menu['convocatoriasComunicados'])) if ($menu['convocatoriasComunicados'] == 'convocatoriasComunicados') { ?>
                  <li><a href="<?php echo base_url(Hasher::make(31)); ?>"><i class="fa fa-ellipsis-h"></i> INSCRITOS</a></li>
                <?php } ?>
                <?php if (!empty($menu['convocatoriasComunicados'])) if ($menu['convocatoriasComunicados'] == 'convocatoriasComunicados') { ?>
                  <li><a href="<?php echo base_url(Hasher::make(32)); ?>"><i class="fa fa-ellipsis-h"></i> REPORTES </a></li>
                <?php } ?>
                <?php if (!empty($menu['slider'])) if ($menu['slider'] == 'slider') { ?>
                  <li><a href="<?php echo base_url(Hasher::make(48)); ?>"><i class="fa fa-ellipsis-h"></i> INFORMACIÓN </a></li>
                <?php } ?> 
                <?php if (!empty($menu['slider'])) if ($menu['slider'] == 'slider') { ?>
                  <li><a href="<?php echo base_url(Hasher::make(30)); ?>"><i class="fa fa-ellipsis-h"></i> COLEGIOS </a></li>
                <?php } ?> 
                <!-- <?php if (!empty($menu['slider'])) if ($menu['slider'] == 'slider') { ?>
                  <li><a href="<?php echo base_url(Hasher::make(30)); ?>"><i class="fa fa-ellipsis-h"></i> AREAS </a></li>
                <?php } ?>  -->
              </ul>
            </li>
          <?php } ?>

          <?php if ((!empty($menu['admin_blog'])) || (!empty($menu['slider'])) || (!empty($menu['convocatoriasComunicados']))) { ?>
            <li class="<?php if (($menu_a == '10'))  echo "active"; ?>">
              <a href="javaScript:void();" class="waves-effect">
                <i class="icon-briefcase"></i>
                <span>TEST</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="sidebar-submenu">
                <?php if (!empty($menu['convocatoriasComunicados'])) if ($menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {  ?>
                  <li class="<?php if (($menu_a == '20'))  echo "active"; ?>">
                    <a href="<?php echo base_url(Hasher::make(910)); ?>" class="waves-effect">
                      <i class="fa fa-ellipsis-h"></i> <span>Test de Aptitudes Diferentes</span>
                    </a>
                  </li>
                <?php } ?>
                <?php if (!empty($menu['convocatoriasComunicados'])) if ($menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {  ?>
                  <li class="<?php if (($menu_a == '20'))  echo "active"; ?>">
                    <a href="<?php echo base_url(Hasher::make(51)); ?>" class="waves-effect">
                      <i class="icon-list"></i> <span>Orientacion Vocacional</span>
                    </a>
                  </li>
                <?php } ?> 


                <?php if (!empty($menu['convocatoriasComunicados'])) if ($menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {  ?>
                  <li class="<?php if (($menu_a == '20'))  echo "active"; ?>">
                    <a href="<?php echo base_url(Hasher::make(61)); ?>" class="waves-effect">
                      <i class="icon-list"></i> <span>Test de Inteligencia</span>
                    </a>
                  </li>
                <?php } ?>
                <?php if (!empty($menu['convocatoriasComunicados'])) if ($menu['convocatoriasComunicados'] == 'convocatoriasComunicados') {  ?>
                  <li class="<?php if (($menu_a == '20'))  echo "active"; ?>">
                    <a href="<?php echo base_url(Hasher::make(41)); ?>" class="waves-effect">
                      <i class="icon-list"></i> <span>Test de Interes Profesional</span>
                    </a>
                  </li>
                <?php } ?>



               
              </ul>
            </li>
          <?php } ?>




          <li class="sidebar-header">.....................................</li>
          <li><a href="<?php echo base_url() ?>salir" class="waves-effect">
              <i class="icon-lock"></i> <span>SALIR</span></a>
          </li>

        </ul>

      </div>
      <!--End sidebar-wrapper-->

      <!--Start topbar header-->
      <header class="topbar-nav">
        <nav class="navbar navbar-expand">
          <ul class="navbar-nav mr-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link toggle-menu" href="javascript:void();">
                <i class="icon-menu menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">

            </li>
          </ul>

          <ul class="navbar-nav align-items-center right-nav-link">

            <!-- <li class="nav-item dropdown-lg">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
                <i class="icon-bell"></i><span class="badge badge-primary badge-up">10</span></a>
              <div class="dropdown-menu dropdown-menu-right">
          
              </div>
            </li> -->

            <li class="nav-item">
              <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                <span class="user-profile">
                  <?php if ($obj->imagen) { ?>
                    <img src="<?php echo base_url(); ?>assets/img_perfil/<?php echo $obj->imagen; ?>" alt="" class="img-circle">
                  <?php } else { ?>
                    <img src="<?php echo base_url(); ?>assets/alert/no-image.png" alt="" class="img-circle">
                  <?php } ?>
                </span>
              </a>
              <ul class="dropdown-menu dropdown-menu-right">
                <li class="dropdown-item user-details">
                  <a href="javaScript:void();">
                    <div class="media">
                      <div class="avatar">
                        <?php if ($obj->imagen) { ?>
                          <img src="<?php echo base_url(); ?>assets/img_perfil/<?php echo $obj->imagen; ?>" alt="" class="align-self-start mr-3">
                        <?php } else { ?>
                          <img src="<?php echo base_url(); ?>assets/alert/no-image.png" alt="" class="align-self-start mr-3">
                        <?php } ?>
                      </div>
                      <div class="media-body">
                        <h6 class="mt-2 user-title"><?php echo $obj->first_name; ?></h6>
                        <p class="user-subtitle"><?php echo $obj->last_name; ?></p>
                      </div>
                    </div>
                  </a>
                </li>
                <li class="dropdown-divider"></li>

                <li class="dropdown-divider"></li>
                <li class="dropdown-item"><a href="<?php echo base_url(Hasher::make(81)) ?>" title=""><i class="icon-settings mr-2"></i> USUARIO </a></li>
                <li class="dropdown-divider"></li>
                <li class="dropdown-item"><a href="<?php echo base_url() ?>salir" title=""><i class="icon-power mr-2"></i> SALIR</a></li>
              </ul>
            </li>
          </ul>
        </nav>
      </header>
      <!--End topbar header-->

      <div class="clearfix"></div>

      <div class="content-wrapper">

        <?php $this->load->view($contenido); ?>

        <div class="modal" id="cargar_datos" data-easein="lightSpeedIn" data-easeout="lightSpeedOut" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div style="box-shadow: 10px 20px 100px #000;">
              <img style="width: 100%; box-shadow: 11px 15px 100px #000;" src="<?php echo base_url(); ?>assets/alert/A85.gif" alt="">
            </div>
          </div>
        </div>


        <!-- End container-fluid-->

      </div>
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->

      <!--Start footer-->
      <footer class="footer">
        <div class="container">
          <div class="text-center" style="font-family:Arial">
            Copyright © <?php echo date('Y') ?>
          </div>
        </div>
      </footer>
      <!--End footer-->

    </div>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/simplebar/js/simplebar.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/waves.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/sidebar-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/js/app-script.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/select2/js/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/jquery-multi-select/jquery.multi-select.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/jquery-multi-select/jquery.quicksearch.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/assets/plugins/switchery/js/switchery.min.js"></script>
    <script>
      var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
      $('.js-switch').each(function() {
        new Switchery($(this)[0], $(this).data());
      });
    </script>

    <script>
      $(document).ready(function() {
        //Default data table
        $('#fer').DataTable();
        $('#default-datatable').DataTable();


        var table = $('#example').DataTable({
          lengthChange: false,
          buttons: ['copy', 'excel', 'pdf', 'print', 'colvis']
        });

        table.buttons().container()
          .appendTo('#example_wrapper .col-md-6:eq(0)');

        $('.single-select').select2();

        $('.multiple-select').select2();

        //multiselect start

        $('#my_multi_select1').multiSelect();
        $('#my_multi_select2').multiSelect({
          selectableOptgroup: true
        });

        $('#my_multi_select3').multiSelect({
          selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
          selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
          afterInit: function(ms) {
            var that = this,
              $selectableSearch = that.$selectableUl.prev(),
              $selectionSearch = that.$selectionUl.prev(),
              selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
              selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

            that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
              .on('keydown', function(e) {
                if (e.which === 40) {
                  that.$selectableUl.focus();
                  return false;
                }
              });

            that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
              .on('keydown', function(e) {
                if (e.which == 40) {
                  that.$selectionUl.focus();
                  return false;
                }
              });
          },
          afterSelect: function() {
            this.qs1.cache();
            this.qs2.cache();
          },
          afterDeselect: function() {
            this.qs1.cache();
            this.qs2.cache();
          }
        });

        $('.custom-header').multiSelect({
          selectableHeader: "<div class='custom-header'>Selectable items</div>",
          selectionHeader: "<div class='custom-header'>Selection items</div>",
          selectableFooter: "<div class='custom-header'>Selectable footer</div>",
          selectionFooter: "<div class='custom-header'>Selection footer</div>"
        });



      });
    </script>
  </body>

  </html>
<?php } else {
  redirect(base_url() . 'salir');
} ?>