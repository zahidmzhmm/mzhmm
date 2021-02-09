<?php
if (isset($_COOKIE["admin"])){
    $id = $_COOKIE["admin"];
    include "php/select.php";
    $table = "admin";
    $admin_only = $select->selectonly($table,$id);
    include "include/header.php";
    ?>
    <div class="row small-spacing">
        <div class="col-md-12 col-xs-12">
            <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
            ?>
            <div class="box-content card white">
                <h4 class="box-title">Add new Files</h4>
                <form action="php/insert.php" enctype="multipart/form-data" method="post" class="card-content">
                    <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                    <ul class="list-inline">
                        <input type="file" name="image" id="input-file-now" value="" class="dropify">
                        <p class="margin-top-10 text-center">Upload your file</p>
                        <select name="lock" class="form-group margin-top-10">
                            <option value="1">Unlock</option>
                            <option value="2">Lock</option>
                        </select>
                        <li class="form-group margin-top-10">
                            <button type="submit" name="gallery" class="btn btn-sm btn-success">Save</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>