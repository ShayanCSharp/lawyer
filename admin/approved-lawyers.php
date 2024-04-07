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
        td img {
            width: 50px;
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
                    <h1 class="mt-4">Approved Lawyers</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <?php include("message.php") ?>
                        <div class="col mb-4">
                            <a href="index.php" class="btn btn-primary">Go Back</a>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Expertise</th>
                                    <th>Cnic Number</th>
                                    <th>View Profile</th>
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
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        const showData = () => {
            $.ajax({
                url: "php/get-approved-lawyers.php",
                type: "POST",
                success: (item) => {
                    $("tbody").html(item);
                }
            });
        }

        showData()

        $(document).on("click", e => {

            if (e.target.classList.contains("btn-danger")) {
                if (confirm("Do you want to delete this")) {
                    $.ajax({
                        url: "php/delete.php",
                        type: "POST",
                        data: {
                            delete: e.target.dataset.index,
                        },
                        success: item => {
                            showData();
                        },
                    });
                } else {

                }
            }
        })
    </script>

</body>

</html>