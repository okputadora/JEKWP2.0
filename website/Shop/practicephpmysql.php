<?php
//THIS WORKS
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '4011');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'startrekdb');
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(! $connection){
  die('Could not connect' . mysqli_error($connection));
}

$sql = 'INSERT INTO episodelist ' .
        '(seriesnum, season, episodenum, episodename, director, release_date) '.
        'VALUES("2", "1", "3", "BLERG", "Lynch", "October 5th, 1987")';

if (mysqli_query($connection, $sql)){
    echo "Data entered successfuly";
}
else{
  die("ERROR here");
}


mysqli_close($connection);

?>
