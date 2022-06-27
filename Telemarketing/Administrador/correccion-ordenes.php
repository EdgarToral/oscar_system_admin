<?php
 $r='<div style="width: 450px;  background-color: #f2f3f7ee; margin-left:20px">
 <label for="name" style="marging-left: 10px; color:#000; font-size:20px" >Correccion Ordenes:</label>
 <hr><hr>
  
  
 <div  class="div_usuario_nuevo">
     
         <div class="div_usuario_nuevo2">
             <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Folio:</label>
             <input type="text" id="folio" name="folio" class="form-control" placeholder="" autocomplete="off" required autofocus>
             
         </div>
 
         <div class="div_usuario_nuevo2">
             <label for="name" style="marging-left:10px; color:#000; font-size:14px" ></label>
             <div class="div_usuario_button">
                 <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="btn_reg" 
                 style="margin-right: 25px;font-size: 14px; margin-top: 40px;" onClick="registrar()">Buscar</button>
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