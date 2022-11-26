<?php

$dateTime = new DateTime;
$futurDateTime = new DateTime;


$futurDateTime->add(new DateInterval('PT2H'));

var_dump($dateTime);

echo $dateTime->format('F 0j Y g:i a ');
echo $futurDateTime->format('F 0j Y g:i a ');

?>