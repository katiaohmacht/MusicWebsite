<?php 
session_start(); 

include "db_conn.php";
if (isset($_POST['uname']) && isset($_POST['psw'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $psw = validate($_POST['psw']);
    if (empty($uname)) {
        header("Location: index.html?error=User Name is required");
        exit();
    }else if(empty($psw)){
        header("Location: index.html?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM entries WHERE username='$uname' AND password='$psw'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $psw) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: instructoraccess.html");
                exit();
            }else{
                header("Location: index.html?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: login.html?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.html");
    exit();
}