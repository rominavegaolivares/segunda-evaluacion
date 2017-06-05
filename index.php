
<?php include("header.php");?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->


        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/home-bg.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Construcción de un ideal de maternidad en la infancia por medio de juegos y juguetes infantiles </h2>
                </div>

        </div>
    </header>

    <!-- Page Content -->
    <section>
              <div class="col-lg-offset-2 col-lg-8">
                <h1>Artículos</h1>
              </div>
    <?php
    // basta con la línea de PHP para llamar al imdb-movies.csv y asignarlo a la variable $csv
    $csv = array_map('str_getcsv', file('data/articulos.csv'));
    // pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
    array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
    array_shift($csv);
    // ahora puedo crear un bucle "for(){}" que examine lo asignado como contenido a la variable $csv
    // lo que esté contenido en la variable se repetirá tantas veces como arreglos tenga la variable $csv
    for($a = 0; $a < $total = count($csv); $a++){?>
      <article class="row">
        <hr>

        <div class="col-lg-offset-2 col-lg-8">
          <h3> <?php echo $csv[$a]['id'];?>. <?php echo $csv[$a]['titulo'];?></h3>
          <div> <img src="<?php echo $csv[$a]['imagen'];?>" class="img-responsive"></div>
          <p><strong>Abstract: </strong> <?php echo $csv[$a]['texto'];?> </p>
          <p><a href="single.php">ver más</a> </p>
          <!--<h6>Agreguen aquí la información en Data</h6>-->
        </div>
      </article>
    <?php };?>

    </section>
        <!-- /.row -->



        <hr>


<?php include("footer.php");?>
