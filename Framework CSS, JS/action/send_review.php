<?php
require '../config.php';
if($_POST['page']=="oie"){
  $sql = "INSERT INTO oie(stars,name,review) VALUES(:stars,:name,:review)";
}
elseif ($_POST['page']=="forza"){
  $sql = "INSERT INTO forza(stars,name,review) VALUES(:stars,:name,:review)";
}
else{
  $sql = "INSERT INTO castagne(stars,name,review) VALUES(:stars,:name,:review)";
}
$dataBinded=array(
    ':stars'=> $_POST['stars'],
    ':name'   => $_POST['name'],
    ':review'=> $_POST['review']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
?>
