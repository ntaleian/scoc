
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header nav-small-cap">DASHBOARD</li>
		
        <li class="<?php if($active_link == 'home'){ echo 'active'; } else { echo ''; } ?>">
          <a href="<?php echo base_url(); ?>pages">
            <i class="mdi mdi-minus-network"></i>
            <span>Home</span>
          </a>
        </li>

		<li class="header nav-small-cap">EXPECTATION FILES</li> 
        
        <li class="<?php if($active_link == 'upload_exp'){ echo 'active'; } else { echo ''; } ?>">
          <a href="<?php echo base_url() ?>pages/upload_exp">
            <i class="mdi mdi-cloud-upload"></i>
            <span>Upload Expectation File</span>
          </a>
        </li>

        <li class="<?php if($active_link == 'upload_bdown'){ echo 'active'; } else { echo ''; } ?>">
          <a href="<?php echo base_url() ?>pages/upload_bdown">
            <i class="mdi mdi-cloud-upload"></i>
            <span>Upload Breakdown File</span>
          </a>
        </li>

        <li class="<?php if($active_link == 'view_exp'){ echo 'active'; } else { echo ''; } ?>">
          <a href="<?php echo base_url() ?>pages/view_exp">
            <i class="mdi mdi-file-find"></i>
            <span>View Expectation Files</span>
          </a>
        </li>

		
        <li class="header nav-small-cap">PAYMENT SCHEDULES</li>		
		
          <li class="<?php if($active_link == 'upload_vs'){ echo 'active'; } else { echo ''; } ?>">
            <a href="<?php echo base_url() ?>pages/upload_vote_schedules">
              <i class="mdi mdi-cloud-upload"></i>
              <span>Upload Vote Schedules</span>
            </a>
          </li>

          <li class="<?php if($active_link == 'view_vs'){ echo 'active'; } else { echo ''; } ?>">
            <a href="<?php echo base_url() ?>pages/view_vote_schedules">
              <i class="mdi mdi-cloud-check"></i>
              <span>View Uploaded Schedules</span>
            </a>
          </li>


          <li class="header nav-small-cap">MANAGEMENT</li>

          <li class="<?php if($active_link == 'add_user'){ echo 'active'; } else { echo ''; } ?>">
            <a href="<?php echo base_url() ?>pages/add_user">
              <i class="mdi mdi-account"></i>
              <span>Add User</span>
            </a>
          </li>   
    
          <li class="<?php if($active_link == 'users'){ echo 'active'; } else { echo ''; } ?>">
            <a href="<?php echo base_url() ?>pages/manage_users">
              <i class="mdi mdi-account-multiple"></i>
              <span>Users List</span>
            </a>
          </li>
        
      </ul>
    </section>
  </aside>