<?php include "partials/header.php"; ?>

<h1><a class="btn btn-sm btn-primary" href="index.php?page=heat"><</a> Heats players report</h1>
<p>Player by age, accuracy and speed</p>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js'></script>

<?= $chart ?>

<?php include "partials/footer.php"; ?>