document.addEventListener("DOMContentLoaded", function (event) {
    var divOpiniones = document.getElementById("partidos");
  
    // Creando/Consultado el array con datos 
    // a partir de lo que exista en localStorage
    var array = [];
    if (localStorage.getItem("arrayEmpleos") == null) {
      array = [];
      localStorage.setItem("arrayEmpleos", JSON.stringify(array));
    } else {
      array = JSON.parse(localStorage.getItem("arrayEmpleos"));
    }
  
    // Poblando el div que muestra los Opiniones
    var listadoOpiniones = JSON.parse(localStorage.getItem("arrayEmpleos"));
    var divOpiniones = document.getElementById("partidos");
    console.log(listadoOpiniones);
    var cont = 0;
    listadoOpiniones.forEach(element => {
      divOpiniones.innerHTML = divOpiniones.innerHTML + '<div class="rounded d-flex justify-content-center  "> <div class="shadow-lg p-5 bg-light div-partidos" ><div class="row"><div class="col-md-5"><img alt="Imagen de un trofeo representando que es un torneo" src="<?php echo IMG_PATH . "soccer-tournament.jpg" ?>" class="img-rounded" /> </div> <div class="col-md-5"><h2> ' + element[fecha] + '</h2><p>Tipo: ' + element[tipo_reserva] + ' </p> <p> Lugar: ' + element[localidad] + '  </p>     <p>          Tipo partido: ' + element[tipo_cancha] + '   </p>   <p>     Hora: ' + element[hora] + '  </p>   <p>   Organizador: ' + element[nombre] + '   </p>    </div>   <div class="col-md-2">  <a href="<?php echo CONTROLLER_PATH . "asistir_partido.php" ?>" type="button" class="btn btn-primary boton-partidos">   ASISTIR   </a>  </div>   </div>   </div>  </div>';
      
    }); 
    return false;
  });
  
  // Esta función se llama cuando se hace clic en el botón de Registrar
  // de la página de Opiniones
  function registrarPartido() {
      
    var nombre = document.getElementById("nombre");
    var correo = document.getElementById("correo");
    var localidad = document.getElementById("localidad");
    var tipo_cancha = document.getElementById("tipo_cancha");
    var tipo_reserva = document.getElementById("tipo_reserva");
    var fecha = document.getElementById("fecha");
    var hora = document.getElementById("hora");
  
  
  
    //Creando/Consultado el array con datos 
    // a partir de lo que exista en localStorage
    var array = [];
    if (localStorage.getItem("arrayEmpleos") == null) {
      array = [];
      localStorage.setItem("arrayEmpleos", JSON.stringify(array));
    } else {
      array = JSON.parse(localStorage.getItem("arrayEmpleos"));
    }
  
    // Agregando un nuevo opinion al array
    array.push({ "nombre": nombre.value, "correo": correo.value, "localidad": localidad.value, "tipo_cancha": tipo_cancha.value, "tipo_reserva": tipo_reserva.value, "fecha": fecha.value, "hora": hora.value });
  
    // Guardando en el localStorage el nuevo array
    localStorage.setItem("arrayEmpleos", JSON.stringify(array));
  
    // Recuperando el array de Opiniones del localStorage
    // para volverlo a mostrar
    var listadoOpiniones = JSON.parse(localStorage.getItem("array"));
  
    // Obteniendo el div donde se muestran los Opiniones
    var divOpiniones = document.getElementById("partidos");
  
    // Recorriendo el array de opinions que viene del localStorage
    var cont = 0;
    
    listadoOpiniones.forEach(element => {
      divOpiniones.innerHTML = divOpiniones.innerHTML + '<div class="rounded d-flex justify-content-center  "> <div class="shadow-lg p-5 bg-light div-partidos" ><div class="row"><div class="col-md-5"><img alt="Imagen de un trofeo representando que es un torneo" src="<?php echo IMG_PATH . "soccer-tournament.jpg" ?>" class="img-rounded" /> </div> <div class="col-md-5"><h2> ' + element[fecha] + '</h2><p>Tipo: ' + element[tipo_reserva] + ' </p> <p> Lugar: ' + element[localidad] + '  </p>     <p>          Tipo partido: ' + element[tipo_cancha] + '   </p>   <p>     Hora: ' + element[hora] + '  </p>   <p>   Organizador: ' + element[nombre] + '   </p>    </div>   <div class="col-md-2">  <a href="<?php echo CONTROLLER_PATH . "asistir_partido.php" ?>" type="button" class="btn btn-primary boton-partidos">   ASISTIR   </a>  </div>   </div>   </div>  </div>';
  
    
      
    });
    return false;
  }
  

/*


      <div class="rounded d-flex justify-content-center  "> <div class="shadow-lg p-5 bg-light div-partidos" ><div class="row"><div class="col-md-5"><img alt="Imagen de un trofeo representando que es un torneo" src="<?php echo IMG_PATH . "soccer-tournament.jpg" ?>" class="img-rounded" /> </div> <div class="col-md-5"><h2> ' + element[fecha] + '</h2><p>Tipo: ' + element[tipo_reserva] + ' </p> <p> Lugar: ' + element[localidad] + '  </p>     <p>          Tipo partido: ' + element[tipo_cancha] + '   </p>   <p>     Hora: ' + element[hora] + '  </p>   <p>   Organizador: ' + element[nombre] + '   </p>    </div>   <div class="col-md-2">  <a href="<?php echo CONTROLLER_PATH . "asistir_partido.php" ?>" type="button" class="btn btn-primary boton-partidos">   ASISTIR   </a>  </div>   </div>   </div>  </div>


  /*
<div class="accordion-item"><h2 class="accordion-header" id="item-' + cont + '"> <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-' + cont+'" aria-expanded="true" aria-controls="collapse-' + cont+'"> ' + element['nombre'] + '</button>  </h2>  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="item-' + cont + '" data-bs-parent="#accordionExample">    <div class="accordion-body"><ul><li>' + element['descripcion'] + '</li> <li>La fecha de cierre para el puesto es el: ' + element['postulacion'] + '</li> <li>Salario: ' + element['salario'] + '</li> <li>Enviar correo a: empleos@eventformal.com</li> </ul> </div>  </div></div>
  */