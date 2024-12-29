<?php 

    $sql = "SELECT products.id,products.image,products.name,products.price,products.discount,categories.category_name 
            FROM products
            JOIN categories
            ON products.category_id = categories.id
            ";
    $result = mysqli_query($conn, $sql);

    $products = mysqli_fetch_all($result,MYSQLI_ASSOC); ;
?>
<!-- Section-->
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">HOME</h1>
            <p class="lead fw-normal text-white-50 mb-0">Shop in style</p>
        </div>
    </div>
</header>
<section class="py-5">

<div class="container mt-1 d-flex justify-content-center">
    <a href="./index.php?page=add_product" class="btn btn-primary btn-lg shadow-sm">
        <i class="fas fa-plus-circle me-2"></i>Add New Product
    </a>
</div>
<?php if(isset($_SESSION['success'])) : ?>
    <div class="alert alert-success"><?= $_SESSION['success'] ?></div>
<?php
    endif;
    unset($_SESSION['success']);
?>
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php foreach ($products as $product) : ?>
            <div class=" col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="./assets/products/<?= $product['image'] ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder"><?= $product['name'] ?></h5>
                            <h6 class="text-muted text-decoration-line"><?= $product['category_name'] ?></h6>
                            <!-- Product price-->
                             <?php if($product['discount'] != 0) :  ?>
                            <span class="text-muted text-decoration-line-through"><?= $product['price'] ?></span>
                            <?php endif; ?>
                            $<?= $product['price'] - (($product['price']/100) * $product['discount']) ?>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="d-flex flex-wrap justify-content-between ">
                       
                            <a class=" btn btn-warning mt-auto col-5"
                                href="">Edit</a>
                                <a type="submit" class=" btn btn-danger mt-auto col-5"
                                href="./index.php?page=delete_product&id=<?= $product['id'] ?>">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach ; ?>
    </div>
</section>