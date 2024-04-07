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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .card-img-top {
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <?php
                    include("include/db_conn.php");

                    if($_GET['id']){
                        $id = $_GET['id'];
                        $sql = mysqli_query($conn, "SELECT l.picture, l.first_name, l.last_name, l.address, l.email, l.date_of_birth, l.martial_status, l.gender, l.mobile_num, l.whatsapp_num, l.degree, l.uni_clg, l.degree_complete, l.city_legal_practice, l.enrollment_year, l.enrollment_type, l.facebook, l.twitter, l.instagram, l.linkedin, l.created_at, l.aboutLawyer, p.name FROM `lawyerss` AS l INNER JOIN practiceareas AS p ON l.expertise = p.id WHERE l.id = '$id'
                        ");
    
                        if (mysqli_num_rows($sql) > 0) {
                            foreach ($sql as $row) {
    
                        ?>
                                <div class="card" style="width: 30rem;">
                                    <img src="../assets/images/lawyers/<?= $row['picture'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $row['first_name'] . " " . $row['last_name'] ?></h5>
                                        <p class="card-text"><b>Address:</b> <?= $row['address'] ?></p>
                                        <p class="card-text"><b>Email:</b> <?= $row['email'] ?></p>
                                        <p class="card-text"><b>Date of Birth:</b> <?= $row['date_of_birth'] ?></p>
                                        <p class="card-text"><b>Martial Status:</b> <?= $row['martial_status'] ?></p>
                                        <p class="card-text"><b>Gender:</b> <?= $row['gender'] ?></p>
                                        <p class="card-text"><b>Mobile Number:</b> <?= $row['mobile_num'] ?></p>
                                        <p class="card-text"><b>Whatsapp Number:</b> <?= $row['whatsapp_num'] ?></p>
                                        <p class="card-text"><b>Degree:</b> <?= $row['degree'] ?></p>
                                        <p class="card-text"><b>University/College:</b> <?= $row['uni_clg'] ?></p>
                                        <p class="card-text"><b>Degree Completion Date:</b> <?= $row['degree_complete'] ?></p>
                                        <p class="card-text"><b>Legal City Practice:</b> <?= $row['city_legal_practice'] ?></p>
                                        <p class="card-text"><b>Enrollment Year:</b> <?= $row['enrollment_year'] ?></p>
                                        <p class="card-text"><b>Enrollment Type:</b> <?= $row['enrollment_type'] ?></p>
                                        <p class="card-text"><b>Expertise:</b> <?= $row['name'] ?></p>
                                        <p class="card-text"><b>About Lawyer: </b><?= $row['aboutLawyer'] ?></p>
                                        <p class="card-text"><b>Facebook:</b> <a href="<?= $row['facebook'] ?>">Facebook</a></p>
                                        <p class="card-text"><b>Twitter:</b> <a href="<?= $row['twitter'] ?>">Twitter</a></p>
                                        <p class="card-text"><b>Instagram:</b> <a href="<?= $row['instagram'] ?>">Instagram</a></p>
                                        <p class="card-text"><b>LinkedIn:</b> <a href="<?= $row['linkedin'] ?>">LinkedIn</a></p>
                                        <p class="card-text"><b>Join LegalLink At:</b> <?= $row['created_at'] ?></p>
                                        <a href="pending-lawyers.php" class="btn btn-primary">Go Back</a>
                                    </div>
                                </div>
                            <?php
                            }
                        } else {
                            ?>
                            <h1>Nothing found</h1>
                        <?PHP
                        }
                    }else{
                            ?>
                            <h1>Nothing found</h1>
                        <?PHP
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>
</body>

</html>