<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Discuss Project</title>
    <?php include("./client/commonFiles.php")?>
</head>
<body>
    <?php 
    
    session_start();
    include("./client/header.php");

if(isset($_GET['signup']) /*&& !$_SESSION['user']['username']*/){
          include("./client/signup.php");
}
elseif(isset($_GET['login']) /*&& !$_SESSION['user']['username']*/){
          include("./client/login.php");   
}  
elseif(isset($_GET['ask'])){
    
          include("./client/ask.php");   
}
elseif(isset($_GET['q-id'])){

    include("./client/question-detail.php");
}
elseif(isset($_GET['c-id'])){
   include("./client/questions.php");
}
elseif(isset($_GET['u-id'])){

        include("./client/questions.php");
}

else{

    include("./client/questions.php");

}
?>
</body>
</html>