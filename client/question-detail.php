<div class="container">

<div class="row">


<div class="col-8">
    <h1 class="heading">Questions Detail</h1> 
<?php 
include("./common/db.php");
$qid=$_GET['q-id'];

$query=$conn->prepare("Select * from questions where id=$qid");
$query->execute();
$question_detail=$query->fetchall();

// echo $question_detail['title'];

foreach($question_detail as $row){

    $cid=$row['category_id'];

    echo "<h6 class='margin-bottom question'>Question: ".$row['title']."</h6>
    <p class='margin-bottom question'>Description: ".$row['description']."</p>";
}

?>
<?php include("./client/answers.php"); ?>

<form action="./Server/requests.php" method="post">
    <input type="hidden" name="question-id" value="<?php echo $qid?>">
<textarea name="answer" class="form-control margin-bottom question" placeholder="Type your answer"></textarea>
<button class="btn-primary form-control button">Submit your answer</button>
</form>
</div>

<div class="col-4">


<?php
$query=$conn->prepare("select name from category where id=$cid ");
$query->execute();
$result=$query->fetchall();
//print_r($result);
//echo $result[0]['name'];
$category=$result[0]['name'];
echo "<h3 class='heading'>".$category."</h3>";
//echo $cid;
$query=$conn->prepare("Select * from questions where category_id=$cid && id!=$qid");
$query->execute();
$question_detail=$query->fetchall();

// echo $question_detail['title'];

foreach($question_detail as $row){

    $id=$row['id'];
    echo "<h6 class='margin-bottom question'><a href='?q-id=$id'>".$row['title']."</a></h6>";
    
}
?>
</div>
</div>
</div>