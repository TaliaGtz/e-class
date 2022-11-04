function validateLogIn() {
    let User = document.forms["LogIn"]["User"].value;
    let Pwd = document.forms["LogIn"]["Pwd"].value;
    if (User == "" || Pwd == "") {
      alert("Ninguna celda puede estar en blanco");
      return false;
    }else{
      return true;
    }
}