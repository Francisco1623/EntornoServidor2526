<h4>Ejercicio1</h4>
<?php 
$nombre = 'Francisco';
echo $nombre;
?>
<h4>Ejercicio2</h4>
<?php
$a = 3;
$b = 4;
echo $a + $b;
?>

<h4>Ejercicio3</h4>
<?php
function saludo($nombre){
    return "Hola ".$nombre;
}
echo saludo('Francisco');
?>

<h4>Ejercicio4</h4>
<?php
function muestraNum($num){
    if($num>0){
        return "Positivo";

    }elseif($num===0){
        return "Cero";

    }

    return "Negativo";
    
    
}
echo muestraNum(-1);

?>

<h4>Ejercicio5</h4>
<?php
function muestraDia($num){
    switch($num){
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miércoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "No válido";
            break;
    }
    
    
}
echo muestraDia(-1);

?>

<h4>Ejercicio6</h4>
<?php
for($i = 1;$i<11;$i++){
    echo $i."<br>";
}

?>
<h4>Ejercicio7</h4>
<?php

$max = 21;
$cont = 2;
while($cont<$max){
    if($cont%2==0){
        echo $cont."<br>";

    }
    $cont++;
}

?>

<h4>Ejercicio8</h4>
<?php

$arrayAlumnos = ['Juan','Paco','Adrian','Pedro','Maria'];
foreach($arrayAlumnos as $alumno){
    echo $alumno.'<br>';
}

?>

<h4>Ejercicio9</h4>
<?php
function esParImpar($num){
    if($num%2==0){
        return 'Par';

    }
    return 'Impar';
}

echo esParImpar(9);

?>

<h4>Ejercicio10</h4>
<?php
$edad = 17;
if($edad>=18){
    echo 'Es mayor de edad';
}else{
    echo 'Es menor de edad';
}

?>

<h4>Ejercicio11</h4>
<?php
$estacion='Verano';


    switch($estacion){
        case "Invierno":
            echo "Estación del año: ".$estacion;
            break;
         case "Verano":
            echo "Estación del año: ".$estacion;
            break;
         case "Otoño":
            echo "Estación del año: ".$estacion;
            break;
         case "Primavera":
            echo "Estación del año: ".$estacion;
            break;
        default:
            echo "Estación del año: No válida";
            break;
    }


    
    


?>
<h4>Ejercicio12</h4>
<?php
function mostrarMayor($num1,$num2){
    if($num1>$num2){
        return $num1;
    }elseif($num2>$num1){
        return $num2;
    }
    return 'Son iguales';

}

echo mostrarMayor(2,1);

?>

<h4>Ejercicio13</h4>
<?php
$res =0;
for($i=1;$i<=100;$i++){
    $res+=$i;
}
echo 'Resultado= '.$res;


?>

<h4>Ejercicio14</h4>
<?php
$res =0;
for($i=1;$i<=100;$i++){
    $res+=$i;
}
echo 'Resultado= '.$res;


?>
<h4>Ejercicio15</h4>
<?php

$arrayNum = [1,2,3,4,5];
function sacarPromedio($array){
    $res = 0;
    $sum = 0;
    foreach($array as $valor ){
        $sum+=$valor;
        
}
return $sum/count($array);
}
echo sacarPromedio($arrayNum);


?>

<h4>Ejercicio16</h4>
<?php

$text = 'cadena';
$arrayText =  str_split($text);

foreach($arrayText as $val){
    echo $val."<br>";
}


?>

<h4>Ejercicio17</h4>
<?php
function convierteFactorial($num){
    $total = 1;
    for($i = 1;$i<$num+1;$i++){
        $total*=$i;
    }
    return "Factorial de ".$num." es: ".$total;
}

echo convierteFactorial(5);

?>

<h4>Ejercicio18</h4>
<?php
function celsiusAFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9 / 5) + 32;
    return $fahrenheit;
}

echo celsiusAFahrenheit(50);

?>

<h4>Ejercicio19</h4>
<?php


function imprimirResultado($num,$num2,$operador){
    if(strtolower($operador)==="sumar"){
            return "Suma: ".$num." + ".$num2." = ".$num+$num2;
    }elseif(strtolower($operador)==="restar"){
        if($num>=$num2){
            return "Resta: ".$num." - ".$num2." = ".$num-$num2;
        }
            return "Resta: ".$num2." - ".$num." = ".$num2-$num;
    }elseif(strtolower($operador)==="multiplicacion"){
        return "Multiplicación: ".$num." * ".$num2." = ".$num2*$num;
    }elseif(strtolower($operador)==="division"){
        if($num>=$num2){
            return "División: ".$num." / ".$num2." = ".$num/$num2;
        }
            return "Error en la division";
    }
    return "Error";
}


echo imprimirResultado(620,3000,"restar");

?>

<h4>Ejercicio20</h4>
<?php
$alumnos = [
["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
];
$mayorMedia = 0;
$mediaNotas = 0;
$alumnosMayores = [];
foreach($alumnos as $clave => $valor){
    if($valor['nota']>=$mayorMedia){
        $mayorMedia=$valor['nota'];
    }
    if($valor['edad']>19){
        $alumnosMayores[]=$valor['nombre'];
    }
    
        $mediaNotas+=$valor['nota'];
    
}
echo "Mayor nota media: ".$mayorMedia."<br>";
echo "Nota media: ".$mediaNotas/count($alumnos)."<br>"."<br>";
echo "Alumnos Mayores de 19: <br>";
foreach($alumnosMayores as $al){
    echo $al."<br>";
}



?>

<h4>Ejercicio21</h4>
<?php
$productos = [
 ["nombre" => "Camiseta", "precio" => 15.99, "stock" => 10],
 ["nombre" => "Pantalón", "precio" => 35.5, "stock" => 0],
 ["nombre" => "Zapatos", "precio" => 55.0, "stock" => 5],
 ["nombre" => "Gorra", "precio" => 12.0, "stock" => 20],
];
$totalInventario = 0;
foreach($productos as $pr=>$val){
    if($val['stock']>0){
        echo "Producto: ".$val['nombre'].", ".$val['precio'].", ".$val['stock']."<br>";
        $totalInventario+=$val['precio']*$val['stock'];
    }
    
    

}
echo "Total inventario: ".$totalInventario."<br>";

?>

<h4>Ejercicio22</h4>
<?php
$empleados = [
 ["nombre" => "Laura", "departamento" => "Ventas", "salario" =>1200],
 ["nombre" => "Pedro", "departamento" => "Marketing", "salario" =>1500],
 ["nombre" => "Sofía", "departamento" => "Ventas", "salario" =>1300],
 ["nombre" => "Javier", "departamento" => "IT", "salario" => 1800],
 ["nombre" => "Marta", "departamento" => "Marketing", "salario" =>1600],
];
$salarioMedio = 0;
$totalSalario = 0;
$salarioAlto = 0;


foreach($empleados as $emp=>$val){
    if($val['salario']>$salarioAlto){
        $salarioAlto=$val['salario'];

    }
    function devuelveNombres($departamento){
        if($departamento){

    }
}

    devuelveNombres($val['departamento']);
       
    $totalSalario+=$val['salario'];
    
    
    

}
echo "Media salario: ".$totalSalario/count($empleados)."<br>";
echo "Mayor salario: ".$salarioAlto."<br>";


?>