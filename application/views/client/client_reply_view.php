<?php 


?><?php include 'template/head_link.php';?>


<style>

</style>
 <script> 

	</script>
<body class="nav-md" >

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
              
                    <!-- sidebar menu -->
                             <?php include 'template/nav.php';?>
                    <!-- /sidebar menu -->

                </div>
            </div>

            <!-- top navigation -->
                  <?php include 'template/header.php';?>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                <div class="">
                   
                        <div class="x_panel">
                                <div class="x_title">

                                    <h2><i class="fa fa-support"></i> All Tickets List</h2>
                                    <ul class="nav navbar-right panel_toolbox ">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                 
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                           
                          </div>
                        <div class="container">
						 <div class="x_content">
                                             
								<div class="col-md-12 col-lg-12 col-sm-7">
								
							
										<blockquote>
													{ticket_problem_info}
													   <h5 style="font-weight:bold"></h5>
													   
													   <h3><?php echo  $user_name;?></h3>
													   <h6>{date_time}</h6>
													   <h6>{subject}</h6>
													   <p>{message}</p>
													    <?php if(!empty($ticket_problem_info[0]['user_file']) || ($ticket_problem_info[0]['user_file'])!=NULL) { ?>
													   <a  style="color:blue" href="<?php echo base_url();?>assets/ticket_file/{user_file}" target="_blank">attached File </a>
														<?php } ?>
													 {/ticket_problem_info}
													   <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
														
													
										</blockquote>
								
						             <?php 
										foreach ($ticket_info_client_single as $value) 
										{  if( $value['reply_type']==0){
										    ?>
							 
										  
													<!-- blockquote -->
													
												<blockquote>
													
													   <h5 style="font-weight:bold"></h5>
													   <h3><?php echo  $user_name;?></h3>
													   <h6><?=$value['date_time_ans'];?></h6>
													   <h6><b>Subject:</b><?=$value['subject'];?> </h6>
													   <p><b>Message : </b><?=$value['ans_message'];?></p>
													  <?php if(!empty($value['user_file']) || ($value['user_file'])!=NULL) { ?>
													  <a  style="color:blue" href="<?php echo base_url();?>assets/ticket_file/{user_file}" target="_blank">attached File </a>
													  <?php } ?>
													  
													   <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
														
													
													</blockquote>
													
                                            <?php
													}
													   else{ ?>

													<blockquote class="blockquote-reverse">
													
													   <h5 style="font-weight:bold"></h5>
													   <h3>Admin</h3>
													   <h5>Date : <?=$value['date_time_ans'];?> </h5>
													   <p>Reply :<?=$value['ans_message'];?>  </p>
													   
													   
													<?php
													   }
													?>  
													   <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
														<footer>Someone famous in <cite title="Source Title">Source Title</cite>
														</footer>-->
														
													
													</blockquote>
													
                                                   
									 <?php } ?>	
									  <blockquote >
									  
														<h3><?=$user_name;?></h3>
														<h5>Click below to reply...</h5>
														
													<form id="demo-form" data-parsley-validate="" action="<?php echo site_url('client/user_reply');?>"  method="post">
														<textarea id="message" required="required" class="form-control" name="user_reply" data-parsley-trigger="keyup"
														data-parsley-minlength="20" data-parsley-maxlength="100"
														data-parsley-validation-threshold="10" data-parsley-id="6858">
														</textarea>
														
														<br>
														
															<input type="hidden" name="ticket_id" value="<?=$ticket_id;?>"/>
															
															
															
															
															<input type="hidden" name="user_email" value="<?=$user_email;?>"/>
														
															<button type="submit" class="btn btn-success">Submit</button>
												    </form>
										
										</blockquote>
												</div>
											
												
							</div>

                               
								 

                        
					    </div>

				</div>
                <!-- footer content -->
    <?php include 'template/footer.php';?>
                <!-- /footer content -->

            </div>
            <!-- /page content -->



    </div>
				

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
<!-- Footer Link-->
    <?php include 'template/footer_link.php';?>
<!-- Footer Link End-->

   
	
	
	

</body>

</html>