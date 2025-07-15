<?php include "./utility/connector.php"?>
<?php
//Query
$select_ultimos_productos = "select nombre,descripcion,nombre_archivo from productos order by fecha_agregacion desc limit 3";
$registros = mysqli_query($conexion, $select_ultimos_productos);
$output_testing = '<div id="nuevos-productos">';
while($registro = mysqli_fetch_row($registros)){
  $output_testing .=  '
    <div class="class-wrapper-nuevo-producto">
        <div class="class-imagenes-nuevo-producto">
            <img class="imagen-nuevo"  src="./logos/newtag.png">
            <img class="imagen-producto"  src="./productos/'.$registro[2].'">
        </div>
            <div class="class-texto-nuevo-producto"> 
            <h4 class="titulo-nombre-producto">'.$registro[0].'</h4>
            <p class="parrafo-descripcion-producto">'.$registro[1].'</p>
            <button style="width:65px;" class="boton-comprar">Comprar</button>
        </div>
    </div>';
}
//Echo de elementos con nombre del archivo sacado de el query
$output_testing .= '</div>';
echo $output_testing;
?>