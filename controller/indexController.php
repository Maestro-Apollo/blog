<?php
session_start();
require_once('controller/database.php');
class index extends database
{
    public function indexFunction()
    {
        $sql = "SELECT * from post_tbl group by post_id desc limit 6";
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