<?php 
$uri_seg_val = $this->uri->segment(2);
if($this->session->userdata(CV_SES_ROLEID) == CV_ADMIN_ROLE){ ?>
    
    <li class="<?php if($uri_seg_val == "add-user" or $uri_seg_val =="users-list") echo "active"; ?>">
        <a href="#">
            <i class="fa fa-user-circle-o"></i> <span>Users</span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php if($uri_seg_val =="add-user") echo "active"; ?>">
                <a href="<?php echo site_url(CV_ADMIN_FOLDER_NAME.'/add-user');?>"><i class="fa fa-plus"></i> Add</a>
            </li>
            <li class="<?php if($uri_seg_val =="users-list") echo "active"; ?>">
                <a href="<?php echo site_url(CV_ADMIN_FOLDER_NAME.'/users-list');?>">
                <i class="fa fa-list-ul"></i> Listing</a>
            </li>
        </ul>
    </li>
    
    
    
<?php } ?>

