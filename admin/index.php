		<?php
        if (isset($_COOKIE["admin"])){
            $id = $_COOKIE["admin"];
            include "php/select.php";
            $table = "admin";
            $admin_only = $select->selectonly($table,$id);
		    include "include/header.php";
		    $table_name_one = "skill";
            $table_name_two = "works";
            $table_name_tree = "blog";
		    $select_with_limit = $select->select_with_limit($table_name_one,4);
		    $works = $select->select_with_limit($table_name_two,4);
		    $blog = $select->select_with_limit($table_name_tree,4);
		?>
            <h3 class="margin-bottom-20">Skill</h3>
		    <div class="row small-spacing">
            <?php
            while ($select_skill = mysqli_fetch_array($select_with_limit)){
                $admin_id = $select_skill["admin_id"];
                if ($admin_id==$id){
                ?>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content text-center">
                        <div class="right-content">
                            <h4 class="name"><?php echo $select_skill["name"]; ?></h4>
                            <div class="text-success small"><?php echo $select_skill["percent"]; ?>%</div>
                        </div>
                    </div>
                </div>
                <?php
                }
            }
            ?>
            </div>
            <h3 class="margin-bottom-20">Works & Review</h3>
            <div class="row small-spacing">
            <?php
            while ($work = mysqli_fetch_array($works)){
                $work_admin = $work["admin_id"];
                if ($work_admin==$id){
                ?>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content user-info">
					<div class="avatar"><img src="../uploads/<?php echo $work["image"]; ?>" alt=""></div>
					<div class="right-content">
						<h4 class="name"><?php echo $work["name"]; ?></h4>
                        <p><?php echo $work["country"]; ?></p>
						<div class="text-warning small"><?php echo $work["review"]; ?> <i class="fa fa-star-o"></i></div>
					</div>
				</div>
			</div>
                <?php
                }
            }
            ?>
            </div>
            <h3 class="margin-bottom-20">Blog Post</h3>
            <div class="row small-spacing">
            <?php
            while ($blogs = mysqli_fetch_array($blog)){
                $blog_admin = $blogs["admin_id"];
                if ($blog_admin==$id){
                ?>
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content text-center">
					<div class="right-content">
						<h4 class="name"><?php echo $blogs["name"]; ?></h4>
					</div>
				</div>
			</div>
                <?php
                }
            }
                ?>
            </div>
		<?php
		    include "include/footer.php";
        }else{
            header("location:login");
        }
		?>