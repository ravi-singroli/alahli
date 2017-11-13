<div class="wraper">
  <!--KODE BANNER WRAP START-->
  <div class="kode_map_wrap">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.432060486664!2d55.228056884992085!3d25.12107968393162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6be00269f947%3A0x13db95e80eafaa1c!2sAl+Ahli+Driving+Center!5e0!3m2!1sar!2sae!4v1506152233019" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
    <div class="clearfix"></div>
  </div>
  <div class="all_location"><a href="#allLocation" class="btn btn-primary" id="">View All Location</a></div>
</div>
    <!--KODE CONTACT WRAP START--> 
<div class="kode_contact_info">
  <div class="container text-center">
    <!--SECTION HDG START-->
    <div class="section_hdg hdg_2 hdg_3">
  	<h3>Connect With Us</h3>
      <span><i class="fa fa-road" aria-hidden="true"></i></span>
   </div>
  <!--SECTION HDG END-->
<div class="row">
<div class="col-sm-3"><div class="c-in"><span><i class="fa fa-phone"></i></span><h5>Number</h5><p>Tel : 04-3411500<br/>Fax : 04-3411511</p></div></div>
<div class="col-sm-3"><div class="c-in"><span><i class="fa fa-fax"></i></span><h5>Customer</h5><p>Call center : 800-252454<br/>Customer service : 04-3411440</p></div></div>
<div class="col-sm-3"><div class="c-in"><span><i class="fa fa-envelope-o"></i></span><h5>Email</h5><p><a href="mailto:care@alahlidubai.ae">care@alahlidubai.ae</a></p></div></div>
<div class="col-sm-3"><div class="c-in"><span><i class="fa fa-clock-o"></i></span><h5>Office timing</h5><p>Weekdays: 08:00am – 7:00pm <br/>Friday: 07:00am – 12:00pm 02:00pm – 05:00pm</p></div></div>
  </div>
</div>
</div>
    <!--KODE CONTACT WRAP END--> 
      <!--KODE CONTACT WRAP START--> 
<div class="kode_contact_form">
  <div class="container text-center">
    <!--SECTION HDG START-->
    <div class="section_hdg hdg_2">
  	<h3>Contact Form</h3>
      <p>We will revert back to you soon</p>
      <span><i class="fa fa-road" aria-hidden="true"></i></span>
   </div>
  <!--SECTION HDG END-->
<div class="white-bg2">
<?php echo $this->session->flashdata('message'); ?>
<?php if(validation_errors()) { ?>
	 <div class="alert alert-danger">
	 <?php echo validation_errors();?>
	</div>
<?php } ?>

<div id="dv_error_contact"></div>
  <form class="form-" method="post" action="" id="frm_contact_us" onsubmit="return submit_contact_dtls(this);">
<div class="row">
<div class="col-sm-6">
	<div class="form-group">
    <label for="exampleInputEmail1">Your Name *</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Your Name" id="txt_name_c" name="txt_name" maxlength="50" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Email *</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Your Email" id="txt_email_id_c" name="txt_email_id" maxlength="50" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
</div>
<div class="col-sm-6">
  <div class="form-group">
      <label for="exampleFormControlTextarea1">Your Message *</label>
      <textarea class="form-control" rows="5" id="txt_msg_c" name="txt_msg" maxlength="5000" required></textarea>
    </div>
</div>
  </div>
  <div class="center c-btn clear"><button type="submit" id="btn_submit" class="medium_btn border btn_hover" style="cursor:pointer;">Send Message</button><span class="ajax-loader"></span></div>
</form>
</div>
</div>
</div>
    <!--KODE CONTACT WRAP END--> 
<!--KODE BRANCHES WRAP START--> 
<div id="allLocation" class="kode_brances_info">
  <div class="container text-center"> 
    <!--SECTION HDG START-->
    <div class="section_hdg hdg_2 hdg_3">
      <h3>Our Locations</h3>
      <span><i class="fa fa-road" aria-hidden="true"></i></span> </div>
    <!--SECTION HDG END-->
    <div class="row">
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.28349833854!2d55.376505584988564!3d25.294677483850915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c6e11771a33%3A0x114f55cc46f4af9a!2sAl+Ahli+Driving+Center!5e0!3m2!1sar!2sae!4v1506160715404" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>AL Nahda</h4>
                <span><strong>Tel</strong> : 04-2586700 | <strong>Fax</strong> : 04-2586800<br />
                <strong>Email</strong>: <a href="mailto:nahda@alahlidubai.ae">nahda@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">36343  98586</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14433.070957857322!2d55.29981573957829!3d25.26157731307155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f433c0b7f0bc5%3A0x54aedec329d02fda!2sAl+Fahidi+Metro+Station!5e0!3m2!1sen!2s!4v1508759838894" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Bur Dubai</h4>
                <span><strong>Tel</strong> : 04-3519333 | <strong>Fax</strong> : 04-3592204<br />
                <strong>Email</strong>: <a href="mailto:nahda@alahlidubai.ae">burdubai@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">28775  94988</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">            
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.7505286817263!2d55.33249245063605!3d25.27897623450192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5ce63a987411%3A0x3e8bbc7c65790cb2!2s10+B+St+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1508760178940" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Freg Al Marrar</h4>
                <span><strong>Tel</strong> : 04-2724284 | <strong>Fax</strong> : 04-2729844<br />
                <strong>Email</strong>: <a href="mailto:nahda@alahlidubai.ae">almarar@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">30253  96816</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.7587224583885!2d55.33319368498889!3d25.278700683858315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cbeab20ac55%3A0x45aa63c53fc0ab9b!2sAl+Ahli+Driving+Center!5e0!3m2!1sar!2sae!4v1506162532715" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Hor Al Anz</h4>
                <span><strong>Tel</strong> : 04-2978826 | <strong>Fax</strong> : 04-2978824<br />
                <strong>Email</strong>: <a href="mailto:horalanz@alahlidubai.ae">horalanz@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">31953  96837</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.9045742119215!2d55.410645484990994!3d25.172699783907564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6136800f1fa1%3A0x40e7f9922c882e69!2sAl+Ahli+Driving+Center!5e0!3m2!1sar!2sae!4v1506162875081" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>International City</h4>
                <span><strong>Tel</strong> : 04-4327851 | <strong>Fax</strong> : 04-4327851<br />
                <strong>Email</strong>: <a href="mailto:intercity@alahlidubai.ae">intercity@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">39618  85025</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.9288299942355!2d55.13355138499441!3d25.002534183986977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f12ae1003b051%3A0x141b6a614b1a7920!2sAl+Ahli+Driving+Center!5e0!3m2!1sar!2sae!4v1506163159192" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Jebel Ali</h4>
                <span><strong>Tel</strong> : 04-8804480 | <strong>Fax</strong> : 04-8804788<br />
                <strong>Email</strong>: <a href="mailto:jebelali@alahlidubai.ae">jebelali@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">11302  66577</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230987.89272375556!2d55.14900513786037!3d25.230665433384658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4326111ce341%3A0x96edc5c07da7abf1!2sD88+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1508760659348" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Karama</h4>
                <span><strong>Tel</strong> : 04-3572747 | <strong>Fax</strong> : 04-3572755<br />
                <strong>Email</strong>: <a href="mailto:karamah@alahlidubai.ae">karamah@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">28565  92908</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">            
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462562.8527480532!2d54.94686905600127!3d25.075706036443005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1508760280322" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Port Said</h4>
                <span><strong>Tel</strong> : 04-2956488 | <strong>Fax</strong> : 04-2956489<br />
                <strong>Email</strong>: <a href="mailto:portsaid@alahlidubai.ae">portsaid@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">31748  94844</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.1315954649785!2d55.2819853849898!3d25.232492283879708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42fb3df80883%3A0x67cdbd5fbbe31115!2sAl+Ahli+Driving+Center!5e0!3m2!1sar!2sae!4v1506163944993" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Satwa</h4>
                <span><strong>Tel</strong> : 04-3325227 | <strong>Fax</strong> : 04-3325722<br />
                <strong>Email</strong>: <a href="mailto:satwa@alahlidubai.ae">satwa@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">42062  91191</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 08:00am – 10:00pm<br />
                <strong>Friday</strong> : 07:00am – 12:00pm 02:00pm – 05:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.3146227731827!2d55.1582614849926!3d25.091208983945553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b5ce8275517%3A0xdfed21bc9eb36d46!2z2KfZhNis2KfZhdi52Kkg2KfZhNij2YXYsdmK2YPZitipINmB2Yog2K_YqNmK!5e0!3m2!1sar!2sae!4v1506164304761" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>American University in Dubai</h4>
                <span><strong>Tel</strong> : 0557990286<br />
                <strong>Email</strong>: <a href="mailto:aud@alahlidubai.ae">aud@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">26730  91820</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 09:30am – 03:30pm<br />
                <strong>Friday</strong> : Closed</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.8338825653277!2d55.27225968499019!3d25.20882398389084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f426278f61349%3A0x5cc89b41e81e0384!2sCanadian+University+Dubai!5e0!3m2!1sar!2sae!4v1506164564414" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Canadian University Dubai</h4>
                <span><strong>Tel</strong> : 050 8547881<br />
                <strong>Email</strong>: <a href="mailto:canadian@alahlidubai.ae">canadian@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">25740  89163</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays</strong> : 09:00am – 04:00pm<br />
                <strong>Friday</strong> : Closed</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">          
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d1804.6119447245414!2d55.4320814!3d25.229383!2m2!1f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f609a6d7ad715%3A0x7ae0a3375b5938a4!2saswaaq+Supermarket+Mirdif+Branch!5e0!3m2!1sen!2s!4v1508760558866" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Mirdiff</h4>
                <span><strong>Tel</strong> :04-2363375  | <strong>Fax</strong> : 04-2363371<br />
                <strong>Email</strong>: <a href="mailto:mirdif@alahlidubai.ae">mirdif@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">42062  91191</a></span>
                <h5>Office Timing</h5>
                <span><strong>Saturday</strong>		: 08:00am – 11:00pm<br />
                <strong>Sunday-Thursday</strong> 	: 08:00am – 10:00pm<br />
                <strong>Friday</strong>			: 02:00pm – 11:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.553311908352!2d55.33499138498934!3d25.25196588387085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5cdf62ec2201%3A0x5a603bb4d5e3231e!2z2LPZitiq2Yog2LPZhtiq2LEg2K_Zitix2Kk!5e0!3m2!1sar!2sae!4v1506165994767" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Deira city center</h4>
                <span><strong>Tel</strong> :04-3451711<br />
                <strong>Email</strong>: <a href="mailto:dieracity@alahlidubai.ae">dieracity@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">32048  93785</a></span>
                <h5>Office Timing</h5>
                <span><strong>Sunday- Wednesday</strong>	: 10:00am – 10:00pm<br />
                <strong>Thursday-Saturday</strong>	: 10:00am – 12:00am</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3609.4455485218587!2d55.358270784990005!3d25.22191408388477!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d7f1e951a0f%3A0xb11a0b502dd8fe10!2z2KjZhtiv2Kk!5e0!3m2!1sar!2sae!4v1506166213919" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Dubai festival city</h4>
                <span><strong>Tel</strong> :04-2591646<br />
                <strong>Email</strong>: <a href="mailto:festival@alahlidubai.ae">festival@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">34141  90570</a></span>
                <h5>Office Timing</h5>
                <span><strong>Sunday- Wednesday</strong>	: 10:00am – 10:00pm<br />
                <strong>Thursday-Saturday</strong>	: 10:00am – 12:00am</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922496.2055557629!2d54.344599945864644!3d25.421515341054345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4326111ce341%3A0x96edc5c07da7abf1!2sD88+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2s!4v1508760430929" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Immigration </h4>
                <span><strong>Tel</strong> :0555396752<br />
                <strong>Email</strong>: <a href="mailto:immigration@alahlidubai.ae">immigration@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">27916  91948</a></span>
                <h5>Office Timing</h5>
                <span><strong>Sunday- Thursday</strong>	: 08:00am – 08:00pm<br />
                <strong>Friday-Saturday </strong>	: Closed</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.7720762159515!2d55.31146688498953!3d25.244600683874104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42d5cd070fdb%3A0x291957c5950d16ce!2sDubai+Central+Post+Office!5e0!3m2!1sar!2sae!4v1506166449730" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Karama post office </h4>
                <span><strong>Tel</strong> :04-3426630<br />
                <strong>Email</strong>: <a href="mailto:karama-postoffice@alahlidubai.ae">karama-postoffice@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">29694  93184</a></span>
                <h5>Office Timing</h5>
                <span><strong>Weekdays </strong>	: 08:00am – 08:00pm<br />
                <strong>Friday </strong>	: Closed</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.6998700686463!2d55.41285508498871!3d25.280679783857508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5e844958d70b%3A0x869345ca3a9a35d6!2z2YLYsdmK2Kkg2KfZhNmE2YjZhNmI!5e0!3m2!1sar!2sae!4v1506166596741" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Lulu village</h4>
                <span><strong>Tel</strong> :04-3412129<br />
                <strong>Email</strong>: <a href="mailto:luluvillage@alahlidubai.ae">luluvillage@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">39971  96981</a></span>
                <h5>Office Timing</h5>
                <span><strong>Sunday	- Thursday </strong>	: 09:00am – 11:00pm<br />
                <strong>Friday </strong>	: Closed</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="b-in">
          <div class="row">
            <div class="col-sm-4">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3612.369734330594!2d55.41617398499187!3d25.12318788393066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6391d88f42d1%3A0xd6e775016256e879!2sAll+Day+Shopping!5e0!3m2!1sar!2sae!4v1506166722455" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-sm-8">
              <div class="branches_content">
                <h4>Academic City</h4>
                <span><strong>Tel</strong> :04-3685587<br />
                <strong>Email</strong>: <a href="mailto:academic-city@alahlidubai.ae">academic-city@alahlidubai.ae</a></span>
				<br><strong>Makani No</strong>: <a  target="_blank" href="https://www.makani.ae/desktop/?lang=E">40109  79502</a></span>
                <h5>Office Timing</h5>
                <span><strong>Sunday	- Thursday </strong>	: 08:00am – 08:00pm<br />
                <strong>Friday </strong>	: 02:00pm – 09:00pm</span>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--KODE BRANCHES WRAP END--> 

<script>
function submit_contact_dtls(frm)
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
			 $("#txt_name").val("");
			 $("#txt_email_id").val("");
			 $("#txt_msg").val("");
			   $("#dv_error_contact").html("<p style='color:green; padding-left:10px;'>Your request submitted successfully, We will contact you soon.</p>");			
			}     
			else
			{
				$("#dv_error_contact").html(response);
			}
			setTimeout(function(){$("#dv_error_contact").html('');},20000);
			// $("#loading").css('display','none');
		}
	});
    return false;
}
</script>