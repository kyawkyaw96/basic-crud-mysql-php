<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class="row">
        <div class="col-12">
            <div class=" border rounded-2 p-5 m-5">
                <h3>Update List</h3>
                <?php

                if ($_SERVER["REQUEST_METHOD"] === "GET") {
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `san_kyi_tar` WHERE `id`=$id";
                    $query = mysqli_query($conn, $sql);
                    $row=mysqli_fetch_assoc($query);
                    // dd($row);
                };

                ?>
                <form action="./list-update-info.php" method="post">
                    <input type="hidden" name="id" value="<?= $row['id']?>" id="">
                    <div>
                        <label class=" form-label" for="">Name</label>
                        <input class=" form-control" value="<?= $row['name']?>" type="text" name="name" id="">
                    </div>
                    <div>
                        <label class=" form-label" for="">Price</label>
                        <input class=" form-control" value="<?= $row['price']?>" type="number" name="price" id="">
                    </div>
                    <button onclick="return confirm('Are You Sure?')" class=" btn btn-primary mt-5">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require_once "./template/footer.php"; ?>