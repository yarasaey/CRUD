<?php 
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);

$categories = mysqli_fetch_all($result,MYSQLI_ASSOC);

?>
<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Add Product</h1>
            <!-- <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p> -->
        </div>
    </div>
</header>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">ADD PRODUCT FORM</h5>

        <!-- General Form Elements -->
        <form action="index.php?page=store_product" method="post" enctype="multipart/form-data">

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" name="price" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-2 col-form-label">Quantity</label>
                <div class="col-sm-10">
                    <input type="number" name="qty" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Discount</label>
                <div class="col-sm-10">
                    <input type="number" name="discount" value="0" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                        <textarea name="description" class="form-control" id="" cols="10" rows="5"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputNumber" class="col-sm-2 col-form-label">category_name</label>
                <div class="col-sm-10">
                    <select name="category_id" class="col-sm-2 col-form-label">
						<option value="">select</option>
                        <?php foreach($categories as $category) : ?>
                        <option value="<?= $category['id'] ?>"><?= $category['category_name'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Submit Form</label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">SUBMIT</button>
                </div>
            </div>

        </form><!-- End General Form Elements -->

    </div>
</div>

</div>