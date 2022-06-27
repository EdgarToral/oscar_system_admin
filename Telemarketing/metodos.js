function admin(){
    
    contenedor= document.getElementById("contenedor");
    contenedor.innerHTML="";
    contenedor2= document.getElementById("subcontenedor");
    contenedor2.innerHTML="";
    
    $.ajax({
        url: 'Telemarketing/Administrador/opcionesAdmin.php',
        type:'post',
        success: function(response){
            contenedor.innerHTML =response;   
            },
});

   
}

function admin_mostrar(opcion){
    
	url_='';
	if(opcion==1)
		url_='Telemarketing/Administrador/nuevo-usuario.php';
	else if(opcion==2)
		url_='Telemarketing/Administrador/reasignar-ordenes.php';
	else if(opcion==3)
		url_='Telemarketing/Administrador/reasignar-agentes.php';
	else if(opcion==4)
		url_='Telemarketing/Administrador/correccion-ordenes.php';
	else if(opcion==5)
		url_='Telemarketing/Administrador/catalogo-encuesta.php';
	else if(opcion==6)
		url_='Telemarketing/Administrador/producto-en-ruta.php';
	else if(opcion==7)
		url_='Telemarketing/Administrador/cambio-asignacion.php';
	else if(opcion==8)
		url_='Telemarketing/Administrador/catalogo-zonas.php';
	else if(opcion==9)
		url_='Telemarketing/Administrador/catalogo-servicio-tecnico.php';
	else if(opcion==10)
		url_='Telemarketing/Administrador/ajustes-de-precio.php';
	else if(opcion==11)
		url_='Telemarketing/Administrador/ver-ordenes.php';
	else if(opcion==12)
		url_='Telemarketing/Administrador/menu.php';
		
    contenedor2= document.getElementById("subcontenedor");
    contenedor2.innerHTML="";
    
    $.ajax({
        url: url_,
        type:'post',
        success: function(response){
            contenedor2.innerHTML =response;   
            },
});

   
}