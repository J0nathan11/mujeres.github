function login() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Verificación simple de usuario y contraseña (simulado).
    if (username === "Admin" && password === "12345") {
        // Datos correctos, redirige a controlAdmin.html.
        window.location.href = "controlAdmin.html";
    } else {
        alert("Usuario o contraseña incorrectos. Inténtalo de nuevo.");
    }
}
