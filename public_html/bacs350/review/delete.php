<?php
    //connect to the database
    require_once 'review_db.php';

    //Get the email of the record to delete
    $id = filter_input(INPUT_GET, 'id');

    // Attempt to remove the record
    delete_review($db, $id);

    //Return to the list
    header("Location: index.php");
?>