<?php
 $r='<div style="width: 450px;  background-color: #f2f3f7ee; margin-left:20px">
<label for="name" style="marging-left: 10px; color:#000; font-size:20px" >Nuevo Usuario:</label>
<hr><hr>
        <div class="div_usuario_nuevo">
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="" autocomplete="off" required autofocus>
            </div>
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Apellido paterno:</label>
                <input type="text" id="apaterno" name="apaterno" class="form-control" placeholder="" autocomplete="off" required autofocus>
            </div>    
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Apellido materno:</label>
                <input type="text" id="amaterno" name="amaterno" class="form-control" placeholder="" autocomplete="off" required autofocus>
            </div>
        </div>

        <div  class="div_usuario_nuevo">
                <div class="div_usuario_nuevo2">
                    <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="" autocomplete="off" required autofocus>
                </div>
                <div class="div_usuario_nuevo2">    
                    <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Contraseña:</label>
                    <input type="text" id="contrasenia" name="contra" class="form-control" placeholder="" autocomplete="off" required autofocus>
                </div>
                <div class="div_usuario_nuevo2">
                    <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Confirmar Contraseña:</label>
                    <input type="text" id="Nombre" name="nombre" class="form-control" placeholder="" autocomplete="off" required autofocus>
                </div>
        </div>
        <div  class="div_usuario_nuevo">
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Rol:</label>
                <select class="form-select" aria-label="size 3 select example" >
                    <option selected>Administrador</option>
                    <option value="1">Supervisor</option>
                    <option value="2">Vendedor</option>
                    <option value="3">Cliente</option>
                 </select>
            </div>
            <div class="div_usuario_nuevo2">    
                <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Zona:</label>
                <select class="form-select" aria-label="size 3 select example" >
                    <option selected>Sin red</option>
                    <option value="1">Torreon</option>
                 </select>
            </div>
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Estatus:</label>
                <select class="form-select" aria-label="size 3 select example" >
                    <option selected>Activo</option>
                    <option value="1">Inactivo</option>
                 </select>
            </div>
        </div>
        <hr><hr>
        <br>

        <div class="div_usuario_button">
        <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="btn_reg" onClick="registrar()">Registrar</button>
                <br>
         </div>
                
    </div>
    ';

echo $r;
?>