
<?php 
require "config.php";

function signup(){
  
  require "config.php";

   
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // making sure the useranme and email from registeration is unique 
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' ");
    //if you found any duplicate 
    if (mysqli_num_rows($duplicate) > 0) {
      echo "<script> alert(' email has already been taken ');</script> ";
    } else {
      // reaching here means email is unique so we check
      //if the password == confirm password 
        // we create a query with the inputs of the form to insert into the databse 
        $query = "INSERT INTO users ( email , password ) VALUES ('$email' , '$password');";
       
        // we pass the connection of the database and the quarey 
        mysqli_query($conn, $query);
        echo "<script> alert('Regsitered successfully');</script> ";
  
     
    }

}

function signin(){
 // echo "ienvie";
 require "config.php";
//global $conn ;

$email = $_POST['email'];
$password = $_POST["password"];
//echo $conn;
//searching for the uder by username or email
$result = mysqli_query($conn, "SELECT * FROM users where email = '$email'");
$row = mysqli_fetch_assoc($result);
//if the user was found 
if (mysqli_num_rows($result) > 0) {
  if ($password == $row['password']) {
    $_SESSION["login"] = true;
    
    $_SESSION["id"] = $row["id"];
    header("Location: index.html");
  } else {
    echo "<script> alert('Wrong password ');</script> ";

  }
} else {
  echo "<script> alert('user not registered ');</script> ";

}
}

?>