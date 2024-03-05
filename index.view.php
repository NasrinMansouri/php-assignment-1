<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>PHP FIRST ASSIGNMENT</title>
</head>

<body>
    <div>
        <h1 class="title">Zoo of Antwerp</h1>
        <div class="top-container">
            <!-- display zookeepers -->
            <div class="zookeeper-container">
                <h2>Zookeepers</h2>
                <ul>
                    <?php foreach ($zookeepers as $zookeeper) : ?>
                        <li><?= $zookeeper['name'] ?></li>
                        <li>Years of experience: <?= $zookeeper['experience'] ?></li>
                        <li>Specializations:</li>
                        <?php foreach ($zookeeper['specialization'] as $specializations) : ?>
                            <li><?= $specializations ?></li>
                        <?php endforeach; ?>
                        <br>
                    <?php endforeach; ?>
                </ul>

            </div>


            <!-- display animals -->
            <div class="animals-container">
                <h2>Animals</h2>
                <ul>
                    <?php foreach ($animals as $animal) : ?>
                        <!-- using built in -empty function- to check if a variable exist or not -->
                        <?php if ($animal['amount'] > 0 && !empty($animal['comment'])) : ?>
                            <li><?= $animal['name'] ?></li>
                            <li> Amount: <?= $animal['amount'] ?></li>
                            <li>Comment: <?= $animal['comment'] ?></li>
                        <?php elseif ($animal['amount'] > 0) : ?>
                            <li><?= $animal['name'] ?></li>
                            <li>Amount: <?= $animal['amount'] ?></li>
                        <?php endif; ?>
                        <br>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>


        <!-- Animals Without Zookeepers -->
        <div class="without-keepers-container">
            <h2 class="title-without-keepers">Animals Without Zookeepers</h2>
            <ul>
                <!-- Display animals without zookeepers -->
                <?php foreach ($animals_without_zookeepers as $animal) : ?>
                    <li> <?= $animal['name'] ?></li>
                    <li> Amount: <?= $animal['amount'] ?></li>
                    <li>Comment: <?= $animal['comment'] ?></li>
                    <br>
                <?php endforeach; ?>
            </ul>
        </div>


    </div>

</body>

</html>