<?php



$r='
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="#" onClick="admin_mostrar(1)">Crear usuario</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Telemark</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#" onClick="admin_mostrar(2)">Reasignar oredenes</a></li>
      <li><a class="dropdown-item" href="#" onClick="admin_mostrar(3)">Reasignar agentes</a></li>
      <li><a class="dropdown-item" href="#" onClick="admin_mostrar(4)">Correccion ordenes</a></li>
      <li><a class="dropdown-item" href="#" onClick="admin_mostrar(5)">Catalogo encuesta</a></li>
      <li><hr class="dropdown-divider"></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" onClick="admin_mostrar(6)">Producto en ruta</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" onClick="admin_mostrar(7)">Cambio asignacion</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" onClick="admin_mostrar(8)">Catalogo zonas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="#" onClick="admin_mostrar(9)">Catalogo servicio tecnico</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  href="#" onClick="admin_mostrar(10)">Ajustes de precios</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" onClick="admin_mostrar(11)">Ver ordenes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#" onClick="admin_mostrar(12)">Menu</a>
  </li>
</ul>';



echo $r;

?>