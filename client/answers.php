<div class="container">
<h5>Answers: </h5>

<?php
$query=$conn->prepare("Select * from answers where question_id=$qid");
$query->execute();
$answers=$query->fetchall();

foreach($answers as $row){

    $answer=$row['answer'];
    echo "<div class='row'><p class='answer-wrapper'>$answer</p></div>";
}

?>

</div>