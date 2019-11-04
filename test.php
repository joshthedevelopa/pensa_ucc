<?php

include "serv/db.php";

$target = 1;

if($target == ""){
    $sql = "SELECT * FROM events ORDER BY e_id DESC";

}else{
    $sql = "SELECT * FROM events ORDER BY e_id DESC LIMIT {$target}";

}

$query = mysqli_query($conn, $sql);

while($r=mysqli_fetch_assoc($query)){
    print_r($r['e_date']);
}