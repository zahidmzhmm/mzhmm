<?php


class Select
{
    public function selectall($table){
        $db = new Db();
        $con = $db->con();
        $selectalldata = "SELECT * FROM `$table` ORDER BY id DESC";
        $selectquery = mysqli_query($con,$selectalldata);
        $arrayall = mysqli_fetch_array($selectquery);
        return $arrayall;
    }
    public function selectonly($table,$id){
        $db = new Db();
        $con = $db->con();
        $selectalldata = "SELECT * FROM `$table` WHERE id='$id'";
        $selectquery = mysqli_query($con,$selectalldata);
        $arrayall = mysqli_fetch_array($selectquery);
        return $arrayall;
    }
    public function select_all_data($table){
        $db = new Db();
        $con = $db->con();
        $select = "SELECT * FROM `$table` order by id desc ";
        $skill_query = mysqli_query($con,$select);
        return $skill_query;
    }
    public function select_with_limit($tableName,$limit){
        $db = new Db();
        $con = $db->con();
        $select = "SELECT * FROM `$tableName` ORDER BY id DESC LIMIT $limit";
        $query = mysqli_query($con,$select);
        return $query;
    }

    public function select_with_type($table, $type)
    {
        $db = new Db();
        $con = $db->con();
        return mysqli_query($con,"SELECT * FROM `$table` where `type`='$type'");
    }
}