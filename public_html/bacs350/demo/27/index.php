<?php

  // Bring in rendering function
  require_once 'views.php';
 
 
  // Display the page content
    $demo = '<p>' . render_button('Other Demos', '..') . '</p>';

    $skills   = render_card("Skills", "
    <p><a href=/bacs350/skills/bluehost.png>Bluehost</a></p>
    <p><a href=/bacs350/skills/wordpress.png>Word Press</a></p>
    <p><a href=/bacs350/skills/ftp-site-manager.png>FTP Site Manager</a></p>
    <p><a href=/bacs350/skills/ftp-dirs.png>FTP DIRS</a></p>
    <p><a href=/bacs350/skills/ftp-files.png>FTP Files</a></p>
    <p><a href=/bacs350/skills/git-changes.png>Git Changes</a></p>
    <p><a href=/bacs350/skills/git-files.png>Git Files</a></p>
    <p><a href=/bacs350/skills/git-pull.png>Git Pull</a></p>
    <p><a href=/bacs350/skills/apache.png>Apache</a></p>
    <p><a href=/bacs350/skills/database.png>Database</a></p>
    <p><a href=/bacs350/skills/workflow.png>Workflow</a></p>
    <p><a href=/bacs350/skills/crud.png>CRUD</a>
");
    $projects = render_card("Projects", "
    <p><a href=01>Project #1 - Setup Web Hosting</a></p>
    <p><a href=/bacs350/index.php>Project #2 - Home Page</a></p>
    <p><a href=/bacs350/superhero/index.php>Project #3 - Superhero</a></p>
    <p><a href=/bacs350/planner/index.php>Project #4 - Planner</a></p>
    <p><a href=/bacs350/docman/index.php>Project #5 - Doc Manager</a></p>
    <p><a href=/bacs350/subscriber/index.php>Project #6 - Subscriber Database</a></p>
    <p><a href=/bacs350/superhero/index.php>Project #7 - Superhero Database</a></p>
    <p><a href=/bacs350/notes/index.php>Project #8 - Notes</a></p>
    <p><a href=/bacs350/review/index.php>Project #9 - Review</a></p>
    <p><a href=/bacs350/slides.php>Project #10 - Slides</a></p>
");

    $content = "$demo $skills $projects";


    // Create main part of page content
    $settings = array(
        "site_title" => "UNC BACS 350",
        "page_title" => "Demo 27 - Component Templates",
        "logo"       => "Bear.png",
        "style"      => 'style.css',
        "content"    => $content);

    echo render_page($settings);

?>
