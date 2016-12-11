<!DOCTYPE>
<html class="background">
  <head>
    <meta charset="utf-8">
    <title>Rapunzel - The Untold Story</title>
    <link href="https://fonts.googleapis.com/css?family=Reem+Kufi" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- player -->
    <link rel="stylesheet" href="circle.skin/circle.player.css">
    <!--  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/jquery.transform2d.js"></script>
    <script type="text/javascript" src="js/jquery.grab.js"></script>
    <script type="text/javascript" src="js/jquery.jplayer.js"></script>
    <script type="text/javascript" src="js/mod.csstransforms.min.js"></script>
    <script type="text/javascript" src="js/circle.player.js"></script>
    <!-- end player -->
    <script type="text/javascript">
    $(document).ready(function(){

      /*
       * Instance CirclePlayer inside jQuery doc ready
       *
       * CirclePlayer(jPlayerSelector, media, options)
       *   jPlayerSelector: String - The css selector of the jPlayer div.
       *   media: Object - The media object used in jPlayer("setMedia",media).
       *   options: Object - The jPlayer options.
       *
       * Multiple instances must set the cssSelectorAncestor in the jPlayer options. Defaults to "#cp_container_1" in CirclePlayer.
       */

      var myCirclePlayer = new CirclePlayer("#jquery_jplayer_1",
      {
        m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a",
        oga: "http://www.jplayer.org/audio/ogg/Miaow-07-Bubble.ogg"
      }, {
        cssSelectorAncestor: "#cp_container_1"
      });

    });
    </script>

  </head>
  <body>

    <!-- The jPlayer div must not be hidden. Keep it at the root of the body element to avoid any such problems. -->
		<div id="jquery_jplayer_1" class="cp-jplayer"></div>
		<!-- This is the 2nd instance's jPlayer div -->
		<div id="jquery_jplayer_2" class="cp-jplayer"></div>

    <div class="chapters">

      <h1 class="title"><a href="#">Rapunzel - The untold story</a></h1>

      <!-- chapter-one -->
      <div class="chapter"   id="chapter-one">
        <div class="song">
          <!-- The container for the interface can go where you want to display it. Show and hide it as you need. -->
          <div id="cp_container_1" class="cp-container">
            <div class="cp-buffer-holder"> <!-- .cp-gt50 only needed when buffer is > than 50% -->
              <div class="cp-buffer-1"></div>
              <div class="cp-buffer-2"></div>
            </div>
            <div class="cp-progress-holder"> <!-- .cp-gt50 only needed when progress is > than 50% -->
              <div class="cp-progress-1"></div>
              <div class="cp-progress-2"></div>
            </div>
            <div class="cp-circle-control"></div>
            <ul class="cp-controls">
              <li><a class="cp-play" tabindex="1">play</a></li>
              <li><a class="cp-pause" style="display:none;" tabindex="1">pause</a></li> <!-- Needs the inline style here, or jQuery.show() uses display:inline instead of display:block -->
            </ul>
          </div>
        </div>
        <p>Do you know who I am? I am Rapunzel. I am sure you have heard of me.
          Whatever you heard is a lie, let me tell you the true story.
        </p>
        <div class="next">
          <a href="#chapter-two" class="button button_1">Next</a>
        </div>
      </div>


      <!-- chapter-two -->
      <div class="chapter"  id="chapter-two">
        <p>
          I was taken away from my family like all the children in the world.
          I was raised in a special government facility managed by the “fairy”, an AI system, which aims to produce the perfect human race.
          The system taught me everything but I always knew there was something missing. Until one day…
        </p>
        <div class="next">
          <a href="#chapter-three" class="button button_2">Next</a>
        </div>
      </div>

      <!-- chapter-three -->
      <div class="chapter"  id="chapter-three">
        <p>
          I saw my first human being; he was an engineer working for the “fairy” who came to fix something in my cell.
          What I did not know was that he was undercover fighting against this cruel inhumane system.
          I had found what was missing in my life. I had fallen in love with him.
        </p>
        <div class="next">
          <a href="#chapter-four" class="button button_3">Next</a>
        </div>
      </div>

      <!-- chapter-four -->
      <div class="chapter"  id="chapter-four">
        <p>
          We found a way to let him in to the cell, which could only be opened from outside with my DNA sample.
          That’s why I had to put a piece of my long blond hair into the ventilation system so he could use to access the cell.
        </p>
        <div class="next">
          <a href="#chapter-five" class="button button_4">Next</a>
        </div>
      </div>

      <!-- chapter-five -->
      <div class="chapter"   id="chapter-five">
        <p>
          We were under strict surveillance. The “fairy” found out about us! They cut my hair, and kicked me
          out of the facility to an unknown place. The other humans called it the “Ghetto”. This is the place where
          the unwanted humans and imperfect children lived
        </p>
        <div class="next">
          <a href="#chapter-six" class="button button_5">Next</a>
        </div>
      </div>

      <!-- chapter-six -->
      <div class="chapter"   id="chapter-six">
        <p>
          Fairy tricked my love by using the hair that was cut from me. When he entered the cell, he was captured and then
          tortured by robots for months. Barely alive, the “fairy” sent him into the “Ghetto” where I was.
        </p>
        <div class="next">
          <a href="#chapter-seven" class="button button_6">Next</a>
        </div>
      </div>

      <!-- chapter-seven -->
      <div class="chapter" id="chapter-seven">
        <p>One day, in the deepest corner of the Ghetto, I found him lying on the ground.
          For months, I treated his wounds. We were finally back together but we knew there were more people to rescue.
          That´s why we chose to fight back.</p>
      </div>

  </div>
  <!-- chapters -->

  <script src="js/script.js"></script>

  </body>
</html>
