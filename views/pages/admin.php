<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        personal information
        <small>if there is any mistake you have to contact the administration</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
          
    <?php 
    $item=$_SESSION['profile'];
     ?>
    
          
    <div class="box">
            
    <table class="table table-striped">
      <caption><b>personal information</b></caption>
      
      <tr><th>id_admin: </th><td><?php echo $item['idadmin'];?></td></tr>
      <tr><th>firstname: </th><td><?php echo $item['prenom'];?></td></tr>
      <tr><th>lastname: </th><td><?php echo $item['nom'];?></td></tr>
      
      <tr><th>email: </th><td><?php echo $item['email'];?></td></tr>
      
      
    </table>
    </div>

         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

