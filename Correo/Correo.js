/*Buscador*/

//bars_search = document.getElementById("box");
cover = document.getElementById("coverCtnSearch");
clase = document.getElementById("clase");
inputSearch = document.getElementById("inputSearch");
boxSearch = document.getElementById("boxSearch");

document.getElementById("inputSearch").addEventListener("click", mostrar_buscador);
document.getElementById("coverCtnSearch").addEventListener("click", ocultar_buscador);

function mostrar_buscador(){
    cover.style.display = "block";
}

function ocultar_buscador(){
    cover.style.display = "none";
    boxSearch.style.display = "none";
    inputSearch.value = "";
}

document.getElementById("inputSearch").addEventListener("keyup", buscador_interno);

function buscador_interno(){
    filter = inputSearch.value.toUpperCase();
    li = boxSearch.getElementsByTagName("li");

    for(i = 0; i < li.length; i++){
        a = li[i].getElementsByTagName("a")[0];
        textValue = a.textContent || a.innerText;

        if(textValue.toUpperCase().indexOf(filter) > -1){
            li[i].style.display = "";
            boxSearch.style.display = "block";
            if(inputSearch.value === ""){
                boxSearch.style.display = "none";
            }
        }else{
            li[i].style.display = "none";
        }
    }
}

/*Correo*/
$('#boxSearch li').click(function() {
    event.preventDefault();
    const opcion = this.innerText;
    
    document.getElementById("mensajero").setAttribute('value', opcion);
    /*alert(opcion);*/
});