<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="pt-br"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="pt-br"> <!--<![endif]-->
<head>

  <!-- Head
  ================================================== -->
    <?php include('inc-head.php'); ?>
    
  <!-- API Google Maps
  ================================================== -->
  <script type="text/javascript"
    src="http://maps.googleapis.com/maps/api/js?key=AIzaSyBLMb6oe-_gGDbkkBGKezd7ceJfDLFwRWQ&sensor=false">
  </script>
  <script type="text/javascript">
    function initialize() {
      
     // var styles = [
     //   {
     //     stylers: [
     //       { hue: "#005192" },
     //       { saturation: -20 }
     //     ]
     //   }
     // ];
     // 
     // var styledMap = new google.maps.StyledMapType(styles,
     // {name: "Styled Map"});
      
      var myLatlng = new google.maps.LatLng(-22.9106873,-43.182787);
      var myCenter = new google.maps.LatLng(-22.9106873,-43.182787);
      var mapOptions = {
        zoom: 17,
        center: myCenter,
        scrollwheel: false
      }
      var map = new google.maps.Map(document.getElementById('mapCanvas'), mapOptions);
    
      var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'ARLS Comércio e Artes',
          icon: 'img/iconMap.png'
      });    
      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');
    }
    
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
 
</head>
<body>

  <!-- Header
  ================================================== -->
    <?php include('inc-header.php'); ?>    
    

  <!-- Slide
  ============================================================================== -->

  <section id="slider">
    <div class="container">
      <div id="slideHome" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

          <ol class="carousel-indicators">
           <li data-target="#slideHome" data-slide-to="0" class="active"></li> 
           <li data-target="#slideHome" data-slide-to="1"></li> 
           <li data-target="#slideHome" data-slide-to="2"></li> 
          </ol>

          <div class="item active"><img src="img/slides/01.jpg" alt="Slide 01" /></div>
          <div class="item"><img src="img/slides/03.jpg" alt="200 Anos de História" /></div>
          <div class="item"><img src="img/slides/02.jpg" alt="Slide 02" /></div>
        </div><!-- carousel-inner -->

          <a class="left carousel-control" href="#slideHome" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#slideHome" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
      </div><!-- slideHome -->
    </div><!-- container -->
  </section><!-- slider -->


  <div class="container"><h3 class="textoHome"><small><i><center>Temos por finalidade levar a filosofia, a educação e cultura maçônica a todos os homens, fazendo renascer em cada um os reais e sublimes valores, incentivando seus membros ao verdadeiro princípio da virtude, constituindo-se assim, como uma instituição essencialmente filosófica e solidária entre seus membros.</center></i></small></h3></div>

  <section class="container">
    <div class="row">

      <div class="col-md-8">
        <div class="mensagemVeneravel row">
          <div class="col-md-6">
            <img src="img/veneravel.jpg" width="100%">
          </div><!-- col-md-6 // Foto veneravel -->

          <div class="col-md-6 textoMensagem">
            <div class="">              
              <h2>MENSAGEM DO <b>VENERÁVEL-MESTRE</b></h2>
              <p>Assumo a presidência desta Loja, a partir de 22 de junho de 2015, com sentimentos distintos: muita responsabilidade, muita expectativa e muita alegria. Responsabilidade, por estar sucedendo a tantos valorosos irmãos que levaram a Loja Comércio e Artes a quase 200 anos de glórias; expectativas por esperar, com fervor, fazer um bom trabalho voltado principalmente para o  fortalecimento da união entre os irmãos e os princípios filosóficos de nossa Ordem...</p>

              <a href="mensagem-veneravel.php" class="btn btn-primary btn-primary">CONTINUE LENDO <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
          </div><!-- col-md-6 // mensagem veneravel -->

        </div><!-- row // box mensagem veneravel -->


        <!-- DESTAQUES -->
        <div class="row ">
          <div class="col-md-4 destaquesHome">

            <!-- BOX DESTAQUE -->
            <div class="boxDestaque">
              <img src="img/destaque01.jpg">
              <h2>O que é Maçonaria</h2>
                <div class="retina">
                  <p>Tire sua dúvidas do que é maçonaria.</p>
                  <a href="maconaria.php" class="btn btn-primary btn-primary">Saiba mais <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
          </div>
          
            <!-- BOX DESTAQUE -->
          <div class="col-md-4 destaquesHome">
            <div class="boxDestaque">              
              <img src="img/destaque02.jpg">
                <h2>Confira nossas Fotos</h2>
                <div class="retina">
                  <p>Aqui você pode ver e rever as fotos de nossos momentos marcantes</p>
                  <a href="fotos.php" class="btn btn-primary btn-primary">Saiba mais <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
          </div>
          
            <!-- BOX DESTAQUE -->
          <div class="col-md-4 destaquesHome">
            <div class="boxDestaque">              
              <img src="img/destaque03.jpg" class="img-circle">
                <h2>D. Pedro e o Palácio do Lavradio</h2>
                <div class="retina">
                  <p>Entenda a ligação de Dom Pedro I com o Palácio Lavradio</p>
                  <a href="palacio-lavradio.php" class="btn btn-primary btn-primary">Saiba mais <span class="glyphicon glyphicon-chevron-right"></span></a>
                </div>
            </div>
          </div>
        </div>

      </div><!-- col-md-8 // box mensagem veneravel -->
   


      <div class="col-md-4" id="eventosHome">

        <h2>PRÓXIMOS EVENTOS</h2>

        <!--CAIXA COM DATA DO EVENTO -->
        <a href="eventos.php" class="boxEventoHome clearfix">
          <div class="dataEvento col-md-3"><p class="diaEvento">13<span>NOV</span></p></div>
          <div class="textoEvento col-md-9">
            <h2 class="tituloEvento">SESSÃO MAGNA</h2>
            <p class="descricaoEvento">19:00 - Franqueado ao público, festividade de comemoração dos 200 anos</p>
          </div>
        </a>

        <!--CAIXA COM DATA DO EVENTO -->
        <a href="eventos.php" class="boxEventoHome clearfix">
          <div class="dataEvento col-md-3"><p class="diaEvento">14<span>NOV</span></p></div>
          <div class="textoEvento col-md-9">
            <h2 class="tituloEvento">JANTAR DANÇANTE</h2>
            <p class="descricaoEvento">20:30 - Participação da Orquestra Bianchini, festividade de comemoração dos 200 anos</p>
          </div>
        </a>

        <!--CAIXA COM DATA DO EVENTO -->
        <!-- <a class="boxEventoHome clearfix">
          <div class="dataEvento col-md-3"><p class="diaEvento">14<span>NOV</span></p></div>
          <div class="textoEvento col-md-9">
            <h2 class="tituloEvento">Titulo do Evento</h2>
            <p class="descricaoEvento">Aqui vai a descrição do evento</p>
          </div>
        </a> -->

        <!--CAIXA COM DATA DO EVENTO -->
        <!-- <a class="boxEventoHome clearfix">
          <div class="dataEvento col-md-3"><p class="diaEvento">14<span>NOV</span></p></div>
          <div class="textoEvento col-md-9">
            <h2 class="tituloEvento">Titulo do Evento</h2>
            <p class="descricaoEvento ">Aqui vai a descrição do evento</p>
          </div>
        </a> -->

      </div><!-- col-md-4 // eventos -->

    </div><!-- row -->
  </section><!-- container -->

  <div class="row">
    <div id="mapCanvas"></div>
  </div>

  <div class="container">
    <section class="parceirosHome">
      <div class="row">

        <div class="page-header"><h2>NOSSOS PARCEIROS</h2></div>

          <!-- BOX PARCEIRO -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <a tabindex="0" class="boxParceiros" data-toggle="popover" data-placement="top" data-trigger="focus" title="Lucrus - Conectando Soluções, Pessoas e Resultados" data-content="Uma consultoria focada no desenvolvimento de seres humanos que utiliza metodologias de alto impacto, customizadas conforme as necessidades da sua empresa, através de treinamentos, palestras e programas de coaching/mentoring. Acesse www.lucrus.com.br e conheça mais!">           
              <img src="img/parceiros/lucrus.jpg">
            </a>
          </div>

          <!-- BOX PARCEIRO -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <a tabindex="0" class="boxParceiros" data-toggle="popover" data-placement="top" data-trigger="focus" title="Doméstica Legal - O departamento Pessoal do Empregador Doméstico" data-content="A Doméstica Legal, Folha de Pagamento Online, é uma empresa provedora de serviços de Departamento Pessoal e Consultoria Jurídica para patrões domésticos.">           
              <img src="img/parceiros/domesticalegal.jpg">
            </a>
          </div>


          <!-- BOX PARCEIRO -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <a class="boxParceiros">              
              <h2>Confira nossas Fotos</h2>
            </a>
          </div>


          <!-- BOX PARCEIRO -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <a class="boxParceiros">              
              <h2>Confira nossas Fotos</h2>
            </a>
          </div>

          <!-- BOX PARCEIRO -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <a class="boxParceiros">              
              <h2>Confira nossas Fotos</h2>
            </a>
          </div>

          <!-- BOX PARCEIRO -->
          <div class="col-sm-4 col-md-4 col-lg-4">
            <a class="boxParceiros">              
              <h2>Confira nossas Fotos</h2>
            </a>
          </div>

      </div>
    </section>

  </div>
    
  <!-- Footer
  ================================================== -->
    <?php include('inc-footer.php'); ?>    
</body>
</html>
    