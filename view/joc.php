<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Modals · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/modals/">

    

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
    <link href="../css/joc.css?v=<?php echo time(); ?>" rel="stylesheet">
  </head>
  <body>
  <?php
    include 'menus.php';
  ?>




<div class="container px-1">



<div id="game">
  <div class="bg-dark bg-dark rounded">
    <div class="p-1">
      <div class="float-end">
        <a href="" class="btn btn-sm btn-danger">
          Abandonar
        </a>
      </div>
      <div class="p-1">
        <h5 class="text-light text-center m-0">Partida X</h5>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-7 col-xl-8 p-0 d-flex flex-column">
          <div class="flex-grow-1 d-flex flex-column">
            <div class="p-1">
              <div class="alert alert-primary p-1 m-0">
                <div class="d-none d-sm-block float-left pr-2">
                  
                </div>
                <strong>¿Quieres jugar con tus amigos?</strong>
                <br>¡Comparte con ellos el enlace a la partida!<br>
                <div class="input-group link-input">
                  <input type="text" class="form-control" readonly="" value="">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary" data-clipboard-text="" title="Copiar">
                  
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="p-1 flex-grow-1 d-flex flex-column">
              <div class="bg-whats rounded py-5 px-1 text-center flex-grow-1">
                <h1>Inicia la partida</h1>
                <div class="container-fluid py-3">
                  <div class="row">
                    <div class="col-0 col-md-2 col-xl-3">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                      <button class="btn btn-lg btn-primary btn-block">¡A jugar!</button>
                      <button type="button" class="btn btn-lg btn-secondary btn-block" data-bs-toggle="modal" data-bs-target="#ModalConfig">
                        Ajustes
                      </button>

                      <!-- Modal CONFIGURACIO PARTIDA -->
                      <div class="modal fade" id="ModalConfig" tabindex="-1" role="dialog" aria-labelledby="ModalConfigLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="ModalConfigLabel">Configuracion Partida</h5>
                              <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Configuracio de la partida 
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-5 col-xl-4 p-0 d-flex flex-column">
          <div class="p-1 flex-grow-1">
            <div class="scoreboard bg-whats rounded">
              <div class=""><div>
                <div class="float-left ml-1">
                  <div><span class="badge badge-dark">1</span> Jugador 1
                </div>
                <div>
                </div>
              </div>
              <div class="float-right mr-1">
                <div>0 puntos</div>
                <div>0 aciertos</div></div><div class="clearfix">

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>








 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>
