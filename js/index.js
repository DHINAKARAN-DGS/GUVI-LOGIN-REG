alert(localStorage.getItem("login"));
if (localStorage.getItem("login") === true) {
  location.href = "./profile.html"
}
else {
  localStorage.setItem("login", false);
}

function myFunction() {
  var email = document.getElementById("emailID");
  var pwd = document.getElementById("password");
  var rpwd = document.getElementById("repwd");
  if (email.value != "") {
    if (pwd.value != "") {
      if (pwd.value === rpwd.value) {
        $.ajax({
          type: "POST",
          url: "./php/index.php?",
          data: "emailID=" + email.value + "&pwd=" + pwd.value,
          success: function (res) {
            console.log(res);
            location.href = "../guvi/login.html";
          },
        });
      }
    }
  }
}
