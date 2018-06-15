

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        les convocation
        <small>any retard my get you excluted </small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
   

<?php
			$b=true; // boolean
			foreach ($notification as $key => $value) {

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
			
				echo "hi ", $_SESSION['profile']['nom']," " , $_SESSION['profile']['prenom'] , " you are asked to present at the scolarite before " , $value['date'] , "</h4> </div>";
				
				
				echo "<br/>";
			}

?>





 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
