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
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-content card">
                        <h4 class="box-title"><i class="fa fa-image ico"></i>Images</h4>
                        <div class="text-center margin-top-10 margin-bottom-10">
                            <img style="width: 20rem;" src="../uploads/<?php echo $admin_only["main_image"]; ?>" alt="">
                            <img style="width: 20rem;" src="../uploads/<?php echo $admin_only["logo"]; ?>" alt="">
                            <img style="width: 5rem;" src="../uploads/<?php echo $admin_only["favicon"]; ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="php/edit.php" method="post" enctype="multipart/form-data" class="col-lg-12 col-xs-12">
            <input type="hidden" name="old_file" value="<?php echo $admin_only["main_image"]; ?>">
            <input type="hidden" name="main_profile_image_id" value="<?php echo $id; ?>">
            <div class="box-content card white">
                <h4 class="box-title">Upload your background image</h4>
                <div class="card-content">
                    <input type="file" name="main_file" id="input-file-now" value="" class="dropify" />
                    <p class="margin-top-10 text-center">Upload your background file</p>
                    <div class="btns text-center margin-top-20"><button name="upload_main_image" class="btn btn-sm btn-success">Save</button></div>
                </div>
            </div>
        </form>
        <div class="col-lg-12 col-xs-12">
            <div class="box-content card white">
                <div class="row">
                    <form action="php/edit.php" method="post" enctype="multipart/form-data" class="col-md-6">
                        <input type="hidden" name="old_file" value="<?php echo $admin_only["logo"]; ?>">
                        <input type="hidden" name="admin_id_no" value="<?php echo $id; ?>">
                        <h4 class="box-title">Upload your Logo</h4>
                        <div class="card-content">
                            <input type="file" name="main_file" id="input-file-now" value="" class="dropify" />
                            <p class="margin-top-10 text-center"><i><small>Upload your .jpg or .png file</i></small></p>
                            <div class="btns text-center margin-top-20"><button name="upload_logo" class="btn btn-sm btn-success">Save</button></div>
                        </div>
                    </form>
                    <form action="php/edit.php" method="post" enctype="multipart/form-data" class="col-md-6">
                        <input type="hidden" name="old_file" value="<?php echo $admin_only["favicon"]; ?>">
                        <input type="hidden" name="admin_id_no" value="<?php echo $id; ?>">
                        <h4 class="box-title">Upload your Icon</h4>
                        <div class="card-content">
                            <input type="file" name="main_file" id="input-file-now" value="" class="dropify" />
                            <p class="margin-top-10 text-center"><i><small>Upload your .ico or .png file</i></small></p>
                            <div class="btns text-center margin-top-20"><button name="upload_favicon" class="btn btn-sm btn-success">Save</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>