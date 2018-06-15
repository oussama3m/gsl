
	
	
	
	
	

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        time table
        <small>organised according to the groups</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
    
   
      
    	
		<?php 
		foreach ($edt as $idgr => $value) { ?> 


		<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $gr[$idgr]['langue']." ".$gr[$idgr]['type']." level ".$gr[$idgr]['niveau']." group ".$gr[$idgr]['idgroupe'] ;?> </h3>

              

              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>jour</th>
                  <th>heur</th>
                  <th>duree</th>
                  <th>salle</th>
                  
                </tr>
                <?php foreach ($value as $key => $valu) { ?>
                <tr>
                  <td><?php	echo $valu['jour']; ?></td>
                  <td><?php	echo $valu['temp']; ?></td>
                  <td><?php	echo $valu['duree']; ?></td>
                  <td><?php	echo $valu['class']; ?></td>
                  
                </tr>
                <?php } ?>
               
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>




		<?php		}?>
   

      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


