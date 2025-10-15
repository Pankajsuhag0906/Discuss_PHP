<div>
<h1 class="heading">Categories<h1>

<?php
$query=$conn->prepare("Select * from category");
$query->execute();

foreach($query as $item){

    $category=ucfirst($item['name']);
    $cid=$item['id'];

    echo "<div class='question'><h6><a href='?c-id=$cid'>$category</a></h6></div>";
}

?>


</div>