<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title><?php echo CV_PROJECT_NAME; ?> | <?php echo $title; ?></title>

<link rel="shortcut icon" href="<?php echo base_url("favicon.ico")?>" />
<link href="<?php echo base_url("assets/css/bootstrap.css"); ?>" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css"); ?>">
<link href="<?php echo base_url("assets/css/slick.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/jquery.bxslider.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/audio.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/prettyphoto.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/demo-page.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/component.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/hover.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/jQuery-plugin-progressbar.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/chosen.min.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/animate.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/slick-theme.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/typography.css"); ?>" rel="stylesheet">
<link href="<?php echo base_url("assets/css/shotcode.css"); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url("assets/".CV_ARABIC_LANG."/main.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/".CV_ARABIC_LANG."/style.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/svg-icon.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/color.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/contact-buttons.css"); ?>">
<link rel="stylesheet" href="<?php echo base_url("assets/css/responsive.css"); ?>">
<style>
.primary-nav {
    float: right;
    position: static;
}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109229661-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109229661-1');
</script>
</head>
<body>
<!--WRAPER START-->
<header id="header" class="site-header header-sports menu-dark static">
  <?php $this->load->view('front/layouts/header'); ?>
</header>

<?php				                  
if(isset($body) && $body)
	$this->load->view($body);
?>

<footer> 
<?php $this->load->view('front/layouts/footer'); ?>
</footer>

<!--WRAPER END--> 
<!--JavaScript--> 
<script src="<?php echo base_url("assets/js/jquery.js"); ?>"></script> 
<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script> 

<script type="text/javascript"> 
jQuery('#myModalceo').modal('show'); 
setTimeout(function(){
  jQuery( "#btnClose" ).trigger("click");
  /*jQuery('#myModalceo').hide();
   jQuery(".modal-backdrop").removeClass("in");
   jQuery(".modal-backdrop").addClass("out");*/ 
},7000);
</script>

<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/slick.min.js"); ?>"></script> 
<!--js/jquery.downCount.js start--> 
<script src="<?php echo base_url("assets/js/wow.min.js"); ?>"></script> 
<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/jquery.bxslider.min.js"); ?>"></script> 
<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/jQuery-plugin-progressbar.js"); ?>"></script> 
<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/chosen.jquery.min.js"); ?>"></script> 
<!--js/jquery.downCount.js start--> 
<script src="<?php echo base_url("assets/js/modernizr.custom.js"); ?>"></script> 
<!--js/jquery.downCount.js start--> 
<script src="<?php echo base_url("assets/js/jquery.dlmenu.js"); ?>"></script> 
<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/musicplayer.js"); ?>"></script> 
<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/jquery.prettyphoto.js"); ?>"></script> 
<!--js/jquery.downCount.js start--> 
<script src="<?php echo base_url("assets/js/jquery.downCount.js"); ?>"></script> 
<!--BOOTSTRAP JavaScript--> 
<script src="<?php echo base_url("assets/js/waypoints-min.js"); ?>"></script> 
<!--CUSTOM JavaScript--> 
<script src="<?php echo base_url("assets/js/custom.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/scripts.minified.js"); ?>"></script> 
<script src="<?php echo base_url("assets/js/main.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/jquery.contact-buttons.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/sidesocial.js"); ?>"></script>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<script type="text/javascript">
   $("#myModal").modal('show');
	jQuery('.appointment-icon').on('click', function()
	{
		jQuery(this).toggleClass('on');
	});
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/59ccf347c28eca75e4622e59/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>

<div class="modal fade" id="myfeedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="padding:0;">
    <div class="modal-header">
        <button id="btnClose" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
      	<h4>Happiness Indicator</h4>
        <div id="dv_error_smily">
            </div>
        <div class="row smily-icon">
       	<div class="col-xs-4"><a href="#" onclick="store_smily('Unsatisfied')"><i class="fa fa-frown-o" aria-hidden="true"></i> <br />Unsatisfied</a></div><div class="col-xs-4"><a href="#" onclick="store_smily('Natural')"><i class="fa fa-meh-o" aria-hidden="true"></i> <br />Natural</a></div><div class="col-xs-4"><a href="#" onclick="store_smily('Satisfied')"><i class="fa fa-smile-o" aria-hidden="true"></i> <br />Satisfied</a></div>
       </div>
     </div>
    </div>
  </div>
</div>
<script type="text/javascript">
function store_smily(val)
{
	$.ajax({
        type:"POST",
        url:'<?php echo site_url("home/store_user_feedbacks"); ?>',
        data:{feedback_val:val},
        success: function(response)
        {
            $("#dv_error_smily").html("<p style='color:green'>Thank you for your response.</p>");
			setTimeout(function(){$("#dv_error_smily").html('');},20000);
			// $("#loading").css('display','none');
        }
    });	
}
</script>