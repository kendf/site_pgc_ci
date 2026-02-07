<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sql = "SELECT * FROM evenements ORDER BY date_event DESC";
    $events = $pdo->query($sql);
    ?>


    <section id="evenement" class="events">
    <section class="evenements">
    <?php foreach ($events as $event): ?>
        <div class="event-card">
            <h3><?= htmlspecialchars($event['titre']) ?></h3>
            <p><?= htmlspecialchars($event['description']) ?></p>

            <?php if ($event['type_media'] === 'photo'): ?>
                <img src="<?= $event['fichier'] ?>" alt="">
            <?php else: ?>
                <video controls>
                    <source src="<?= $event['fichier'] ?>">
                </video>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
    </section>

    </section>

</body>
</html>