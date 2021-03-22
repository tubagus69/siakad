<?php

$conn = mysqli_connect('localhost','root','','kuliah_ci');
$query = mysqli_query($conn, 'SELECT * FROM siswa');
while ($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}
echo '</pre>';
echo json_encode($data);
?>