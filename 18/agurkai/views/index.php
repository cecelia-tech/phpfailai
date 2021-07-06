<?php require DIR.'views/top.php' ?>

<ul>
    <?php 
    usort($boxes, function($a, $b) {
        return $b['amount'] <=> $b['amount'];
    })
    ?>
    <?php foreach($boxes as $box) : ?>
        <li>
            Dėžė Nr. <?= $box['id'] ?> Viso agukų: <?= $box['amount'] ?>
            [<a href="add/<?= $box['id'] ?>">Pridėti</a>]
            [<a href="rem/<?= $box['id'] ?>">Išimti</a>]
            <form action="delete/<?= $box['id'] ?>" method="post">
            <button type="submit">Išmesti dėžę</button>
            </form>
        </li>
    <?php endforeach ?>
    </ul>
<?php require DIR.'views/bottom.php' ?>
