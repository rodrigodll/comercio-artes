<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="pt-br"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="pt-br"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="pt-br"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br"> <!--<![endif]-->
<head>

  <!-- Head
  ================================================== -->
    <?php include('inc-head.php'); ?>


    <!-- number masck -->
    <script>
      function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)
      
      if (texto.substring(0,1) != saida){
      documento.value += texto.substring(0,1);
      }
      
    }
    </script>


  <!-- tab for enter -->    
  <script language="javascript">
    function tabenter(event,campo){
      var tecla = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
      if (tecla==13) {
        campo.focus();
      }
    }
  </script>


  <!-- validation email -->    
    <?php
   
      function validaemail($emailForm){
        //verifica se e-mail esta no formato correto de escrita
        if (!ereg('^([a-zA-Z0-9.-])*([@])([a-z0-9]).([a-z]{2,3})',$emailForm)){
          $mensagem='E-mail Inv&aacute;lido!';
          return $mensagem;
          }
          else{
          //Valida o dominio
          $dominio=explode('@',$emailForm);
          if(!checkdnsrr($dominio[1],'A')){
            $mensagem='E-mail Inv&aacute;lido!';
            return $mensagem;
          }
          else{return true;} // Retorno true para indicar que o e-mail é valido
        }
      }
       
    ?>


</head>

<body>

  <!-- Header
  ================================================== -->
    <?php include('inc-header.php'); ?>    

    <div class="page-title">
        <div class="container">          
            <h2>ENTRE EM CONTATO</h2>
        </div>
    </div>


    <div class="container" id="paginaInterna">
    
        <div class="row"> 

          <div class="col-sm-7">
            <div class="mapContato">              
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1837.535237263421!2d-43.18286210174914!3d-22.910771300968683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997f65b8e57999%3A0xc6d2dd6505772a5f!2sR.+do+Lavradio%2C+97+-+Centro%2C+Rio+de+Janeiro+-+RJ%2C+20230-070!5e0!3m2!1spt-BR!2sbr!4v1435866719416" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <address>
              <strong>Comercio e Artes</strong><br>
              Rua do Lavradio, 97 - Rio de Janeiro - RJ | <abbr title="Phone">CEP:</abbr> 20230-070
            </address>

          </div>


          <div class="col-sm-5">
              
            <form class="form-horizontal" name="contacform" method="post" action="enviar.php">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nomeForm">Nome:</label>  
              <div class="col-md-6">
              <input id="nomeForm" name="nomeForm" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="sobrenomeForm">Sobrenome:</label>  
              <div class="col-md-6">
              <input id="sobrenomeForm" name="sobrenomeForm" type="text" placeholder="Digite seu sobrenome" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="emailForm">E-mail:</label>  
              <div class="col-md-6">
              <input id="emailForm" name="emailForm" type="text" placeholder="Digite seu email" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefoneForm">Telefone:</label>  
              <div class="col-md-6">
              <input id="telefoneForm" name="telefoneForm" type="text" placeholder="Número de telefone" class="form-control input-md"
              pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" OnKeyPress="formatar('##-#####-####', this)">
                
              </div>
            </div>

            <!-- Select Basic -->
            <!-- <div class="form-group">
              <label class="col-md-4 control-label" for="setorForm">Setor interessado</label>
              <div class="col-md-6">
                <select id="setorForm" name="setorForm" class="form-control">
                  <option value="veneravel">Venerável</option>
                  <option value="secretario">Secretário</option>
                  <option value="tesoureiro">Tesoureiro</option>
                </select>
              </div>
            </div> -->

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="assuntoForm">Assunto:</label>  
              <div class="col-md-6">
              <input id="assuntoForm" name="assuntoForm" type="text" placeholder="Diga qual assunto" class="form-control input-md">
                
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="mensagemForm">Mensagem:</label>
              <div class="col-md-6">                     
                <textarea class="form-control" id="mensagemForm" name="mensagemForm">Escreve sua mensagem</textarea>
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnEnviar"></label>
              <div class="col-md-8">
                <button type="submit" id="btnEnviar" name="btnEnviar" class="btn btn-primary iframe">Enviar</button>
                <button type="reset" id="btnLimpar" name="btnLimpar" class="btn btn-inverse">Limpar</button>
              </div>
            </div>

            </fieldset>
            </form>
          </div>

        </div>
    </div>
    
  <!-- Footer
  ================================================== -->
    <?php include('inc-footer.php'); ?>    
</body>
</html>
    