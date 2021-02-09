<?php
if (isset($_COOKIE["admin"])){
    $id = $_COOKIE["admin"];
    include "php/select.php";
    $table = "admin";
    $admin_only = $select->selectonly($table,$id);
    include "include/header.php";
    ?>
    <form method="post" enctype="multipart/form-data" action="php/edit.php" class="row small-spacing">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Description</h4>
                <textarea name="short_description" class="form-control" style="margin-bottom: 2rem;"><?php echo $admin_only["short_description"] ?></textarea>
                <textarea name="description" id="tinymce"><?php echo $admin_only["description"] ?></textarea>
            </div>
        </div>
        <li class="form-group" style="text-align: center">
            <button type="submit" name="edit_about" class="btn btn-info waves-effect waves-light">Save</button>
        </li>
        <!-- /.col-lg-6 col-xs-12 -->
    </form>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>