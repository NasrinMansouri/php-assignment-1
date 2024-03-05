<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Zoo of Antwerp</h1>

        <!-- display zookeepers -->
        <div>
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
        <div>
            <h2>Animals</h2>
            <ul>
                <?php foreach ($animals as $animal) : ?>
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

</body>

</html>