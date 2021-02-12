<?php
session_start();
require_once('../controller/database.php');
class index extends database
{
    public function indexFunction()
    {
        $name = $_SESSION['username'];
        $sql = "SELECT * from post_tbl where username = '$name' ";
        $res = mysqli_query($this->link, $sql);
        if (mysqli_num_rows($res) > 0) {
            return $res;
        } else {
            return false;
        }

        # code...
    }
}
$obj = new index;
$objIndex = $obj->indexFunction();
$total = mysqli_num_rows($objIndex);