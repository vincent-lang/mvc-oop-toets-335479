<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>
    <a href="<?= URLROOT; ?>/voetbal/index">voetballers</a>

    <table border="1">
        <thead>
            <th>Id</th>
            <th>Naam</th>
            <th>Club</th>
            <th>Leeftijd</th>
            <th>Nationaliteit</th>
            <th>Salaris (miljoen)</th>
        </thead>
        <tbody>
    	    <tr>
                <td><?= $data['id']; ?></td>
                <td><?= $data['name']; ?></td>
                <td><?= $data['club']; ?></td>
                <td><?= $data['leeftijd']; ?></td>
                <td><?= $data['nationaliteit']; ?></td>
                <td><?= $data['salaris']; ?></td>
            </tr>
        </tbody>
    </table>

</body>
</html>