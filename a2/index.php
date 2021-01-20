<!DOCTYPE php>
<php lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="ANZAC Douglas Raymond Baker" />
    <meta itemprop="name" content="ANZAC Douglas Raymond Baker" />
    <meta property="og:title" content="ANZAC Douglas Raymond Baker" />
    <meta name="description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
    <meta itemprop="description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
    <meta id="meta-tag-description" property="og:description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />

    <!-- <meta http-equiv="refresh" content="3" > -->

    <title>ANZAC Douglas Raymond Baker</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <img src='../../media/avatar.jpg' alt="D.R. Baker F.Co one of the soldiers photographed in The Queenslander Pictorial supplement to The Queenslander 1914">
      <p>ANZAC Douglas <span>Raymond Baker</span><br><span>Letters Home</span></p>
      
      
    </header>
    <label for="show_hide_nav"><span id="menu"></span></label>
    <input type="checkbox" name="show_hide_nav" id="show_hide_nav">
    <nav>
      
      <a href='index.php'>Home</a>
      <a href='intro.php'>Introduction</a>
      <a href='places.php'>Places</a>
      <a href='contact.php'>contact</a>
      <a href='letters.php'>Letters & Post Cards</a>
      <a href='descriptions.php'>Descriptions of Battle Action</a>      
      <a href='links.php'>Links to related Materials</a>
    </nav>

    

    <main>
      <article>
        <!-- <div class="greetings"></div> -->
      <h2>Hello and welcome,</h2>
      <p>This year is the centenary of the birth of the ANZAC legend. As such, many people, particularly young people, are looking for ways to connect with people of that period and inparticular, those who created the ANZAC legend.</p>
      <p>This site presents the letters of Douglas Raymond Baker, who came from Gympie, Queensland, Australia. He enlisted in August 1914 and during the years that followed, he wrote letters and post cards to his family at home. In them, he describes much of the goings-on of the life of an ANZAC, his feeling and opinions, and experiences while visiting his relatives in England during leave.</p>
      <p>They start from the beginning of basic training in Brisbane in August 1914 and end in May 1918.</p>
      <p>They are offered here so that others may get an understanding of life as an ANZAC and get a sense of what life on the battlefield was like.</p>
      <p>From the menu on the left, read the Introduction to set the scene. Then, to start reading the letters, click on Letter and Post Cards in the menu on the left. All the letters are searchable using the  search bar at the top right of this page.</p>
      </article>
    </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Camilo Jaramillo Diaz, s3820251. Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>

  </body>
</php>
