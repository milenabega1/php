<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Unidad 2 -ejemplo 7</title>
</head>
<body>
  <p><b>El valor de la compra es: $</b>
    <?php
    /*En este programa se tiene la variable $valor la cual se
    *utiliza en varios segmentos del mismo codigo pudiendo
    *modificar su contenido debido a que su ambito se mantiene
    *dntro del mismo archivo ene el que fue declarada
    */
    $valor = 1000; //Declaración e inicializacion de $valor
    echo "$valor";
    ?>
  </p>
  <p><b>Mas el IVA: $</b>
    <?php
    $valor = $valor * 1.16;
    //modificacion de $valor
    echo "$valor";
    ?>
  </p>
  <p><b>menos el descuento de 5%: $</b>
    <?php
    $valor = $valor * 0.95;
    //modificación de $valor
    echo "$valor";
    ?>
  </p>
</body>
</html>
