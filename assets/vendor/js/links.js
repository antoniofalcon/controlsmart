
      $(document).ready(function() {
        $("#link1").click(function(event) {
          $("#show").load('clientes/index');
        });

         $("#link2").click(function(event) {
          $("#show").load('cursos/index');
        });

         $("#link3").click(function(event) {
          $("#show").load('maestros/index');
        });

         $("#link4").click(function(event) {
          $("#show").load('semanas/index');
        });

         $("#link5").click(function(event) {
          $("#show").load('usuarios/index');
        });

         $("#link6").click(function(event) {
          $("#show").load('pagos/index');
        });
        //Para Manda a crear alumno
         $("#clientecreate").click(function(event) {
          $("#show").load('clientes/create');
        });
          //editar cliente
          $("#editarcliente").click(function(event) {
          $("#show").load('clientes/edit');
        });
           $("#eliminarcliente").click(function(event) {
          $("#show").load('clientes/delete');
        });
           //
          // 
         //Para mandar a crear cursos
         $("#cursocreate").click(function(event) {
          $("#show").load('cursos/create');
        });
         $("#cursoedit").click(function(event) {
          $("#show").load('cursos/edit');
        });
         //
         //
         // Para mandar a crear maestros
         $("#maestrocreate").click(function(event) {
          $("#show").load('maestros/create');
        });
         //para mandar a crear las semanas
         $("#semanascreate").click(function(event) {
          $("#show").load('semanas/create');
        });
         //  para ir a crear un usuario
         $("#usuarioscreate").click(function(event) {
          $("#show").load('usuarios/create');
        });
         //para crear un pago
         $("#pagoscreate").click(function(event) {
          $("#show").load('pagos/create');
        });
      });
