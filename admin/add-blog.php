<?php
if (isset($_COOKIE["admin"])){
    $id = $_COOKIE["admin"];
    include "php/select.php";
    $table = "admin";
    $admin_only = $select->selectonly($table,$id);
    include "include/header.php";
    if(isset($_SESSION["msg"])){
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
    ?>
    <form method="post" enctype="multipart/form-data" action="php/insert.php" class="row small-spacing">
        <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Add Your Post</h4>
                <ul class="list-group">
                    <li style="list-style: none;" class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </li>
                    <li style="list-style: none;" class="form-group">
                        <input type="file" name="image" class="form-control">
                    </li>
                    <select name="category" id="">
                        <?php while ($category = mysqli_fetch_array($categorys)){
                            if ($category['type']==1){
                            ?>
                            <option value="<?php echo $category['name'] ?>"><?php echo $category["name"] ?></option>
                            <?php
                            }
                        }
                        ?>
                    </select>
                </ul>
                <textarea name="post" id="tinymce"></textarea>
            </div>
        </div>
        <li class="form-group" style="list-style:none;text-align: center">
            <button type="submit" name="blog_save" class="btn btn-info waves-effect waves-light">Save</button>
        </li>
        <!-- /.col-lg-6 col-xs-12 -->
    </form>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>