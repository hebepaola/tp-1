<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>
    REPASO
    <!-- Acá debe ponerse el título de la página -->
    
  </title>
  <style>
    .grid {
    display: grid;
    grid-template-columns: 100px auto 100px;
    grid-template-rows: 100px minmax(calc(100vh - 200px - 2em), auto) 100px;
    grid-gap: 1em;
    color:black;
    background-color: #d5d8dc ;
    }
     .grid header,
     .grid footer {
     grid-column: 1 / 4;
     background-color:  #808b96 ;
     }
     body {
      margin: 0;
    
     }
  </style>
</head>
<body>
 
  <div class="grid">
    <!-- Acá se debe carga >r la cabecera -->
    <?php include "./layout/cabecera.html"  ?>

    <!-- Acá se debe cargar el formulario -->

    <?php include "./elementos/formulario.html" ?>
   


    <!-- Acá se debe cargar el pie de página -->
    <?php include "./layout/pie_pagina.html"   ?>
</div>
  
</body>
</html>
