<?php
$url = "http://deltacode.cl/iot/servicio.php";
$json = file_get_contents($url);
$json_data = json_decode($json, true);

?>
<!-- Start Page Content -->
<a class="weatherwidget-io" href="https://forecast7.com/es/n36d61n72d10/chillan/" data-label_1="Chillán" data-label_2="El tiempo" data-font="Roboto" data-icons="Climacons Animated" data-theme="weather_one" >Chillán El tiempo</a>
                
				<div class="row">
				<?php if($_REQUEST['b']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["sensacion_termica"]);?>°</h2>
                                    <p class="m-b-0">Sensación Térmica</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                    <?php endif; ?>

                    <?php if($_REQUEST['c']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["temperatura_maxima"]);  ?>°</h2>
                                    <p class="m-b-0">Temperatura Máxima</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>


                          <?php if($_REQUEST['d']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["temperatura_minima"]);  ?>°</h2>
                                    <p class="m-b-0">Temperatura Mínima</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['e']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["estado_actual"]);  ?></h2>
                                    <p class="m-b-0">Estado Actual</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['f']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["velocidad_viento"]);  ?> km/h</h2>
                                    <p class="m-b-0">Velocidad del Viento</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['g']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["lluvia_caida"]);  ?> mm</h2>
                                    <p class="m-b-0">Lluvia Caída</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['h']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["presion"]);  ?> hPa</h2>
                                    <p class="m-b-0">Presión</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['i']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["humedad"]);  ?>%</h2>
                                    <p class="m-b-0">Humedad</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['j']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["alerta_volcan"]);  ?></h2>
                                    <p class="m-b-0">Alerta Volcán</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>


                          <?php if($_REQUEST['k']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["estado_aire"]);  ?></h2>
                                    <p class="m-b-0">Estado del Aire</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['l']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["dolar"]);  ?> pesos chilenos.</h2>
                                    <p class="m-b-0">Valor Dólar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['m']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["euro"]);  ?> pesos chilenos.</h2>
                                    <p class="m-b-0">Valor Euro</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['n']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["uf"]);  ?> pesos chilenos.</h2>
                                    <p class="m-b-0">Valor UF</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['o']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["utm"]);  ?> pesos chilenos.</h2>
                                    <p class="m-b-0">Valor UTM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['p']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["ipc"]);  ?>%</h2>
                                    <p class="m-b-0">IPC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['q']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["varios"]["santoral_hoy"]);  ?></h2>
                                    <p class="m-b-0">Santoral de Hoy</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                          <?php if($_REQUEST['r']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["varios"]["lugar_sismo"]);  ?> <?php print_r($json_data[0]["varios"]["magnitud_sismo"]);  ?> MI</h2>
                                    <p class="m-b-0">Lugar del Sismo</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                        

                          <?php if($_REQUEST['t']=='1') : ?>
                    <div class="col-md-6">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["feriado_cercano"]["feriado"]);  ?> <?php print_r($json_data[0]["feriado_cercano"]["fecha"]);  ?></h2></h2>
                                    <p class="m-b-0">Feriado Cercano</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php else : ?>
                     
                    <?php endif; ?>

                         
               
                 </div>
                <!-- End PAge Content -->
         
                <script src="https://weatherwidget.io/js/widget.min.js"></script>

