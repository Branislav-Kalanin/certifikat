// Funkcia pre prepínanie responzívneho menu
function toggleMenu() {
    var navbar = document.getElementById("myNavbar");
    if (navbar.className === "navbar") {
        navbar.className += " responsive";
    } else {
        navbar.className = "navbar";
    }
}
// DARK MODE
function toggleDarkMode() {
    var body = document.body;
    body.classList.toggle("dark-mode");

}
//AKTUALNY CAS
function zobrazCas() {
    var aktualnyCas = new Date();
    var cas = aktualnyCas.toLocaleTimeString();
    var datum = aktualnyCas.toLocaleDateString();
    document.getElementById("cas").innerHTML = cas;
    document.getElementById("datum").innerHTML = datum;
}

setInterval(zobrazCas, 1000); // Obnoví čas každú sekundu
