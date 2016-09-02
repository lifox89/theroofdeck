<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">

    <!-- Header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select Food Orders</h4>
      </div>


    <!-- BODY -->
    <div class="modal-body" style="height:600px;"">
        <div clas="row">

            <!-- Running Total -->
            <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" > -->
            
                <div class="card col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="card-header card green">
                        <div class="card-title"><h3>Order Summary</h3></div>                        
                        <div class="pull-right">Amount</div>
                    </div>
                    <div class="card-body" style="height:425px; overflow-y: auto">
                       <!--  <?php for ($a=0; $a < 40 ; $a++) { ?>
                        test <br/>
                        <?php } ?> -->
                    </div>
                    <div class="card-footer card green">
                        <div class="row-fluid">
                            <!-- <div class="col-xs-6">
                                <button type="button" class="btn btn-primary" style="width:100px; align:center;">Minimize</button>
                                <button type="button" class="btn btn-success" style="width:100px; align:center;">Check Out</button>
                            </div> -->
                            <div class="col-xs-8 pull-right">
                                <h5>Total: Php 3,200.00</h5>
                            </div>
                        </div>
                        
                    </div>
                </div>
            
            <!-- </div> -->

            
            <!-- Menu Area -->  

            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6" style="height:580px; overflow-y: auto">
                <?php  $ctr=1; $value=0;?>
                <?php foreach ($type as $food_type) { ?>

                    <div class="card col-md-6 col-sm-12 col-xs-12">

                        <div class="card-header card green ">
                            <h4 class="card-title"><?php echo $food_type['foodtn']?> </h4>                                                
                        </div>
                        
                        <div class="card-body">    

                            <?php 
                            sort($food);
                            foreach($food as $food_item) { 
                               if ($food_item['foodtp'] == $food_type['foodtp']) { ?>                                    
                                <div class="row"> 

                                    <div class="col-md-12 col-sm-12 col-xs-12 summary-inline" id="divset
                                    <?php echo $table?><?php echo  $ctr?>"> 
                                    <?php   
                                        $orders = $this->dashboard_model->f_get_orders($table);
                                        sort($orders);
                                              
                                        $fid =  array_search($food_item["foodid"],array_column($orders,'foodid'));
                                        if ($food_item['foodid'] == $orders[$fid]['foodid']) {
                                            $value = $orders[$fid]['fdqty'];
                                        }   
                                                                                      
                                    ?>                                   
                                        <input  type="number" min="0" max="50" id="badge<?php echo $table?><?php echo $ctr;?>" value="<?php echo $value ?>" disabled />
                                    <?php $value = 0 ?>
                                        <button type="button" class="button glyphicon glyphicon-plus fa-1x"  id="b1<?php echo $table?><?php echo  $ctr?>"></button>
                                        <button type="button" class="button glyphicon glyphicon-minus fa-1x" id="b2<?php echo $table?><?php echo  $ctr?>"></button>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <h5><?php echo $food_item['foodnm']; ?></h5>
                                        <h5>_________________________</h5>
                                    </div>

                                    <?php $ctr++;?>
                                </div> 
                                <?php } ?>
                            <?php }?>
                        </div>
                        
                    </div>  
                <?php } ?>
            </div>
            <!-- End of Menu Area -->

            
        </div> 
      </div>
      <!-- End of Modaly Body -->
  
      <div class="modal-footer">        
        <button type="button" class="btn btn-primary pull-left">Minimize</button>
        <button type="button" class="btn btn-success pull-left">Check Out</button>                           
      </div>
      
    </div>

  </div>
</div>



