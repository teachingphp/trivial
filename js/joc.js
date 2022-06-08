var preguntes;
var respostes;
var correctes;
var indicador = 1;
var quantes_preguntes = 0;
var puntuacio = 0;
var num_aciertos = 0;
var respostesJoc;
var IDjugador;
var IDpartida;
var listado ="";

function getCookie(name) {
    function escape(s) { return s.replace(/([.*+?\^$(){}|\[\]\/\\])/g, '\\$1'); }
    var match = document.cookie.match(RegExp('(?:^|;\\s*)' + escape(name) + '=([^;]*)'));
    return match ? match[1] : null;
}
window.onload = function() {
    var ultimoReg = getCookie("IDPARTIDA");
    // document.getElementById("linkCopiar").value = "http://localhost/triviaL/view/joc.php?id_partida=" + ultimoReg;
    var location = window.location.href;
    var directoryPath = location.substring(0, location.lastIndexOf("/")+1);
    if (ultimoReg) {
      document.getElementById("linkCopiar").value = directoryPath+"joc.php?id_partida=" + ultimoReg;
    }
    else{
      var queryString = window.location.search;
      var urlParams = new URLSearchParams(queryString);
      var params2 = urlParams.get('id_partida');

      document.getElementById("linkCopiar").value = directoryPath+"joc.php?id_partida="+ params2;
    }
     
  }
    

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

function createplayer() {

}

function next() {
    //console.log(quantes_preguntes);
    indicador++;
    if (indicador > quantes_preguntes) {
        finalitzaPartida();
        return;
    }
    data = preguntes[indicador];
    resp4 = respostes[data];

    imatge = imatges[data];
    totes_respostes = resp4.split(";");
    changeHMTL(data, totes_respostes, imatge);
}

function previous() {
    //console.log(indicador);
    indicador--;
    if (indicador == 0) {
        indicador = quantes_preguntes;
    }
    data = preguntes[indicador];
    resp4 = respostes[data];
    imatge = imatges[data];
    totes_respostes = resp4.split(";");


    changeHMTL(data, totes_respostes, imatge);
}

function changeHMTL(pregunta, totes_respostes, imatge) {
    elementos = [0, 1, 2, 3];
    shuffleArray(elementos);
    respostesJoc = "";
    //console.log(elementos);
    for (let i = 0; i < elementos.length; i++) {
        respostesJoc = respostesJoc + `<button id ="resp` + elementos[i] + `" class="btn btn-lg btn-secondary btn-block" onclick="validaResposta(` + indicador + ',' + elementos[i] + `)">` + totes_respostes[elementos[i]] + `</button>`;
    }
    document.getElementById("joc").innerHTML =

        `
    <div class="bg-whats rounded py-5 px-1 text-center flex-grow-1">
                <img src="` + imatge + `" alt="..." class="img-thumbnail">
                <h1>` + pregunta + `</h1>
                <div class="container-fluid py-3">
                  <div class="row">
                    <div class="col-0 col-md-2 col-xl-3">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                    ` +
        respostesJoc +
        // <button id ="resp0" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 0 +`)">`+totes_respostes[0]+`</button>
        // <button id ="resp1" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 1 +`)">`+totes_respostes[1]+`</button>
        // <button id ="resp2" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 2 +`)">`+totes_respostes[2]+`</button>
        // <button id ="resp3" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 3 +`)">`+totes_respostes[3]+`</button>
        `
                    </div>
                    <hr>
                    <button class="btn btn-lg btn-warning btn-block disabled" id="nextButton" onclick ="next()">Next</button>
                    <!-- <button class="btn btn-lg btn-warning btn-block" onclick ="previous()">Previous</button> -->
                  </div>
                </div>
              </div>
`
}

function deshabilitaBotons() {
    for (i = 0; i < 4; i++) {
        var idresposta = "resp" + i;
        var but = document.getElementById(idresposta);
        but.disabled = true;
    }
}

function mostraCorrecta(resposta_ok, respostes_pregunta) {
    for (i = 0; i < 4; i++) {
        if (resposta_ok == respostes_pregunta[i]) {
            var idresposta = "resp" + i;
            var but = document.getElementById(idresposta);
            but.classList.add('btn-success');
        }

    }
}

function validaResposta(num_pregunta, resposta_a_revisar) {
    clau_pregunta = preguntes[num_pregunta];
    resposta_ok = correctes[clau_pregunta];
    respostes_pregunta = respostes[clau_pregunta].split(";");
    //alert(respostes_pregunta[resposta_a_revisar]);
    var idresposta = "resp" + resposta_a_revisar;
    var but = document.getElementById(idresposta);
    if (resposta_ok == respostes_pregunta[resposta_a_revisar]) {
        //alert ("ERES UNA MAQUINA");
        but.classList.add('btn-success');
        deshabilitaBotons();
        num_aciertos++;
        puntuacio = puntuacio + 5;
        console.log("num_aciertos: " + num_aciertos);
        console.log("puntuacio: " + puntuacio);
    } else {
        //alert ("ERES UN PETARDO");
        but.classList.add('btn-danger');
        deshabilitaBotons();
        mostraCorrecta(resposta_ok, respostes_pregunta);
        console.log("num_aciertos: " + num_aciertos);
        console.log("puntuacio: " + puntuacio);
    }
    var butoNext = document.getElementById("nextButton");
    butoNext.classList.remove("disabled");
}

function crearPartida() {
    alert("YA TIENES LA PARTIDA CREADA");
    var nombrePartida = "";
    if (document.getElementById("nombreDeLaPartida").value == "") {
        nombrePartida = "Partida de Anonimo";
    } else {
        nombrePartida = document.getElementById("nombreDeLaPartida").value;
    }
    location.href = "../index.php?accio=crearpartida&nombrepartida=" + nombrePartida;
}

function finalitzaPartidaAjax(){
  $.ajax({  
    type: 'GET',  
    url: '../index.php?accio=finalitzaPartida', 
    data: { nom_jugador: getCookie ("NOMJUGADOR"), id_partida : IDpartida, id_jugador: IDjugador, punts: puntuacio, acerts: num_aciertos },
    success: function(response) {
          //console.log(response);
        if(response==0){
          
        }
        else if(response==1){
        //   alert("Dades de la partida pujades");
            resultsAjax();
        }

    }
});

}

function resultsTest(){
    document.getElementById("playersList").innerHTML =
    `
                    
                    <div class=""><div>
                      <div class="float-left ml-1">
                        <div><span class="badge badge-dark">1</span> Player 1
                      </div>
                      <div>
                      </div>
                    </div>
                    <div class="float-right mr-1">
                      <div>50 puntos</div>
                      <div>10 aciertos</div></div><div class="clearfix">
      
                      </div>
                    </div>
                  </div>
                  <br>
                  `
}

function resultsAjax(){
    $.ajax({  
        type: 'GET',  
        url: '../index.php?accio=resultatsPartida', 
        data: { id_partida : IDpartida },
        success: function(response) {
              //console.log(response);
            
            if(response==0){
              
            }
            else if(response!=0){
                // console.log(response);
                var myList = JSON.parse(response);
                console.log(myList);
                console.log(Object.keys(myList).length);
                listado ="";
                for (let i = 1; i < Object.keys(myList).length + 1; i++)  {
                    listado = listado +
                    `
                    <div class=""><div>
                      <div class="float-left ml-1">
                        <div><span class="badge badge-dark">`+i+`</span> `+myList[i][0]+`
                      </div>
                      <div>
                      </div>
                    </div>
                    <div class="float-right mr-1">
                      <div>`+myList[i][1]+` puntos</div>
                      <div>`+myList[i][2]+` aciertos</div></div><div class="clearfix">
      
                      </div>
                    </div>
                  </div>
                  <br>
                  `;
                }

              document.getElementById("playersList").innerHTML = listado;
              document.getElementById("listButton").classList.remove("disabled");
            }

        }
  });

}

function finalitzaPartida() {
    document.getElementById("joc").innerHTML =

        `
    <div class="bg-whats rounded py-5 px-1 text-center flex-grow-1">
                 <h1>RESUMEN</h1>
                <div class="container-fluid py-3">
                  <div class="row">
                    <div class="col-0 col-md-2 col-xl-3">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                    
                    <canvas id="ChartResumen" style="width:100%;max-width:700px"></canvas>
                    <br>
                    <button type="button" class="btn btn-info">Puntuación total: ` + puntuacio + `</button>
                    </div>
                    <hr>
                  </div>
                </div>
              </div>
`
    generateGraph();
    finalitzaPartidaAjax();
    // resultsAjax();
}

  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }

  function crearJugadorAssigPartida(idpartida){
      $.ajax({  
        type: 'GET',  
        url: '../index.php?accio=crearJugador', 
        data: { nom_jugador: getCookie ("NOMJUGADOR"), id_partida : idpartida },
        success: function(response) {
              //console.log(response);
            if(response==0){
              location.reload();
            }
            else if(response!=0){
              IDjugador = response;
              // alert("Vamos a jugar"+IDjugador);
              
            }

        }
  });

  }

function startGame(preguntesjson, respostesjson, correctesjson, imatgesjson, idpartida) {
    IDpartida = idpartida;
    crearJugadorAssigPartida(IDpartida);
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
    elementos = [0, 1, 2, 3];
    shuffleArray(elementos);
    respostesJoc = "";
    //console.log(elementos);
    for (let i = 0; i < elementos.length; i++) {
        respostesJoc = respostesJoc + `<button id ="resp` + elementos[i] + `" class="btn btn-lg btn-secondary btn-block" onclick="validaResposta(` + indicador + ',' + elementos[i] + `)">` + resposta1[elementos[i]] + `</button>`;
    }
    //console.log(respostesJoc);
    document.getElementById("joc").innerHTML =

        `
    <div class="bg-whats rounded py-5 px-1 text-center flex-grow-1">
                <img src="` + imatge + `" alt="..." class="img-thumbnail">
                <h1>` + data + `</h1>
                <div class="container-fluid py-3">
                  <div class="row">
                    <div class="col-0 col-md-2 col-xl-3">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">` +
        respostesJoc +

        // <button id ="resp0" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 0 +`)">`+resposta1[0]+`</button>
        //<button id ="resp1" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 1 +`)">`+resposta1[1]+`</button>
        //<button id ="resp2" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 2 +`)">`+resposta1[2]+`</button>
        //<button id ="resp3" class="btn btn-lg btn-primary btn-block" onclick="validaResposta(`+indicador+',' + 3 +`)">`+resposta1[3]+`</button>
        `
                    </div>
                    <hr>
                    <button class="btn btn-lg btn-warning btn-block disabled" id="nextButton" onclick ="next()">Next</button>
                    <!-- <button class="btn btn-lg btn-warning" btn-block " onclick ="previous()">Previous</button> -->
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

function generateGraph() {

    var errores = (quantes_preguntes - num_aciertos);
    var xValues = ["Aciertos", "Errores"];
    var yValues = [num_aciertos, errores];
    var barColors = ["green", "red"];

    new Chart("ChartResumen", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "Resumen"
            }
        }
    });
}

function submitUsername() {
    if (document.getElementById("usernameInput").value !== null) {
        document.cookie = "NOMJUGADOR=" + document.getElementById("usernameInput").value;
        document.getElementById("anon").classList.remove("d-none");
        document.getElementById("game").classList.remove("disabledbutton");
        location.reload();
    }
}
