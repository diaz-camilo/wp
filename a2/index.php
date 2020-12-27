<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="title" content="ANZAC Douglas Raymond Baker" />
    <meta itemprop="name" content="ANZAC Douglas Raymond Baker" />
    <meta property="og:title" content="ANZAC Douglas Raymond Baker" />
    <meta name="description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
    <meta itemprop="description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
    <meta id="meta-tag-description" property="og:description" content="This site records the letters home during WW1 from ANZAC Douglas Raymond Baker, from September 1914 after he joined up in Gympie, Queensland, Australia to May 1918." />
    <title>ANZAC Douglas Raymond Baker</title>
    
    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
  </head>

  <body>

    <header>
      <h1>ANZAC Douglas Raymond Baker - Letters Home</h1>
    </header>

    <nav>
      <ul>
        <li>home</li>
        <li><a href="#">Introduction</a></li>
        <li><a href="#">Letters & Post Cards</a></li>
        <li><a href="#">Descriptions of Battle Action</a></li>
        <li><a href="#">Places</a></li>
        <li><a href="#">Links to related Materials</a></li>
        <li><a href="#">contact</a></li>
        
      </ul>
    </nav>

    <main>
      <article>
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
</html>
