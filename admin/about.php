<?php
if (isset($_COOKIE["admin"])){
    $id = $_COOKIE["admin"];
    include "php/select.php";
    $table = "admin";
    $admin_only = $select->selectonly($table,$id);
    include "include/header.php";
    ?>
    <div class="row small-spacing">
        <!-- /.col-md-3 col-xs-12 -->
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
                        <h4 class="box-title"><i class="fa fa-user ico"></i>Short Details</h4>
                        <div class="dropdown js__drop_down">
                            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="edit-about">Edit</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <div class="card-content">
                            <?php echo ucfirst($admin_only["short_description"]); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-content card">
                        <h4 class="box-title"><i class="fa fa-user ico"></i>Details</h4>
                        <div class="dropdown js__drop_down">
                            <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="edit-about">Edit</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <div class="card-content">
                            <?php echo ucfirst($admin_only["description"]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col-md-9 col-xs-12 -->
    </div>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>