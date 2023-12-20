function check(){
    var username = document.getElementById("username");
    const pw = document.getElementById("pw");
    const cpw = document.getElementById("cpw");
    const firstname = document.getElementById("firstname");
    const lastname = document.getElementById("lastname");
    const email = document.getElementById("email");
    const cont = document.getElementById("cont");
    const loc = document.getElementById("loc");

    var alpha = /^[a-zA-Z0-9_]{3,20}$/;
    //const mail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const num = /^\d{10}$/;

    if(username.value.trim()=== ""){
        document.getElementById('user').value = "*Enter a user name";
    }
    if(firstname.value.trim()=== ""){
      document.getElementById('name').value = "*Enter a first name";
    }
    if(pw.value.trim()=== ""){
      document.getElementById('pws1').value = "*Enter a password";
    }
    if(email.value.trim()=== ""){
      document.getElementById('mail').value = "*Enter a mail id";
    }
    if(cont.value.trim()=== ""){
      document.getElementById('con').value = "*Enter a valid contact";
    }
     if (alpha.test(username)) {
        document.getElementById('user').innerHTML = "Enter only alphabetic value";
      }
      if (pw.value !== cpw.value) {
        document.getElementById('pws2').innerHTML = "Passwords do not match";
      }
};