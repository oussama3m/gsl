


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Student lists 
        <small>si il y a des fault il faut contacter la scolarite</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
          
    
                                 
        
    <div class="box">

    <form action="<?php echo base_url(); ?>List_controller/remplir" method="post" >

    <table class="table table-striped">
      <caption><b><?php echo $group['langue']." ".$group['type']." "." level ".$group['niveau']." group ".$group['idgroupe'] ;?> </b></caption>
          
      <tr><th>id: </th><th>first name: </th><th>last name: </th><th>genre: </th><th>birthday: </th><th>note: </th></tr>

        <?php 

        
          foreach ($list as $key => $item) {
            
        
        ?>


      <tr><td><?php echo $item['idetudiant'];?></td><td><?php echo $item['nom'];?></td><td><?php echo $item['prenom'];?></td><td><?php echo $item['genre'];?></td><td><?php echo $item['date_naissance'];?></td><td> <input type="number" name="<?php echo $item['idetudiant'];?>" value="<?php echo $item['note'];?>"> </td>  </tr>

        
            
        <?php } ?>

    </table>

    <div class="box box-footer">

        <input type="hidden" name="groupe" value="<?php echo $group['idgroupe'] ;?>">
        <button type="submit" class="btn btn-success pull-right"> submit</button>
        <button type="reset" class="btn btn-danger pull-right"> reset</button>
        <a href="<?php echo base_url();?>List_controller/groups" class="btn btn-success pull-right">back</a>
        
    </div>

    </form>
    </div> 


    

         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

