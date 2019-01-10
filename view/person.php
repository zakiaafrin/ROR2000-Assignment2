<?php
if(isset($_GET["id"])) {
    $id = $_GET["id"];
    // if (isset($user[$id])) {
    //     $item = $user[$id];
    // }
}

// if (!isset($item)) {
//     header("location:home.php");
//     exit;
// }
include('partials/header.php');

?>
<br/>
<h2>Details</h2>
    <ul>
        <?php foreach ($users as $user) { ?>
        <li><b>Employee Id : </b><?= $user['id'];?></li>
        <li><b>Name : </b><?= $user['name'];?></li>
        <li><b>Age : </b><?= $user['age'];?></li>
        <li><b>Salary : </b>$<?= $user['salary'];?></li><br/><br/>
        <?php } 

include('partials/footer.php');
?>
