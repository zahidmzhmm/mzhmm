<?php
session_start();
include "class/Db.php";
include "class/Select.php";
$works_table = "works";
$blog_table = "blog";
$service = "service";
$portfolio = "portfolio";
$gallery = "gallery";
$category = "category";
$short_review_table = "short_review";
$select = new Select();
$admin = $select->selectall("admin");
$skill = $select->selectall("skill");
$works = $select->select_all_data($works_table);
$blog = $select->select_all_data($blog_table);
$services = $select->select_all_data($service);
$portfolios = $select->select_all_data($portfolio);
$short_reviews = $select->select_all_data($short_review_table);
$short_reviews_two = $select->select_all_data($short_review_table);
$short_reviews_tree = $select->select_all_data($short_review_table);
$short_reviews_four = $select->select_all_data($short_review_table);
$gallerys = $select->select_all_data($gallery);
$categorys = $select->select_all_data($category);
?>