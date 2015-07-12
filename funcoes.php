    <!-- Url amigavel -->
  <?php
    function getGet( $key ){
      return isset( $_GET[ $key ] ) ? $_GET[ $key ] : null;
    }
    
    
    $pg = getGet('a');
    $file = is_file( 'view/'.$pg.'.php' ) ? 'view/'.$pg.'.php' : 'view/contato.php';
    
    switch( $pg )
    {
      case 'contato':
        $title = 'Contato - ';
        break;
      case 'historia-loja':
        $title = 'História Comércio e Artes - ';
        break;
      default:
        $title = '';
    }
   
  ?>