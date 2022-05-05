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
            <h1>
                <img src="../../files/sources/imatges/titol.gif"style=center width="20%" height="20%"></img>
            </h1>
        </div>
        <div id ="myDIV1"   class="container col-sm-9" class="container col-sm-9">
            
                <div id ="myDIV2" class="col-sm-9">
                        <div class="col-sm-1">
                            <h3>Anónim</h3>
                            <img src="https://image.shutterstock.com/image-vector/user-icon-trendy-flat-style-260nw-418179856.jpgalt" width="75%" height="75%"></img>
                        </div>
                        <div class="col-sm-1">
                        <div class="col-sm-1">
                            <h3>Registrat</h3>
                            <p>Apodo</p>
                        </div>
                    </div>
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
        <div id ="myDIV3" class="container col-sm-9">
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
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus minima dignissimos ea, qui nulla reiciendis obcaecati quasi animi voluptatem non unde voluptate deleniti, corrupti ipsa illo! Necessitatibus vel odit voluptatibus! Ipsa ab consectetur tenetur magnam perferendis pariatur, soluta illo eaque? Perferendis itaque exercitationem eveniet et iusto, porro perspiciatis blanditiis dolor amet suscipit!
                                    Mollitia inventore unde aut velit asperiores soluta quod repellendus quasi veritatis quae voluptatum atque, perferendis cumque quisquam assumenda cupiditate incidunt eligendi doloremque? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique doloribus perspiciatis facere amet nostrum fugit, ipsum nesciunt velit placeat quaerat sint vero tempore mollitia aliquid impedit numquam, modi voluptatum consequatur.
                                    Mollitia inventore unde aut velit asperiores soluta quod repellendus quasi veritatis quae voluptatum atque, perferendis cumque quisquam assumenda cupiditate incidunt eligendi doloremque? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique doloribus perspiciatis facere amet nostrum fugit, ipsum nesciunt velit placeat quaerat sint vero tempore mollitia aliquid impedit numquam, modi voluptatum consequatur.
                                    </p>
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint nam voluptatem eum architecto quos saepe nisi eveniet, iste non vel quidem et minus. Recusandae quia aspernatur explicabo ea similique esse?</p>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia inventore unde aut velit asperiores soluta quod repellendus quasi veritatis quae voluptatum atque, perferendis cumque quisquam assumenda cupiditate incidunt eligendi doloremque? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique doloribus perspiciatis facere amet nostrum fugit, ipsum nesciunt velit placeat quaerat sint vero tempore mollitia aliquid impedit numquam, modi voluptatum consequatur.</p>
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