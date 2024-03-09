<style>
    * {
  padding: 0;
  margin: 0;
  box-sizing: 0;
}

body {
  font-family: "Courier New", Courier, monospace;
}

header {
  background: #000000;
  padding: 20px;
}

main {
  background: #050000;
}

.logo img {
  max-width: 250px;
}

.navbar {
  display: flex;
  padding: 10px 40px;
  justify-content: flex-end;
}

.navbar ul {
  display: flex;
  flex-wrap: 0;
  gap: 20px;
  list-style: none;
}

.navbar a {
  padding: 30px 30px;
  text-decoration: none;
  color: #fff;
  font-size: 16px;
  transition: all 0.4s;
}

.navbar a:hover {
  background: #070101;
  color: #960909;
  text-decoration: line-through;
}

</style>


<?php
echo '<header>';
echo '  <nav class="navbar">';
echo '    <ul>';
echo '      <li><a href="#">Inicio</a></li>';
echo '      <li><a href="#">Albums</a></li>';
echo '      <li><a href="#">biografia</a></li>';
echo '      <li><a href="#">contacto</a></li>';
echo '    </ul>';
echo '  </nav>';
echo '</header>';
?>
