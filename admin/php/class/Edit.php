<?php


class Edit
{
    public function update($data){
        $db = new Db();
        $con = $db->con();
        $query = mysqli_query($con,$data);
        return $query;
    }
}