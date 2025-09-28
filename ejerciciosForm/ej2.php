<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    
    if($_SERVER['REQUEST_METHOD']=='POST'){

        $color = $_POST['color'];
        $sexo = $_POST['sexo'];
       
    }else{
        $color = '';
        $sexo = '';
    }
    */
    $color = '';
        $sexo = '';
        $errors = [];
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST">
  <div class="form-group row">
    <label for="color" class="col-4 col-form-label">Color</label> 
    <div class="col-8">
      <select id="color" name="color" class="custom-select">
        <option value="">Selecciona el color</option>
      <option value="Rojo">Rojo</option>
        <option value="Verde">Verde</option>
        <option value="Azul">Azul</option>
        <option value="Amarillo">Amarillo</option>
      </select>
    </div>
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

         $color = $_POST['color'];
      
        if($color===''){
            $errors[] = 'No se ha elegido ningún color';
            echo 'No se ha elegido ningún color';
        }
        
    }
    ?>
  </div>
  <div class="form-group row">
    <label class="col-4">Sexo</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="sexo" id="sexo_0" type="radio" class="custom-control-input" value="Hombre" > 
        <label for="sexo_0" class="custom-control-label">Hombre</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="sexo" id="sexo_1" type="radio" class="custom-control-input" value="Mujer"> 
        <label for="sexo_1" class="custom-control-label">Mujer</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="sexo" id="sexo_2" type="radio" class="custom-control-input" value="Otro"> 
        <label for="sexo_2" class="custom-control-label">Otro</label>
      </div>
     
    </div>
     <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){

      
        //$sexo = $_POST['sexo']==null?'':$_POST['sexo'];
        
        if(!isset($_POST['sexo'])){
            $errors[] = 'No se ha elegido ningún sexo';
            echo '<p>No se ha elegido ningún sexo<p>';
        }
        
    }
    ?>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
    </div>
  </div>
</form>
<?php

if($_SERVER['REQUEST_METHOD']=='POST' && empty($errors)){
    echo 'Has elegido el color '. $color . ' y eres de sexo '. $_POST['sexo'];
}

?>
</body>
</html>