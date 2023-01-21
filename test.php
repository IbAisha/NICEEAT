
<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "root", "nice_eat");


/* Préparation de la requête */
$stmt = mysqli_prepare($link, "INSERT INTO myCity (Name, CountryCode, District) VALUES (?,?,?)");

/* Lier les variables aux paramètres */
mysqli_stmt_bind_param($stmt, "sss", $val1, $val2, $val3);
$val1 = 'Stuttgart';
$val2 = 'DEU';
$val3 = 'Baden-Wuerttemberg';

/* Exécuter l'instruction */
mysqli_stmt_execute($stmt);
$val1 = 'Bordeaux';
$val2 = 'FRA';
$val3 = 'Aquitaine';

/* Exécuter l'instruction */
mysqli_stmt_execute($stmt);

$val1 = 'Moroni';
$val2 = 'COM';
$val3 = 'Bambao';

mysqli_stmt_execute($stmt);



/* Récupération de toutes les lignes de myCity */
$query = "SELECT Name, CountryCode, District FROM myCity";
$result = mysqli_query($link, $query);
while ($row = mysqli_fetch_row($result)) {
    printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
}
