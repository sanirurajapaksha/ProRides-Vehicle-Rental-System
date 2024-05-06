document.getElementById("logo__header").addEventListener("click", function() {
    goToHomePage();
});

document.getElementById("logo_footer").addEventListener("click", function() {
    goToHomePage();
});

function goToHomePage() {
    window.location.href = "/index.php";
}

