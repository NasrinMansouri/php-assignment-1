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
            <?php foreach ($zookeepers as $zookeeper) : ?>
                <li><?= $zookeeper['name'] ?></li>
                <li>Years of experience: <?= $zookeeper['experience'] ?></li>
                <li>Specializations:</li>
                <?php foreach ($zookeeper['specialization'] as $specializations) : ?>
                    <li><?= $specializations ?></li>
                <?php endforeach; ?>
                <br>
            <?php endforeach; ?>
        </div>


        <!-- display animals -->
    </div>

</body>

</html>