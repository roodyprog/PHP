cd <?php

function generate(){
    $letters = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I',
        'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
        'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];
    $numbers = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'];

    $nameRobot ="" ;

    $indicesLetter = array_rand($letters);
    $indicesLetter1 = array_rand($letters);

    $nameRobot = $letters[$indicesLetter].$letters[$indicesLetter1].'-';
    $partyNum ="";
    for($i = 0;$i<4;$i++ ){
        $indiceNum = rand(0,9);
        $nameRobot .=$indiceNum;

    };

    $dateTime = new DateTime();
    return $nameRobot ;
}
$stock = generate();



//essayes ici de faire une fonction et de faire une petite boucle dedans au lieu de répéteren ligne 15,16,17,18


?>

<!DOCTYPE html>
<html>
    <h3>Salut, humain. Je suis <?php echo $stock; ?></h3>
</html>