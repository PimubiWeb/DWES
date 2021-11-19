<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  

<?php
$nameErr = $emailErr = $numErr = $fileErr = "";
$name = $email = $num = $file = $archivo = $linea = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Solo se permiten letras y espacios";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "formato email invalido";
    }
  }

  if (empty($_POST["num"])) {
    $numErr = "number is required";
  } else {
    $num = test_input($_POST["num"]);
    // check if num is well
    if (!filter_var($num, FILTER_VALIDATE_INT)) {
      $numErr = "numero invalido";
    }
  }

  if (empty($_POST["file"])) {
    $fileErr = "archivo es requerido";
  } else {
    $file = $_POST["file"];
    $archivo = fopen($file,"r");
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>PHP Form Validation</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Number: <input type="number" name="num">
  <span class="error">* <?php echo $numErr;?></span>
  <br><br>
  File: <input type="file" name="file">
  <span class="error">* <?php echo $fileErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Borrar">
</form>

<?php
echo "<h2>Your Input:</h2>";
if(($nameErr=="") && ($emailErr=="") && ($numErr=="") && ($fileErr=="")){
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $num;
  echo "<br>";
  echo "<br>";
  echo '<strong>File content: </strong><br>';
  while (!feof($archivo)){
    $linea = fgets($archivo);
    echo $linea.'<br>'; 
  }
}
?>

</body>
</html>