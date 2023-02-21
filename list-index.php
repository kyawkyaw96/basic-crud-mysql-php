<?php require_once "./template/header.php"; ?>

<div class=" container">
    <div class="row">
        <div class="col-12">
            <div class=" border rounded-2 p-5 m-5">

                <?php
                $sql = "SELECT * FROM `san_kyi_tar`";
                if (isset($_GET['q'])) {
                    $q = $_GET['q'];
                    $sql .= " WHERE name LIKE '%$q%'";
                }
                $query = mysqli_query($conn, $sql);
                $totalSql = "SELECT SUM(price) AS `total` FROM `san_kyi_tar`";
                $totalQuery = mysqli_query($conn, $totalSql);

                ?>

                <h3> Total List</h3>
                <div class=" mb-3 row justify-content-between align-items-center">
                    <div class=" col-4">TOTAL : <?= $query->num_rows ?></div>
                    <div class=" col-4">
                        <form action=" " method="get">
                            <div class=" input-group">
                                <input name="q" value="<?php if (isset($_GET['q'])) : ?> <?= $_GET['q'] ?> <?php endif; ?>" class=" form-control" type="text" id="">
                                <button class=" btn btn-primary">Search</button>
                                </div>
                        </form>
                    </div>
                </div>
                <table class=" table table-bordered">
                    <thead class=" fw-bold">
                        <tr class=" align-middle">
                            <td>Id</td>
                            <td>Name</td>
                            <td class=" text-end">Money</td>
                            <td>Control</td>
                            <td>Created At</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($query)) : ?>
                            <tr class=" align-middle">
                                <td><?= $row["id"] ?></td>
                                <td><?= $row["name"] ?></td>
                                <td class=" text-end"><?= $row["price"] ?></td>
                                <td>
                                    <a href="./list-update.php?id=<?= $row['id'] ?>" class=" btn btn-success mx-3">Edit</a>
                                    <form class=" d-inline-block" method="post" action="./list-delete.php">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <button onclick="return confirm('Are You Sure To Delete?')" class=" btn btn-danger">Delete</button>
                                    </form>
                                </td>
                                <td><?= $row["created_at"] ?></td>
                            </tr>

                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                        <tr class=" align-middle">
                            <td colspan="2">Total</td>
                            <td class=" text-end"><?= mysqli_fetch_assoc($totalQuery)["total"] ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once "./template/footer.php"; ?>