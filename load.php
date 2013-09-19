<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("functions/movie_functions.inc.php");

//debug variable
define("DEBUGBOOL", false);

//define connection to the database
define("DB_HOST","localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_DATABASE","cinema");

//connect to db
debugDisplay("connecting", DEBUGBOOL);
$linkID = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if ($linkID) {
    debugDisplay("connected to db server", DEBUGBOOL);
    
    $selectedDB = @mysql_select_db(DB_DATABASE, $linkID);

    if ($selectedDB) {
        debugDisplay("db seclected", DEBUGBOOL);
    } else {
        die("couldnt select db");
    }
    
} else {
    
    die ("couldnt connet to db");
}

// create the query
$sql = "select * from cinema where 1";

// excute the query
$result = mysql_query($sql);
// retreive the results

if (!$result) die ("oops" . mysql_error());
echo "Cinemas<ul>";
while ($record = mysql_fetch_array($result)) {
    echo "<li> [" . $record['cinema_id'] . "]" . $record['cinema_name']. "</li>";
    $movie_array = getCinemaMovies($record['cinema_id']);

    echo"Showing <ul>";
    foreach($movie_array as $movie) {
        echo "<li>";
        echo "{$movie['movie_name']}";
        echo "</li>";
        
        }
    echo "</ul>";
 
}

echo "</ul>";
?>
