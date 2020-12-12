<html>
<head>  </head>
<style> 
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background-image: url(https://cutewallpaper.org/21/chill-wallpapers/Chill-Background-4k-Elizabethporterdesigns.com.jpg);
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
    text-align: center;
    color:#FFFFFF;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FFFFFF;
	background-color: #8000ff;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #b0c4de;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #b0c4de;
	border-radius: 18px;
  	box-shadow: 0 20px 30px rgba(0,0,0,0.25), 
			0 20px 20px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 800px;
	max-width: 100%;
	min-height: 550px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}

</style>


<body>

<h2>Bienvenido al proyecto del equipo 5, Porfavor continue...</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">

        <form id="registro" method="POST">
			<h1>Registro</h1>
  <input type="text" name="Nombre" autofocus="true" required="true" placeholder="Nombre" />
  <input type="password" name="Contraseña"  autofocus="true" required="true" placeholder="Password" />
  <input type="email" name="Correo"  autofocus="true" required="true" placeholder="Correo electronico" />
  <input type="Text" name="Sexo"  autofocus="true" required="true" placeholder="Sexo" />  
  <input type="date" name="Fechan"  autofocus="true" required="true" placeholder="Fecha de nacimiento" />
  <input type="text" name="Ciudad"  autofocus="true" required="true" placeholder="Ciudad" />
  <input type="text" name="Pais" autofocus="true" required="true" placeholder="Pais" />
  <input type="datetime-local" name="fechayhora" autofocus="true" required="false" placeholder="Fecha y hora" />
			<button type= "submit" form="registro" value="submit">Registro</button>
        </form>
        
    </div>
    

    <?php
  
  
  $servername = "localhost";
    $database = "pibd";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    if (!$conn) {
          die("conexion fallida: " . mysqli_connect_error());
    }
     
    echo "Se conecto exitosamente!";
//REGISTRO
    $id=$_POST["id"];
    $Nombre=$_POST["Nombre"];
    $pass=$_POST["Contraseña"];
    $Email=$_POST["Correo"];
    $Sex=$_POST["Sexo"];
    $cumpleaños=$_POST["Fechan"];
    $ciudad=$_POST["Ciudad"];
    $idPais=$_POST["Pais"];
    $freg=$_POST["fechayhora"];
   
    $sql = "INSERT INTO usuarios (IdUsuario, nomUsuario, clave, email, sexo, fNacimmiento, ciudad, pais, fRegistro) VALUES ('$id','$Nombre', '$pass', '$Email','$Sex','$cumpleaños','$ciudad','$idPais','$freg')";
    if (mysqli_query($conn, $sql)) {
          echo "Registro creado";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);




?>

	<div class="form-container sign-in-container">
        
    <form id="login" method="POST">
			<h1>Acceder</h1>
			<span>Para disfrutar de todo el servicio</span>
            <input type="text"  id="usu" autofocus="true" required="true" placeholder="Nombre de usuario" />
  <input type="password" id="pass" required="true" placeholder="Password" />
			
			<button type="submit" form="login" value="submit">Entrar</button>
        </form>
		
		<?php
			include("Login.php");
		?>
       


    </div>
    
	





	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Acceder</h1>
				<button class="ghost" id="signIn">Acceder</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>No estoy registrado:(</h1>
				<p>Ingresa tus datos:D</p>
				<button class="ghost" id="signUp">Registrate</button>
			</div>
		</div>
	</div>
</div>





<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>


</body>

  


</html>