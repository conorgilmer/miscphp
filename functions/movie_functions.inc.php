<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "in functions";

function debugDisplay($string, $bool){
    if  ($bool) {
    echo $string;
    }
}

function getCinemaMovies($cinema_id) {
   $sql = "SELECT * FROM cinema_x_movies t1 ";
$sql .= " JOIN movies t2 ON t1.movie_id = t2.movie_id ";
$sql.=" WHERE cinema_id = $cinema_id ";

//echo "in function get movies";

$result= mysql_query($sql);

if (!$result) die ("oops" . mysql_error());
$rowsOfMovie = array();

while ($movieRow = mysql_fetch_array($result)){
    $rowsOfMovie[] = $movieRow;
}

return $rowsOfMovie;
    
}

?>