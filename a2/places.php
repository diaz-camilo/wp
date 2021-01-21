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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=BioRhyme&family=Libre+Baskerville&family=Libre+Franklin&family=Roboto&display=swap" rel="stylesheet">

    <title>ANZAC Douglas Raymond Baker - Places</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="style.css?t=<?= filemtime("style.css"); ?>">
    <script src='../wireframe.js'></script>
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

    <main>
      <article class="places">
        <div class="parallax"></div>
        <div class="places1">
          <h3> Enoggera</h3>
        </div>

        <div class="parallax"></div>
        <div class="places2">
          <h3>Pinkenba</h3>
        </div>

        <div class="parallax"></div>
        <div class="places3">
          <h3>Melbourne</h3>
        </div>

        <div class="parallax"></div>
        <div class="places4">
          <h3>Albany</h3>
        </div>

        <div class="parallax"></div>
        <div class="places5">
          <h3>Colombo(Sri-Lanka)</h3>
        </div>

        <div class="parallax"></div>
        <div class="places6">
          <h3>Aden</h3>
        </div>

        <div class="parallax"></div>
        <div class="places7">
          <h3>Egypt</h3>
        </div>

        <div class="parallax"></div>
        <div class="places8">
          <h3>Suez</h3>
        </div>

        <div class="parallax"></div>
        <div class="places9">
          <h3>Port Said</h3>
        </div>

        <div class="parallax"></div>
        <div class="places10">
          <h3>Alexandria</h3>
        </div>

        <div class="parallax"></div>
        <div class="places11">
          <h3>Cairo</h3>
        </div>

        <div class="parallax"></div>
        <div class="places12">
          <h3>Mena Camp</h3>
        </div>

        <div class="parallax"></div>
        <div class="places13">
          <h3>Kasî-el-Nil Barracks</h3>
        </div>

        <div class="parallax"></div>
        <div class="places14">
          <h3>Lemnos Is.</h3>
        </div>

        <div class="parallax"></div>
        <div class="places15">
          <h3>Dardenelles</h3>
        </div>

        <div class="parallax"></div>
        <div class="places16">
          <h3>Gallipoli</h3>
        </div>

        <div class="parallax"></div>
        <div class="places17">
          <h3>Malta</h3>
        </div>

        <div class="parallax"></div>
        <div class="places18">
          <h3>Fort Tigne</h3>
        </div>

        <div class="parallax"></div>
        <div class="places19">
          <h3>Slienna</h3>
        </div>

        <div class="parallax20"></div>

      </article>
    </main>

    <footer>
      <p>&copy; <script>
          document.write(new Date().getFullYear());
        </script> Camilo Jaramillo Diaz, s3820251. <a href="https://github.com/diaz-camilo"><img src='../../media/GitHub-Mark-Light-32px.png' alt="github logo, links to Camilo's github repo"></a><br>Last modified <?= date("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>. </p>
      <p>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia. </p>
      <p><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></p>
    </footer>

  </body>
</php>