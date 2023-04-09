function myFunction() {
  var email = document.getElementById("emailID");
  var pwd = document.getElementById("password");
  if (email.value != "") {
    if (pwd.value != "") {
      $.ajax({
        type: "POST",
        url: "./php/login.php?",
        data: "emailID=" + email.value + "&pwd=" + pwd.value,
        success: function (res) {
          console.log(res);
          localStorage.setItem("login", true);
          localStorage.setItem("emailID", email.value);
          console.log(localStorage.getItem("login"));
          alert(localStorage.getItem("login"));
          location.href = "../guvi/profile.html";
        },
      });
    }
  }
}
