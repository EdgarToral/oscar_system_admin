<?php
$r='<div style="width: 450px;  background-color: #f2f3f7ee; margin-left:20px">
<label for="name" style="marging-left: 10px; color:#000; font-size:20px" >Usuarios-Agentes:</label>
<hr><hr>
 
 
<div  class="div_usuario_nuevo">
    <div class="div_usuario_nuevo2">
         <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Operadoras</label>
         <select class="form-select" aria-label="size 3 select example style="width: 150px;"" >
             <option selected>Administrador</option>
             <option value="1">Supervisor</option>
             <option value="2">Vendedor</option>
             <option value="3">Cliente</option>
          </select>
    </div>
        
        
        <div class="div_usuario_nuevo2">
            <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Agente</label>
            <input type="text" id="numagente" name="numagente" class="form-control" placeholder="" autocomplete="off" required autofocus>
            
        </div>

        <div class="div_usuario_nuevo2">
            <label for="name" style="marging-left:10px; color:#000; font-size:14px" ></label>
            <div class="div_usuario_button">
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="btn_reg" style="margin-right: 25px;font-size: 14px; margin-top: 40px;" onClick="registrar()">Asignar</button>
            </div>
        </div>
</div>
 


 <hr><hr>
 <br>
 <br>
         
</div>
';

echo $r;
?>