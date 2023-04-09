if (localStorage.getItem("login") === true) {
  location.href = "./profile.html"
}
session_start();

function myFunction() {
  var email = document.getElementById("emailID");
  var pwd = document.getElementById("pwd");
  var rpwd = document.getElementById("repwd");
  var name = document.getElementById("username");
  var dob = document.getElementById("dob");
  var contact = document.getElementById("contact");

  if ((email.value != "" && name.value != "" && dob.value != "" && contact.value != "" && pwd.value != "") && (pwd.value === rpwd.value)) {
    $.ajax({
      type: "POST",
      url: "./php/index.php?",
      data: "emailID=" + email.value + "&pwd=" + pwd.value + "&name=" + name.value + "&dob=" + dob.value + "&contact=" + contact.value,
      success: function (res) {
        console.log(res);
        location.href = "../guvi/login.html";
      },
    });
  }
}
