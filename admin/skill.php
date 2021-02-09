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
                <h4 class="box-title">Add a New Skill</h4>
                <!-- /.box-title -->
                <form action="php/insert.php" method="post" class="card-content">
                    <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
                    <ul class="list-inline">
                        <li class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </li>
                        <li class="form-group">
                            <select name="percent" class="form-control" id="">
                                <option value="5">5%</option>
                                <option value="10">10%</option>
                                <option value="15">15%</option>
                                <option value="20">20%</option>
                                <option value="25">25%</option>
                                <option value="30">30%</option>
                                <option value="35">35%</option>
                                <option value="40">40%</option>
                                <option value="45">45%</option>
                                <option value="50">50%</option>
                                <option value="55">55%</option>
                                <option value="60">60%</option>
                                <option value="65">65%</option>
                                <option value="70">70%</option>
                                <option value="75">75%</option>
                                <option value="80">80%</option>
                                <option value="85">85%</option>
                                <option value="90">90%</option>
                                <option value="95">95%</option>
                                <option value="100">100%</option>
                            </select>
                        </li>
                        <li class="form-group">
                            <button type="submit" name="skill_save" class="btn btn-success">Save</button>
                        </li>
                    </ul>
                </form>
                <!-- /.card-content -->
            </div>
        </div>
        <div class="col-xs-12">
            <div class="box-content">
                <h4 class="box-title">Skill are Added</h4>
                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Percent</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    while ($skills = mysqli_fetch_array($skill)){
                        $admin_id = $skills["admin_id"];
                        if ($admin_id==$id){
                        ?>
                        <tr>
                            <td><?php echo $skills["name"]; ?></td>
                            <td><?php echo $skills["percent"]; ?>%</td>
                            <td><a href="php/delete.php?id=<?php echo $skills['id']; ?>&table=skill" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a></td>
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