<?php

    /*
        Superhero Project Workshop
    */

    // Get the render_page and render_card functions
    include 'views.php';


    // Set custom settings
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';

    $card1 = render_card("DareDevil", "Blinded at a young age by radioactive waste Matt Merdock works as a lawyer during the day and as the vigilante DareDevil at night");
    $card2 = render_card("Black Panthar", "King of the advanced society of Wakanda usng his persona as Black Panther as both a symbol of peace for his people as well as protecting them from all sorts of danger");

    $content =  '
        <div class="container-fluid">
            <div class="row">
                ' . $card1 . $card2 . '
            </div>
        </div>
    ';


    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);

?>
