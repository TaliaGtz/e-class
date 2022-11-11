function validateLogIn() {
    let User = document.forms["LogIn"]["username"].value;
    let Pwd = document.forms["LogIn"]["password"].value;
    if (User == "" || Pwd == "") {
      swal({
        title: "Warning",
        text: "Ninguna celda puede estar en blanco",
        icon: "warning",
        button: "Aceptar",
      });
      return false;
    }else{
      return true;
    }
}