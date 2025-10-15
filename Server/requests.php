<?php

session_start();
include("../common/db.php");
if(isset($_POST['btn-submit'])){

  $username=$_POST['username']; 
  $email=$_POST['email'];
  $password=$_POST['password'];  
  $address=$_POST['address'];   echo "<br>";
 
  $user=$conn->prepare("insert into `users` (`id`,`username`,`email`,`password`,`address`)
   values ('null','$username','$email','$password','$address')");

 $result=$user->execute();
 $user_id=$conn->lastInsertId();

 if($result){
    //echo "User registered Successfully ";
    $_SESSION["user"]=["username"=>$username,"email"=>$email,"password"=>$password,"address"=>$address,"user_id"=>$user_id];
    header("location: /discuss");
 }
 else{
    echo "User registration failed ";
 }
}


if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $username="";
    $user_id="";
    $query="select * from users where email='$email' and password='$password'";
    $user=$conn->prepare($query);
    $user->execute();
    $result=$user->fetchall();
    $rows=count($result);

    foreach($result as $row){
        $user_id=$row['id'];
        $username=$row['username'];
        
    }


    if($rows==1){

    $_SESSION["user"]=["username"=>$username, "email"=>$email, "user_id"=>$user_id];
   
        header("location: /discuss");
    }
    else{
        echo "user not regitstered ";
    }
}
elseif(isset($_GET['logout'])){
session_unset();
header("location: /discuss");

}
elseif(isset($_POST['btn-ask'])){

    echo $title=$_POST['title']; echo "<br>";
    echo $description=$_POST['description']; echo "<br>";
    echo $category_id=$_POST['category']; echo "<br>";
    echo $userid=$_SESSION['user']['user_id'];
   
    $question=$conn->prepare("insert into `questions` (`id`,`title`,`description`,`category_id`,`user_id`)
   values ('null','$title','$description','$category_id','$userid')");

   $result=$question->execute();

   if($result){
    header("location: /discuss");
   }
   else{
    echo "Question is not added to Website";
   }
}
elseif(isset($_POST['answer'])){

    $answer=$_POST['answer']; 
    $question_id=$_POST['question-id']; 
    $userid=$_SESSION['user']['user_id'];
   
    $query=$conn->prepare("insert into `answers` (`id`,`answer`,`question_id`,`user_id`)
   values ('null','$answer','$question_id','$userid')");

   $result=$query->execute();

   if($result){
    header("location: /discuss");
   }
   else{
    echo "Answer not submitted";
   }
}

  else if(isset($_GET['delete'])){
        
        $qid=$_GET['delete'];
        $query=$conn->prepare("delete from questions where id=$qid ");
        $result=$query->execute();

        if($result){
            header("location: /discuss");
        }
        else{
            echo "Question not deleted";
        }

    }




?>