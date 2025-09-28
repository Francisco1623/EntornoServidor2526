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
    
    if(empty($_GET['hobbies'])){
        echo 'Selecciona un hobbie';
    }else{
        echo 'Estos son tus hobbies: <br>';
        foreach($_GET['hobbies'] as $h){
            echo '- '. $h . ' <br>';
        }
    }
}

?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="GET">
  <div class="form-group row">
    <label class="col-4">Hobbies</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbies[]" id="hobbie_0" type="checkbox" class="custom-control-input" value="Lectura"> 
        <label for="hobbie_0" class="custom-control-label">Lectura</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbies[]" id="hobbie_1" type="checkbox" class="custom-control-input" value="Deporte"> 
        <label for="hobbie_1" class="custom-control-label">Deporte</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbies[]" id="hobbie_2" type="checkbox" class="custom-control-input" value="Música"> 
        <label for="hobbie_2" class="custom-control-label">Música</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbies[]" id="hobbie_3" type="checkbox" class="custom-control-input" value="Viajar"> 
        <label for="hobbie_3" class="custom-control-label">Viajar</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="hobbies[]" id="hobbie_4" type="checkbox" class="custom-control-input" value="Cocina"> 
        <label for="hobbie_4" class="custom-control-label">Cocina</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
    
</body>
</html>