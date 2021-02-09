<?php
if (isset($_COOKIE["admin"])){
    $id = $_COOKIE["admin"];
    include "php/select.php";
    $table = "admin";
    $admin_only = $select->selectonly($table,$id);
    include "include/header.php";
    ?>
<div class="row small-spacing">

    <div class="col-md-3 col-xs-12">
        <div class="box-content bordered primary margin-bottom-20">
            <div class="profile-avatar">
                <img src="img/<?php echo $admin_only["img"]; ?>" alt="">
                <h3 class="text-center"><strong><?php echo ucfirst($admin_only["name"]); ?></strong></h3>
                <p class="text-center"><?php echo ucfirst($admin_only["title"]); ?></p>
                <ul class="contact-social text-center list-inline">
                    <li><a href="tel:<?php echo $admin_only['phone']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $admin_only['phone']; ?>" class="fa fa-phone"></a></li>
                    <li><a href="mailto:<?php echo $admin_only['email']; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $admin_only['email']; ?>" class="fa fa-envelope"></a></li>
                    <li><a href="<?php echo $admin_only['facebook'];?>" data-toggle="tooltip" class="fa fa-facebook" data-placement="top" title="<?php echo $admin_only['facebook']; ?>"></a></li>
                    <li><a href="<?php echo $admin_only['twitter'];?>" data-toggle="tooltip" class="fa fa-twitter" data-placement="top" title="<?php echo $admin_only['twitter']; ?>"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /.col-md-3 col-xs-12 -->
    <div class="col-md-9 col-xs-12">
        <?php
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box-content card">
                    <h4 class="box-title"><i class="fa fa-user ico"></i>About</h4>
                    <!-- /.box-title -->
                    <div class="dropdown js__drop_down">
                        <a href="#" class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                        <ul class="sub-menu">
                            <li><a href="edit-profile">Edit</a></li>
                        </ul>
                        <!-- /.sub-menu -->
                    </div>
                    <!-- /.dropdown js__dropdown -->
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Name:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><?php echo ucfirst($admin_only["name"]); ?></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Title:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><?php echo ucfirst($admin_only["title"]); ?></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Email:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><?php echo $admin_only["email"] ?></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Address:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><?php echo $admin_only["addrs"]; ?></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Birthday:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><?php echo $admin_only["birth"]; ?></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Interests:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><?php echo $admin_only["interest"]; ?></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Website:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><a href="https://<?php echo $admin_only['website']; ?>"><?php echo $admin_only["website"]; ?></a></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-xs-5"><label>Phone:</label></div>
                                    <!-- /.col-xs-5 -->
                                    <div class="col-xs-7"><?php echo $admin_only["phone"]; ?></div>
                                    <!-- /.col-xs-7 -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.col-md-6 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-content -->
                </div>
                <!-- /.box-content card -->
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