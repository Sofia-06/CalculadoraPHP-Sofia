<?php

    $op1=$_POST['c1'];
    $op2=$_POST['c2'];
    $operar=$_POST['Lista'];

    if($operar==1)
    {
        echo "El resultado de la Suma es: ".($op1+$op2);
    }
    if($operar==2)
    {
        echo "El resultado de la Resta es: ".($op1-$op2);
    }
    if($operar==3)
    {
        echo "El resultado de la Multiplicación es: ".($op1*$op2);
    }
    if($operar==4)
    {
        echo "El resultado de la División es: ".($op1/$op2);
    }

?>

<html>
    <br/><br/>
    <div align="center">
        <form action="index.html">
            <input type="submit" value="Regresar a la pagina principal">
        </form>
    </div>
</html>