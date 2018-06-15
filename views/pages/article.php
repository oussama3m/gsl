   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        stuffs published by your teachers 
        <small>Organized according to the date of publication </small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">        

  



            <ul class="timeline">


                <?PHP
                 $d ="0000-00-00";
                 foreach($timeline as $key => $value)
                {    
                     // <!-- timeline time label -->

                        if ($d != $value['date'])
                        { 
                            $d=$value['date'];
                            echo ' 

                            <li class="time-label">
                                <span class="bg-red">',
                                    $d ,'
                                </span>
                            </li>  ';

                         } 


                $gr=$groupe[$value['groupe_idgroupe']];


                switch ($value['type_article'])
                {
                    case "video" : ?>

                                    <!-- timeline item -->
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-video-camera bg-maroon"></i>
                                        <div class="timeline-item">
                                            <span class="time"><?php echo $gr['langue']." ".$gr['type']." level ".$gr['niveau'] ;?></span>

                                            <h3 class="timeline-header"><?php echo $value['titre'] ?> </h3>

                                            <div class="timeline-body">
                                                <?php echo $value['description'] ?><br/>
                                                <hr/>
                                                <div class="embed-responsive embed-responsive-16by9">
                                                <video src="<?php echo $value['lien'] ?>" controls width="450px" > up date your browser</video>
                                                </div>
                                            </div>
                                            

                                            <div class="timeline-footer">
                                                

                                                <form action="<?php echo base_url(); ?>Article_controller/download" method="POST">
                                                    <input type="hidden" name="titre" value="<?php echo $value['titre'] ?>">
                                                    <input type="hidden" name="lien" value="<?php echo $value['lien'] ?>">
                                                    <button type="submit" class="btn btn-success">download</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->



                    <?php break;
                    case "photo" :?>

                                    <!-- timeline item -->
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-camera bg-purple"></i>
                                        <div class="timeline-item">
                                            <span class="time"><?php echo $gr['langue']." ".$gr['type']." level ".$gr['niveau'] ;?></span>

                                            <h3 class="timeline-header"><?php echo $value['titre'] ?></h3>

                                            <div class="timeline-body">
                                                <?php echo $value['description'] ?><br/>
                                                <hr/>
                                                <div class="embed-responsive embed-responsive-16by9">
                                                <embed src="<?php echo $value['lien'] ?>" >
                                                </div>
                                            </div>

                                            <div class="timeline-footer">
                                                <form action="<?php echo base_url(); ?>Article_controller/download" method="POST">
                                                    <input type="hidden" name="titre" value="<?php echo $value['titre'] ?>">
                                                    <input type="hidden" name="lien" value="<?php echo $value['lien'] ?>">
                                                    <button type="submit" class="btn btn-success">download</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->


                    <?php break;
                    case "audio" :?>

                                    <!-- timeline item -->
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-music bg-red"></i>
                                        <div class="timeline-item">
                                            <span class="time"><?php echo $gr['langue']." ".$gr['type']." level ".$gr['niveau'] ;?></span>

                                            <h3 class="timeline-header"><?php echo $value['titre'] ?></h3>

                                            <div class="timeline-body">
                                                <?php echo $value['description'] ?><br/>
                                                <hr/><audio src="<?php echo $value['lien'] ?> " controls>up date your browser</audio>
                                            </div>

                                            <div class="timeline-footer">
                                                <form action="<?php echo base_url(); ?>Article_controller/download" method="POST">
                                                    <input type="hidden" name="titre" value="<?php echo $value['titre'] ?>">
                                                    <input type="hidden" name="lien" value="<?php echo $value['lien'] ?>">
                                                    <button type="submit" class="btn btn-success">download</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->
                    <?php break;
                    case "document" :?>

                                    <!-- timeline item -->
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-file-text bg-blue"></i>
                                        <div class="timeline-item">
                                            <span class="time"><?php echo $gr['langue']." ".$gr['type']." level ".$gr['niveau'] ;?></span>

                                            <h3 class="timeline-header"><?php echo $value['titre'] ?> </h3>

                                            <div class="timeline-body">
                                                <?php echo $value['description'] ?>
                                            </div>

                                            <div class="timeline-footer">
                                                <a href="<?php echo $value['lien'] ?>" class="btn btn-success ">download</a>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->



                    <?php break;
                    default :?>

                                    <!-- timeline item -->
                                    <li>
                                        <!-- timeline icon -->
                                        <i class="fa fa-file bg-blue"></i>
                                        <div class="timeline-item">
                                            <span class="time"><?php echo $gr['langue']." ".$gr['type']." level ".$gr['niveau'] ;?></span>

                                            <h3 class="timeline-header"><?php echo $value['titre'] ?></h3>

                                            <div class="timeline-body">
                                                <?php echo $value['description'] ?>
                                            </div>

                                            <div class="timeline-footer">
                                                <form action="<?php echo base_url(); ?>Article_controller/download" method="POST">
                                                    <input type="hidden" name="titre" value="<?php echo $value['titre'] ?>">
                                                    <input type="hidden" name="lien" value="<?php echo $value['lien'] ?>">
                                                    <button type="submit" class="btn btn-success">download</button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- END timeline item -->



                    <?php
                }
                ?>
                         
                
                                    <!-- /.timeline-label -->

                 

                
                               
                <?php } ?>

                ...

            </ul>
                              

</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  