<?php session_start(); 
    if(!isset($_SESSION['adminLoggedIn'])){
        $_SESSION['msg'] = "You are not authorised as admin";
        header("Location: ../login.php");
        exit(0);
    }else{

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf2-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - SB Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include("include/nav-bar.php") ?>
    <div id="layoutSidenav">
        <?php include("include/side-bar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Edit Practice Area</li>
                    </ol>
                    <div class="row">
                        <?php include("message.php") ?>
                        <div class="col mb-4">
                            <a href="index.php" class="btn btn-primary">Go Back</a>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <?php
                                include("include/db_conn.php");

                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];

                                    $sql = mysqli_query($conn, "SELECT * FROM `practicearea` WHERE id = '$id'");

                                    foreach ($sql as $row) {
                                    };
                                }
                                ?>
                                <form action="allCode.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12"><label for="" class="form-label">Name</label>
                                            <input type="text" name="e_name" value="<?= $row['name'] ?>" class="form-control" required>
                                        </div>
                                        <div class="col-lg-6 col-md-12"><label for="" class="form-label">Slug (URL)</label>
                                            <input type="text" name="e_slug" value="<?= $row['slug'] ?>" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-12">
                                            <label for="">Description</label>
                                            <textarea name="description" class="form-control"><?= $row['description'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="row my-4">
                                        <div class="col-12">
                                            <label for="">Visible</label>
                                            <input type="checkbox" name="visible" <?= $row['visible'] == 0 ? "checked" : "" ?>>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col"><button type="submit" value="<?= $row['id'] ?>" name="edit_practice" class="btn btn-success w-100">Add</button></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php include("include/footer.php") ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>