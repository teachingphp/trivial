function cambiarAvatar(rutas){
    //alert("Avatar");
    console.log (rutas);

    var rutasArr = rutas.split(';');

    rutasArr.forEach(cambio);

    function cambio(item) {
        if (item.length > 0){
            var image = document.getElementById("imagen-avatar");
            console.log (item);
            image.src = item;
        }
       
    }

    
  }