console.log(localStorage.getItem("login"));
if (localStorage.getItem("login") === false || localStorage.getItem("login") === null) {
    location.href = "./login.html"
}


$.ajax({
    type: "GET",
    url: "./php/profile.php?",
    data: "emailID=" + localStorage.getItem("emailID"),
    success: function (res) {
        console.log(res);
        var data = res.split("&");
        console.log(data);
        var username = data[0];
        var dob = data[1];
        var contact = data[2];
        var email = data[3];
        document.getElementById('username').innerHTML = username;
        document.getElementById('dob').innerHTML = dob;
        document.getElementById('age').innerHTML = getAge(dob);
        document.getElementById('contact').innerHTML = contact;
        document.getElementById('email').innerHTML = email;

    },
});

function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}