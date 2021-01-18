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
      <p>ANZAC Douglas Raymond Baker - Letters Home</p>      
    </header>
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
      <form class="form" action="https://titan.csit.rmit.edu.au/~e54061/wp/testcontact.php" method="post" target="_blank">
        
                  <article>
                  <div class="grid-container">
          <div class="grid-label"><label for="name">Name: </label></div>
          <div class="grid-input"><input type="text" id="name" name="name" placeholder="Jon Doe" required value=""/></div>
          <div class="grid-label"><label for="email">Email: </label></div>  
          <div class="grid-input"><input type="email" id="email" name="email" placeholder="your-email@email.com" required value=""/></div>
          <div class="grid-label"><label for="mobile">Mobile: </label></div>
          <div class="grid-input"><input type="tel" id="mobile" name="mobile" minlength="10" maxlength="10" placeholder="0404123456" required value="" /></div>  
          <div class="grid-label"><label for="subject">Subject:</label></div>
          <div class="grid-input"><input type="text" id="subject" name="subject" placeholder="Subject" value=""/></div>
          <div class="grid-label"><label  for="message">Message: </label></div> 
          <div class="grid-input"><textarea id="message" rows="10" name="message" placeholder="Type your message here" value=""></textarea></div>
          <div class="grid-item"></div>
          <div class="grid-input">
            
          <label class="container">Remember me
          <input type="checkbox" name="remember-me" id="remember-me" checked="checked" />
          <span class="checkmark"></span>
          </label>
            
          
          <!-- <input type="checkbox" value="remember-me"/>Remember me</div>  -->
          <div class="grid-item"></div>
          <div class="grid-input"><input type="submit" name="send" value="Send"></div> 
        </div>
        </article>
                  
                   
                    
                  </form>
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




