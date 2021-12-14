<?php
if ((isset($_POST['service'])) || ((isset($_POST['option1'])) || (isset($_POST['option2'])) || (isset($_POST['option3']))) || (isset($_POST['name'])) || (isset($_POST['phone'])) || (isset($_POST['email']))) {
    $service = $_POST['service'];
    $option1 = $_POST['option1'];
    $option2 = $_POST['option2'];
    $option3 = $_POST['option3'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    header("Location: bill.php?service=$service&option1=$option1&option2=$option2&option3=$option3&name=$name&phone=$phone&email=$email");
}

