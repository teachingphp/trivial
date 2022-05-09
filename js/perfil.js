function cambiarAvatar(rutas){
    //alert("Avatar");
    //console.log (rutas);

    var rutasArr = rutas.split(';');

    console.log (rutasArr.length);
    console.log (Math.floor( Math.random() * rutasArr.length ));
    i = Math.floor( Math.random() * rutasArr.length ) ;

    var image = document.getElementById("imagen-avatar");
    console.log (rutasArr[i]);
    image.src = rutasArr[i];

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
  