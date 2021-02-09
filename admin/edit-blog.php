<?php
if (isset($_COOKIE["admin"])){
    $id = $_COOKIE["admin"];
    if (isset($_REQUEST["bid"])){
        $bid = $_REQUEST["bid"];
        $blog_table = "blog";
        include "php/select.php";
        $table = "admin";
        $admin_only = $select->selectonly($table,$id);
        include "include/header.php";
        $blog_edit = $select->selectall($blog_table,$bid);
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
        <form method="post" enctype="multipart/form-data" action="php/edit.php" class="row small-spacing">
            <input type="hidden" name="blog_id" value="<?php echo $bid; ?>">
            <input type="hidden" name="old_file" value="<?php echo $blog_edit['image']; ?>">
            <div class="col-xs-12">
                <div class="box-content">
                    <h4 class="box-title">Edit Your Post</h4>
                    <li style="list-style: none;" class="form-group">
                        <input type="text" required name="name" class="form-control" value="<?php echo $blog_edit['name']; ?>">
                    </li>
                    <li style="list-style: none;" class="form-group">
                        <input type="file" required name="image" class="form-control">
                    </li>
                    <select name="category" style="margin-bottom: 1rem;" id="">
                        <?php while ($category = mysqli_fetch_array($categorys)){
                            if ($category['type']==1){
                            ?>
                            <option value="<?php echo $categoryname = $category['name'] ?>" <?php if($categoryname==$blog_edit['category']){ echo "selected"; } ?>><?php echo $category["name"] ?></option>
                            <?php
                            }
                        }
                        ?>
                    </select>
                    <textarea name="post" id="tinymce"><?php echo $blog_edit["post"]; ?></textarea>
                </div>
            </div>
            <li class="form-group" style="text-align: center">
                <button type="submit" name="edit_blog" class="btn btn-info waves-effect waves-light">Save</button>
            </li>
            <!-- /.col-lg-6 col-xs-12 -->
        </form>
    <?php
        include "include/footer.php";
    }
}else{
    header("location:login");
}
?>