<style>
    .header-top-area {
        padding-top: 52px;
    }

    .mCustomScrollBox {

        height: 0;

    }

    .footer-copyright-area {

        z-index: 1;
    }

    button.btn.btn-link {
        padding: 0px 4px 18px;
    }

    .comment-scrollbar,
    .timeline-scrollbar,
    .messages-scrollbar,
    .project-list-scrollbar {
        /* height: 580px; */
        /* width: 214px; */
        background-color: #fff0;
    }
</style>

<div class="data-table-area mg-b-15">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div class="sparkline11-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="header-top-area" style="background-color:white">
                                        
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                <center><h2 style="color:black;text-align: center;">Project Progress Visualization System</h2></center>
                                            </div>

                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <button type="button" href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="btn btn-link">
                                                    <span class="step"><?php echo $this->session->userdata('name')[0]; ?></span><br></button>
                                                <ul role="menu" class="dropdown-toggle dropdown-menu animated dropdown-menu-right zoomIn">

                                                    <li><a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown10"><span class="edu-icon edu-settings author-log-ic"></span>Change
                                                            Password</a>
                                                    </li>

                                                    <li><a href="<?php
                                                                    echo base_url('index.php/User/LogoutUser');
                                                                    ?>"><span class="edu-icon edu-locked author-log-ic"></span>Log
                                                            Out</a>
                                                    </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="sparkline13-list">

            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">
                    
                <div class="row" style="margin-top: 60px">

                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h3 style="color:#337ab7;"><center>Location</center></h3>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h3 style="color:#337ab7;">Status</h3>
                    </div>
                    
                </div>
                    

                

                    
                    
                    <?php
                            if ($project_location_fetch_data->num_rows() > 0) {
                                foreach ($project_location_fetch_data->result() as $row) {
                                ?>
                                <?php if ($row->UserName == $this->session->userdata('username')) { ?>

                                    <div class="row" style="margin-top: 30px">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="btn btn-primary btn-block btn-lg" href="<?php echo base_url(); ?>index.php/Home/ImageView/<?php echo($item_code); ?>/<?php echo($project_code); ?>/<?php echo $row->LocationCode ?>" role="button">
                                    <?php echo $row->LocationCode  ?> 
                                    </a>
                                    </div>
                                    <br>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size: 16px"><b><?php echo $row->Status  ?></b></div>
                                    
                               
                                    </div>
                                
                                <?php
                                }
                                }
                            } else {
                            ?>

                    <?php } ?>

                    
                

                    
                </div>


            </div>
        </div>
    </div>
</div>
</div>
<!-- </div>
</div> -->



<div class="footer-copyright-area" style="background-color:#fff">


    <br>
    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12"></div>
    
</div>

</div>