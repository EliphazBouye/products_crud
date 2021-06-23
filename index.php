<?php include 'header.php'?>

<?php

require 'ManagerData.php';
$data = (new ManagerData());
$allProducts = $data->findAll();


?>

        <div class="card">
                <div class="card-header">
                    <h3>List of products</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Price</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($allProducts as $product): ?>
                            <tr>
                                <th scope="row"><?= $product->id;?></th>
                                <td><?= $product->title;?></td>
                                <td><?= $product->price;?> Fcfa</td>
                                <th>
                                    <a href="edit.php?id=<?= $product->id; ?>" class="btn btn-info">Edit</a>
                                </th>
                                <th>
                                    <a href="delete.php?id=<?= $product->id; ?>" class="btn btn-danger">Delete</a>
                                </th>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
        </div>





<?php include 'footer.php'?>
