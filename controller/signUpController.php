<?php
session_start();
require_once('../controller/database.php');
class signUp extends database
{
    public function signUpFunction()
    {
        if (isset($_POST['submit'])) {
            $fname = addslashes(trim($_POST['fname']));
            $lname = addslashes(trim($_POST['lname']));
            $username = addslashes(trim($_POST['username']));
            $email = addslashes(trim($_POST['email']));
            $password = addslashes(trim($_POST['password']));

            $pass = password_hash($password, PASSWORD_DEFAULT);

            $sqlFind = "SELECT * from user_tbl where username = '$username' OR email = '$email' ";
            $resFind = mysqli_query($this->link, $sqlFind);
            if (mysqli_num_rows($resFind) > 0) {
                $msg = '<span style="color:red">username or email is taken</span>';
                return $msg;
            } else {
                $sql = "INSERT INTO `user_tbl` (`user_id`, `fname`, `lname`, `username`, `email`, `password`) VALUES (NULL, '$fname', '$lname', '$username', '$email', '$pass')";
                $res = mysqli_query($this->link, $sql);
                if ($res) {
                    $_SESSION['username'] = $username;
                    header('location:profile.php');
                } else {
                    $msg = '<span style="color:red">Invalid Input</span>';
                    return $msg;
                }
            }
        }
        # code...
    }
}
$obj = new signUp;
$objSignUp = $obj->signUpFunction();