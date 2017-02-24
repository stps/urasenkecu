<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Urasenke Urbana-Champaign - Gallery</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="css/members.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>

    <style type="text/css">
    .container ul {
      text-align: center;
    }
    .container ul li {
      list-style-type: none;
      margin-right: 10px;
      margin-bottom: 10px;
display: inline-block;
    }
    .thumb-cropped {
      width: 200px;
      height: 200px;
              background-position: center center;
              background-repeat: no-repeat;
    }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <header class="navbar navbar-fixed-top">
      <div class="nav-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#u-navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Urasenke Urbana-Champaign</a>
        </div>
        <nav class="collapse navbar-collapse" id="u-navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="blog/">Blog</a></li>
            <li><a href="japanhouse.html">Japan House</a></li>
            <li><a href="studygroup.html">Study Group</a></li>
            <li><a href="members.html">Members</a></li>
            <li class="active"><a href="gallery.html">Gallery</a></li>
            <li><a href="chado.html">Chado Urasenke</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </nav><!--/.navbar-collapse -->
      </div>
    </header>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="images/open_house_fa2016.jpg" data-width: style="height: 400px; margin-top: 40px;">
      <div class="jumbotron">
      <h2>Gallery</h2>
    </div>
    </div>

    <!--<div class="container">-->
    <div class="container">
      <!-- Example row of columns -->
      <br/>

      <!--<h3>Members</h3>-->
      <hr class="half-rule">
      <div align="center">
      <ul>
      <?php
        $dirname = "gallery/";
        $thumbname = "thumb/";
        $images = scandir($dirname);
        $ignore = Array(".", "..");
        foreach ($images as $currimg) {
          if (!in_array($currimg, $ignore)) {
            echo "<li><a href='".$dirname.$currimg."'><div class=\"thumb-cropped\" style=\"background-image: url('".$thumbname.substr_replace($currimg,"s.jpg",-5)."');\"></div></a></li>";
          }
        }
      ?>
      </ul>
      </div>
      <hr class="half-rule">
    </div>
    <!-- </div> /container -->

    <footer class="footer">
      <div class="container-f">
        <p class="text-muted">© 2017 Chado Urasenke Tankokai Urbana-Champaign Association</p>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="./js/parallax.min.js"></script>

    <script type='text/javascript'>
        
        $(document).ready(function() {
        
            var jumboHeight = $('.jumbotron').outerHeight();
            function parallax(){
              var scrolled = $(window).scrollTop();
              $('.bg').css('height', (jumboHeight-scrolled) + 'px');
            }

            $(window).scroll(function(e){
                parallax();
            });
        
        });
        

        $(function() {
          $('a.page-scroll').bind('click', function(event) {
          var $anchor = $(this);
          $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
      </script>

  </body>
</html>
