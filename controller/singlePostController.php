<?php
session_start();
require_once('../controller/database.php');
class post extends database
{
    public function postFunction()
    {
        $id = $_GET['id'];
        $sql = "SELECT * from post_tbl inner join user_tbl on post_tbl.username = user_tbl.username WHERE post_tbl.post_id = $id ";
        $res = mysqli_query($this->link, $sql);
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return false;
        }

        # code...
    }
    public function commentFunction()
    {

        if (isset($_POST['submit'])) {
            if (isset($_SESSION['username'])) {
                $id = $_GET['id'];
                $name = addslashes(trim($_POST['username']));
                $message = addslashes(trim($_POST['message']));

                $sql = "INSERT INTO `message_tbl` (`message_id`, `post_id`, `username`, `message`, `message_date`) VALUES (NULL, '$id', '$name', '$message', CURRENT_TIMESTAMP)";
                $res = mysqli_query($this->link, $sql);
                if ($res) {
                    $msg = '<div class="alert-box alert-box--success">
                    <p>Success! Comment was posted.</p>
                    <span class="alert-box__close"></span>
                </div>';
                    return $msg;
                } else {
                    echo "Not Added";
                    return false;
                }
            } else {
                header('location:sign-up.php');
            }
        }

        # code...
    }
    public function showComments()
    {
        $id = $_GET['id'];
        $sql = "SELECT * from message_tbl where post_id = $id";
        $res = mysqli_query($this->link, $sql);
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return false;
        }
        # code...
    }
    public function countComments()
    {
        $id = $_GET['id'];
        $sql = "SELECT count(*) as total from message_tbl where post_id = $id";
        $res = mysqli_query($this->link, $sql);
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return false;
        }
        # code...
    }
}
$obj = new post;
$objPost = $obj->postFunction();
$objComment = $obj->commentFunction();
$objShow = $obj->showComments();
$objCount = $obj->countComments();
$row = mysqli_fetch_assoc($objPost);
$rowCount = mysqli_fetch_assoc($objCount);