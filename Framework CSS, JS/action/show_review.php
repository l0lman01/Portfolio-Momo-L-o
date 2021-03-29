<?php
require '../config.php';
$page=$_POST['page'];
$offset=$_POST['offset'];
if($page=="oie"){
  $sql = "SELECT * FROM oie LIMIT 3 OFFSET $offset";
}
elseif ($page=="forza"){
  $sql = "SELECT * FROM forza LIMIT 3 OFFSET $offset";
}
else{
  $sql = "SELECT * FROM castagne LIMIT 3 OFFSET $offset";
}
$pre = $pdo->prepare($sql);
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
foreach ($data as $id => $review): ?>
    <div class="reviews">
      <div class="row">
      <div class="col s6 offset-s3">
        <div class="row">
          <div class="input-field col s7">
            <h5> <?php echo $review['name'] ?> </h5>
          </div>
          <div class="row">
          <div class="input-field col s6">
            <img class="etoiles" src="img/<?php echo $review['stars'] ?>stars" alt="">
          </div>
        </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <h6><?php echo $review['review'] ?></h6>
          </div>
        </div>
        </div>
      </div>
    </div>
  <br/><br/>
<?php endforeach;
?>
