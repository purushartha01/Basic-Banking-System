<?php
include 'db.php';
$fetchData= fetch_data($connect);

// fetch query
function fetch_data($connect){
  $query="SELECT * FROM customerdetails";
  $exec=mysqli_query($connect, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
?>