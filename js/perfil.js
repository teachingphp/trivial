var i = 1;
var rutasImg;
var image = document.getElementById("imagen-avatar");

function next(rutas){
  rutasImg = rutas.split(';');
  if (i == rutasImg.length-1){
    i = 1;
  }
  image.src = rutasImg[i];
  i++;
  //console.log(i);
}

function previous(rutas){
  rutasImg = rutas.split(';');
  image.src = rutasImg[i];
  i--;
}


function cambiarAvatar(rutas){
    //alert("Avatar");
    //console.log (rutas);

    var rutasArr = rutas.split(';');

    //console.log (rutasArr);
    //console.log (Math.floor( Math.random() * rutasArr.length ));
 
    var image = document.getElementById("imagen-avatar");
    //console.log (rutasArr[i]);
    var ruta_imatge = rutasArr[Math.floor(Math.random()*rutasArr.length)];
    if (ruta_imatge != ""){

    }else{
      ruta_imatge = rutasArr[Math.floor(Math.random()*rutasArr.length)];
    }
    image.src = ruta_imatge;

    // rutasArr.forEach(cambio);

    // function cambio(item) {
    //     if (item.length > 0){
    //         var image = document.getElementById("imagen-avatar");
    //         console.log (item);
    //         image.src = item;
    //     }
       
    // }

    
  }

  function randomIntFromInterval(min, max) { // min and max included 
    return Math.floor(Math.random() * (max - min + 1) + min)
  }

  function random(mn, mx) {
    return Math.random() * (mx - mn) + mn;
}
  