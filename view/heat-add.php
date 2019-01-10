<?php include "partials/header.php"; ?>

<h1><a class="btn btn-sm btn-primary" href="index.php?page=heat"><</a> Add new player</h1>
<p>Add a new Heat player for the contest</p>

<form action="index.php?page=heat&action=submit" method="post">
    <input type="text" name="name" placeholder="Name" required /><br/><br/>
    <input type="number" name="age" placeholder="Age" required /><br/><br/>
    <input type="number" name="accuracy" placeholder="Accuracy" required /><br/><br/>
    
    <input class="btn btn-primary" type="submit" value="Create"/>
</form>

<?php include "partials/footer.php"; ?>
