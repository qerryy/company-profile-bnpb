<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="<?=BASEURL;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=BASEURL;?>/css/custom-styles.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- Font Stylish -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <title>BNPB - <?= $data['judul'] ?></title>
</head>

<body style="background-color: #e2e8f0;">

    <main class="container-xxl <?= isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1 ? 'd-flex' : '' ?>" style="min-height: 100vh;">
        <?php
            if ( isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1 ) {
                include_once 'sidebar.php';
            } else {
                include_once 'navbar.php';
            } 
        ?>