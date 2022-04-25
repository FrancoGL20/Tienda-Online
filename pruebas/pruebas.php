<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
</head>
<body>
    <?php
        session_start();
        //declarar mi sesion
        //$ SESSION[ 'misesion'] = "facultad autodidacta";
        //echo $ SESSION[ 'miSesion'];
        $_SESSION['miSesion'] = array();
        //$ SESSION[ 'miSesion'][0] = "facultad";
        //$ SESSION['miSesion'][1] = 2020;
        $_SESSION['miSesion']['nombre'] = "facultad";
        $_SESSION['miSesion']['edad'] = 30;
        $_SESSION['miSesion']['pais'] = "México";

        // echo $_SESSION['miSesion']['edad'];
        echo "<pre>";
        print_r($_SESSION['miSesion']);
        echo "</pre>";
    ?>
</body>
</html> -->

<!-- formularios -->
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Validación en PHP</title>
    <style>
    .error {
        color: #FF0000;
    }
    </style>
</head>

<body>
    <?php
        // Variables que contendrán un posible mensaje de error
        $nameErr = $emailErr = $genderErr = $websiteErr = "";
        // Variables que guardan el contenido de los campos del formulario
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["name"])) {
            $nameErr = "Nombre necesario";
          } else {
            $name = test_input($_POST["name"]);
          }
          if (empty($_POST["email"])) {
            $emailErr = "Email necesario";
          } else {
            $email = test_input($_POST["email"]);
          }
            if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
          }
          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }
          if (empty($_POST["gender"])) {
            $genderErr = "Genero necesario";
          } else {
            $gender = test_input($_POST["gender"]);
          }
        }
        function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
      ?>
    <h2>Ejemplo de Validación de Formularios con PHP</h2>
    <p><span class="error">* campo requerido.</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error"><?php echo $websiteErr;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <span class="error">* <?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        echo "<h2>Usted Ingresó:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $website;
        echo "<br>";
        echo $comment;
        echo "<br>";
        echo $gender;
      ?>
</body>

</html>