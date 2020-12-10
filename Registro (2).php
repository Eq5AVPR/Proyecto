<html>
    <head>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">

</head>

<style>

@import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

body, html {
  height: 100%;
}
body {
  font-family: 'Open Sans';
  font-weight: 100;
  display: flex;
  overflow: hidden;
}
input {
  ::-webkit-input-placeholder {
     color: rgba(255,255,255,0.7);
  }
  ::-moz-placeholder {
     color: rgba(255,255,255,0.7);  
  }
  :-ms-input-placeholder {  
     color: rgba(255,255,255,0.7);  
  }
  &:focus {
    outline: 0 transparent solid;
    ::-webkit-input-placeholder {
     color: rgba(0,0,0,0.7);
    }
    ::-moz-placeholder {
       color: rgba(0,0,0,0.7);  
    }
    :-ms-input-placeholder {  
       color: rgba(0,0,0,0.7);  
    }
  }
}

.login-form {
  background:transparent;
  box-shadow: 0 0 0rem rgba(0,0,0,0.3);
  min-height: 10rem;
  margin: auto;
  max-width: 50%;
  padding: .5rem;

}
.login-text {
  background: hsl(40,30,60);
  border-bottom: .5rem solid white;
  color: white;
  font-size: 1.5rem;
  margin: 0 auto;
  max-width: 50%;
  padding: .5rem;
  text-align: center;
  text-shadow: 1px -1px 0 rgba(0,0,0,0.3);
  .fa-stack-1x {
    color: black;
  }
}

.login-username, .login-password {
  background: transparent;
  border: 0 solid;
  border-bottom: 1px solid rgba(white, .5);
  color: white;
  display: block;
  margin: 1rem;
  padding: .5rem;
  transition: 250ms; background ease-in;
  width: calc(100% - 3rem);
  &:focus {
    ;background: white;
    color: black;
    transition: 250ms; background ease-in;
  }
}

.login-forgot-pass {
  border-bottom: 1px solid white;
  bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 75%;
  left: 0;
  opacity: 0.6;
  padding: .5rem;
  position: absolute;
  text-align: center;
  text-decoration: none;
  width: 100%;
  &:hover {
    opacity: 1;
  }
}
.login-submit {
  border: 0px solid white;
  background: transparent;
  color: white;
  display: block;
  margin: 1rem auto;
  min-width: 1px;
  padding: .25rem;
  transition: 250ms; background ease-in;
  &:hover, &:focus {
    background: white;
    color: black;
    transition: 250ms; background ease-in;
  }
}




[class*=underlay] {
  left: 0;
  min-height: 100%;

  min-width: 100%;
  position: fixed;
  top: 0;
}
.underlay-photo {
  animation: hue-rotate 6s infinite;
  background: url('https://www.xtrafondos.com/wallpapers/resized/cielo-lleno-de-estrellas-5822.jpg?s=large');
  background-size: cover;
  -webkit-filter: grayscale(30%);
  z-index: -1;
}
.underlay-black {
  background: rgba(0,0,0,0.7);
  z-index: -1;
}

@keyframes hue-rotate {
  from {
    -webkit-filter: grayscale(30%) hue-rotate(0deg);
  }
  to {
    -webkit-filter: grayscale(30%) hue-rotate(360deg);
  }
}

.fuentechidaxd{

  font-family: 'Fredoka One', cursive;
    size: 100px;
    display: inline-block;
    float:left;
    color: White;
}
    </style>

<body>


<br>
<br>
<br>
<br>
<form method="POST" class="login-form">
<h1  class="fuentechidaxd" align="center">  Registrate  </h1>
  <input type="number" name="id" class="login-username" autofocus="true" required="true" placeholder="Id" />
  <input type="text" name="Nombre" class="login-username" autofocus="true" required="true" placeholder="Nombre" />
  <input type="password" name="Contraseña" class="login-username" autofocus="true" required="true" placeholder="Password" />

  <input type="email" name="Correo" class="login-username" autofocus="true" required="true" placeholder="Correo electronico" />
  
  <input type="Text" name="Sexo" class="login-username" autofocus="true" required="true" placeholder="Sexo" />
  
  <input type="date" name="Fechan" class="login-username" autofocus="true" required="true" placeholder="Fecha de nacimiento" />
  
  
  <input type="text" name="Ciudad" class="login-username" autofocus="true" required="true" placeholder="Ciudad" />
  
  
  <input type="text" name="Pais" class="login-username" autofocus="true" required="true" placeholder="Pais" />


  <input type="files" name="Foto" class="login-username" autofocus="true" required="true" placeholder="Foto" />
  
  <input type="datetime-local" name="fechayhora" class="login-password" autofocus="true" required="false" placeholder="Fecha y hora" />
  
  <input type="submit" name="Login" value="Registrame" class="login-submit" />
</form>
<a href="Login.php" class="login-forgot-pass">Ya estas registrado?, Inicia sesion ahora.</a>
<div class="underlay-photo"></div>
<div class="underlay-black"></div> 


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
        
    $id=$_POST["id"];
    $Nombre=$_POST["Nombre"];
    $pass=$_POST["Contraseña"];
    $Email=$_POST["Correo"];
    $Sex=$_POST["Sexo"];
    $cumpleaños=$_POST["Fechan"];
    $ciudad=$_POST["Ciudad"];
    $idPais=$_POST["Pais"];
    $foto=$_POST["Foto"];
    $freg=$_POST["fechayhora"];

        
    $sql = "INSERT INTO usuarios (IdUsuarios, NomUsuario, Clave, Email, Sexo, FNacimiento, Ciudad, IdPais, Foto, FRegistro) VALUES ('$id','$Nombre', '$pass', '$Email','$Sex','$cumpleaños','$ciudad','$idPais','$foto','$freg')";
    if (mysqli_query($conn, $sql)) {
          echo "Registro creado";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);



  ?>
</body>

    </html>