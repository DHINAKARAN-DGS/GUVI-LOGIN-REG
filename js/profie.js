console.log(localStorage.getItem("login"));
if (localStorage.getItem("login") === false || localStorage.getItem("login") === null) {
    location.href = "./login.html"
    alert(1);
}
