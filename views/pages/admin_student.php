


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
    $item=$student[0];
     ?>
          
    


     <div class="row">
       
       <div class="col-md-12">

       <a href="<?php echo base_url().'Account_admin_controller/active_s/'.$item['idetudiant'];?>" class="btn btn-success"><i class="fa fa-hand-o-right"></i> active account</a>
       <a href="<?php echo base_url().'Account_admin_controller/block_s/'.$item['idetudiant'];?>" class="btn btn-warning"><i class="fa fa-hand-stop-o"></i> block account</a>
       <a href="#" class="btn btn-danger"><i class="fa fa-remove"></i> delelte account</a>
       <a href="#" class="btn btn-info"><i class="fa fa-envelope"></i> send convocation</a>
         
       </div>
     </div>

  <div class="row">
  <div class="col-md-12">
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title">students</h3>
        <div class="box-tools pull-right">

          <a href="#" class="btn btn-box-tool" ><i class="fa fa-edit"></i>edit</a>
          <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div><!-- /.box-tools -->
        
          
        
      </div><!-- /.box-header -->
      <div class="box-body">
        <table class="table table-striped">
          <caption><b>personal information</b></caption>
          <tr><th>state: </th><td><?php echo $item['etat'];?></td></tr>
          <tr><th>id_student: </th><td><?php echo $item['idetudiant'];?></td></tr>
          <tr><th>firstname: </th><td><?php echo $item['prenom'];?></td></tr>
          <tr><th>lastname: </th><td><?php echo $item['nom'];?></td></tr>
          <tr><th>gender: </th><td><?php echo $item['genre'];?></td></tr>
          <tr><th>birthday: </th><td><?php echo $item['date_naissance'];?></td></tr>
          <tr><th>place of birth: </th><td><?php echo $item['lieu_naissance'];?></td></tr>
          <tr><th>profession: </th><td><?php echo $item['profession'];?></td></tr>
          <tr><th>adresse: </th><td><?php echo $item['adresse'];?></td></tr>
          <tr><th>email: </th><td><?php echo $item['email'];?></td></tr>
          <tr><th>phone: </th><td><?php echo $item['telephone'];?></td></tr>
            
      
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- col -->
  </div><!-- row -->

         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

