<?php
include "database.php";

$sql = mysqli_query($conn, 'SELECT * FROM `shop`');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<tr>'.'<td>'.'<img src="'.$result['Товар'].'">'.'</td>'.'<td>'. $result['Название'].'</td>'.'<td>' .$result['Описание товара'].'</td>'.'<td>'.$result['Цена'].'</td>'.'</tr>';
  }
?>