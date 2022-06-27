<?php
 $r='<div style="width: 450px;  background-color: #f2f3f7ee; margin-left:20px">
 <label for="name" style="marging-left: 10px; color:#000; font-size:20px" >Catalogo de zonas:</label>
 <hr><hr>
  
     
  
 <div  class="div_catalogo_zonas">
     <div class="div_catalogo_zonas2">
          <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Nombre de zona:</label>
          <input type="text" id="clave" name="clave" class="form-control" placeholder="" autocomplete="off" required autofocus>

     </div>
         
         <div class="div_catalogo_zonas2">
             <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Codigo de area: </label>
             <input type="text" id="clave" name="clave" class="form-control" placeholder="" autocomplete="off" required autofocus>
         </div>

         <div class="div_catalogo_zonas2">
            <label for="name" style="marging-left:10px; color:#000; font-size:14px" > </label>
            <div class="div_usuario_button">
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="btn_reg" 
            style="margin-right: 25px;font-size: 14px; margin-top: 30px;" onClick="registrar()">Agregar</button>
        </div>
     </div>
 </div>


 <table class="table" style="width:100%;">
 <thead>
   <tr>
     <th scope="col " style="width:60%; margin-left:5px;margin-rigth:5px;">Zona</th>
     <th scope="col" style="width:20%; margin-left:5px;margin-rigth:5px;">Codigo</th>
     <th scope="col" style="width:20%; margin-left:5px;margin-rigth:5px;">Editar</th>
     
   </tr>
 </thead>
 <tbody>
   <tr>
     <th scope="row"></th>
     <td></td>
     <td></td>
     
   </tr>
   <tr>
     <th scope="row"></th>
     <td></td>
     <td></td>
     
   </tr>
   <tr>
     <th scope="row"></th>
     <td ></td>
     <td></td>
   </tr>




   
 </tbody>
</table>
  

  <hr><hr>
  <br>
  <br>
          
</div>
';

echo $r;
?>