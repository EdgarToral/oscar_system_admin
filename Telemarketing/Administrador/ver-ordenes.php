<?php
 $r=<div style="width: 650px;  background-color: #f2f3f7ee;">
<label for="name" style="marging: left 10px; color:#000; font-size:20px" >Nuevo Usuario:</label>
<hr><hr>
        <div class="div_usuario_nuevo">
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:17px" >Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="" autocomplete="off" required autofocus>
            </div>
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:17px" >Apellido paterno:</label>
                <input type="text" id="apaterno" name="apaterno" class="form-control" placeholder="" autocomplete="off" required autofocus>
            </div>    
            <div class="div_usuario_nuevo2">
                <label for="name" style="marging-left:10px; color:#000; font-size:17px" >Apellido materno:</label>
                <input type="text" id="amaterno" name="amaterno" class="form-control" placeholder="" autocomplete="off" required autofocus>
            </div>
        </div>

        <div  class="div_usuario_nuevo">
                <div class="div_usuario_nuevo2">
                    <label for="name" style="marging-left:10px; color:#000; font-size:17px" >Usuario:</label>
                    <input type="text" id="usuario" name="usuario" class="form-control" placeholder="" autocomplete="off" required autofocus>
                </div>
                <div class="div_usuario_nuevo2">    
                    <label for="name" style="marging-left:10px; color:#000; font-size:17px" >Contraseña:</label>
                    <input type="text" id="contrasenia" name="contra" class="form-control" placeholder="" autocomplete="off" required autofocus>
                </div>
                <div class="div_usuario_nuevo2">
                    <label for="name" style="marging-left:10px; color:#000; font-size:17px" >Confirmar Contraseña:</label>
                    <input type="text" id="Nombre" name="nombre" class="form-control" placeholder="" autocomplete="off" required autofocus>
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