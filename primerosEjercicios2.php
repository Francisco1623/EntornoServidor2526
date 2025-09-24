<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

if($_SERVER['REQUEST_METHOD']=='GET'){
    if((isset($_GET['text']) && !empty($_GET['text'])) && (isset($_GET['checkbox']) && !empty($_GET['checkbox']))){
        echo "El alumno ". $_GET['text'] ." practica los siguientes deportes: <br>";
        foreach($_GET['checkbox'] as $check){
            echo $check . "<br>";
        }
    }
}

?>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET">
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Nombre</label> 
    <div class="col-8">
      <input id="text" name="text" placeholder="Introduce tu nombre" type="text" class="form-control" value="<?php if(isset($_GET['text'])) echo $_GET['text'] ?>">
    </div>
  </div>
  <div class="form-group row">
  <label class="col-4">Deporte</label> 
  <div class="col-8">
    <div class="custom-control custom-checkbox custom-control-inline">
      <input name="checkbox[]" id="checkbox-tennis" type="checkbox" class="custom-control-input" value="Tennis" <?php if(!empty($_GET['checkbox']) && in_array('Tennis',$_GET['checkbox'])) echo 'checked'; ?>> 
      <label for="checkbox-tennis" class="custom-control-label">Tennis</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline">
      <input name="checkbox[]" id="checkbox-futbol" type="checkbox" class="custom-control-input" value="Fútbol" <?php if(!empty($_GET['checkbox']) && in_array('Fútbol',$_GET['checkbox'])) echo 'checked'; ?>> 
      <label for="checkbox-futbol" class="custom-control-label">Fútbol</label>
    </div>
    <div class="custom-control custom-checkbox custom-control-inline">
      <input name="checkbox[]" id="checkbox-baloncesto" type="checkbox" class="custom-control-input" value="Baloncesto"<?php if(!empty($_GET['checkbox']) && in_array('Baloncesto',$_GET['checkbox'])) echo 'checked'; ?>> 
      <label for="checkbox-baloncesto" class="custom-control-label">Baloncesto</label>
    </div>
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