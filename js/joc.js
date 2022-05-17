var preguntes;
var respostes;
var correctes;
var indicador = 1;
var quantes_preguntes =0;
var puntuacio = 0;
var num_aciertos = 0;

function copiarPortapapeles() {
    /* Get the text field */
    var copyText = document.getElementById("linkCopiar");
  
    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
  
     /* Copy the text inside the text field */
    navigator.clipboard.writeText(copyText.value);
  
    /* Alert the copied text */
    console.log("Copied the text: " + copyText.value);
  }

  function myFunction(item, index) {
    text += index + ": " + item + "<br>"; 
  }

  function next(){
    //console.log(quantes_preguntes);
    indicador++;
    if (indicador > quantes_preguntes){
      indicador = 1;
    }
    data = preguntes[indicador];
    resp4 = respostes[data];
   
    imatge = imatges[data];
    totes_respostes = resp4.split(";");
    changeHMTL(data, totes_respostes, imatge);
  }

  function previous(){
    //console.log(indicador);
    indicador--;
    if (indicador == 0){
      indicador = quantes_preguntes;
    }
    data = preguntes[indicador];
    resp4 = respostes[data];
    imatge = imatges[data];
    totes_respostes = resp4.split(";");
    
    
    changeHMTL(data, totes_respostes, imatge);
  }

  function changeHMTL(pregunta, totes_respostes, imatge){
    document.getElementById("joc").innerHTML = 

`
    <div class="bg-whats rounded py-5 px-1 text-center flex-grow-1">
                <img src="`+imatge+`" alt="..." class="img-thumbnail">
                <h1>`+pregunta+`</h1>
                <div class="container-fluid py-3">
                  <div class="row">
                    <div class="col-0 col-md-2 col-xl-3">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                      <button id ="resp0" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 0 +`)">`+totes_respostes[0]+`</button>
                      <button id ="resp1" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 1 +`)">`+totes_respostes[1]+`</button>
                      <button id ="resp2" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 2 +`)">`+totes_respostes[2]+`</button>
                      <button id ="resp3" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 3 +`)">`+totes_respostes[3]+`</button>

                    </div>
                    <hr>
                    <button class="btn btn-lg btn-primary btn-block" onclick ="next()">Next</button>
                    <button class="btn btn-lg btn-primary btn-block" onclick ="previous()">Previous</button>
                  </div>
                </div>
              </div>
`
  }

  function deshabilitaBotons(){
    for(i=0;i<4;i++){
      var idresposta = "resp" +i;
      var but = document.getElementById(idresposta);
      but.disabled = true;
    }
  }

  function mostraCorrecta(resposta_ok, respostes_pregunta){
    for(i=0;i<4;i++){
      if (resposta_ok == respostes_pregunta[i]){
        var idresposta = "resp" +i;
        var but = document.getElementById(idresposta);
        but.classList.add('btn-success');
      }
      
    }
  }

  function validaResposta(num_pregunta, resposta_a_revisar){
    clau_pregunta = preguntes[num_pregunta];
    resposta_ok = correctes[clau_pregunta];
    respostes_pregunta = respostes[clau_pregunta].split(";");
    //alert(respostes_pregunta[resposta_a_revisar]);
    var idresposta = "resp" + resposta_a_revisar;
    var but = document.getElementById(idresposta);
    if (resposta_ok == respostes_pregunta[resposta_a_revisar]){
      //alert ("ERES UNA MAQUINA");
      but.classList.add('btn-success');
      deshabilitaBotons();
      num_aciertos ++;
      puntuacio = puntuacio + 5;
      console.log("num_aciertos: " + num_aciertos);
      console.log("puntuacio: " + puntuacio);
    }else{
      //alert ("ERES UN PETARDO");
      but.classList.add('btn-danger');
      deshabilitaBotons();
      mostraCorrecta(resposta_ok, respostes_pregunta);
      console.log("num_aciertos: " + num_aciertos);
      console.log("puntuacio: " + puntuacio);
    }
  }

  function crearPartida(){
    alert("YA TIENES LA PARTIDA CREADA");
    location.href = "../index.php?accio=crearpartida";
  }

  function startGame(preguntesjson, respostesjson, correctesjson){
  function startGame(preguntesjson, respostesjson, correctesjson,imatgesjson){
    preguntes = preguntesjson;
    respostes = respostesjson;
    correctes = correctesjson;
    imatges = imatgesjson;
    quantes_preguntes = Object.keys(preguntes).length;
    //console.log(respostes);
    data = preguntes[1];
    //data.forEach(myFunction);
    resposta1 = respostes[preguntes[1]].split(";");
    imatge = imatges[preguntes[1]];
    //console.log(resposta1.split(";"));
    document.getElementById("joc").innerHTML = 

`
    <div class="bg-whats rounded py-5 px-1 text-center flex-grow-1">
                <img src="`+imatge+`" alt="..." class="img-thumbnail">
                <h1>`+data+`</h1>
                <div class="container-fluid py-3">
                  <div class="row">
                    <div class="col-0 col-md-2 col-xl-3">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                      <button id ="resp0" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 0 +`)">`+resposta1[0]+`</button>
                      <button id ="resp1" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 1 +`)">`+resposta1[1]+`</button>
                      <button id ="resp2" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 2 +`)">`+resposta1[2]+`</button>
                      <button id ="resp3" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 3 +`)">`+resposta1[3]+`</button>

                    </div>
                    <hr>
                    <button class="btn btn-lg btn-primary btn-block" onclick ="next()">Next</button>
                    <button class="btn btn-lg btn-primary btn-block" onclick ="previous()">Previous</button>
                  </div>
                </div>
              </div>
`
  }

  /* Randomize array in-place using Durstenfeld shuffle algorithm */
function shuffleArray(array) {
  for (var i = array.length - 1; i > 0; i--) {
      var j = Math.floor(Math.random() * (i + 1));
      var temp = array[i];
      array[i] = array[j];
      array[j] = temp;
  }
}
}
