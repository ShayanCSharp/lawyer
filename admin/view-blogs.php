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
    <style>
        td img{
            width: 70px;
        }
    </style>
</head>

<body class="sb-nav-fixed">
    <?php include("include/nav-bar.php") ?>
    <div id="layoutSidenav">
        <?php include("include/side-bar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">View Blogs</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <?php include("message.php") ?>
                        <div class="col mb-4">
                            <a href="index.php" class="btn btn-primary">Go Back</a>
                            <a href="add-blog.php" class="btn btn-success float-end">Add Blog</a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Visiblity</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            const getData = () => {
                $.ajax({
                    url: "php/get-blog.php",
                    type: "POST",
                    success: item => {
                        $("table tbody").html(item);
                    },
                });
            }

            getData()

            $(document).on("click", e => {
                if (e.target.classList.contains("btn-danger")) {
                    if (confirm("Do you wants to delete this?")) {
                        $.ajax({
                            url: "php/delete-blog.php",
                            type: "POST",
                            data: {
                                id: e.target.dataset.index,
                            },
                            success: item => {
                                getData();
                            },
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>