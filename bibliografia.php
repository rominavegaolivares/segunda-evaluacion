<?php include("header.php");?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
          <div class="col-lg-offset-2 col-lg-8">
            <h1>Bibliografía</h1>
          </div>
                <?php
                $json = file_get_contents('data/biblio.json');
                $datos = json_decode($json,true);
                $todos = count($datos);
                ?>

                    <!-- Main Content -->
                <div class="container">
                <div class="row">


                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <h3>Tengo <?php echo($todos);?> referencias bibliográficas, que son:</h3>

                <?php for($n = 0; $n < $todos; $n++){?>
                  <div class="post-preview">
                      <p><?php echo($datos[$n]["autor"]);?> (<?php echo($datos[$n]["publicacion"]);?>). <?php echo($datos[$n]["nombre"]);?>. <?php echo($datos[$n]["ciudad"]);?>:<?php echo($datos[$n]["ed"]);?></p>
                  </div>
                <?php }; ?>


                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <!-- /.row -->




        <hr>

        <?php include("footer.php");?>
