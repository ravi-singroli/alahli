<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title"><?php echo $title; ?></h3>
        <div class="box-tools"> <a href="<?php echo site_url(CV_ADMIN_FOLDER_NAME."/add-user"); ?>" class="btn btn-success btn-sm">Add</a> </div>
      </div>
      <div class="box-body"> <?php echo $this->session->flashdata('message'); ?>
        <?php if($list_data){ ?>
        <table class="table table-striped">
          <tr>
            <th>Sr. No</th>
            <th>Name</th>
            <th>Email Id</th>
            <th>Mobile No</th>
            <th>Course</th>
            
            <th>Actions</th>
          </tr>
          <?php $i=0; $course=array("Light Motor Driving", "Light Bus Driving"); foreach($list_data as $row){ ?>
          <tr>
            <td><?php echo $count; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email_id']; ?></td>
            <td><?php echo $row['mobile_no']; ?></td>
            <td><?php echo $course[$i]; ?></td>
            <td>
            <?php /*?><?php if($row['status']==CV_STATUS_ACTIVE){echo "Active"; }elseif($row['status']==CV_STATUS_INACTIVE){echo "In-Active"; }elseif($row['status']==CV_STATUS_BLOCKED){echo "Blocked"; } ?></td><?php */?>
           <?php /*?> <a href="<?php echo site_url(CV_ADMIN_FOLDER_NAME.'/add-student/'.$row['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> <a href="<?php echo site_url(CV_ADMIN_FOLDER_NAME."/delete-student/".$row['id']); ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a><?php */?>
           <a href="<?php echo site_url(CV_ADMIN_FOLDER_NAME.'/add-student/'.$row['id']); ?>" class="btn btn-info btn-xs">Schedule</a>
           
           <a href="<?php echo site_url(CV_ADMIN_FOLDER_NAME.'/add-student/'.$row['id']); ?>" class="btn btn-success btn-xs">Payment</a>
           
           </td>
          </tr>
          <?php $i++; $count++;} ?>
        </table>
        <div class="pull-right"> <?php echo $links; ?> </div>
        <?php }else{ ?>
        <p style="color:#FF0000;">No record found.</p>
        <?php } ?>
      </div>
    </div>
  </div>
</div>
<script>
function reset_password(sid)
{
	var conf = confirm('Are you sure, you want to reset password.');
	if(conf)
	{
		jQuery.post('<?php echo site_url('admin/dashboard/reset_password') ?>', {sid : sid}, function(r)
		{
			if(r != '')
			{
				alert(r);
			}
		});
	}
}
</script>