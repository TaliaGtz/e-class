var sobremi = document.getElementById("sobremi");
var afectado = document.getElementById("afectado");
sobremi.addEventListener("mouseover", () => {
  afectado.className = "afectado";
}, false)
sobremi.addEventListener("mouseout", () => {
  afectado.className = "chatName";
}, false)

var sobremi2 = document.getElementById("afectado");
var afectado2 = document.getElementById("sobremi");
sobremi2.addEventListener("mouseover", () => {
  afectado2.className = "plud";
}, false)
sobremi2.addEventListener("mouseout", () => {
  afectado2.className = "plus";
}, false)

