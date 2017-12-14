<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $title; ?></h3>
      </div>
      <?php $readonly_class="disabled"; if(isset($edit_dtls)){ $readonly_class="disabled"; } ?>
      <?php echo form_open(); ?>
      <div class="box-body"> <?php echo $this->session->flashdata('message'); ?>
        <?php if($msg or validation_errors()) { ?>
        <div class="alert alert-danger"> <?php echo $msg; echo "<br/>". validation_errors();?> </div>
        <?php } ?>
        <div class="row clearfix">
          <div class="col-md-4">
            <label for="status" class="control-label"><span class="text-danger">*</span>Name</label>
            <div class="form-group">
            	<input type="text" name="txt_mobile_no" value="Ravi" class="form-control" id="txt_mobile_no" maxlength="50" <?php echo $readonly_class; ?>/>
            </div>
          </div>
          <div class="col-md-4">
            <label for="status" class="control-label"><span class="text-danger">*</span>Course</label>
            <div class="form-group">
              <input type="text" name="txt_mobile_no" value="Light Motor Driving" class="form-control" id="txt_mobile_no" maxlength="50" <?php echo $readonly_class; ?>/>
            </div>
          </div>
          <div class="col-md-4">
            <label for="name" class="control-label"><span class="text-danger">*</span>Done Payment</label>
            <div class="form-group">
              <input type="text" name="txt_name" value="55000" class="form-control" id="txt_name" maxlength="50" required <?php echo $readonly_class; ?>/>
            </div>
          </div>         
          <div class="col-md-6">
            <label for="name" class="control-label">Next Schedule Amount</label>
            <div class="form-group">
              <input type="number" name="txt_mobile_no" value="<?php echo $this->input->post('txt_mobile_no'); ?>" class="form-control" id="txt_mobile_no" maxlength="10"/>
            </div>
          </div>

          <div class="col-md-6">
            <label for="dob" class="control-label">Next Schedule Date</label>
            <div class="form-group">
              <input type="text" name="txt_dob" value="<?php echo $this->input->post('txt_dob'); ?>" class="has-datepicker form-control" id="txt_dob" maxlength="10" />
            </div>
          </div>
          
        </div>
      </div>
      <div class="box-footer text-right">
        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>
        <?php if(isset($edit_dtls)){ echo "Update"; }else{ echo"Submit"; } ?>
        </button>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
