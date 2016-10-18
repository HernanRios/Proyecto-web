$(document).ready(function(){
  cargarPagina("contIndex.html");//Con esta linea cargo lo que falta del Index.

  function cargarPagina(direccion){
    //Esta funcion carga la url pasada como parametro dentro del ID = "mostrador"
    $.ajax({            url: direccion,
      method: "GET",
      dataType: "html",
      success:function(data){
        $("#mostrador").html(data);
      } ,
      error: function(){
        alert("ABRI EL XAMP HIJO");
      }
    });

  }

  $('.navItem').click(function(event){
    //Con esta funcion recupero los URL que esta en el data del nav y llamo a la funcion para cargar la pagina media Partial Render
    event.preventDefault();
    cargarPagina($(this).data("nombre-pagina"));
  });

  $("#navUltimos").on("click",function(){
    //esta funcion hace lo mismo de la anterior pero la funcionalidad es distinta; Ademas de cargar llama a la funcion Obtener Tabla
    $.ajax({            url:"contTabla.html",
      method: "GET",
      dataType: "html",
      success:function(data){
        $("#mostrador").html(data);
        obtenerTabla();
      } ,
      error: function(){
        alert("Ha ocurrido un error");
      }
    });
  });

  $(".eliminarCampeon").on("click", function(ev){
    ev.preventDefault();
    borrarCampeon($(this).data("idcampeonato"));
  });


  function borrarCampeon(id){
    $.get("index.php?action=eliminar_campeon&idcampeonato="+id, function(data) {
      $(".fondo").html(data);
      $('#tarea').val('');
    }); }

    $(".eliminarCategoria").on("click", function(ev){
      ev.preventDefault();
      borrarCampeon($(this).data("idcategoria"));
    });


    function borrarCampeon(id){
      alert("eliminar categoria");
      $.get("index.php?action=eliminar_categoria&idcategoria="+id, function(data) {
        $(".fondo").html(data);
        $('#tarea').val('');
      });}

      function editarCategoria(id){
        alert("editar categoria");
        $.get("index.php?action=editar_categoria&idcategoria="+id, function(data) {
          alert(data);
          $(".topo").html(data);
        });
      }


      $(".editarCategoria").on("click", function(ev){
        ev.preventDefault();
        editarCategoria($(this).data("idcategoria"));
      });




});
