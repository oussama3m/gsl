<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

     

      

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->

        <li class="active"><a href="<?php echo base_url();?>Stats_controller/admin"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>


        <!-- Account -->
        <li ><a href="<?php echo base_url();?>Account/profile"><i class="fa fa-link"></i> <span>Profile</span></a></li> 
        <!-- Account -->


         <!-- empoi du temp -->          
        <li><a href="<?php echo base_url();?>Course_controller/courses"><i class="fa fa-link"></i> <span>Courses</span></a></li> <!-- empoi du temp -->
         

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
            <li><a href="<?php echo base_url();?>Notification_controller/convocationa">Convocation</a></li>
            <li><a href="<?php echo base_url();?>Notification_controller/edta">Timetable</a></li>
          </ul>
        </li>
        <!-- notification -->



         <!-- accounts -->
        <li class="treeview">                                                                                       
          <a href="#"><i class="fa fa-link"></i> <span>Accounts</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>Notification_controller/convocationa">students</a></li>
            <li><a href="<?php echo base_url();?>Notification_controller/edta">teachers</a></li>
            <li><a href="<?php echo base_url();?>Notification_controller/edta">admins</a></li>
          </ul>
        </li>
        <!-- notification -->


         

        
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>