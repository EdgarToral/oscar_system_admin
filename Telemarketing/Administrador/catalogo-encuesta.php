<?php
 $r='<div style="width: 600px;  background-color: #f2f3f7ee; margin-left:20px">
 <label for="name" style="marging-left: 10px; color:#000; font-size:20px" >Preguntas Encuesta Cliente:</label>
 <hr><hr>
  
  
 <div  class="div_encuesta">
     
         
         
         <div class="div_encuesta2">
             <label for="name" style="marging-left:10px; color:#000; font-size:14px" >Pregunta:</label>
             <input type="text" id="pregunta" name="pregunta" class="form-control" placeholder="" autocomplete="off" required autofocus>
             
         </div>
         <div class="div_encuesta2">
            <label for="name" style="marging-left:10px; color:#000; font-size:14px" ></label>
         
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked" style="font-size:15px">Habilitar</label>
            </div>
        </div>


         <div class="div_encuesta2">
             <label for="name" style="marging-left:10px; color:#000; font-size:14px" ></label>
             <div class="div_usuario_button">
                 <button class="btn btn-lg btn-primary btn-block btn-signin" type="button" id="btn_reg"
                  style="margin-right: 25px;font-size: 14px; margin-top: 40px;" onClick="registrar()">Agregar</button>
             </div>
         </div>
 </div>
  

 <table class="table" style="width:100%;">
 <thead>
   <tr>
     <th scope="col " style="width:10%; margin-left:5px;margin-rigth:5px;">#</th>
     <th scope="col" style="width:70%; margin-left:5px;margin-rigth:5px;">Pregunta</th>
     <th scope="col" style="width:20%; margin-left:5px;margin-rigth:5px;">Habilitada</th>
     
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