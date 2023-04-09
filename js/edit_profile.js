document.getElementById("emailID").placeholder = localStorage.getItem("emailID");
if (localStorage.getItem("login") === false || localStorage.getItem("login") === null) {
  location.href = "./login.html"
}

function edit() {
  var username = document.getElementById("username");
  var dob = document.getElementById("dob");
  var contact = document.getElementById("contact");
  var email = localStorage.getItem("emailID");
  if (
    email.value != "" &&
    username.value != "" &&
    dob.value != "" &&
    contact.value != ""
  ) {
    console.log(username.value);
    $.ajax({
      type: "POST",
      url: "./php/edit_pro.php?",
      data:
        "username=" +
        username.value +
        "&dob=" +
        dob.value +
        "&contact=" +
        contact.value +
        "&email=" +
        email,
      success: function (res) {
        console.log(res);
        if (res === "Inserted") {
          location.href = "../guvi/profile.html";
        }
      },
    });
  }
}
