<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <title>Trivial</title>
        <link rel="stylesheet" type="text/css" href="../css/Inici.css?v=<?php echo time(); ?>">
               
    </head>
    <body>
        <?php
                include './menu.php';      
        ?>      
            <h1>
                <img src="../files/sources/imatges/titol.gif" style=center width="20%" height="20%"></img>
            </h1>
        
        <div id = "myDIV1" class="container">
            <div class="row">
                <div id ="myDIV2" class="container col-lg-6">
                    <div class="row">
                        <div id ="myDIV4" class="col-lg-10 ">
                            <h3><?php echo $traduccions["Anónimo"] ?></h3>
                            
                            <?php
                                include './crear-avatar.php';
                            ?>
                            <p></p>
                        </div>
                        <!--
                        <div id ="myDIV4" class="col-lg-5">    
                            <h3>Registrat</h3>
                            </?php
                                include './crear-avatar.php';
                            ?>
                            <p>Apodo</p>
                        </div>
                        !-->
                        <div id = "myDIV5" class="container col-lg-10">
                            <div class="row">
                                <button onclick="GuardarAvatar()">
                                    <h2><?php echo $traduccions["Crear Partida"] ?></h2>
                                </button>
                            </div>
                        </div>  
                    </div>
                </div>
                
                <div id ="myDIV2" class="col-lg-5">
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                
                                <button  class="accordion-button card text-white bg-dark mb-3 btn-block " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h3 ><?php echo $traduccions["Salón de la Fama"] ?></h3>
                                </button>       
                            </h3>

                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">

                                 <iframe class ="iframe" src="./hallfame_iframe.php"></iframe>
                            </div>    
                        </div>
                    </div>
                    
                </div>
            </div>

            <div id = "myDIV3" >
                <div class="row">
                <div class="d-flex align-content-start flex-wrap">
                </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button text-white bg-dark mb-3 btn-block d-block text center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h2><?php echo $traduccions["Instrucciones"] ?></h2>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div>
                                <section>   
                                    <article>
                                        <p>
                                            <?php echo $traduccions["!Juega a nuestro Trivial!"] ?>
                                            <br></br>
                                               Para iniciar un juego tienes que darle al botón de crear partida, seguidamente introduces 
                                               el nombre de la partida que vas a jugar junto con los ajustes de esta misma, finalmente si no estás registrado, se te pedirá
                                               que añadas un nombre temporalmente o directamente darle a jugar!
                                            <br></br>
                                            Para jugar no hace falta registrarse, pero si te interesa conseguir puntos para entrar en el ránking o simplemente disfrutar de una creación de avatar más divertida es recomendable!
                                                <br></br>
                                                
                                            </p>
                                    </article>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!--- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>-->

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>   
    <script>
    
        function GuardarAvatar(){
            
                    $.ajax({  
                    type: 'GET',  
                    url: '../index.php?accio=GuardarAvatar', 
                    data: { rutaimagen:  document.getElementById("imagen-avatar").src },
                    success: function(response) {
                        if (response == 1){
                            console.log("ha anat be");
                        }
                        window.location.href='./crearpartida.php';
        
                    }
            });

            
        }
    
    </script>

        <?php
            include './peu_pagina.php';
        ?>
    </body>
    
</html>