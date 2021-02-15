<?php
session_start();
include "class/Db.php";
include "class/Select.php";
$select = new Select();
$admin = $select->selectall("admin");
$blog = $select->select_all_data("blog");
$categories = $select->select_all_data("category");
$galleries = $select->select_all_data("gallery");
$portfolios = $select->select_all_data("portfolio");
$services = $select->select_all_data("service");
$short_reviews = $select->select_all_data("short_review");
$skill = $select->select_all_data("skill");
$works = $select->select_all_data("works");
$portfolios_with_limit = $select->select_with_limit("portfolio",9);
$services_with_limit = $select->select_with_limit("service",6);
$categories_type1 = $select->select_with_type("category",1);
$categories_type2 = $select->select_with_type("category",2);
?>