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
      $.get("index.php?action=eliminar_categoria&idcategoria="+id, function(data) {
        $(".fondo").html(data);
        $('#tarea').val('');
      });}

      function cargar_editorCategoriar(id){
        $.get("index.php?action=cargar_editorCategoria&idcategoria="+id, function(data) {
          $("#editorCategoria").html(data);
        });
      }
      function cargar_editorCampeon(id){
        $.get("index.php?action=cargar_editorCampeon&idcampeonato="+id, function(data) {
          $(".editorCampeon").html(data);
        });
      }


      $(".cargar_editorCategoria").on("click", function(ev){
        ev.preventDefault();
        cargar_editorCategoriar($(this).data("idcategoria"));
      });

      $(".cargar_editorCampeon").on("click", function(ev){
        ev.preventDefault();
        cargar_editorCampeon($(this).data("idcampeonato"));
      });




});
