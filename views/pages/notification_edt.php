<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        suden changement dans l'emploi du temp
        <small>Optional description</small>
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
			
				echo "formation: " ,$groupe[$value['groupe_idgroupe']]['langue'] ,"  ",
             "groupe: ",  $groupe[$value['groupe_idgroupe']]['idgroupe'],"  ",
             "niveau: " , $groupe[$value['groupe_idgroupe']]['niveau'],"  </h4>",

             " <p> la seance de ", $value['date1'] ," ",$value['temp1'] , " sera retardi a ", $value['date2'] ," ",$value['temp2'] , " </p> </div>";
				
				
				echo "<br/>";
			}

?>





 </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
