<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Avatar - Trivial</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/carousel.css" rel="stylesheet">
  </head>
  <body>
    


<main>

<?php

$files = scandir('../files/sources/imatges');
$i = 1;
$rutas ="";
foreach($files as $file) {
  if($file == '.' || $file == '..') continue;
  //print "../files/sources/imatges/" . $file . '<br>';
  $rutas .=   "../files/sources/imatges/" . $file . ";" ;
  $i++;
  
}

?>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <h2>Selecciona tu avatar</h2>
        <img id="imagen-avatar" class="bd-placeholder-img rounded-circle" width="140" height="140" src="../files/sources/imatges/pato lucas.jpg"></img>

       
        <svg xmlns="http://www.w3.org/2000/svg" onclick="cambiarAvatar('<?php echo $rutas ?>')" width="30" height="30" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
          <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>

        </svg>
        
      </div><!-- /.col-lg-4 -->
      
    </div><!-- /.row -->

    <br>
        Sube una imagen:
        <form action="../index.php" method="POST" enctype="multipart/form-data">
          
          <input type="file" name="fileToUpload" id="fileToUpload">
          <br>
          <input type="submit" value="Sube Imagen" name="submit">
          <input type="text" name="accio" value ="pujarfitxer" hidden>
        </form>
    

  </div><!-- /.container -->


</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<script src="../js/perfil.js?v=<?php echo time(); ?>"></script>
      
  </body>
</html>
