<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Table</title>
  <html lang="ru">
  <link rel="stylesheet" href="style.css">
 </head>
 <body>
 <table id = table1>
  <tbody>
  <caption>Таблица истинности PHP</caption>
    <tr>
      <th>A</th>
      <th>B</th>
      <th>!A</th>
      <th>A || B</th>
      <th>A && B</th>
      <th>A xor B</th>
    </tr>
    <tr>
      <td>0</td>
      <td>0</td>
      <td><?php $a = 0; $b = !$a; echo $b; ?></td>
      <td><?php $a = 0; $b = 0; var_dump($a || $b)?></td>
      <td><?php $a = 0; $b = 0; var_dump($a && $b)?></td>
      <td><?php $a = 0; $b = 0; var_dump($a xor $b)?></td>
    </tr>
    <tr>
      <td>0</td>
      <td>1</td>
      <td><?php $a = 0; $b = !$a; echo $b; ?></td>
      <td><?php $a = 0; $b = 1; var_dump($a || $b)?></td>
      <td><?php $a = 0; $b = 1; var_dump($a && $b)?></td>
      <td><?php $a = 0; $b = 1; var_dump($a xor $b)?></td>
    </tr>
    <tr>
      <td>1</td>
      <td>0</td>
      <td><?php $a = 1; $b = !$a; echo (int)$b ?></td>
      <td><?php $a = 1; $b = 0; var_dump($a || $b)?></td>
      <td><?php $a = 1; $b = 0; var_dump($a && $b)?></td>
      <td><?php $a = 1; $b = 0; var_dump($a xor $b)?></td>
    </tr>
    <tr>
      <td>1</td>
      <td>1</td>
      <td><?php $a = 1; $b = !$a; echo (int)$b ?></td>
      <td><?php $a = 1; $b = 1; var_dump($a || $b)?></td>
      <td><?php $a = 1; $b = 1; var_dump($a && $b)?></td>
      <td><?php $a = 1; $b = 1; var_dump($a xor $b)?></td>
    </tr>
  </tbody>
</table>

<table id = table2>
  <tbody>
  <caption>Гибкое сравнение в PHP</caption>
    <tr>
      <th></th>
      <th>true</th>
      <th>false</th>
      <th>1</th>
      <th>0</th>
      <th>-1</th>
      <th>"1"</th>
      <th>null</th>
      <th>"php"</th>
    </tr>
    <tr>
      <th>true</th>
      <td><?php $a = true; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = true; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = true; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = true; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = true; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = true; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = true; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = true; $b = "php"; var_dump($a == $b)?></td>
    </tr>
    <tr>
      <th>false</th>
      <td><?php $a = false; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = false; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = false; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = false; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = false; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = false; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = false; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = false; $b = "php"; var_dump($a == $b)?></td>
    </tr>
    <tr>
      <th>1</th>
      <td><?php $a = 1; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = 1; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = 1; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = 1; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = 1; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = 1; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = 1; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = 1; $b = "php"; var_dump($a == $b)?></td>
    </tr>
    <tr>
      <th>0</th>
      <td><?php $a = 0; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = 0; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = 0; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = 0; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = 0; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = 0; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = 0; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = 0; $b = "php"; var_dump($a == $b)?></td>
    </tr>
    <tr>
      <th>-1</th>
      <td><?php $a = -1; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = -1; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = -1; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = -1; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = -1; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = -1; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = -1; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = -1; $b = "php"; var_dump($a == $b)?></td>
    </tr>
    <tr>
      <th>"1"</th>
      <td><?php $a = "1"; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = "1"; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = "1"; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = "1"; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = "1"; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = "1"; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = "1"; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = "1"; $b = "php"; var_dump($a == $b)?></td>
    </tr>
    <tr>
      <th>null</th>
      <td><?php $a = null; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = null; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = null; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = null; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = null; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = null; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = null; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = null; $b = "php"; var_dump($a == $b)?></td>
    </tr>
    <tr>
      <th>"php"</th>
      <td><?php $a = "php"; $b = true; var_dump($a == $b)?></td>
      <td><?php $a = "php"; $b = false; var_dump($a == $b)?></td>
      <td><?php $a = "php"; $b = 1; var_dump($a == $b)?></td>
      <td><?php $a = "php"; $b = 0; var_dump($a == $b)?></td>
      <td><?php $a = "php"; $b = -1; var_dump($a == $b)?></td>
      <td><?php $a = "php"; $b = "1"; var_dump($a == $b)?></td>
      <td><?php $a = "php"; $b = null; var_dump($a == $b)?></td>
      <td><?php $a = "php"; $b = "php"; var_dump($a == $b)?></td>
    </tr>
  </tbody>
</table>

<table id = table3>
  <tbody>
  <caption>Жёсткое сравнение в PHP</caption>
    <tr>
      <th></th>
      <th>true</th>
      <th>false</th>
      <th>1</th>
      <th>0</th>
      <th>-1</th>
      <th>"1"</th>
      <th>null</th>
      <th>"php"</th>
    </tr>
    <tr>
      <th>true</th>
      <td><?php $a = true; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = true; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = true; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = true; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = true; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = true; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = true; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = true; $b = "php"; var_dump($a === $b)?></td>
    </tr>
    <tr>
      <th>false</th>
      <td><?php $a = false; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = false; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = false; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = false; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = false; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = false; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = false; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = false; $b = "php"; var_dump($a === $b)?></td>
    </tr>
    <tr>
      <th>1</th>
      <td><?php $a = 1; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = 1; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = 1; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = 1; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = 1; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = 1; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = 1; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = 1; $b = "php"; var_dump($a === $b)?></td>
    </tr>
    <tr>
      <th>0</th>
      <td><?php $a = 0; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = 0; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = 0; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = 0; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = 0; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = 0; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = 0; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = 0; $b = "php"; var_dump($a === $b)?></td>
    </tr>
    <tr>
      <th>-1</th>
      <td><?php $a = -1; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = -1; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = -1; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = -1; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = -1; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = -1; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = -1; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = -1; $b = "php"; var_dump($a === $b)?></td>
    </tr>
    <tr>
      <th>"1"</th>
      <td><?php $a = "1"; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = "1"; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = "1"; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = "1"; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = "1"; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = "1"; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = "1"; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = "1"; $b = "php"; var_dump($a === $b)?></td>
    </tr>
    <tr>
      <th>null</th>
      <td><?php $a = null; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = null; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = null; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = null; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = null; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = null; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = null; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = null; $b = "php"; var_dump($a === $b)?></td>
    </tr>
    <tr>
      <th>"php"</th>
      <td><?php $a = "php"; $b = true; var_dump($a === $b)?></td>
      <td><?php $a = "php"; $b = false; var_dump($a === $b)?></td>
      <td><?php $a = "php"; $b = 1; var_dump($a === $b)?></td>
      <td><?php $a = "php"; $b = 0; var_dump($a === $b)?></td>
      <td><?php $a = "php"; $b = -1; var_dump($a === $b)?></td>
      <td><?php $a = "php"; $b = "1"; var_dump($a === $b)?></td>
      <td><?php $a = "php"; $b = null; var_dump($a === $b)?></td>
      <td><?php $a = "php"; $b = "php"; var_dump($a === $b)?></td>
    </tr>
  </tbody>
</table>

 </body>
</html>