<?php
session_start();
require_once('../controller/database.php');
class post extends database
{
    public function postFunction()
    {
        if (isset($_POST['submit'])) {
            $username = addslashes(trim($_POST['username']));
            $title = addslashes(trim($_POST['title']));
            $message = addslashes(trim($_POST['message']));
            $image = time() . '_' . $_FILES['image']['name'];
            $target = 'post_image/' . $image;

            $sql = "INSERT INTO `post_tbl` (`post_id`, `username`, `title`, `message`, `image`, `date`) VALUES (NULL, '$username', '$title', '$message', '$image', CURRENT_TIMESTAMP)";
            $res = mysqli_query($this->link, $sql);
            if ($res) {
                $msg = '<span style="color:green">Successfully Posted</span>';
                move_uploaded_file($_FILES['image']['tmp_name'], $target);
                header('location:profile.php');
            } else {
                $msg = '<span style="color:red">Invalid Input</span>';
                return $msg;
            }
        }
        # code...
    }
}
$obj = new post;
$objPost = $obj->postFunction();