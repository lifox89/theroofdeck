<!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body padding-top">

                <!-- Start of Summary View Row -->
                    <div class="row" >
                    <?php

                    for ($i=1; $i < 9; $i++) { ?>
                        <!-- Card Column #1 -->
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" ">
                            <a href="#" data-toggle="modal" data-target="#myModal" id="table<?php echo $i?>">
                                <div class="card green summary-inline" >
                                    <div class="card-body">
                                    <br/><br/><br/>
                                        <!-- <i class="icon fa fa-inbox fa-4x"></i> -->
                                        <!-- To Do: Change Icon if orders are not empty -->
                                        <i class="glyphicon glyphicon-plus fa-4x"></i>
                                        <div class="content">                                            
                                            <div class="title">Table <?php echo $i; ?></div>

                                            <!-- Show Table Status : To do reservation -->
                                            <div class="sub-title">Available</div>
                                            <!-- End Show Reservation -->
                                        </div>                                       

                                        <div class="clear-both"></div>
                                    <br/><br/><br/>
                                    </div>
                                </div>
                            </a>
                            <!-- Modal Section -->

                            <?php $data['table']=$i;?>
                            <?php $this->load->view('templates/modal',$data); ?>
                            
                        </div>
                    
                    <?php }
                    ?>
                    

                    <!-- 2nd Row of Dashboard -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                             <div class="card card-primary no-padding summary-inline">
                                <div class="row">
                                    <!-- Chart Card -->
                                    <div class="col-lg-4 col-sm-6 col-xs-12">
                                        <div class="card">
                                            <div class="card-header card yellow">
                                                <div class="card-title">
                                                    <div class="title">Weekly Sales Rate</div>
                                                    <div class="sub-title">8/21 - 8/27</div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="card primary" >
                                                    <div class="card-jumbotron no-padding">
                                                        <canvas id="jumbotron-line-chart" class="chart no-padding"></canvas>
                                                    </div>
                                                    <div class="card-body">
                                                        <h4>Lorem Ipsum</h4>
                                                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                                                    </div>
                                                </div>
                                            </div>  
                                            <!-- <div class="card-footer">
                                                <i class="fa fa-users"></i> 10 Customers
                                            </div>     -->                                      
                                        </div>
                                    </div>

                                    <!-- Running Sales Card -->
                                    <div class="col-lg-8 col-sm-6 col-xs-12">
                                        <div class="card">
                                            <div class="card blue card-header">
                                                <div class="card-title">
                                                    <div class="title">Running Sales Today</div>
                                                    <div class="sub-title">as of 5:28 PM</div>
                                                </div>                                               
                                                <div class="clear-both"></div>                                        
                                            </div>

                                            <div class="card-body">
                                                <div class="text-justified">
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/>
                                                        Table 1 @ 12:57 - P 300 <br/><br/>
                                                </div>                                                                                                        
                                            </div>

                                            <div class="card-footer card blue summary-inline">  
                                                    <div class="col-xs-8">
                                                        <h3>Running Sales Today</h3>
                                                    </div>
                                                    <div class="col-xs-0 text-right half-padding">
                                                        <h3>Php 3,300.00</h3>
                                                    </div>
                                            </div>                                            
                                        </div>                                        
                                    </div>

                                    <div class="clear-both"></div>
                                </div>                           
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
        </div>



        
    <script type="text/javascript">

        var count = 0,
               id = 0;

        $("[id^=b1]").click(function(){
            var $badge = $(this).parent("[id^=divset]").find("[id^=badge]");  
                count  = parseInt($badge.val(),10) + 1;
                if (count <= 100) {
                    $badge.val(count);                         
                }
        });

        $("[id^=b2]").click(function(){
            var $badge = $(this).parent("[id^=divset]").find("[id^=badge]");
                count  = parseInt($badge.val(),10) - 1;  
                if (count >= 0) {
                    $badge.val(count);
                }                    
        });

        $("[id^=table]").click(function(){
            
            id = $(this).attr('id');
            // alert(id);
            // return(id);
        });
    </script>