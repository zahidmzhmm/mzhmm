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
                <h4 class="box-title">Add new Portfolio</h4>
                <form action="php/insert.php" enctype="multipart/form-data" method="post" class="card-content">
                    <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                    <ul class="list-inline">
                        <input type="text" name="name" class="form-control" placeholder="Title">
                    </ul>
                    <ul class="list-inline">
                        <textarea name="description" class="form-control" id="" cols="30" rows="10" placeholder="Description"></textarea>
                    </ul>
                    <ul class="list-inline">
                        <input type="file" name="image" id="input-file-now" value="" class="dropify">
                        <p class="margin-top-10 text-center">Upload your Portfolio Image <i>.jpg</i> file</p>
                        <li class="form-group margin-top-10">
                            <button type="submit" name="portfolio_save" class="btn btn-sm btn-success">Save</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Your Works and Review</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($array = mysqli_fetch_array($portfolios)){
                        $admin_id = $array["admin_id"];
                        if ($admin_id==$id){
                            ?>
                            <tr>
                                <td><?php echo $array["name"]; ?></td>
                                <td><?php echo $array["description"]; ?></td>
                                <td><img style="width: 10rem;" src="../uploads/portfolio/<?php echo $array['file']; ?>" alt=""></td>
                                <td><a href="php/delete.php?id=<?php echo $array['id']; ?>&dis=portfolio&file=<?php echo $array['file']; ?>&table=portfolio" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></td>
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