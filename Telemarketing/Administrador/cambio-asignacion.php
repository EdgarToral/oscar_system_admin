<?php
 $r='<div style="width: 450px;  background-color: #f2f3f7ee; margin-left:20px">
 <label for="name" style="marging-left: 10px; color:#000; font-size:20px" >Cambio Asignacion:</label>
 <hr><hr>
  
     
  
 <div  class="div_cambio_asignacion">
     <div class="div_cambio_asignacion2">
          <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Ruta:</label>
          <select class="form-select" aria-label="size 3 select example style="width: 150px;"" >
              <option selected>Administrador</option>
              <option value="1">Supervisor</option>
              <option value="2">Vendedor</option>
              <option value="3">Cliente</option>
           </select>
     </div>
         
         <div class="div_cambio_asignacion2">
             <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Servicio:</label>
             <select class="form-select" aria-label="size 3 select example style="width: 150px;" " >
                 <option selected>Activo</option>
                 <option value="1">Inactivo</option>
             </select>
         </div>
 </div>

 <div  class="div_cambio_asignacion">
        <div class="div_cambio_asignacion2">
             <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Asignar pedido a unidad: </label>
             <div class="div_usuario_button">
                 <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="btn_reg" 
                 style="margin-right: 25px;font-size: 14px; ;" onClick="registrar()">Asignar</button>
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