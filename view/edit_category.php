<?php
	$id = $_GET['id'];
	$sql = "SELECT * FROM categories WHERE id=$id";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($result);
?>
<section class="py-5">
            <div class="col-8 mx-auto">
                <form action="./index.php?page=update_category&id=<?= $row['id'] ?>" method="post" class="form border p-2">
                    <input type="text" name="category_name" value="<?= $row['category_name'] ?>" class="form-control my-3 border border-success"
                        placeholder="EDIT Category">
                    <input type="submit" value="UPDATE" class="form-control btn btn-primary my-3 " placeholder="EDIT Category">
                </form>
            </div>
        </section>