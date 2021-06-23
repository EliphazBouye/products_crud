<?php include 'header.php'?>
<?php require 'ManagerData.php'?>

<?php
    $id = $_GET['id'];
    $product = (new ManagerData())->getOne($id);
    if(isset($_POST['title']) && isset($_POST['price'])) {
        $title = $_POST['title'];
        $price = $_POST['price'];

        $data = new ManagerData();
        $data->updateOne($title,$price,$id);
    }
?>



    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>Edit Product</h2>
            </div>
            <div class="cart-body">
                <form method="post" action="">
                    <div class="m-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" value="<?= $product->title ?>" id="title" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="m-3">
                        <label for="price">Price</label>
                        <input type="text" value="<?= $product->price ?>" id="price" name="price" class="form-control" placeholder="Price">
                    </div>
                    <div class="m-3">
                        <button type="submit" class="btn btn-info">Add</button>
                    </div>
                </form>
            </div>
        </div>



    </div>
<?php include 'footer.php'?>