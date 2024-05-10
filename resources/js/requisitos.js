function toggleVisibility(elementId) {
    console.log('Función toggleVisibility ejecutada para el elemento con ID:', elementId);
    var element = document.getElementById(elementId);
    if (element.style.display === "none") {
        element.style.display = "block";
    } else {
        element.style.display = "none";
    }
}
