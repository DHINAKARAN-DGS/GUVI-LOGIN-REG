function edit() {
  var username = document.getElementById("username");
  var dob = document.getElementById("dob");
  var contact = document.getElementById("contact");
  var email = document.getElementById("email");

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
        email.value,
      success: function (res) {
        console.log(res);
      },
    });
  }
}
