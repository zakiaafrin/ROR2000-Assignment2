<?php include "partials/header.php"; ?>

<h1>Heats Free Shots Contest</h1>
<p>The game #<?= Game::$match ?> of the <?= Game::$season ?> season has started</p>
<table class="table table-striped">
    <tr>
        <th>Player</th>
        <th>Score</th>
    </tr>
    <?php foreach(Game::$team as $player) { ?>
        <tr>
            <td><?= $player->name ?></td>
            <td><?= $player->score ?></td>
        </tr>
    <?php } ?>
</table>

<p>
    <a class="btn btn-primary" href="index.php?page=heat&action=add">Add Player</a>
    <a class="btn btn-primary" href="index.php?page=heat&action=report">Report</a>
</p>

<?php include "partials/footer.php"; ?>