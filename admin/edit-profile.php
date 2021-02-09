<?php
if (isset($_COOKIE["admin"])){
$id = $_COOKIE["admin"];
include "php/select.php";
    $table = "admin";
    $admin_only = $select->selectonly($table,$id);
include "include/header.php";
?>
<form method="post" enctype="multipart/form-data" action="php/edit.php" class="row small-spacing">
    <div class="col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title">Section 01</h4>
            <!-- /.box-title -->
            <div class="card-content">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="hidden" name="old_file" value="<?php echo $admin_only['img']; ?>">
                <ul class="list-inline">
                    <li class="form-group">
                        <input type="text" name="name" class="form-control" value="<?php echo $admin_only['name']; ?>">
                    </li>
                    <li class="form-group">
                        <input type="text" name="title" class="form-control" value="<?php echo $admin_only['title']; ?>">
                    </li>
                    <li class="form-group">
                        <input type="email" name="email" class="form-control" value="<?php echo $admin_only['email']; ?>">
                    </li>
                </ul>
                <ul class="list-inline">
                    <li class="form-group">
                        <input type="text" name="addrs" class="form-control" value="<?php echo $admin_only['addrs']; ?>">
                    </li>
                    <li class="form-group">
                        <input type="text" name="interest" class="form-control" value="<?php echo $admin_only['interest']; ?>">
                    </li>
                    <li class="form-group">
                        <input type="text" name="website" class="form-control" value="<?php echo $admin_only['website']; ?>">
                    </li>
                </ul>
                <ul class="list-inline">
                    <li class="form-group">
                        <input type="text" name="linkedin" class="form-control" value="<?php echo $admin_only['linkedin']; ?>">
                    </li>
                    <li class="form-group">
                        <input type="text" name="youtube" class="form-control" value="<?php echo $admin_only['youtube']; ?>">
                    </li>
                    <li class="form-group">
                        <input type="text" name="behance" class="form-control" value="<?php echo $admin_only['behance']; ?>">
                    </li>
                </ul>
                <ul class="list-inline">
                    <li class="form-group">
                        <input type="text" name="resume" class="form-control" value="<?php echo $admin_only['resume']; ?>">
                    </li>
                    <li class="form-group">
                        <input type="text" name="skype" class="form-control" value="<?php echo $admin_only['skype']; ?>">
                    </li>
                </ul>
            </div>
            <!-- /.card-content -->
        </div>
        <!-- /.box-content -->
    </div>
    <!-- /.col-xs-12 -->
    <div class="col-lg-6 col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title">Section 02</h4>
            <!-- /.box-title -->
            <div class="card-content">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="inp-type-10" class="col-sm-3 control-label">Birthday</label>
                        <div class="col-sm-9">
                            <input type="text" name="birth" class="form-control" value="<?php echo $admin_only['birth']; ?>" id="datepicker">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inp-type-20" class="col-sm-3 control-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="number" name="phone" class="form-control" id="inp-type-20" value="<?php echo $admin_only['phone'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inp-type-21" class="col-sm-3 control-label">Facebook</label>
                        <div class="col-sm-9">
                            <input type="text" name="facebook" class="form-control" id="inp-type-21" value="<?php echo $admin_only['facebook'];?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inp-type-22" class="col-sm-3 control-label">Twitter</label>
                        <div class="col-sm-9">
                            <input type="text" name="twitter" class="form-control" id="inp-type-22" value="<?php echo $admin_only['twitter'];?>">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-content -->
        </div>
        <!-- /.box-content card white -->
    </div>
    <!-- /.col-xs-12 -->
    <div class="col-lg-6 col-xs-12">
        <div class="box-content card white">
            <h4 class="box-title">Section 03</h4>
            <!-- /.box-title -->
            <div class="card-content">
                <input type="file" name="edit_file" id="input-file-now" value="" class="dropify" />
                <p class="margin-top-10 text-center">Upload your file</p>
            </div>
            <!-- /.card-content -->
        </div>
    </div>
    <li class="form-group" style="text-align: center">
        <button type="submit" name="edit_profile" class="btn btn-info waves-effect waves-light">Save</button>
    </li>
    <!-- /.col-lg-6 col-xs-12 -->
</form>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>