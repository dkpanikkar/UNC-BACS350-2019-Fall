<!--
<h1>Subscribers Database</h1>

<p>This page demonstrates a connection to an actual database at Bluehost.</p>
<p>The last output for this page should be a success confirmation. </p>
-->

 <link rel="stylesheet" href="style.css">

<?php

    // Connect to the subscribers database at Bluehost
    require 'subscriber.php';
    require 'views.php';
    //require 'style.css';

    // Card with docs
    $title = 'Subscriber List';
    $body = $subscribers;
    $card = render_card($title, $body);
    // Get a list of subscribers records
    $subscribers = query_subscribers($db);


    // Build a list of subscribers in HTML
    $list = render_subscriber_list($subscribers);


    
    echo render_page('Panikkar Notes', "Subscriber's", $card);
    echo $list;


    
?>

<p><b>Success !!</b></p>
