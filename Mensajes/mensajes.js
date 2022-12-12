/*navigator.mediaDevices.getUserMedia({audio: true, video: true})
.then((stream)=>{
    console.log(stream)
}).catch((err)=>console.log(err))*/
/*
class MediaHandler{
    getPermissions(){
        return new Promise((res, rej)=>{
            navigator.mediaDevices.getUserMedia({audio: true, video: true})
            .then((stream)=>{
                res(stream);
            }).catch(err=>{
                throw new Error('Unable');
            })
        });
    }
}*/

let $miBoton = document.getElementById('mi-boton')

$miBoton.addEventListener('click', (e) => {
    //alert("sdf");
   e.target.previousElementSibling.click()
})