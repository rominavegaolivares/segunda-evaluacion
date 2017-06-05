<?php include("header.php");?>

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
      <h5>Referencia: <?php echo $csv[$a]['apa'];?> </h5>
      <div> <img src="<?php echo $csv[$a]['imagen'];?>" class="img-responsive"></div>
      <p><strong>Abstract: </strong> <?php echo $csv[$a]['texto'];?> </p>
      <p><strong>Palabras claves: </strong> <?php echo $csv[$a]['tag'];?> </p>
      <p><a href="<?php echo $csv[$a]['vinculo'];?>">Leer artículo completo</a> </p>
      <!--<h6>Agreguen aquí la información en Data</h6>-->
    </div>
  </article>
<?php };?>

</section>
    <!-- /.row -->



    <hr>


<?php include("footer.php");?>
