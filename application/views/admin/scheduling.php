<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $title; ?></h3>
      </div>
      <?php $readonly_class=""; if(isset($edit_dtls)){ $readonly_class="disabled"; } ?>
      <?php echo form_open(); ?>
      <div class="box-body"> <?php echo $this->session->flashdata('message'); ?>
        <?php if($msg or validation_errors()) { ?>
        <div class="alert alert-danger"> <?php echo $msg; echo "<br/>". validation_errors();?> </div>
        <?php } ?>
        <div class="row">
          <div class="col-sm-2">
            <div class="form-group">
              <label for="exampleInputEmail1">Category*</label>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="exampleInputEmail1">Lecture*</label>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label for="exampleInputEmail1">Date*</label>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label for="exampleInputEmail1">Trainer*</label>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label for="exampleInputEmail1">Venue*</label>
            </div>
          </div>
        </div>
        <div class="row dv_loan_dtls_main_row dv_delete_row">
          <div class="col-sm-2">
            <div class="form-group form-gp">
                <select class="form-control" name="ddl_duration_min[]" required>
                    <option value="">Select</option>
                    <?php for($i=1; $i<100; $i++){?>
                    	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group form-gp">
                  <input type="text" class="form-control" placeholder="Lecture Name" name="txt_amount[]" maxlength="10" required onKeyUp="validate_onkeyup_num(this);" onBlur="validate_onblure_num(this);">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group form-gp">
                  <input type="text" class="form-control" placeholder="Date" name="txt_score_min[]" maxlength="3" required onKeyUp="validate_onkeyup_num(this);" onBlur="validate_onblure_num(this);">
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group form-gp">
              <select class="form-control" name="ddl_duration_min[]" required>
                    <option value="">Select</option>
                    <?php for($i=1; $i<100; $i++){?>
                    	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="create_new">
              <select class="form-control" name="ddl_duration_min[]" required>
                    <option value="">Select</option>
                    <?php for($i=1; $i<100; $i++){?>
                    	<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
          </div>
          <div class="col-sm-1">
            <div class="create_new" id="dv_btn_dlt">
              <button type="button" class="btn btn-success" onclick="addAnotherRow();"><i class="fa fa-plus" aria-hidden="true"></i></button>
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
<script>

function addAnotherRow()

{    

    var cl2 = $(".dv_loan_dtls_main_row").clone()

    .find("input:text").val("").end();

	cl2.removeClass("dv_loan_dtls_main_row");

    cl2.find("#dv_btn_dlt").html('<button type="button" class="btn btn-danger" onclick="$(this).closest(\'.dv_delete_row\').remove();"><i class="fa fa-minus" aria-hidden="true"></i></button>');

    cl2.insertBefore(".dv_loan_dtls_main_row");

	cl2.find("input:text").first().focus();

}

</script>