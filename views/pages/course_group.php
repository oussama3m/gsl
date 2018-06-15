 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        your groups 
        <small>click on the name to display the student list</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
          
    
     <div>                            
        
    <?php 

      foreach ($groups as $key => $group) { ?>


      <br/><a href="<?php echo base_url().'Course_controller/students/'.$group['idgroupe'] ;?> " class="btn btn-primary btn-flat"><b><?php echo " level ".$group['niveau']." group ".$group['idgroupe'] ;?> </b> -> display list</a>



      <?php } ?>

      </div>

    

         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
