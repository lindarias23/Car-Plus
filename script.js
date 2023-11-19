function agregarVehiculo() {
    var form = document.getElementById("vehiculoForm");
    var formData = new FormData(form);

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "agregar_vehiculo.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
            form.reset();
        }
    };
    xhr.send(formData);
}
document.addEventListener("DOMContentLoaded", function () {
    // Lista de imágenes de fondo
    const backgroundImages = ['6937142469_e719d3b626_b.jpg', 'coche-rojo-sobre-fondo-negro.jpg', '789421-GTAIV-2020-04-03-14-35-09-88.jpg'];
    let currentImageIndex = 0;

    // Función para cambiar la imagen de fondo
    function changeBackgroundImage() {
        currentImageIndex = (currentImageIndex + 1) % backgroundImages.length;
        document.body.style.backgroundImage = `url('${backgroundImages[currentImageIndex]}')`;
    }

    // Cambiar la imagen cada 2 segundos
    setInterval(changeBackgroundImage, 2000);
});