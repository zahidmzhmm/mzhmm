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
            <div class="box-content card white">
                <h4 class="box-title">Add a New Works and Review</h4>
                <!-- /.box-title -->
                <form action="php/insert.php" enctype="multipart/form-data" method="post" class="card-content">
                    <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                    <ul class="list-inline">
                        <li class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Client Name">
                        </li>
                        <li class="form-group">
                            <input type="text" name="comment" class="form-control" placeholder="Client Comment">
                        </li>
                        <li class="form-group">
                            <input type="text" name="country" class="form-control" placeholder="Client Country">
                        </li>
                        <li class="form-group">
                            <select name="review" class="form-control" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <input type="file" name="image" id="input-file-now" value="" class="dropify">
                        <li class="form-group margin-top-10">
                            <button type="submit" name="works_save" class="btn btn-sm btn-success">Save</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Your Works and Review</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Comment</th>
                        <th>Country</th>
                        <th>Review</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($work = mysqli_fetch_array($works)){
                        $admin_id = $work["admin_id"];
                        if ($admin_id==$id){
                            ?>
                            <tr>
                                <td><?php echo $work["name"]; ?></td>
                                <td><?php echo $work["comment"]; ?></td>
                                <td><?php echo $work["country"]; ?></td>
                                <td class="text-warning"><?php echo $work["review"]; ?> <i class="fa fa-star"></i></td>
                                <td><img style="width: 10rem;" src="img/<?php echo $work['image']; ?>" alt=""></td>
                                <td><a href="php/delete.php?id=<?php echo $work['id']; ?>&table=works" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-content -->
        </div>
    </div>
    <?php
    include "include/footer.php";
}else{
    header("location:login");
}
?>