<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

     

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->

        <li class="active"><a href="<?php echo base_url();?>Article_controller/timeline"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>


        <!-- Account -->
        <li ><a href="<?php echo base_url();?>Account/profile"><i class="fa fa-link"></i> <span>Profile</span></a></li> 
        <!-- Account -->
         

         <!-- empoi du temp -->          
        <li><a href="<?php echo base_url();?>Account/edt/"><i class="fa fa-link"></i> <span>Timetable</span></a></li> <!-- empoi du temp -->


        <!-- notification -->
        <li class="treeview">                                                                                       
          <a href="#"><i class="fa fa-link"></i> <span>Notification</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Notification_controller/convocation">Convocation</a></li>
            <li><a href="<?php echo base_url();?>Notification_controller/edt">Timetable</a></li>
          </ul>
        </li>
        <!-- notification -->

        <!-- uploads -->
        <li class="treeview">                                                                                       
          <a href="#"><i class="fa fa-link"></i> <span>Uploads</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Article_controller/disp">ALL</a></li>
            <li><a href="<?php echo base_url();?>Article_controller/dispt/video">video</a></li>
            <li><a href="<?php echo base_url();?>Article_controller/dispt/audio">audio</a></li>
            <li><a href="<?php echo base_url();?>Article_controller/dispt/photo">image</a></li>
            <li><a href="<?php echo base_url();?>Article_controller/dispt/document">document</a></li>
            <li><a href="<?php echo base_url();?>Article_controller/dispt/other">other</a></li>
          </ul>
        </li>
        <!-- uploads -->



        <!-- empoi du temp -->          
        <li><a href="<?php echo base_url();?>List_controller/groups"><i class="fa fa-link"></i> <span>Student Lists</span></a></li> <!-- empoi du temp -->






         

        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>