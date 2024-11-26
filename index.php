<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vārdu spēle</title>
</head>

<body>
    <form action="index.php" method="post">
        <h1>Vārdu spēle!!!</h1><br>
        <label>Ievadi vārdu: </label>
        <input type="text" name="vards" pattern="[a-zA-Z]*">
        <input type="submit" name="submit" value="Ievadīt!">
    </form>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    $vards = filter_input(INPUT_POST, "vards", FILTER_SANITIZE_SPECIAL_CHARS,);
    //pogas scripts

    echo "Vārds otrādāk rakstās:   ", strrev($vards), "<br>";
    //apgrieztais

    echo "Burtu skaits:  ", strlen($vards), "<br>";
    //counts

    if (strrev($vards) == $vards) {
        echo "Dotais vārds ir Palindroms";
    } else {
        echo "Dotais vārds nav Palindroms";
    }
    //Palindroms
}
?>