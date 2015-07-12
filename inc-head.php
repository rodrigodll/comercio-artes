  <!-- Configurações básicas da página
  ================================================== -->
  <meta charset="utf-8">
  <title><?php echo $title; ?> ARLS COMÉRCIO E ARTES - PRIMAZ DO BRASIL</title>
  <meta name="description" content="BEM VINDO!!! ARLS COMÉRCIO E ARTES - PRIMAZ DO BRASIL é a primeira loja maçônica do Brasil, fundada em 15 de novembro de 1815, foi a fundadora do Grand Oriente do Brasil - GOB">
  <meta name="author" content="Rodrigo Nascimento">
  <meta name="keywords" content="ARLS COMÉRCIO E ARTES - PRIMAZ DO BRASIL, maçonaria, maçonaria rj, maçonaria rio de janeiro, maçonaria Dom Pedro II, loja maçonica, primaz do Brasil">
  <meta name="author" content="Rodrigo Nascimento">
  <meta name="robots" content="index, follow">
  <meta name="language" content="pt-br">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <!-- Google Fonts - Lato
  ================================================== -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
  
  <!-- CSS
  ================================================== -->
  <link href="css/bootstrap.css" rel="stylesheet" media="screen">
  <link href="css/bootstrap-theme.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">

  <!-- JS
  ================================================== -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

    
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Popoover-->
  <script type="text/javascript">
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  </script>  


  <script>
    $(function(){   
      var nav = $('#menuHeader');   
      $(window).scroll(function () { 
        if ($(this).scrollTop() > 245) { 
          nav.addClass("navbar-Fixo"); 
        } else { 
          nav.removeClass("navbar-Fixo"); 
        } 
      });  
    });
  </script>

  <script type="text/javascript">
    $(function(){   
      var nav = $('.page-title');   
      $(window).scroll(function () { 
        if ($(this).scrollTop() > 245) { 
          nav.addClass("page-title-Fixo"); 
        } else { 
          nav.removeClass("page-title-Fixo"); 
        } 
      });  
    });
  </script>

  <script type="text/javascript">
    $(function(){   
      var nav = $('#paginaInterna');   
      $(window).scroll(function () { 
        if ($(this).scrollTop() > 245) { 
          nav.addClass("margin-top180"); 
        } else { 
          nav.removeClass("margin-top180"); 
        } 
      });  
    });
  </script>


  <!-- Analytics
  ================================================== -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-64357259-1', 'auto');
    ga('send', 'pageview');

  </script>
