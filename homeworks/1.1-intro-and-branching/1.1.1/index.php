<?php
$variable = 3.14;
    if(is_bool($variable))
        {
            $type = "bool";
            $description = "Логический тип, принимает знчения 'истина' или 'ложь'"    
        }
    elseif (is_float($variable))
        {
            $type = "float";
            $description = "Число с плавающей запятой"    
        }
    elseif (is_int($variable))
        {
            $type = "int";
            $description = "Целое число"    
        }
    elseif (is_string($variable))
        {
            $type = "string";
            $description = "Строковый тип переменной"    
        }
    elseif (is_null($variable))
        {
            $type = "null";
            $description = "Переменная с отсутствующим значением"    
        }
    else
        {
            $type = "other";
            $description = "Иной тип переменных"
        }               
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><? $=variable." is ".$type?></p>
    <p><?=$description?></p>
</body>
</html>