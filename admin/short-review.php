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
                <h4 class="box-title">Short Review </h4>
                <?php
                $num_rows = mysqli_num_rows($short_reviews);
                if ($num_rows>0){
                    while ($short_rev = mysqli_fetch_array($short_reviews)){
                        $admin_id = $short_rev["admin_id"];
                        if ($admin_id==$id){
                            ?>
                            <form action="php/edit.php" enctype="multipart/form-data" method="post" class="card-content">
                                <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                                <input type="hidden" name="id" value="<?php echo $short_rev["id"]; ?>">
                                <ul class="list-inline">
                                    <li class="form-group">
                                        <input type="number" name="customer" value="<?= $short_rev['customer'] ? $short_rev['customer'] : '' ?>" class="form-control" placeholder="Customer">
                                    </li>
                                    <li class="form-group">
                                        <input type="number" name="project" value="<?= $short_rev['project'] ? $short_rev['project'] : '' ?>" class="form-control" placeholder="Project">
                                    </li>
                                    <li class="form-group">
                                        <input type="number" name="review" value="<?= $short_rev['review'] ? $short_rev['review'] : '' ?>" class="form-control" placeholder="Review">
                                    </li>
                                    <li class="form-group">
                                        <input type="number" name="running" value="<?= $short_rev['running'] ? $short_rev['running'] : '' ?>" class="form-control" placeholder="Running">
                                    </li>
                                    <button name="short_review_edit" class="btn btn-sm btn-primary">Update</button>
                                </ul>
                            </form>
                            <?php
                        }
                    }
                }else{
                    ?>
                    <form action="php/insert.php" enctype="multipart/form-data" method="post" class="card-content">
                        <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                        <ul class="list-inline">
                            <li class="form-group">
                                <input type="number" name="customer" class="form-control" placeholder="Customer">
                            </li>
                            <li class="form-group">
                                <input type="number" name="project" class="form-control" placeholder="Project">
                            </li>
                            <li class="form-group">
                                <input type="number" name="review" class="form-control" placeholder="Review">
                            </li>
                            <li class="form-group">
                                <input type="number" name="running" class="form-control" placeholder="Running">
                            </li>
                            <li class="form-group">
                                <button name="short_review" class="btn btn-sm btn-primary">Save</button>
                            </li>
                        </ul>
                    </form>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>