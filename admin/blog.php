<?php
if (isset($_COOKIE["admin"])){
    $id = $_COOKIE["admin"];
    include "php/select.php";
    $table = "admin";
    $admin_only = $select->selectonly($table,$id);
    include "include/header.php";
    if(isset($_SESSION["msg"])){
        echo $_SESSION["msg"];
        unset($_SESSION["msg"]);
    }
    ?>
    <div class="row small-spacing">
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Your Post</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($blogs = mysqli_fetch_array($blog)){
                        $admin_id = $blogs["admin_id"];
                        if ($admin_id==$id){
                            ?>
                            <tr>
                                <td><?php echo $blogs["name"]; ?></td>
                                <td><?php  include "website.txt"; echo "/post?n=".$blogs["dir"]."&id=".$blogs["id"];?></td>
                                <td><a href="edit-blog.php?bid=<?php echo $blogs['id']; ?>&table=blog" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a> <a href="php/delete.php?id=<?php echo $blogs['id']; ?>&file=<?php echo $blogs['image']; ?>&dis=blog&table=blog" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></td>
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