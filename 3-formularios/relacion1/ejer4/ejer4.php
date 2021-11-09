<?php 
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(!empty($_POST['altura']) and !empty($_POST['base'])){
                $base = $_REQUEST["base"];
                $altura = $_REQUEST["altura"];
                $area = area($base, $altura);
            }
        }

        function area(int $a, int $b)
        {
            $area = ($b*$a)/2;
            return $area;
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ejer4</title>
</head>
<body>
    
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?> method="post">
        <legend> Triangulo: </legend>
        <label for="base">Base: </label>
        <input type="number" name="base" value="<?php if(isset($base))echo $base; ?>"><br>

        <label for="altura">Altura: </label>
        <input type="number" name="altura" value ="<?php if(isset($altura))echo $altura; ?>"><br>

        <label for="resultado">Resultado</label>
        <input type="number" name="resultado" value ="<?php if(isset($area))echo $area; ?>" disabled><br>

        <input type="submit">
    </form>

</body>
</html>
