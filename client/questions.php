<div class="container">
  

<div class="row" >

 <div class="col-8 ">
    <h1 class="heading">Questions</h1> 
 <?php
 include("./common/db.php");

 if(isset($_GET['c-id'])){
    $cid=$_GET['c-id'];
$query=$conn->prepare("select * from questions where category_id=$cid");
}

 else if(isset($_GET['u-id'])){
    $uid=$_GET['u-id'];
    $query=$conn->prepare("select * from questions where user_id=$uid");
    

    // echo "<div class='question'><h6><a href='?q-id=$qid'>$title</a>";
    
    // echo $uid?"<a href='./Server/requests.php?delete=$qid'>Delete</a>":NULL;
    // echo"</h6></div>";
 
}
 else if(isset($_GET['latest'])){
    $query=$conn->prepare("select * from questions order by id desc");
 }
 else if(isset($_GET['search'])){
    $search=$_GET['search'];
    $query=$conn->prepare("select * from questions where `title` LIKE '%$search%'");
}
 else{
    $query=$conn->prepare("select * from questions");
 }
    
    $query->execute();
    $result=$query->fetchall();

    foreach($result as $row){

    $qid=$row['id'];
    $title=$row['title'];

    //echo "<div class='question'><h6><a href='?q-id=$qid'>$title</a></h6></div>";

    echo "<div class='question'><h6><a href='?q-id=$qid'>$title</a>";
    
    echo isset($uid)?"<a href='./Server/requests.php?delete=$qid'>Delete </a>":NULL;
    echo"</h6></div>";

 }
 ?>
</div>
<div class="col-4"><?php include("./client/categorieslist.php");?></div>
<div>
</div>