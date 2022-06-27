//Ejecutar función en el evento click
document.getElementById("btn_open").addEventListener("click", open_close_menu);

//Declaramos variables
var side_menu = document.getElementById("menu_side");
var btn_open = document.getElementById("btn_open");
var contenedor = document.getElementById("contenedor");
var subcontenedor = document.getElementById("subcontenedor");
var header = document.getElementById("header");

//Evento para mostrar y ocultar menú
    function open_close_menu(){
        contenedor.classList.toggle("section_move");
        subcontenedor.classList.toggle("section_move");
        side_menu.classList.toggle("menu__side_move");

     //   header.classList.toggle("header_MOVE");
        btn_open.classList.toggle("i_move");
    }

//Si el ancho de la página es menor a 760px, ocultará el menú al recargar la página
/*
if (window.innerWidth < 760){

    btn_open.classList.add("i_move");
    body.classList.add("body_move");
    side_menu.classList.add("menu__side_move");
}

//Haciendo el menú responsive(adaptable)

window.addEventListener("resize", function(){

    if (window.innerWidth > 760){

        btn_open.classList.remove("i_move");
        body.classList.remove("body_move");
        side_menu.classList.remove("menu__side_move");
    }

    if (window.innerWidth < 760){

        btn_open.classList.add("i_move");
        body.classList.add("body_move");
        side_menu.classList.add("menu__side_move");
    }

});
*/
(function(){
    const listElements= document.querySelectorAll(".menu_item--show");
    const list= document.querySelectorAll(".menu_links")

    const addClick=()=>{
        listElements.forEach(element => {
            element.addEventListener("click",()=>{
                let submenu=element.children[1];
                let height=0;
                element.classList.toggle("menu_item--active");
    
                if(submenu.clientHeight === 0)
                {
                    height = submenu.scrollHeight;
                }
                submenu.style.height = `${height}px`; 
            });
    
        });
    }
    addClick();
})();




