<div class="container-fluid">

      <!--Start Dashboard Content-->
	  
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card border-warning border-left-sm">
            <div class="card-body">
              <div class="media align-items-center"> 
              <div class="media-body text-left">
                <h4 class="text-warning mb-0"><?php echo $this->Modelo_configuracion->cantidad_de_pruebas(); ?></h4>
                <span>CANTIDAD VISITAS</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-blooker">
                <i class="icon-user text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card border-danger border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
               <div class="media-body text-left">
                <h4 class="text-danger mb-0">4</h4>
                <span>CANTIDAD NOTICIAS</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle gradient-bloody">
                <i class="icon-wallet text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4">
          <div class="card border-success border-left-sm">
            <div class="card-body">
              <div class="media align-items-center">
              <div class="media-body text-left">
                <h4 class="text-success mb-0">5</h4>
                <span>CANTIDAD PROYECTOS</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-quepal">
                <i class="icon-pie-chart text-white"></i></div>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->
		  <div class="row ">
        <div class="col-md-12 col-xl-12">
            <div class="card overflow-hidden review-project">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <i class="mdi mdi-dots-horizontal text-gray"></i>
                    </div>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="widget">
                                <div class="widget-header bg-white">
                                    <h3 class="fg-gray" align="center">MI CALENDARIO DEL MES</h3>

                                   <div class="card bg-gradient-primary">
                                    <?php date_default_timezone_set('America/La_Paz');
                                      # definimos los valores iniciales para nuestro calendario
                                      $month=date("n");
                                      $year=date("Y");
                                      $diaActual=date("j");
                                       
                                      # Obtenemos el dia de la semana del primer dia
                                      # Devuelve 0 para domingo, 6 para sabado
                                      $diaSemana=date("w",mktime(0,0,0,$month,1,$year))+7;
                                      # Obtenemos el ultimo dia del mes
                                      $ultimoDiaMes=date("d",(mktime(0,0,0,$month+1,1,$year)-1));
                                       
                                      $meses=array(1=>"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
                                      "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
                                      ?>
                                        <style>
                                            #calendar {
                                              font-family:Arial;
                                              font-size:12px;
                                            }
                                            #calendar caption {
                                              text-align:center;
                                              padding:5px 10px;
                                              background-color:#0b4f68;
                                              color:#fff;
                                              font-weight:bold;
                                            }
                                            #calendar th {
                                              background-color:#0b4f68;
                                              color:#fff;
                                              width:40px;
                                              text-align:center;
                                            }
                                            #calendar td {
                                              color: #000;
                                              text-align:center;
                                              padding:6px 8px;
                                              background-color:#fff;
                                              box-shadow: -1px -1px 5px #000;
                                            }
                                            #calendar .hoy {
                                              background-color:#0b4f68;
                                            }
                                        </style>
                                      <table id="calendar" class="table table-bordered table-striped">
                                      <caption><?php echo $meses[$month]." ".$year?></caption>
                                      <tr>
                                        <th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th>
                                      </tr>
                                      <tr bgcolor="silver">
                                        <?php
                                        $last_cell=$diaSemana+$ultimoDiaMes;
                                        // hacemos un bucle hasta 42, que es el máximo de valores que puede
                                        // haber... 6 columnas de 7 dias
                                        for($i=1;$i<=42;$i++)
                                        {
                                          if($i==$diaSemana)
                                          {
                                            // determinamos en que dia empieza
                                            $day=1;
                                          }
                                          if($i<$diaSemana || $i>=$last_cell)
                                          {
                                            // celca vacia
                                            echo "<td>&nbsp;</td>";
                                          }else{
                                            // mostramos el dia
                                            if($day==$diaActual)
                                              echo "<td class='hoy'>$day</td>";
                                            else
                                              echo "<td>$day</td>";
                                            $day++;
                                          }
                                          // cuando llega al final de la semana, iniciamos una columna nueva
                                          if($i%7==0)
                                          {
                                            echo "</tr><tr>\n";
                                          }
                                        }
                                      ?>
                                      </tr>
                                    </table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
		  
  	  <div class="overlay toggle-menu"></div>
    </div>