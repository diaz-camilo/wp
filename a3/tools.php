<?php
  session_start();

// Put your PHP functions and modules here
function top_module ($title) {
  $style = filemtime("style.css");
  $html = <<<"OUTPUT"
  
  <php lang='en'>
  
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="title" content=$title />
      <meta itemprop="name" content="ANZAC Douglas Raymond Baker" />
      <meta property="og:title" content="ANZAC Douglas Raymond Baker" />
      <meta name="description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
      <meta itemprop="description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
      <meta id="meta-tag-description" property="og:description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
      <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Stalemate&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&family=Libre+Baskerville&family=Libre+Franklin&family=Roboto&display=swap" rel="stylesheet">
  
      <title>$title</title>
  
      <!-- Keep wireframe.css for debugging, add your css to style.css -->
      <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
      <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=$style">
      <script src='../wireframe.js'></script>
      <script src="script.js"></script>
    </head>
  
    <body>
      <header>
        <div class="tooltip"><img src='../../media/avatar.jpg' alt="D.R. Baker F.Co one of the soldiers photographed in The Queenslander Pictorial supplement to The Queenslander 1914"><span class="tooltip_text">
            <p>(Photograph courtesy of : John Oxley Library, State Library of Queensland [Image number: 702692-19141024-s0023-0027])</p>
          </span></div>
        <p>ANZAC <span>Douglas Raymond</span> Baker<br><span>Letters Home</span></p>
      </header>
      <span class="poppy"></span>
      <label for="show_hide_nav"><span id="menu"></span></label>
      <input type="checkbox" name="show_hide_nav" id="show_hide_nav">
  
      <nav>
        <a href='index.php'>Home</a>
        <a href='places.php'>Places</a>
        <a href='contact.php'>contact</a>
        <a href='letters.php'>Letters & Post Cards</a>
        <a href='descriptions.php'>Descriptions of Battle Action</a>
        <a href='links.php'>Links to related Materials</a>
      </nav>
OUTPUT;
echo $html;

}

function footer_module () {
  $last_modified = date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME']));
  $html = <<<"OUTPUT"
    <footer>
      <p>&copy; <script>document.write(new Date().getFullYear());</script> Camilo Jaramillo Diaz, s3820251. <a href="https://github.com/diaz-camilo"><img src='../../media/GitHub-Mark-Light-32px.png' alt="github logo, links to Camilo's github repo"></a> ibak6837@bigpond.net.au<br>Last modified $last_modified. </p>
      <p>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia. </p>
      <p><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></p>
    </footer>

  </body>
OUTPUT;
echo $html;

  

}

function read_file () {
  if( ($fp = fopen("/home/eh1/e54061/public_html/wp/letters-home.txt", 'r')) && flock($fp, LOCK_SH) !== false ) {
    $headings = fgetcsv($fp,0,"\t");
    while( ($aLineOfCells = fgetcsv($fp,0,"\t")) !== false )
      $records[] = $aLineOfCells;
    flock($fp, LOCK_UN);
    fclose($fp);

    $letters = [];
    $singular_letter = [];
    for($i=0; $i<count($records); $i++){
      for($k=0; $k<count($records[$i]); $k++){
        $singular_letter[$headings[$k]] = $records[$i][$k];
      }
      $letters[] = $singular_letter;
    }
    
    foreach ($letters as $letter) {
        // Letter button
      echo<<< "LABEL"
    <label for="{$letter['DateStart']}_check">{$letter['DateStart']}</label>
    <input type="checkbox" name="{$letter['DateStart']}_check" id="{$letter['DateStart']}_check">
LABEL;
      
      echo '<section>
              <div class="card3D">';
      //  set card image
      if($letter['Type'] == "Postcard"){
        echo '<div><img src="../../media/postcard.png" alt=""></div>';
      } else {
        echo '<div><img src="../../media/envelope.png" alt=""></div>';
      }
      echo "<div>";

        // Letter starts here
        // date
      if($letter['DateEnd'] != ""){
        echo "<p class=\"right_align\">Date: {$letter['DateStart']} - {$letter['DateEnd']}</p>";
      } else {
        echo "<p class=\"right_align\">Date: {$letter['DateStart']}</p>";
      }
        // Town
      if($letter['Town'] != ""){
        echo "<p>  Town: {$letter['Town']}</p>";
      } 
        // Country
      if($letter['Country'] != ""){
        echo "<p>  Country: {$letter['Country']}</p>";
      }
        // Transport
      if($letter['Transport'] != ""){
        echo "<p>  Transport: {$letter['Transport']}</p>";
      } 
      // Battle
      if($letter['Battle'] != ""){
        echo "<p>  Battle: {$letter['Battle']}</p>";
      } 
      // content   
      $content = htmlspecialchars_decode($letter['Content']);    
      echo "<p>{$letter['Content']}</p>";
        // Close divs and section
      echo "    </div>
              </div>
            </section>
            ";
    }

    
      
    
    // echo "</p>";



    
  }

}
?>