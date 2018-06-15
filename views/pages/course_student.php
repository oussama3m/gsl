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


    <div class="row">  
    <div class="col-md-12">
        <a href="#" class="btn btn-success"><i class="fa fa-plus"></i> add student to group</a>
        <a href="#" class="btn btn-danger"><i class="fa fa-minus"></i> remove student from group</a>
        <a href="#" class="btn btn-primary"><i class="fa fa-exchange"></i> change teacher</a>

    </div>
    </div>


          
    
                                 
    <div class="row">  
    <div class="col-md-12">
      <div class="box">
        <div class="box-header">
          <b><?php echo $group['langue']." ".$group['type']." "." level ".$group['niveau']." group ".$group['idgroupe'] ;?> </b>
          <i class="pull-right">teacher : <?php echo $group['nom']." ".$group['prenom']."    " ;?><a href="<?php echo base_url().'Account_admin_controller/prof/'.$group['idprof'];?>" class="btn btn-primary btn-flat">profile <i class="fa fa-chevron-right"></i></a></i>  
        </div>
        <div class="box-body">

          <table class="table table-striped">
            <caption>students</caption>
                
            <tr><th>id: </th><th>first name: </th><th>last name: </th><th>genre: </th><th>birthday: </th><th>note: </th><th>profile </th></tr>

              <?php 

              
                foreach ($list as $key => $item) {
                  
              
              ?>


            <tr><td><?php echo $item['idetudiant'];?></td><td><?php echo $item['nom'];?></td><td><?php echo $item['prenom'];?></td><td><?php echo $item['genre'];?></td><td><?php echo $item['date_naissance'];?></td><td> <?php echo $item['note'];?> </td><td><a href="<?php echo base_url().'Account_admin_controller/student/'.$item['idetudiant'];?>" class="btn btn-info btn-flat"><i class="fa fa-chevron-right"></i></a></td>  </tr>

              
                  
              <?php } ?>

          </table>
          
        </div>

      

        

        <div class="box box-footer">

            <input type="hidden" name="groupe" value="<?php echo $group['idgroupe'] ;?>">
            <button type="submit" class="btn btn-success pull-right"> submit</button>
            <button type="reset" class="btn btn-danger pull-right"> reset</button>
            <a href="<?php echo base_url();?>List_controller/groups" class="btn btn-success pull-right">back</a>
            
        </div>

      
      </div> 
    </div>
    </div>


        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Collapsable</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div><!-- /.box-body -->
        </div><!-- /.box -->

    

        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Collapsable</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div><!-- /.box-body -->
        </div><!-- /.box -->


         
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

