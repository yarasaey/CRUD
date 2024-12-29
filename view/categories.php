<?php
    $sql = "SELECT * FROM categories";
    $result = mysqli_query($conn, $sql);
?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Categories</h1>
            <p class="lead fw-normal text-white-50 mb-0">Shop in style</p>
        </div>
    </div>
</header>
<!-- Section-->
<div class="container">
    <div class="row">
        <section class="py-5">
            <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
            <?php 
            unset($_SESSION['success']);
            endif;
            ?>
            <?php if(isset($_SESSION['error'])) : ?>
                <div class="alert alert-danger"><?= $_SESSION['error'] ?></div>
            <?php 
            unset($_SESSION['error']);
            endif;
            ?>

            <div class="col-8 mx-auto">
                <form action="./index.php?page=create_category" method="post" class="form border p-2">
                    <input type="text" name="category_name" class="form-control my-3 border border-success"
                        placeholder="add new Category">
                    <input type="submit" value="Add" class="form-control btn btn-primary my-3 " placeholder="add new category">
                </form>
            </div>
        </section>

        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Created at</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['category_name'] ?></td>
                    <td><?= $row['created_at'] ?></td>
                    <td>
                        <a href="index.php?page=edit_category&id=<?= $row['id'] ?>" class="btn btn-warning">edit</a>
                        <a href="index.php?page=delete_category&id=<?= $row['id'] ?>" class="btn btn-danger">delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>