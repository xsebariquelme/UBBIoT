<?php
$url = "http://deltacode.cl/iot/servicio.php";
$json = file_get_contents($url);
$json_data = json_decode($json, true);

?>



<?php if($_REQUEST['b']==4) : ?>
<div class="row">
                    <div class="col-md-6">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["varios"]["santoral_hoy"]);  ?></h2>
                                    <p class="m-b-0">Santoral de hoy</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["feriado_cercano"]["feriado"]);  ?> <?php print_r($json_data[0]["feriado_cercano"]["fecha"]);  ?></h2>
                                    <p class="m-b-0">Feriado cercano</p>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="card bg-warning p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["varios"]["lugar_sismo"]);  ?> <?php print_r($json_data[0]["varios"]["magnitud_sismo"]);  ?> MI</h2>
                                    <p class="m-b-0">Lugar del sismo</p>
                                </div>
                            </div>
                        </div>
                    </div>       


</div>

<?php elseif($_REQUEST['b']==3) : ?>
<div class="row">
                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["dolar"]);  ?> pesos chilenos</h2>
                                    <p class="m-b-0">Valor Dólar</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["euro"]);  ?> pesos chilenos</h2>
                                    <p class="m-b-0">Valor Euro</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["uf"]);  ?> pesos chilenos</h2>
                                    <p class="m-b-0">Valor de UF</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-success p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_economicos"]["utm"]);  ?> pesos chilenos</h2>
                                    <p class="m-b-0">Valor de UTM</p>
                                </div>
                            </div>
                        </div>
                    </div>

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





<div>


<?php elseif($_REQUEST['b']==2) : ?>

   <a class="weatherwidget-io" href="https://forecast7.com/es/n36d61n72d10/chillan/" data-label_1="Chillán" data-label_2="El tiempo" data-font="Roboto" data-icons="Climacons Animated" data-theme="weather_one">Chillán El tiempo</a>
   <div class="row">
              
           <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["sensacion_termica"]);?>°</h2>
                                    <p class="m-b-0">Sensación Termica</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["temperatura_maxima"]);  ?>°</h2>
                                    <p class="m-b-0">Temperatura máxima</p>
                                </div>
                            </div>
                        </div>
                    </div>

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


                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["estado_actual"]);  ?></h2>
                                    <p class="m-b-0">Estado actual</p>
                                </div>
                            </div>
                        </div>
                    </div>

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


                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["lluvia_caida"]);  ?> mm</h2>
                                    <p class="m-b-0">Lluvia caída</p>
                                </div>
                            </div>
                        </div>
                    </div>

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

                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["alerta_volcan"]);  ?></h2>
                                    <p class="m-b-0">Alerta volcán</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card bg-primary p-20">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-alert f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">
                                    <h2 class="color-white"><?php print_r($json_data[0]["datos_meteorologicos"]["estado_aire"]);  ?></h2>
                                    <p class="m-b-0">Estado del aire</p>
                                </div>
                            </div>
                        </div>
                    </div>






    </div>
                       <script src="https://weatherwidget.io/js/widget.min.js"></script>



<?php else : ?>
  
<?php endif; ?>