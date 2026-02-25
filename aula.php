<!DOCTYPE html>
<head>
    <title>Document</title>
</head>

<body>
    <?php
    $1 = 1;
    while ($1 < 6){
        echo $i;
        $i = $i++;
    } 

    echo "<br><br>";
    $cor = array("vermelho","verde","blue", "yellow");
    foreach ($cor as $valor){
        echo "$valor  <br>"
    }
?>
</body>
</html>