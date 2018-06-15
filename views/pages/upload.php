<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        
        <small> </small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content"> 







		<div class="box">
		            <div class="box-header">
		              <h3 class="box-title">Uploads </h3>
		              <a href="" class="btn btn-lg btn-success pull-right"> new upload</a>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body no-padding">
		              <table class="table table-striped">
		                <tbody><tr>
		                  <th style="width: 20px">id</th>
		                  <th style="width: 100px">titre</th>
		                  <th style="width: 200px">description</th>
		                  <th style="width: 20px">type_article</th>
		                  <th >content</th>
		                  <th >action</th>
		                </tr>

		                <?php foreach ($upload as $key => $value) { ?>
		                	<tr>
			                  <td> <?php echo $value['idarticle']; ?> </td>
			                  <td><?php echo $value['titre']; ?></td>
			                  <td><?php echo $value['description']; ?></td>
			                  <td><?php echo $value['type_article']; ?></td>
			                  <td>


			                  		<?php
			                  			switch ($value['type_article']) {
			                  				case 'video':
			                  				?>
			                  					<video src="<?php echo $value['lien']; ?>" controls width="450px" >update your browser</video>
			                  				<?php
			                  					break;

			                  				case 'photo':
			                  				?>
			                  					<img src="<?php echo $value['lien']; ?>" width="450px">
			                  				<?php
			                  					break;

			                  				case 'audio':
			                  				?>
			                  					<audio src="<?php echo $value['lien']; ?>" controls  width="450px">update your browser</audio>

			                  				<?php
			                  					break;

			                  				case 'document':
			                  				?>

			                  				<a href="<?php echo $value['lien']; ?>"></a>

			                  				<?php
			                  					break;
			                  				
			                  				default:
			                  				?>

			                  				<a href="<?php echo $value['lien']; ?>"></a>

			                  				<?php
			                  					break;
			                  			} ?>
			                    
			                  </td>
			                  <td>

			                  		<div class="btn-group">
					                  <button type="button" class="btn btn-info">share</button>
					                  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					                    <span class="caret"></span>
					                    <span class="sr-only">Toggle Dropdown</span>
					                  </button>
					                  <ul class="dropdown-menu" role="menu">
					                    <li><a href="#">share</a></li>
					                    <li><a href="#">download</a></li>
					                    <li><a href="#">delete</a></li>
					                   </ul>
					                </div>



			                  		
			                  </td>
			                </tr>
		                <?php } ?>
		                
		              </tbody></table>
		            </div>
		            <!-- /.box-body -->
		</div>

	</section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->