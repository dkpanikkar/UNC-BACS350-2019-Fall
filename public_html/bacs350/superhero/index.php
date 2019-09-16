<?php

    /*
        Superhero Project Workshop
    */

    // Get the render_page and render_card functions
    include 'views.php';


    // Set custom settings
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';

    $card1 = render_card("Daredevil", "After getting blinded at a young age by radiactive waste he learned to use his other senses to be able to act as a lawyer during the day and be a vigilante at night");
    $card2 = render_card("Black Panther", "King of the advanced society of Wakanda acting as the Black Panthar to protect his people");
    //d3 = render_card("Wolverine, A Mutant who had adamantime infused into his bones given him the abillity to push his hones out of his skin like claws to fight");

    $content =  '
        <div class="container-fluid">
            <div class="row">
                ' . $card1 . $card2 .3
            </div>
        </div>
    ';


    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);

?>
