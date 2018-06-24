<?php
$url = "http://deltacode.cl/iot/servicio.php";
$json = file_get_contents($url);
$json_data = json_decode($json, true);

?>
<!-- Start Page Content -->
<a class="weatherwidget-io" href="https://forecast7.com/es/n36d61n72d10/chillan/" data-label_1="Chillán" data-label_2="El tiempo" data-font="Roboto" data-icons="Climacons Animated" data-theme="weather_one" >Chillán El tiempo</a>
                
				<div class="row">
				<?php if($_REQUEST['b']=='1') : ?>
                    <div class="col-md-3">
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
                    <?php else : ?>
                    <?php endif; ?>

                    <?php if($_REQUEST['c']=='1') : ?>
                    <div class="col-md-3">
                        <div class="card bg-success p-20">
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
                    <?php else : ?>
                     
                    <?php endif; ?>
               
                 </div>
                <!-- End PAge Content -->
         
                <script src="https://weatherwidget.io/js/widget.min.js"></script>

