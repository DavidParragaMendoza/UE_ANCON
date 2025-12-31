<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link rel="shortcut icon" href="../../../IMG/favicon.png" type="image/x-icon">
    
    <link type="text/css" rel="stylesheet" href="./style.css"/>
  </head>
  <body>
    
<div class="tb-container-bar">
  <div class="tb-progress-bar"></div>
</div>
<div class="tb-wrapper">
  <header>
    <div class="tb-container">
      <a href="./index.php">
        <h2>Subida De Archivos</h2>
      </a>
      <div class="nav navigation-wrapper">
        
        <ul class="nav-list">
          <li class="nav-link"><a href="./index.php">Regresar</a></li>
          <!--
          <li class="nav-link">About</li>
          <li class="nav-link">Portfolio</li>
          <li class="nav-link">Blog</li>
          <li class="nav-link">Contact</li>
        </ul>
        -->
      </div>
    </div>
  </header>

  <div class="tb-container tb-margin-top">
    <h2>Manual De Ayuda</h2>
    <p>Descargue el siguiente manual en el cual se muestra la informacion necesaria para subir libros al sistema  <a href="https://drive.google.com/file/d/1x8quKa_lgJjwCsrvFBdJokxSEu9FAuAo/view?usp=sharing" target="_blank" class="lonks">Manual - Subida de archivos al sistema  📑</a></p>
  <br><br>
    <h2>Archivo APK</h2>
   <p>APK del Sistema  <a href="https://drive.google.com/file/d/1Np23sbmKR75dvGKQfoRez39VOgO9DtwZ/view?usp=sharing" target="_blank" class="lonks">APK- SIS LIBROS v1.5  📥</a></p>
    <br><br>

    <div class="tb-container tb-margin-top">
    <h2>Contraseña del Sistema</h2>
    <p>Haga clic en el boton para copiar la contraseña del sistema</p>
        <div class="copyfield">
        <!-- Usamos el atributo hidden para ocultar el span que contiene el enlace -->
        <span id="link" hidden>UEAAqlojw922023@-web</span>
        <span id="copy-btn">Copiar</span>
    </div>

    <script>
        var copybtn = document.getElementById("copy-btn");
        var link = document.getElementById("link");

        copybtn.onclick = function () {
            // Copiamos el contenido del span oculto al portapapeles
            navigator.clipboard.writeText(link.innerHTML);
            copybtn.innerHTML = "😎👍🏻"
            setTimeout(function (){
                copybtn.innerHTML = "Copiar"
            }, 2000)
        }
    </script>
  <br><br>
  </div>
  <br>
  <br>
</div>
<footer>
  <div class="copyright">
   <a href="#"></a></div>
</footer>
    <script type="module" src="script.js"></script>
  </body>
</html>