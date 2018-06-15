


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        information persnnele
        <small>si il y a des fault il faut contacter la scolarite</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
          
    
    <?php 
    $item=$_SESSION['profile'];
     ?>
          
    <div class="box">
            
    <table class="table table-striped">
      <caption><b>personal account</b></caption>
      <tr><th>idprof: </th><td><?php echo $item['idprof'];?></td></tr>
      <tr><th>firstname: </th><td><?php echo $item['nom'];?></td></tr>
      <tr><th>lastname: </th><td><?php echo $item['prenom'];?></td></tr>
      <tr><th>genre: </th><td><?php echo $item['genre'];?></td></tr>
      <tr><th>date_naissance: </th><td><?php echo $item['date_naissance'];?></td></tr>
      <tr><th>lieu_naissance: </th><td><?php echo $item['lieu_naissance'];?></td></tr>
      <tr><th>profession: </th><td><?php echo $item['profession'];?></td></tr>
      <tr><th>adresse: </th><td><?php echo $item['adresse'];?></td></tr>
      <tr><th>email: </th><td><?php echo $item['email'];?></td></tr>
      <tr><th>phone: </th><td><?php echo $item['telephone'];?></td></tr>
      <tr><th>CV: </th><td><?php echo $item['telephone'];?></td></tr>
      <tr><th>lettre de motivation: </th><td><?php echo $item['telephone'];?></td></tr>
      
    </table>
    </div>

         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

