const { Server } = require("socket.io");

const io = new Server({
  cors: {
    origin: "http://127.0.0.1:5500",
    methods: ["GET", "POST"],
  },
});

io.on("connection", (socket) => {
  // Socket codes...
});

io.listen(8000);
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
        });
      }
    }
  }
}
