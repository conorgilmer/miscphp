<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//define connection to the database
define("DB_HOST","localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "root");
define("DB_DATABASE","cinema");

//connect to db
echo "connecting";
$linkID = @mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);


if ($linkID) {
    echo "connected to db server";
    
    $selectedDB = @mysql_select_db(DB_DATABASE, $linkID);

    if ($selectedDB) {
        echo "db seclected";
    } else {
        die("couldnt select db");
    }
    
} else {
    
    die ("couldnt connet to db");
}

// create the query
$sql = "select * from movies where 1";

// excute the query
$result = mysql_query($sql);
// retreive the results

if (!$result) die ("oops" . mysql_error());
echo "<ul>";
while ($record = mysql_fetch_array($result)) {
    //$record=  mysql_fetch_assoc($result);
    echo "<li>";
    echo $record['movie_name'];
    echo "</li>";
}

echo "</ul>";
//print_r($record);
?>
