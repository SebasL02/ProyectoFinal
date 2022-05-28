var imagenes = document.getElementsByTagName("img");
for (let index =0; index < imagenes.length; index++){
    const imagen = imagenes[index];
    textoAlt = imagen.getAttribute("alt");
    if(textoAlt === '' || textoAlt === 'undefined' || textoAlt == 'icono'){
        imagen.outerHTML = imagen.outerHTML + "<span style='background:red; color:white;'> Revisar alt </span>"
    }else{
        imagen.outerHTML = imagen.outerHTML + "<span style='background:green; color:white;'> Todo correcto </span>"
    }
}