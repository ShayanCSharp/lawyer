<?php
    session_start();
    include("db_conn.php");
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $father_name = $_POST['father_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $file = $_FILES['file'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $district = $_POST['district'];
    $province = $_POST['province'];
    $country = $_POST['country'];
    $postal = $_POST['postal'];
    $cnic = $_POST['cnic'];
    $bday = $_POST['bday'];
    $martial = $_POST['martial'];
    $gender = $_POST['gender'];
    $mobile_num = $_POST['mobile_num'];
    $whatsapp_num = $_POST['whatsapp_num'];
    $degree = $_POST['degree'];
    $uni_clg = $_POST['uni_clg'];
    $degreeComplete = $_POST['degreeComplete'];
    $legal_city = $_POST['legal_city'];
    $enrolmentYear = $_POST['enrolmentYear'];
    $enrolementType = $_POST['enrolementType'];
    $expertise = $_POST['expertise'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $instagram = $_POST['instagram'];
    $aboutLawyer = $_POST['aboutLawyer'];

    $hash_pass = password_hash($password,PASSWORD_DEFAULT);
    $image = $file['name'];

    $sql = mysqli_query($conn,"INSERT INTO `lawyerss`(`first_name`, `last_name`, `father_name`, `email`, `password`, `picture`, `address`, `locality`, `district`, `province`, `country`, `postal_code`, `cnic_no`, `date_of_birth`, `martial_status`, `gender`, `mobile_num`, `whatsapp_num`, `degree`, `uni_clg`, `degree_complete`, `city_legal_practice`, `enrollment_year`, `enrollment_type`, `expertise`, `facebook`, `twitter`, `linkedin`, `instagram`,`aboutLawyer`) VALUES ('$first_name','$last_name','$father_name','$email','$hash_pass','$image','$address','$town','$district','$province','$country','$postal','$cnic','$bday','$martial','$gender','$mobile_num','$whatsapp_num','$degree','$uni_clg','$degreeComplete','$legal_city','$enrolmentYear','$enrolementType','$expertise','$facebook','$twitter','$linkedin','$instagram','$aboutLawyer')");

    if($sql){
        move_uploaded_file($file['tmp_name'], "../images/lawyers/".$image);
        $_SESSION['msg'] = "Your account is pending member approval. Upon approval, you will be notified via email to access login features.";
        echo "lawyer-register.php";
    }else{
        $_SESSION['msg'] = "Account Could not be created.";
        echo mysqli_error($conn);
    }
?>