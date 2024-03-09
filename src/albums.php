<?php
require_once('../php/conexion.php');

$sql = "SELECT * FROM albums";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
echo '  <div class="card swiper-slide">';
echo '    <div class="image-box">';
echo '      <img src="../media/albums/'. $fila['img_album'] .'" alt="" />';
echo '    </div>';
echo '    <div class="profile-details">';
echo '      <div class="name-job">';
echo '        <h3 class="name">'. $fila['nombre_album'] .'</h3>';
echo '        <h4 class="job">Álbum • '. $fila['fecha_salida'] .'</h4>';
echo '      </div>';
echo '    </div>';
echo '  </div>';
    }
}
?>
