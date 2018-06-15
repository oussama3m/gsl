

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        convocations
        <small>any retard my get you excluted </small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
   





<div class="row">
	<div class="col-md-6">
		<div class="box box-default">
		  <div class="box-header with-border">
		    <h3 class="box-title">students</h3>
		    <div class="box-tools pull-right">
		      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		    </div><!-- /.box-tools -->
		  </div><!-- /.box-header -->
		  <div class="box-body">
		    <?php
				$a=true; // boolean
				foreach ($notificationE as $key => $value) {

					if ($a==true) {
						$a=false;
						echo '	<div class="callout callout-info">
	                				<h4>';
					}
					else
					{
						$a=true;
						echo '	<div class="callout callout-success">
	                				<h4>';
					
					}
				
					echo "hi ", $value['nom']," " , $value['prenom'] , " you are asked to present at the scolarite before " , $value['date'] , "</h4> </div>";
					
					
					echo "<br/>";
				}

			?>
		  </div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
	<div class="col-md-6">
		<div class="box box-default">
		  <div class="box-header with-border">
		    <h3 class="box-title">teachers</h3>
		    <div class="box-tools pull-right">
		      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
		    </div><!-- /.box-tools -->
		  </div><!-- /.box-header -->
		  <div class="box-body">
		    <?php
				$b=true; // boolean
				foreach ($notificationP as $key => $value) {

					if ($b==true) {
						$b=false;
						echo '	<div class="callout callout-info">
	                				<h4>';
					}
					else
					{
						$b=true;
						echo '	<div class="callout callout-success">
	                				<h4>';
					
					}
				
					echo "hi ", $value['nom']," " , $value['prenom'] , " you are asked to present at the scolarite before " , $value['date'] , "</h4> </div>";
					
					
					echo "<br/>";
				}

			?>
		  </div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
</div>
		





 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
