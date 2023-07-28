<?php
// Prevent caching on restricted page
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sent Requests</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <style>
        .box {
            text-transform: capitalize;
        }
    </style>

</head>

<body>

    <?php include 'components/user_header.php'; ?>

    <section class="requests">

        <h1 class="heading">All Sent Requests</h1>

        <div class="box-container">

            <?php
            $select_requests = $conn->prepare("SELECT * FROM `requests` WHERE sender = ?");
            $select_requests->execute([$user_id]);
            if ($select_requests->rowCount() > 0) {
                while ($fetch_request = $select_requests->fetch(PDO::FETCH_ASSOC)) {

                    $select_receiver = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
                    $select_receiver->execute([$fetch_request['receiver']]);
                    $fetch_receiver = $select_receiver->fetch(PDO::FETCH_ASSOC);

                    $select_property = $conn->prepare("SELECT * FROM `property` WHERE id = ?");
                    $select_property->execute([$fetch_request['property_id']]);
                    $fetch_property = $select_property->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <div class="box">
                        <p>name: <span><?= $fetch_receiver['name']; ?></span></p>
                        <p>number: <a href="tel:<?= $fetch_receiver['number']; ?>"><?= $fetch_receiver['number']; ?></a></p>
                        <p>email: <a href="mailto:<?= $fetch_receiver['email']; ?>"><?= $fetch_receiver['email']; ?></a></p>
                        <p>enquiry for: <span><?= $fetch_property['property_name']; ?></span></p>
                        <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">View Property</a>
                    </div>
            <?php
                }
            } else {
                echo '<p class="empty">You have not sent any requests!</p>';
            }
            ?>

        </div>

    </section>

    <script src="js/script.js"></script>

    <?php include 'components/footer.php'; ?>
    <script src="js/inactivity-timeout.js"></script>

</body>

</html>

