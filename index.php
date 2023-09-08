<?php
$parcheggio = $_GET['parck'];

$valutazione = $_GET['star'];
echo ($parcheggio . '<br/>');
echo $valutazione;
$indice = 0;
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => false,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
// $val = $hotels[0];
// $listaFiltrada = array_filter($hotels, function($value) use ($val){
//     return $value !== $val;
// } );


function filterList($lista){
    for($i=0;$i< count($lista);$i++){
        if($lista[$i]['parking'] !== TRUE){
            print_r($lista[$i]);
        }else{
            continue;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="get">
            <label for="browser">Parcheggio</label>
            <input class="form-control" list="browsers" name="parck" id="browser">
            <datalist id="browsers">
                <option value="Si">
                <option value="No">
            </datalist>
            <label for="star">Valutazione</label>
            <input class="form-control" list="stars" name="star" id="star">
            <datalist id="stars">
                <option value="1">
                <option value="2">
                <option value="3">
                <option value="4">
                <option value="5">
            </datalist>
            <input type="text" placeholder="inserici un Hotel" name="nomeHotel">
            <button class="btn btn-primary" type="submit"> Cerca</button>

        </form>

    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome Hotel</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                    <th scope="col">Presennza parcheggio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    foreach ($hotels as $hotel) {
                        $indice++;
                        if ($hotel['parking'] === true) {
                            $parking = 'Presente';
                        } else {
                            $parking = 'Assente';
                        }
                        if($parcheggio === 'Si'){
                            filterList($hotels);
                        }
                    
                ?>
                        <tr>
                            <th scope="row"><?php echo ($indice) ?></th>
                            <td><?php echo ($hotel['name']) ?></td>
                            <td><?php echo ($hotel['description']) ?></td>
                            <td><?php echo ($hotel['vote']) ?></td>
                            <td><?php echo ($hotel['distance_to_center']) ?></td>
                            <td><?php echo ($parking) ?></td>

                        </tr>
                <?php
                    }
                ?>
            </tbody>
    </div>
</body>

</html>