<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "My Projects";
    
    $content = '
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            Projects in BACS 350.
        </p>
        
        <ul>
            <li>
                <a href="01">Project #1 - Setup Web Hosting</a>
            </li>
            <li>
                <a href="02">Project #2 - Page Template</a>
            </li>
            <li>
                <a href="03">Project #3 - Superhero Gallary</a>
            </li>
             <li>
                <a href="04">Project #4 - Planner</a>
            </li>
            <li>
                <a href="05">Project #5 - Document Manager</a>
            </li>
            <li>
                <a href="06">Project #6 - Subscriber Database</a>
            </li>
            <li>
                <a href="07">Project #7 - Superhero Database</a>
            </li>
            <li>
                <a href="08">Project #8 - Notes Database</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
