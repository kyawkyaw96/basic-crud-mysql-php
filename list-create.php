<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class="row">
        <div class="col-12">
            <div class=" border rounded-2 p-5 m-5">
                <h3>Create List</h3>
                <?php

                if ($_SERVER["REQUEST_METHOD"] === "POST") {


                    $name = $_POST["name"];
                    $price = $_POST["price"];

                    $sql = "INSERT INTO `san_kyi_tar` (`id`, `name`, `price`, `created_at`) VALUES (NULL, '$name', '$price', CURRENT_TIMESTAMP)";
                    if (mysqli_query($conn, $sql)) {
                        echo '<div class=" alert alert-success">Data Added</div>';
                    }
                };

                ?>
                <form action="" method="post">
                    <div>
                        <label class=" form-label" for="">Name</label>
                        <input class=" form-control" type="text" name="name" id="">
                    </div>
                    <div>
                        <label class=" form-label" for="">Price</label>
                        <input class=" form-control" type="number" name="price" id="">
                    </div>
                    <button class=" btn btn-primary mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once "./template/footer.php"; ?>