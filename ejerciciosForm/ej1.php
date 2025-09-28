<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php



$messages = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $name = $_POST['text'];
   $age = $_POST['age'];

    if(!isset($name) || empty($name)){
        $messages[]= "Tu nombre no está asignado";
    }
    if(!isset($age) || empty($age)){
        $messages[]= "Tu edad no está asignada";
    }else{
        if(!is_numeric($age)){
            $messages[]= "Tu edad no es numérico";

        }else{
            if($age <= 0 || $age>120){
                $messages[]= "Tu edad debe estar entre 1 y 120";

            }
        }
    }

    if(!empty($messages)){
    foreach($messages as $m){
        echo "- ".$m. "<br>";
    }
}else{
    echo "Bienvenido ". htmlspecialchars($name) . " tu edad es ". htmlspecialchars($age); 
}
}else{
    $name = '';
    $age = '';
    echo "<h3><b>Introduce tu nombre y tu edad<b><h3><br>";
}



?>
<form method="POST">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nombre</label> 
    <div class="col-8">
      <input id="text" name="text" placeholder="Introduce tu nombre" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="age" class="col-4 col-form-label">Edad</label> 
    <div class="col-8">
      <input id="age" name="age" placeholder="Introduce tu edad" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
</body>
</html>