<?php
    $n1= $_POST["n1"] ;
    $n2= $_POST["n2"] ;
    $op= $_POST["op"] ;
    $resultado;
    echo "<center><h1>Resultado:</h1></center>";
    if($op=="somar"){
        $resultado=$n1+$n2;
        echo "<h3>Resultado: $resultado</h3>";
    }
    if($op=="subtracao"){
        $resultado=$n1-$n2;
        echo "<h3>Resultado: $resultado</h3>";
    }

    if($op=="multiplicacao"){
        $resultado=$n1*$n2;
        echo "<h3>Resultado: $resultado</h3>";
    }
    if($op=="divisao"){
        $resultado=$n1/$n2;
        echo "<h3>Resultado: $resultado</h3>";
    }


?>
<input type="button" value="Voltar" onClick="history.go(-1)">