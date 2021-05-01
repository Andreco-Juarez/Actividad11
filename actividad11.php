<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <?php
        //recibe todas las repuestas y las manda a un arreglo
        for($i=1; $i<11; $i++)
        {
            $pregunta[$i-1]=$_POST["pregunta".$i];
        }
        //identifico e inicializo el arreglo que va a llevar el conteo de las respuestas
        $conteo = ["A"=>0,
                    "B"=>0,
                    "C"=>0,
                    "D"=>0];
        //recorro el arreglo que contiene las respuestas mientras voy incremnetando el contador de cada respuesta
        for($i=0;$i<10;$i++)
        {
            if($pregunta[$i] == "A")
            {
                $conteo["A"]++; 
            }
            if($pregunta[$i] == "B")
            {
                $conteo["B"]++; 
            }
            if($pregunta[$i] == "C")
            {
                $conteo["C"]++; 
            }
            if($pregunta[$i] == "D")
            {
                $conteo["D"]++; 
            }
        }
        //ordeno el arreglo para que quede el mas grande arriba
        arsort($conteo);
        $i=0;
        //separo el arreglo en variables para su mejor funcionamiento
        foreach($conteo as $key => $value)
        {
            if($i==0)
            {
                $mayor1 = $conteo[$key];
                $letra1 = $key;
            }
            if($i==1)
            {
                $mayor2 = $conteo[$key];
                $letra2 = $key;
            }
            if($i==2)
            {
                $mayor3 = $conteo[$key];
            }
            $i++;
        }
        //Comparo los valores de las primeras tres para ver si hay un triple empate
        if($mayor1 == $mayor2 && $mayor2 == $mayor3)
        {
            echo "<h1>Eres un taco de sal</h1>";
        }
        //decido si mayor1 es de verdad mayor a mayor2 ya que pueden ser iguales
        elseif($mayor1 > $mayor2)
        {
            //comparo el valor de la etiqueta  para desplegar la respuesta
            if($letra1 == "A")
            {
                echo "<h1>Eres un taco al pastor</h1>";
            }
            elseif($letra1 == "B")
            {
                echo "<h1>Eres un taco al suadero</h1>";
            }
            elseif($letra1 == "C")
            {
                echo "<h1>Eres un taco al barbacoa</h1>";
            }
            elseif($letra1 == "D")
            {
                echo "<h1>Eres un taco al Lagunero</h1>";
            }
        }
        //checo si los dos primeros lugares en el conteo son iguales
        elseif($mayor1 == $mayor2)
        {
            //checo todas las posibilidades de que los valores coincidan
            if(($letra1 == "A" && $letra2 == "B") || ($letra1 == "B" && $letra2 == "A"))
            {
                echo "<h1>Eres un taco campechano</h1>";
            }
            if(($letra1 == "B" && $letra2 == "C") || ($letra1 == "C" && $letra2 == "B"))
            {
                echo "<h1>Eres un taco de carnitas</h1>";
            }
            if(($letra1 == "C" && $letra2 == "D") || ($letra1 == "D" && $letra2 == "C"))
            {
                echo "<h1>Eres un taco bell</h1>";
            }
            if(($letra1 == "A" && $letra2 == "D") || ($letra1 == "D" && $letra2 == "A"))
            {
                echo "<h1>Eres un taco light</h1>";
            }
            if(($letra1 == "A" && $letra2 == "C") || ($letra1 =="C" && $letra2 == "A"))
            {
                echo "<h1>Eres un taco placero</h1>";
            }
            if(($letra1 == "B" && $letra2 == "D") || ($letra1 == "D" && $letra2 == "B"))
            {
                echo "<h1>Eres un taco de mixiote</h1>";
            }
        }
        //un ultimo else por si se olvida una opcion
        else
        {
            echo "<h1>Eres un taco de sal</h1>";
        }
    ?>
</body>
</html>