<?php
session_start();
require_once('../controller/database.php');
class login extends database
{
    public function loginFunction()
    {
        if (isset($_POST['submit'])) {

            $username = addslashes(trim($_POST['username']));
            $password = addslashes(trim($_POST['password']));


            $sqlFind = "SELECT * from user_tbl where username = '$username' ";
            $resFind = mysqli_query($this->link, $sqlFind);
            if (mysqli_num_rows($resFind) > 0) {
                $row = mysqli_fetch_assoc($resFind);
                $pass = $row['password'];
                if (password_verify($password, $pass) == true) {
                    $_SESSION['username'] = $username;
                    header('location:profile.php');
                } else {
                    $msg = '<span style="color:red">Wrong password</span>';
                    return $msg;
                }
            } else {
                $msg = '<span style="color:red">Invalid Input</span>';
                return $msg;
            }
        }

        # code...
    }
}
$obj = new login;
$objLogin = $obj->loginFunction();