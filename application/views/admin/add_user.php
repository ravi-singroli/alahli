<div class="row">

    <div class="col-md-12">

      	<div class="box box-info">

            <div class="box-header with-border">

              	<h3 class="box-title"><?php echo $title; ?></h3>

            </div>

            <?php $readonly_class=""; if(isset($edit_dtls)){ $readonly_class="disabled"; } ?>

            

            <?php echo form_open(); ?>

          	<div class="box-body">

            	<?php echo $this->session->flashdata('message'); ?>



				<?php if($msg or validation_errors()) { ?>



					 <div class="alert alert-danger">



					 <?php echo $msg; echo "<br/>". validation_errors();?>



					</div>



				<?php } ?>

                

          		<div class="row clearfix">

					<div class="col-md-6">

						<label for="status" class="control-label"><span class="text-danger">*</span>Stream</label>

						<div class="form-group">

							<select name="ddl_stream" id="ddl_stream" class="form-control" required onchange="get_classes(this.value)" <?php echo $readonly_class; ?>>

                            	<option value="">Select</option>								

								<?php 

								foreach($streams as $row)

								{

									$selected = ($row["id"] == $this->input->post('ddl_stream')) ? ' selected="selected"' : "";



									echo '<option value="'.$row["id"].'" '.$selected.'>'.$row["name"].'</option>';

								} 

								?>

							</select>

						</div>

					</div>					

                    <div class="col-md-6">

						<label for="status" class="control-label"><span class="text-danger">*</span>Class</label>

						<div class="form-group">

							<select name="ddl_class" id="ddl_class" class="form-control" required <?php echo $readonly_class; ?>>	

                            	<option value="">Select</option>

							</select>

						</div>

					</div>

                    <div class="col-md-6">

						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>

						<div class="form-group">

							<input type="text" name="txt_name" value="<?php echo $this->input->post('txt_name'); ?>" class="form-control" id="txt_name" maxlength="50" required/>

						</div>

					</div>	

                    <div class="col-md-6">

						<label for="name" class="control-label"><span class="text-danger">*</span>Email Id</label>

						<div class="form-group">

							<input type="email" name="txt_email" value="<?php echo $this->input->post('txt_email'); ?>" class="form-control" id="txt_email" maxlength="50" required <?php echo $readonly_class; ?>/>

						</div>

					</div>	

                    <div class="col-md-6">

						<label for="name" class="control-label">Mobile No</label>

						<div class="form-group">

							<input type="number" name="txt_mobile_no" value="<?php echo $this->input->post('txt_mobile_no'); ?>" class="form-control" id="txt_mobile_no" maxlength="10"/>

						</div>

					</div>

                    <div class="col-md-6">

						<label for="name" class="control-label">Institute Name</label>

						<div class="form-group">

							<input type="text" name="txt_institute_name" value="<?php echo $this->input->post('txt_institute_name'); ?>" class="form-control" id="txt_institute_name" maxlength="150"/>

						</div>

					</div>

                    <div class="col-md-6">

						<label for="dob" class="control-label">Dob</label>

						<div class="form-group">

							<input type="text" name="txt_dob" value="<?php echo $this->input->post('txt_dob'); ?>" class="has-datepicker form-control" id="txt_dob" maxlength="10" />

						</div>

					</div>

                    	

                    <div class="col-md-6">

						<label for="status" class="control-label">Gender</label>

						<div class="form-group">

							<select name="ddl_gender" id="ddl_gender" class="form-control">

                            									

								<?php $gender_values = array(

									'Male'=>'Male',

									'Female'=>'Female',

								);



								foreach($gender_values as $value => $display_text)

								{

									$selected = ($value == $this->input->post('ddl_gender')) ? ' selected="selected"' : "";



									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';

								} 

								

								?>

							</select>

						</div>

					</div>

                    <?php if(isset($edit_dtls)){?>

                        <div class="col-md-6">

                            <label for="status" class="control-label">Status</label>

                            <div class="form-group">

                                <select name="ddl_status" id="ddl_status" class="form-control">

                                    <?php 

                                    $status_values = array(

                                        CV_STATUS_ACTIVE=>'Active',

                                        CV_STATUS_INACTIVE=>'In Active',

                                        CV_STATUS_BLOCKED=>'Blocked',

                                    );

    

                                    foreach($status_values as $value => $display_text)

                                    {

                                        $selected = ($value == $this->input->post('ddl_status')) ? ' selected="selected"' : "";

    

                                        echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';

                                    } 

                                    ?>

                                </select>

                            </div>

                        </div>

                    <?php } 
					
				 if(!$is_subscribed_package_full_time){?>
                    <div class="col-md-6">
						<label for="status" class="control-label">Subscribe For Package</label>
						<div class="form-group">
							<select name="ddl_package" id="ddl_package" class="form-control">
                            	<option value="">Select</option>
								<?php $package_values = array(
									'4'=>'1 MONTHS (Fixed Date)',
									'1'=>'3 MONTHS',
									'2'=>'6 MONTHS',
									'3'=> '12 MONTHS'
								);
								foreach($package_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('ddl_package')) ? ' selected="selected"' : "";
									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						</div>
					</div>
				 <?php } ?>
                    		

				</div>

			</div>

          	<div class="box-footer text-right">

            	<button type="submit" class="btn btn-success">

            		<i class="fa fa-check"></i> 

                    <?php if(isset($edit_dtls)){ echo "Update"; }else{ echo"Submit"; } ?>

            	</button>

          	</div>

            <?php echo form_close(); ?>

      	</div>

    </div>

</div>



<script>

function get_classes(sid)

{

	$.post('<?php echo site_url(CV_ADMIN_FOLDER_NAME.'/dashboard') ?>/get_classes', {sid : sid}, function(r) 

	{

		if(r != '')

		{

			$('#ddl_class').html(r);

			<?php if(isset($edit_dtls)){?>

	

				$('#ddl_class').val('<?php echo $edit_dtls["class_id"]; ?>');				

				

			<?php } ?>

		}

	});	

}



<?php if(isset($edit_dtls)){?>

	

	$('#ddl_stream').val('<?php echo $edit_dtls["stream_id"]; ?>');

	get_classes('<?php echo $edit_dtls["stream_id"]; ?>');

	$('#txt_name').val('<?php echo $edit_dtls["name"]; ?>');

	$('#txt_email').val('<?php echo $edit_dtls["email_id"]; ?>');

	$('#txt_mobile_no').val('<?php echo $edit_dtls["mobile_no"]; ?>');
	$('#txt_institute_name').val('<?php echo $edit_dtls["institute_name"]; ?>');
	$('#txt_dob').val('<?php if($edit_dtls['dob']!="0000-00-00"){echo date("d/m/Y", strtotime($edit_dtls['dob'])); } ?>');

	$('#ddl_gender').val('<?php echo $edit_dtls["gender"]; ?>');

	$('#ddl_status').val('<?php echo $edit_dtls["status"]; ?>');

	

<?php } ?>

</script>