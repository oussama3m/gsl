


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

      foreach ($groupe as $key => $group) { ?>


      <br/><a href="<?php echo base_url().'List_controller/list_group/'.$group['idgroupe'] ;?> " class="btn btn-primary btn-flat"><b><?php echo $group['langue']." ".$group['type']." "." level ".$group['niveau']." group ".$group['idgroupe'] ;?> </b> -> display list</a>



      <?php } ?>

      </div>

    

         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

