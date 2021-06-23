<?php include 'header.php'?>
<?php require 'ManagerData.php'?>

<?php
$messageSuccess = null;

if(isset($_POST['title']) && isset($_POST['price'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];

    $data = new ManagerData();
    $data->addOne($title,$price);
    $messageSuccess = $data->message;
}

?>



    <div class="container">

    <div class="card">
        <div class="card-header">
            <h2>Insert new Product</h2>
            <?php
                if ($messageSuccess !== null) {
                    echo "<div class='alert alert-success' role='alert'>". $messageSuccess . "</div>";
                }
            ?>


        </div>
        <div class="cart-body">
            <form method="post" action="">
                <div class="m-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Title">
                </div>
                <div class="m-3">
                    <label for="price">Price</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Price">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-info">Add</button>
                </div>
            </form>
        </div>
    </div>



</div>
<?php include 'footer.php'?>