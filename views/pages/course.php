


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

      foreach ($courses as $key => $item) { ?>


      <br/><a href="<?php echo base_url().'Course_controller/groups/'.$item['idformation'] ;?> " class="btn btn-primary btn-flat"><b><?php echo $item['idformation']." ".$item['langue']." ".$item['type']." ".$item['description'];?> </b> -> display list</a>



      <?php } ?>

      </div>

    

         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

