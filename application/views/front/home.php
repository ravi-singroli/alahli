<div class="wraper">
  <!--KODE BANNER WRAP START-->
  <div class="kode_banner_wrap">
    <div class="main-bannr-contnt">
      <h3>Chairman's Word
      </h3>
      <div class="bann-rght" id="web_view">
        <div class="form-main">
          <h4>
            <div class="topf-ico">
              <img src="<?php echo base_url("assets/images/edit.png"); ?>">
            </div>
            Register With Us
          </h4>
          <?php echo $this->session->flashdata('message'); ?>
          <?php if(validation_errors()) { ?>
          <div class="alert alert-danger">
            <?php echo validation_errors();?>
          </div>
          <?php } ?>
          <div id="dv_error_reg">
          </div>
          <form method="post" id="frm_register_with_us" action="" onsubmit="return register_with_us(this);">
            <div class="padd10"> 
              <div class="form-group">
                <i class="fa fa-user" aria-hidden="true">
                </i>
                <input class="form-control" id="txt_name" name="txt_name" placeholder="Enter Your Name" type="text" maxlength="50" required> 
              </div>
              <div class="form-group">
                <i class="fa fa-envelope" aria-hidden="true">
                </i>
                <input class="form-control" id="txt_email_id" name="txt_email_id" placeholder="Enter Your Email" type="email" maxlength="50" required> 
              </div>
              <div class="form-group">
                <i class="fa fa-phone" aria-hidden="true">
                </i>
                <input class="form-control" id="txt_mobile_no" name="txt_mobile_no" placeholder="Enter Your Phone" type="text" maxlength="10" required onKeyUp="validate_onkeyup(this);" onBlur="validate_onblure(this);"> 
              </div>
              <button type="submit" class="btn btn-default">Submit
              </button>
            </div>
          </form>
        </div>
        <div class="topf-icoo">
          <img src="<?php echo base_url("assets/images/edit.png"); ?>">
        </div>  
      </div>
    </div>
    <div class="owl-carousel owl-home">
      <div class="item" style="background-image:url(<?php echo base_url("assets/images/banner3.jpg"); ?>)">
        <div class="abbu-contnt">
          <div>
            <h4>
            </h4>
            <!--<span>&nbsp;</span>-->
            <p>
            </p>
          </div>
        </div> 
      </div>
      <div class="item" style="background-image:url(<?php echo base_url("assets/images/banner-s.jpg"); ?>)">
        <div class="abbu-contnt">
          <div>
            <h4>Experience an award winning driving school
            </h4>
            <!--<span>&nbsp;</span>-->
            <p>
              <a href="<?php echo base_url("about-us"); ?>">Learn More
              </a>
            </p>
          </div>
        </div> 
      </div>
      <div class="item" style="background-image:url(<?php echo base_url("assets/images/banner2.jpg"); ?>)">
        <div class="abbu-contnt">
          <div>
            <h4>Experience an award winning driving school
            </h4>
            <!--<span>&nbsp;</span>-->
            <p>
              <a href="<?php echo base_url("about-us"); ?>">Learn More
              </a>
            </p>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url(<?php echo base_url("assets/images/banner4.jpg"); ?>)">
        <div class="abbu-contnt">
          <div>
            <h4>
            </h4>
            <!--<span>&nbsp;</span>-->
            <p>
            </p>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
<div class="mobile_form">
  <div class="container">
    <div class="bann-rght" id="mobile_view">
      <div class="form-main">
        <h4>
          <div class="topf-ico">
            <img src="<?php echo base_url("assets/images/edit.png"); ?>">
          </div>
          Register With Us
        </h4>
        <form method="post" action="">
          <div class="padd10">
            <div class="form-group"> 
              <i class="fa fa-user" aria-hidden="true">
              </i>
              <input class="form-control" id="txt_name" name="txt_name" placeholder="Enter Your Name" type="text" maxlength="50" required>
            </div>
            <div class="form-group"> 
              <i class="fa fa-envelope" aria-hidden="true">
              </i>
              <input class="form-control" id="txt_email_id" name="txt_email_id" placeholder="Enter Your Email" type="email"maxlength="50" required>
            </div>
            <div class="form-group"> 
              <i class="fa fa-phone" aria-hidden="true">
              </i>
              <input class="form-control" id="txt_mobile_no" name="txt_mobile_no" placeholder="Enter Your Phone" type="text" maxlength="10" required>
            </div>
            <button type="submit" class="btn btn-default">Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="kode_mosques_wrap"> 
    <!--CONTAINER STRAT-->
    <div class="container"> 
      <!--ROW STRAT-->
      <div class="row">
        <div class="col-md-6 disnon">
          <div class="kode_mosque_row">
            <div class="kode_mosque_des">
              <div class="kode_mosque_fig">
                <figure class="them_overlay"> 
                  <img src="<?php echo base_url("assets/images/instrct_1.jpg"); ?>" alt="" />
                  <!--<figcaption>
<h6><a href="#">INSTRUCTOR</a></h6>
</figcaption>-->
                </figure>
              </div>
              <div class="kode_mosque_fig">
                <figure class="them_overlay"> 
                  <img height="198px;" src="<?php echo base_url("assets/images/instrct_2.jpg"); ?>" alt="" />
                  <!--<figcaption>
<h6><a href="#">GOOD ADVISER</a></h6>
</figcaption>-->
                </figure>
              </div>
            </div>
            <div class="kode_mosque_des">
              <div class="kode_mosque_fig">
                <figure class="them_overlay"> 
                  <img height="385px" src="<?php echo base_url("assets/images/instrct_3.jpg"); ?>" alt="" />
                  <!--<figcaption>
<h6><a href="#">Confident Mentor</a></h6>
</figcaption>-->
                </figure>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mar214">
          <div class="kode_mosque_text">
            <div class="section_hdg"> 
              <a href="#">
                <img src="<?php echo base_url("assets/images/hdg-img.png"); ?>" alt="">
              </a>
              <h3>About Us
              </h3>
              <span>
                <i class="fa fa-road" aria-hidden="true">
                </i>
              </span> 
            </div>
            <div class="kode_mosque_item">
              <p>Al Ahli Driving Center has been successfully serving since 2006. Our driver education
                courses for Car, Heavy Bus, Light Bus, Heavy Truck &amp; Articulated, Forklift and Motor
                Cycles are professionally designed to cater for drivers of all skill levels from beginners to
                experienced drivers.
              </p>
              <p>We are proud of our record as a driver education facility and we are confident that we
                provide courses that are superior to other driving schools in Dubai - U.A.E. We focus on
                teaching our students correct driving habits. Our instructors are one of the best in terms of
                training, enthusiasm, dedication and experience.
              </p>
              <!--<ul class="kode_counter_mosque">
<li>
<span class="counter">10</span>
<h6><a href="#">Madrasas</a></h6>
</li>
<li>
<span class="counter">20</span>
<h6><a href="#">Mosques</a></h6>
</li>
<li>
<span class="counter">240</span>
<h6><a href="#">Students</a></h6>
</li>
<li>
<span class="counter">24</span>
<h6><a href="#">Imams</a></h6>
</li>
</ul>-->
              <div class="koed_banner_btn"> 
                <a class="medium_btn border margin-right-1 btn_hover" href="<?php echo site_url("about-us"); ?>">Read More
                </a> 
                <a class="medium_btn border btn_hover" href="<?php echo site_url("contact-us"); ?>">Join Us Now
                </a> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--ROW END--> 
    </div>
    <!--CONTAINER END--> 
  </div>
  <!--KODE MOSQUES WRAP END--> 
  <!--KODE PILLARS WRAP START-->
  <div class="kode_pillars_wrap them_overlay"> 
    <!--CONTAINER START-->
    <div class="container"> 
      <!--SECTION HDG START-->
      <div class="section_hdg hdg_2"> 
        <a href="#">
          <img src="<?php echo base_url("assets/images/hdg-img-2.png"); ?>" alt="">
        </a>
        <h3>Our Facilities
        </h3>
        <span>
          <i class="fa fa-road" aria-hidden="true">
          </i>
          </i>
        </span> 
    </div>
    <!--SECTION HDG END-->
    <div class="kode_pillars_row">
      <div class="panel panel-default">
        <div class="panel-heading">
          <ul class="nav nav-tabs kode_pillars_item">
            <li>
              <a class="left_bottom hvr-ripple-out" href="#tab" data-toggle="tab">
                <span>
                  <i class="fa fa-volume-control-phone">
                  </i>
                </span>
                <h6>Call center
                </h6>
              </a>
            </li>
            <li>
              <a class="left_center hvr-ripple-out" href="#tab1" data-toggle="tab">
                <span>
                  <i class="fa fa-car">
                  </i>
                </span>
                <h6>Pickup &amp; Drop
                </h6>
              </a>
            </li>
            <li>
              <a class="center hvr-ripple-out" href="#tab2" data-toggle="tab">
                <span>
                  <i class="fa fa-internet-explorer">
                  </i>
                </span>
                <h6>Free Internet
                </h6>
              </a>
            </li>
            <li>
              <a class="right_center hvr-ripple-out" href="#tab3" data-toggle="tab">
                <span>
                  <i class="fa fa-eye">
                  </i>
                </span>
                <h6>Eye test
                </h6>
              </a>
            </li>
            <li>
              <a class="right_bottom hvr-ripple-out" href="#tab4" data-toggle="tab">
                <span>
                  <i class="fa fa-comments-o">
                  </i>
                </span>
                <h6>Customer feedback
                </h6>
              </a>
            </li>
          </ul>
        </div>
        <div class="panel-body">
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab">
              <div class="kode_pillars_text"> 
                <span>
                  <i class="fa fa-volume-control-phone">
                  </i>
                </span>
                <h4>Call center
                </h4>
                <p>At Al Ahli Driving Centre we take care each every need of your to make your training easy and joyful...
                </p>
              </div>
            </div>
            <div class="tab-pane fade in" id="tab1">
              <div class="kode_pillars_text"> 
                <span>
                  <i class="fa fa-car">
                  </i>
                </span>
                <h4>Pickup &amp; Drop
                </h4>
                <p>At Al Ahli Driving Centre we take care each every need of your to make your training easy and joyful...
                </p>
              </div>
            </div>
            <div class="tab-pane fade in" id="tab2">
              <div class="kode_pillars_text"> 
                <span>
                  <i class="fa fa-internet-explorer">
                  </i>
                </span>
                <h4>Free Internet
                </h4>
                <p>At Al Ahli Driving Centre we take care each every need of your to make your training easy and joyful...
                </p>
              </div>
            </div>
            <div class="tab-pane fade in" id="tab3">
              <div class="kode_pillars_text"> 
                <span>
                  <i class="fa fa-eye">
                  </i>
                </span>
                <h4>Eye test
                </h4>
                <p>At Al Ahli Driving Centre we take care each every need of your to make your training easy and joyful...
                </p>
              </div>
            </div>
            <div class="tab-pane fade in" id="tab4">
              <div class="kode_pillars_text"> 
                <span>
                  <i class="fa fa-comments-o">
                  </i>
                </span>
                <h4>Customer feedback
                </h4>
                <p>At Al Ahli Driving Centre we take care each every need of your to make your training easy and joyful...
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--CONTAINER END--> 
</div>
<!--KODE PILLARS WRAP END--> 
<!--KODE SERVICES WRAP START-->
<div class="kode_services_wrap"> 
  <!--CONTAINER START-->
  <div class="container"> 
    <!--SECTION HDG START-->
    <div class="section_hdg hdg_2 hdg_3"> 
      <a href="#">
        <img src="<?php echo base_url("assets/images/hdg-img.png"); ?>" alt="">
      </a>
      <h3>Our Services
      </h3>
      <span>
        <i class="fa fa-road" aria-hidden="true">
        </i>
      </span> 
    </div>
    <!--SECTION HDG END-->
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("light-motor-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/cars.png"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text">
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Light vehicle driving
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("light-motor-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a>
            </div>    
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("heavy-truck-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/heavy_vehicle.png"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Heavy vehicle driving
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("heavy-truck-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
        </a >
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("heavy-bus-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/heavy_bus.png"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Heavy bus driving
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("heavy-bus-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("heavy-light-forklift-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/forklift.png"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Machinery (Heavy / Light)
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("heavy-light-forklift-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
        </a >
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("motor-cycle-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/motorcycle2.png"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Motorcycle driving
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("motor-cycle-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
        </a >
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("desert-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/desert-driving1.png"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Desert Driving
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("desert-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
        </a>  
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("defensive-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/family_d.gif"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Defence Driving
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("defensive-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("defensive-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/school_bus.png"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>Advanced Driving
              </h4>
              <a class="right_arrow hvr-ripple-out" href="<?php echo site_url("defensive-driving"); ?>">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
        </a >
      </div>
      <!-- <div class="col-md-12">
<div class="service_btn"> <a class="medium_btn background-bg-dark btn_hover" href="javascript:void(0);">View All Services</a> </div>
</div> -->
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="">
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <a href="<?php echo site_url("light-bus-driving"); ?>">
          <div class="kode_service_des">
            <figure> 
              <img src="<?php echo base_url("assets/images/thumb_light_bus.jpg"); ?>" alt=""> 
            </figure>
            <div class="kode_service_text"> 
              <span>
                <i class="fa fa-car">
                </i>
              </span>
              <h4>
                <a href="#">Light Bus Driving
                </a >
              </h4>
              <a class="right_arrow hvr-ripple-out" href="#">
                <i class="fa fa-arrow-right">
                </i>
              </a> 
            </div>
          </div>
          </div>
        <div class="col-md-3 col-sm-6">
          <a href="<?php echo site_url("people-determination-details"); ?>">
            <div class="kode_service_des">
              <figure> 
                <img src="<?php echo base_url("assets/images/thumb-disabled.jpg"); ?>" alt=""> 
              </figure>
              <div class="kode_service_text"> 
                <span>
                  <i class="fa fa-car">
                  </i>
                </span>
                <h4>
                  <a href="#">PEOPLE OF DETERMINATION DETAILS
                  </a >
                </h4>
                <a class="right_arrow hvr-ripple-out" href="#">
                  <i class="fa fa-arrow-right">
                  </i>
                </a> 
              </div>
            </div>
            </div>
          <div class="col-md-3 col-sm-6">
            <div class="">
            </div>
          </div>
        </div>
      </div>
      <!--CONTAINER END--> 
    </div>
    <!--KODE SERVICES WRAP END--> 
    <!--KODE PRAY WRAP START-->
    <div class="kode_pray_wrap them_overlay"> 
      <!--CONTAINER START-->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="video">
              <a href="<?php echo site_url("company-introductions"); ?>" target="_blank">
                <i class="fa fa-play-circle-o" aria-hidden="true">
                </i>
              </a>
              <h5>GUIDE
              </h5>
              <p>Step by step guide to get a license
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--CONTAINER END--> 
    </div>
    <!--KODE PRAY WRAP END--> 
    <!--KODE GALLERY3 WRAP START-->
    <div class="kode_gallery3_wrap wrap_2"> 
      <!--CONTAINER START-->
      <div class="container"> 
        <!--SECTION HDG START-->
        <div class="section_hdg hdg_2 hdg_3"> 
          <a href="#">
            <img src="<?php echo base_url("assets/images/hdg-img.png"); ?>" alt="">
          </a>
          <h3>Event Gallery
          </h3>
          <span>
            <i class="fa fa-road" aria-hidden="true">
            </i>
          </span> 
        </div>
        <!--SECTION HDG END-->
        <div class="gallery-slide">
          <div>
            <div class="kode_gallery3_row">
              <div class="kode_gallery3_des">
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g.jpg"); ?>" alt=""> 
                  </figure>
                </div>
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g1.jpg"); ?>" alt=""> 
                  </figure>
                </div>
              </div>
              <div class="kode_gallery3_fig fig_2">
                <figure class="them_overlay"> 
                  <img src="<?php echo base_url("assets/images/member_g2.jpg"); ?>" alt=""> 
                </figure>
              </div>
              <div class="kode_gallery3_des">
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g4.jpg"); ?>" alt=""> 
                  </figure>
                </div>
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g5.jpg"); ?>" alt=""> 
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="kode_gallery3_row">
              <div class="kode_gallery3_des">
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g7.jpg"); ?>" alt=""> 
                  </figure>
                </div>
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g8.jpg"); ?>" alt=""> 
                  </figure>
                </div>
              </div>
              <div class="kode_gallery3_fig fig_2">
                <figure class="them_overlay"> 
                  <img src="<?php echo base_url("assets/images/member_g6.jpg"); ?>" alt=""> 
                </figure>
              </div>
              <div class="kode_gallery3_des">
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g.jpg"); ?>" alt=""> 
                  </figure>
                </div>
                <div class="kode_gallery3_fig">
                  <figure class="them_overlay"> 
                    <img src="<?php echo base_url("assets/images/member_g1.jpg"); ?>" alt=""> 
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--CONTAINER END--> 
    </div>
    <!--KODE GALLERY3 WRAP END--> 
    <!--KODE TEAM WRAP START-->
    <div class="kode_team_wrap"> 
      <!--CONTAINER START-->
      <div class="container"> 
        <!--SECTION HDG START-->
        <div class="section_hdg hdg_2 hdg_3"> 
          <a href="#">
            <img src="<?php echo base_url("assets/images/hdg-img.png"); ?>" alt="">
          </a>
          <h3>Our Trainers
          </h3>
          <span>
            <i class="fa fa-road" aria-hidden="true">
            </i>
          </span> 
        </div>
        <!--SECTION HDG END-->
        <div class="kode-team-slide">
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Ishawar-Mishra-Trainer.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Mustafa Mohammad Salama
                  </h4>
                  <p>Instructor
                  </p>
                  <!--<ul class="kode_social_icon">
<li><a class="hvr-ripple-out" href="#"><i class="fa fa-facebook"></i></a></li>
<li><a class="hvr-ripple-out" href="#"><i class="fa fa-twitter"></i></a></li>
<li><a class="hvr-ripple-out" href="#"><i class="fa fa-tumblr"></i></a></li>
</ul>-->
                </figcaption>
              </figure>
            </div>
          </div>
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Mohamed Ewida - Trainer.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Mansoor Elahi
                  </h4>
                  <p>Instructor
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Muhammed Jakir - Instructor.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Abdul Wahab Khan
                  </h4>
                  <p>Instructor
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Rania-Moustafa-Instructor.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Sadaqat Ali
                  </h4>
                  <p>trainer
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Roshanbi-Instructor.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Ghulam Haider
                  </h4>
                  <p>Instructor
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Shahudeen Tangal - Trainer.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Muhammad Sali Chembra
                  </h4>
                  <p>Instructor
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Shaji PK Instructor.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Muhaid Ismat
                  </h4>
                  <p>Instructor
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
          <div>
            <div class="kode_tem_fig">
              <figure> 
                <img src="<?php echo base_url("assets/images/team-Walid-Abdelhalim-Lecturer.jpg"); ?>" alt="">
                <figcaption>
                  <h4>Big bahdur
                  </h4>
                  <p>Instructor
                  </p>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <!--CONTAINER END--> 
    </div>
    <!--KODE TEAM WRAP END--> 
    <!--KODE NEWSLETTER WRAP START-->
    <div class="kode_newsletter_wrap"> 
      <!--CONTAINER START-->
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="kode_newsletter_des"> 
              <span>
                <i class="fa fa-envelope">
                </i>
              </span>
              <div class="kode_newsletter_text">
                <h5>
                  <a href="#">Newsletter Sign Up
                  </a>
                </h5>
                <p>For Latest Updates Subscribe us 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="kode_newsletter_form">
              <form method="post" id="frm_newsletter" action="<?php echo site_url("home/submit_newsletter"); ?>" onsubmit="return frm_newsletter_submit(this);">
                <div class="kf_commet_field">
                  <div id="dv_error_news">
                  </div>
                  <input placeholder="Enter Your Email" type="email" value="" data-default="Website" size="30" id="txt_email_id1" name="txt_email_id" maxlength="50" required>
                  <button name="submit" type="submit" class="medium_btn background-bg-dark">Submit
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--CONTAINER END--> 
    </div>
    <!--KODE NEWSLETTER WRAP END-->
  </div>
  <div class="modal fade" id="myModalceo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button id="btnClose" type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;
            </span>
          </button>
        </div>
        <div class="modal-body">
          <h4>Chairman's Word
          </h4>
          <img src="<?php echo base_url("assets/images/abbu.jpg"); ?>">
          <p>When we look back at the years from 1980 up to the year 2017 and beyond, we realize that there is no doubt that we have grown and are prospering in our field whilst also overcoming the challenges and difficulties we faced.
          </p>
          <h3>Ali Bujsaim
          </h3>
          <h5>Al Ahli Driving Center
          </h5>
        </div>
      </div>
    </div>
  </div>
  <script>
    $('.bxslider').bxSlider({
      auto: true,
      autoControls: true,
      stopAutoOnClick: true,
      pager: true,
      slideWidth: 600
    }
                           );
    function frm_newsletter_submit(frm)
    {
      //$("#loading").css('display','block');
      var form=$("#"+frm.id);
      $.ajax({
        type:"POST",
        url:form.attr("action"),
        data:form.serialize(),
        success: function(response)
        {
          if(response=="100")
          {
            $("#txt_email_id1").val("");
            $("#dv_error_news").html("<p style='color:#fff'>Your request submitted successfully, We will contact you soon.</p>");
          }
          else
          {
            $("#dv_error_news").html(response);
          }
          setTimeout(function(){
            $("#dv_error_news").html('');
          }
                     ,20000);
          // $("#loading").css('display','none');
        }
      }
            );
      return false;
    }
    function register_with_us(frm)
    {
      //$("#loading").css('display','block');
      var form=$("#"+frm.id);
      $.ajax({
        type:"POST",
        url:form.attr("action"),
        data:form.serialize(),
        success: function(response)
        {
          if(response == 100)
          {
            $("#txt_name").val("");
            $("#txt_email_id").val("");
            $("#txt_mobile_no").val("");
            $("#dv_error_reg").html("<p style='color:green; padding-left:10px;'>Your request submitted successfully, We will contact you soon.</p>");
          }
          else
          {
            $("#dv_error_reg").html(response);
          }
          // $("#loading").css('display','none');
          setTimeout(function(){
            $("#dv_error_reg").html('');
          }
                     ,20000);
        }
      }
            );
      return false;
    }
    function validate_onkeyup(that)
    {
      that.value = that.value.replace(/[^0-9]/g,'');
      if(((that.value).split('.')).length>2)
      {
        var arr = (that.value).split('.');
        that.value=arr[0]+"."+arr[1];
      }
    }
    function validate_onblure(that)
    {
      that.value = that.value.replace(/[^0-9]/g,'');
      if(((that.value).split('.')).length>2)
      {
        var arr = (that.value).split('.');
        that.value=arr[0]+"."+arr[1];
      }
      if((that.value) && Number(that.value)<=0)
      {
        that.value="0";
      }
    }
  </script>
