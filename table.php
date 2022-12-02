<?php
include "database.php";

$sql = mysqli_query($conn, 'SELECT * FROM `shop`');
  while ($result = mysqli_fetch_array($sql)) {
    echo '<tr>'.'<td>'.'<a href = "clothe.php?id='.$result['id'].'">'.'<img src="'.$result['Товар'].'">'.'</a>'.'</td>'.'<td>'. $result['Название'].'</td>'.'<td>' .$result['Описание товара'].'</td>'.'<td>'.$result['Цена'].'</td>'.'</tr>';
  }
?>