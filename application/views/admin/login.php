<!DOCTYPE html>

<html class="bg-black">

    <head>

        <meta charset="UTF-8">

        <title>Log in</title>

        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <!-- bootstrap 3.0.2 -->

        <link href="<?php echo base_url("assets/admin/css/bootstrap.min.css"); ?>" rel="stylesheet" type="text/css" />

        <!-- font Awesome -->

        <link href="<?php echo base_url("assets/admin/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css" />

        <!-- Theme style -->

        <link href="<?php echo base_url("assets/admin/css/AdminLTE.min.css"); ?>" rel="stylesheet" type="text/css" />



    </head>

    <body class="bg-black">



        <div class="form-box" id="login-box">

            <div class="header">Sign In</div>

             <?php echo $this->session->flashdata('message'); ?>

            <?php if($msg or validation_errors()) { ?>

                 <div class="alert alert-danger">

                 <?php echo $msg; echo "<br/>". validation_errors();?>

                </div>

            <?php } ?>

            <form action="<?php echo site_url(CV_ADMIN_FOLDER_NAME);?>" method="post">

                <div class="body bg-gray">

                    <div class="form-group">

                        <input type="text" placeholder="Enter email id" name="username" value="" maxlength="50" class="form-control"  />

                    </div>

                    <div class="form-group">

                        <input type="password" name="passwd" value="" maxlength="20" placeholder="Enter password." class="form-control" />

                    </div>   

                </div>

             <div class="footer">                                                               

                    <button type="submit" class="btn bg-olive btn-block">Sign me In</button>  

                    

                    <!--   <p><a href="#">I forgot my password</a></p>

                    

                    <a href="register.html" class="text-center">Register a new membership</a>-->

                     

                   <!-- <p align="right" style="padding-right:15px;"><a href="<?php //echo site_url("home/forgot_password"); ?>" style="font-size:18px; font-weight:bold" >Forgot Password</a> </p>-->

                 

                </div>

            </form>

                

        </div>





        <!-- jQuery 2.0.2 -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

        <!-- Bootstrap -->

        <script src="<?php echo base_url("assets/admin/js/bootstrap.min.js"); ?>" type="text/javascript"></script>        



    </body>

</html>