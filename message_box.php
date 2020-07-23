<?php 


// Database Connection //
$conn = mysqli_connect("localhost","root","","message");

if($conn){
    echo "connected";
}
else{
    echo "invalid database connection";
}



// post connection here //

if(isset($_POST['post_btn'])){
     $roles = $_POST['roles'];
     $comment = $_POST['comment'];

     if($roles == true){

        $sql = "INSERT INTO post_message (roles, comment) VALUE ('".$_POST["roles"]."', '".$_POST["comment"]."')";

        $query_run = mysqli_query($conn, $sql);

        if($roles['roles'] == 'Head Q. Staff'){

            $_SESSION['success'] = "Post Successful";
               header('location:buttons.php');
            }
            elseif ($roles['roles'] == 'Field Staff'){
               $_SESSION['success'] = "Post Successful";
               header('location:buttons.php');
            }
            elseif ($roles['roles'] == 'Programme Area'){
                $_SESSION['success'] = "Post Successful";
                header('location:buttons.php');
             }
            else{
                $_SESSION['status'] = "post message denied";
                header('location:buttons.php');
            }
     }
}


mysqli_close($conn);

?>