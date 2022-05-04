<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <title>AlbertV</title>
        <link rel="stylesheet" type="text/css" href="../../css/Inici.css?v=<?php echo time(); ?>">       
    </head>
    <body>
        <?php
            include '../menus.php';
        ?>
        <div class="container-fluid p-5 bg-primary text-white text-center">
            <h1>Trivial</h1>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-p0yzg8lEnMxEVIvpqXTU8augkXWdh7FD5A&usqp=CAU"></img> 
        </div>
        <div id ="myDIV"   class="container col-sm-9">
        
        
            <div class="row">

                <div class="col-sm-3">
                    <h3>Anónim</h3>
                    <img src="https://image.shutterstock.com/image-vector/user-icon-trendy-flat-style-260nw-418179856.jpgalt" width="75%" height="75%"></img>
                </div>
                <div class="col-sm-3">
                    <h3>Registrat</h3>
                    <p>Apodo</p>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-3">
                    <div class="col-sm-"></div>       
                    <div id="grad1"></div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h2>Hall of Fame</h2>
                                </button>       
                            </h3>     
                            <div id="collapseOne" class="accordion-collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container col-sm-9">
            <div class="col-sm-12">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <h2>Instruccions</h2>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <section>   
                                <article>
                                    <p>Lorem ipsum</p>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include './footer.php';
        ?>
    </body>
</html>