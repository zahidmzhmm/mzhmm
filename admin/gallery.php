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
                <h4 class="box-title">Your Files</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Link</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($gallery = mysqli_fetch_array($galleries)){
                        $admin_id = $gallery["admin_id"];
                        if ($admin_id==$id){
                            ?>
                            <tr>
                                <td><?php $file = $gallery["files"]; $file_explode = explode(".",$file); echo $filename = $file_explode[0]; ?></td>
                                <td><?php include "website.txt";?>/uploads/gallery/<?php echo $gallery["files"]; ?></td>
                                <td><?php $type = $gallery["type"]; if($type==2){ ?> <i class="fa fa-lock text-danger"></i> <?php }else{ ?> <i class="fa text-success fa-unlock-alt"></i> <?php } ?></td>
                                <td><a href="php/delete.php?id=<?php echo $gallery['id']; ?>&table=gallery&file=<?php echo $gallery['files']; ?>&dis=gallery" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></td>
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