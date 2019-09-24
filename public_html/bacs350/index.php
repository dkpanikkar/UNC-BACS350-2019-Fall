<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Devin's Homepage";
    
    $content = '
        <p> 
            <img src="/bacs350/images/Devin_Panikkar.jpg" alt="Devin Panikkar" width="25%"></img>
        </p>
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350.
        </p>
        <p> 
            It is a custom information manager.
        </p>
        <p> 
            Different rooms within this PHP app will contain different types of info.
        </p>
        
        <ul>
            <li>
                <a href="https://shrinking-world.com/unc/bacs350">Sensei homepage</a>
            </li>
            
            <li>
                <a href="demo">Code Demos</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
                <a href="project">Projects</a>
            </li>
            <li>
                <a href="skills">Skills</a>
            </li>
            <li>
                <a href="https://unco.instructure.com/courses/48080">Canvas"</a>
            </li>
             <li>
                <a href="https://github.com/dkpanikkar/UNC-BACS350-2019-Fall">My GitHub Repo</a>
            </li>
             <li>
                <a href="https://github.com/Mark-Seaman/UNC-BACS350-Demo">Instructor GitHub Repo</a>
            </li>
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
