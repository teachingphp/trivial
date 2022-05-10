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

  function startGame(){
    document.getElementById("joc").innerHTML = 

`
    <div class="bg-whats rounded py-5 px-1 text-center flex-grow-1">
                <h1>Pregunta</h1>
                <div class="container-fluid py-3">
                  <div class="row">
                    <div class="col-0 col-md-2 col-xl-3">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                      <button class="btn btn-lg btn-primary btn-block">Resposta 1</button>
                      <button class="btn btn-lg btn-primary btn-block">Resposta 2</button>
                      <button class="btn btn-lg btn-primary btn-block">Resposta 3</button>
                      <button class="btn btn-lg btn-primary btn-block">Resposta 4</button>

                    </div>
                  </div>
                </div>
              </div>
`
  }