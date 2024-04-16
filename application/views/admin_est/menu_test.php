<div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">ADMINISTRACION</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">ADMINISTRACION</a></li>
                <li class="breadcrumb-item active" aria-current="page">ADMIN TEST</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumb-->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-uppercase">

                    <div class="media mb-3">
                        <img src="<?php echo base_url() ?>assets/alert/actual.png" class="rounded-circle mr-3 mail-img shadow" alt="media image">
                        <div class="media-body">
                            <span class="media-meta float-right"><?php echo date('H:s a') ?></span>
                            <h4 class="text-primary m-0">UPEA PAGINA ADMIN</h4>
                            <small class="text-muted">Universidad Publica de El Alto</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <h3 class="fer_text" align="center">.:: LISTA DE TESTS PARA EMITIR REPORTES ::.</h3>

                    <div class="row">
                        <div class="table-responsive">
                            <table id="default-datatable" class="table table-bordered table-sm">
                                <thead class="table-primary shadow-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>NOMBRE TEST</th>
                                        <th>OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>1</td>   
                                        <td>TEST DE ORIENTACIÓN VOCACIONAL (CHASIDE)</td>
                                        <td><a type="button" href="<?php echo base_url(Hasher::make(34)); ?>" class="btn btn-outline-info btn-sm waves-effect waves-light m-1"><i class="fa fa-list" aria-hidden="true"></i>GENERAR REPORTES </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>TEST DE INTELIGENCIA</td>
                                        <td><a type="button" href="<?php echo base_url(Hasher::make(37)); ?>" class="btn btn-outline-info btn-sm waves-effect waves-light m-1"><i class="fa fa-list" aria-hidden="true"></i>GENERAR REPORTES </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>TEST DE INTERÉS PROFESIONAL</td>
                                        <td><a type="button" href="<?php echo base_url(Hasher::make(38)); ?>" class="btn btn-outline-info btn-sm waves-effect waves-light m-1"><i class="fa fa-list" aria-hidden="true"></i>GENERAR REPORTES </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>TEST DE APTITUDES DIFERENTES (DAT)</td>
                                        <td><a type="button" href="<?php echo base_url(Hasher::make(80)); ?>" class="btn btn-outline-info btn-sm waves-effect waves-light m-1"><i class="fa fa-list" aria-hidden="true"></i>GENERAR REPORTES </a>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td>4</td>
                                        <td>REPORTE GENERAL DE INSCRITOS GESTIÓN 2021</td>
                                        <td><a href="<?php echo base_url(Hasher::make(352)); ?>" class="btn btn-danger btn-sm  btn-round btn-lg btn-outline-danger waves-effect waves-light m-1" target="_blank" type="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> GENERAR</a>
                                        </td>
                                    </tr> -->
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>







