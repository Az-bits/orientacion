<div class="container-fluid">
    <div class="row pt-2 pb-2">
        <div class="col-sm-9">
            <h4 class="page-title">ADMINISTRACION</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javaScript:void();">ADMINISTRACION</a></li>
                <li class="breadcrumb-item active" aria-current="page">REPORTES </li>
                <li class="breadcrumb-item active" aria-current="page">TEST DE INTELIGENCIA</li>
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

                    <h3 class="fer_text" align="center">
                        REPORTES - TEST DE INTERÉS PROFESIONAL
                    </h3>
                    <div class="card-header "><a href="<?php echo base_url(Hasher::make(32)); ?>" class="btn btn-danger btn-md shadow-danger btn-round btn-outline-danger waves-effect"><i class="fa fa-mail-reply-all"></i> Atras</a></div>
                    <div class="row">
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table id="default-datatable" class=" table-bordered" style="width:100%;">
                                <thead class="table-primary shadow-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>TITULO DE REPORTE</th>
                                        <th>REPORTE EN FORMATO PDF</th>
                                        <th>REPORTE EN FORMATO EXCEL</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr style="font-size:14px;">
                                        <td>1</td>
                                        <td>LISTA DE ESTUDIANTES QUE REALIZARON EL TEST DE INTERÉS PROFESIONAL</td>

                                        <td>
                                            <!-- para imprimir en pdf -->
                                          <a href="<?php echo base_url(Hasher::make(39)); ?>" class="btn btn-danger btn-sm  btn-round btn-lg btn-outline-danger waves-effect waves-light m-1" target="_blank" type="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> GENERAR PDF</a>
                                          <button type="button" class="btn btn-sm btn-danger  btn-round  btn-outline-danger btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#reporte_intervalo_fecha"><span class="fa fa-plus"></span> GENERAR POR FECHAS</button>
                                        </td>
                                        <td>
                                          <a href="<?php echo base_url(Hasher::make(359)); ?>" class="btn btn-danger btn-sm  btn-round btn-lg btn-outline-success waves-effect waves-light m-1" target="_blank" type="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> GENERAR EXCEL</a>
                                          <button type="button" class="btn btn-sm btn-success  btn-round  btn-outline-success btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#reporte_intervalo_fecha_excel"><span class="fa fa-plus"></span> GENERAR POR FECHAS</button>

                                        </td>
                                    </tr>
                                    <tr >
                                        <td>2</td>
                                        <td>LISTA DE UNIDADES EDUCATIVAS</td>

                                        <td>
                                          <!-- para imprimir en pdf -->

                                          <a href="<?php echo base_url(Hasher::make(40)); ?>" class="btn btn-danger btn-sm  btn-round btn-lg btn-outline-danger waves-effect waves-light m-1" target="_blank" type="button"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> GENERAR PDF</a>
                                          <!-- <button type="button" class="btn btn-danger  btn-round  btn-outline-danger btn-round waves-effect waves-light m-1" data-toggle="modal" data-target="#primarymodal"><span class="fa fa-plus"></span> GENERAR REPORTE</button> -->

                                        </td>
                                        <td>
                                          <a href="<?php echo base_url(Hasher::make(356)); ?>" class="btn btn-danger btn-sm  btn-round btn-lg btn-outline-success waves-effect waves-light m-1" target="_blank" type="button"><i class="fa fa-file-excel-o" aria-hidden="true"></i> GENERAR EXCEL</a>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="reporte_intervalo_fecha">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-calendar-o"> DEFINIR FECHA DE INTERVALO</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="guardar_nuevo_usuario" method="post" accept-charset="utf-8" action="<?php echo base_url(Hasher::make(362)) ?>">
              <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">DESDE</label>
                      <div class="input-group mb-3 autocompletar">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-calendar-o"></i></span>
                        </div>
                        <input type="date" name="desde_fecha" id="tipo-mascota" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">HASTA</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-calendar-o"></i></span>
                        </div>
                        <input type="date" name="hasta_fecha" id="nombre" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" id="boton" class="btn btn-primary"><i class="fa fa-check-square-o"></i> GENERAR</button>
                <button type="button" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i> CANCELAR</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="reporte_intervalo_fecha_excel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-primary animated bounceIn">
          <div class="modal-header bg-primary">
            <h5 class="modal-title text-white fer_text"><i class="fa fa-calendar-o"> DEFINIR FECHA DE INTERVALO</h5>
            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="guardar_nuevo_usuario" method="post" accept-charset="utf-8" action="<?php echo base_url(Hasher::make(3591)) ?>">
              <div class="row">
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">DESDE</label>
                      <div class="input-group mb-3 autocompletar">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-calendar-o"></i></span>
                        </div>
                        <input type="date" name="desde_fecha" id="tipo-mascota" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label for="input-1">HASTA</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="fa fa-calendar-o"></i></span>
                        </div>
                        <input type="date" name="hasta_fecha" id="nombre" class="form-control" placeholder="Ingresar..." required>
                      </div>
                    </div>
                  </div>

              </div>
              <div class="modal-footer">
                <button type="submit" id="boton" class="btn btn-success"><i class="fa fa-check-square-o"></i> GENERAR</button>
                <button type="button" class="btn btn-inverse-primary" data-dismiss="modal"><i class="fa fa-times"></i> CANCELAR</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</div>
</div>
