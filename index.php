<?php include 'header.php'?>

<?php

require 'ManagerData.php';

$allProducts = (new ManagerData())->findAll();
$add = (new ManagerData())->addOne('HP pc', "200.000");
?>







        <h3>List of products</h3>
        <ul class="list_products">

        <?php

            foreach ($allProducts as $product)
            {
                echo '<li> <p>Products : </p> <strong>'. $product['title'] .'</strong> <p>Price: </p> <em>'. $product['price'] .'</em></li> <hr>';
            }

        ?>

        </ul>



<?php include 'footer.php'?>
