document.querySelector("form").addEventListener("submit", function(submit){
    var username = document.getElementById("username");
    const pw = document.getElementById("pw");
    const cpw = document.getElementById("cpw");
    const firstname = document.getElementById("firstname");
    const lastname = document.getElementById("lastname");
    const email = document.getElementById("email");
    const cont = document.getElementById("cont");
    const loc = document.getElementById("loc");

    var alpha = /^[a-zA-Z0-9_]{3,20}$/;
    const mail = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    const num = /^\d{10}$/;

    if(username.value.trim()=== ""){
        document.getElementById('user').value = "Enter a user name";
    }
    // else if(username.value.match(alpha)){
    // // else if(!alpha.test(username.value.trim())){
    //     document.getElementById('user').innerHTML = "Enter only alphabetic value";
    // }
    else if (!alpha.test(username.value)) {
        document.getElementById('user').innerHTML = "Enter only alphabetic value";
        event.preventDefault(); // Prevent form submission
      }
      if (pw.value !== cpw.value) {
        document.getElementById('pw').innerHTML = "Passwords do not match";
        event.preventDefault();
      }
});