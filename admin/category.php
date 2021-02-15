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
                <h4 class="box-title">Category</h4>
                <form action="php/insert.php" enctype="multipart/form-data" method="post" class="card-content">
                    <input type="hidden" name="admin_id" value="<?php echo $id; ?>" />
                    <ul class="list-inline">
                        <li class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name" />
                        </li>
                        <li class="form-group">
                            <select class="form-control" name="type" id="">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </li>
                        <li class="form-group">
                            <button name="category" class="btn btn-sm btn-primary">Save</button>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Your Category</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($category = mysqli_fetch_array($categories)){
                        $admin_id = $category["admin_id"];
                        if ($admin_id==$id){
                            ?>
                            <tr>
                                <td><?php echo $category['name']; ?></td>
                                <td><?php echo $category['type']; ?></td>
                                <td><a href="php/delete.php?id=<?php echo $category['id']; ?>&table=category" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></td>
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
