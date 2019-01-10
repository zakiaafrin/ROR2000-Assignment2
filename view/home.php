<?php

include('partials/header.php');

?>
<br/>
<h1>List of Employees</h1><br/>
    <ol>
        <?php foreach ($users as $user) { ?>
            <li><b><?= $user['name'];?></b><p><a href="view/person.php?id=<?php echo $user['id'] ?>">See More...</p></a></li><br/>
        <?php } 

include('partials/footer.php');
?>