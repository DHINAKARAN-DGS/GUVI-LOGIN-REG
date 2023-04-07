function myFunction() {
  var email = document.getElementById("emailID");
  var pwd = document.getElementById("password");
  var rpwd = document.getElementById("repwd");
  alert(email.value + " " + pwd.value + " " + rpwd.value + "aa");

  if (email.value != "") {
    if (pwd.value != "") {
      if (pwd.value === rpwd.value) {
        jQuery.ajax({
          type: "POST",
          url: "https://guvitask23.000webhostapp.com/index.php?",
          data: "emailID=" + email + "&pwd=" + pwd,
          success: alert("S1"),
          dataType: "json",
        });
      }
    }
  }
}
