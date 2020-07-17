

<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TVoff</title>

  
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <!--<script src="vendor/jquery/jquery.slim.min.js" type="text/javascript"></script>-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js" type="text/javascript"></script>
  
  

  

</head>



<body>

  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top " id="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">TV OFF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="lista.php">Lista</a>
          </li>       
        
        </ul>
      </div>
    </div>
  </nav>

  <!-- CHAMADA DE MARKETING PARA AS PROMOÇÕES DAS TV-->

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">SUA TV SMART ESTÁ AQUI</h1>
        <p class="lead">Pensando em comprar uma TV? Na TV OFF, você encontra as melhores promoções de televisores de diversos modelos!
          Para tornar sua experiência mais imersiva, é fundamental escolher o tamanho da TV que se adeque ao seu campo de visão.
          As Smart TVs deram um salto na qualidade das imagens e hoje encontramos telas de Full HD, 1920x1080 pixels, Ultra HD (4K) 
          3840 x 2160 pixels e Full Ultra HD (8K) 7680 x 4320 Pixels.
          
          Cadastre-se abaixo e receba as nossas melhores ofertas!</p>
        
      </div>
    </div>
  

   
    <div class="row align-items-center my-5">
      <div class="col-lg-7">
        <img class="img-fluid rounded mb-4 mb-lg-0" src="img/tv_slide_um.jpg" alt="">
      </div>
     
      <div class="col-lg-5">
        <h1 class="font-weight-light">TV LG Smart LED 43"</h1>
        <p>Experimente o melhor da tecnologia com a Smart PRO 43'' Full HD da LG, oferece tela de LED e resolução Full HD de 1920x1080 pixels obtendo uma incrível experiência de imagem,
           possui três entradas HDMI e duas USB, proporcionando mais possibilidades de conexão. Acompanha compatibilidade com o sistema de Inteligência Artificial ThinQ Al, conta com Bluetooth,
            sistema operacional webOS 4.5, Music Player, LG Content Store, Modo Hotel, painel de controle, galeria, conteúdos VR 360, miracast overlay, HDR e potência de som de 20W.</p>
      </div>      
    </div>
   

    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Smart TV Samsung</h2>
            <p class="card-text">TV 42" a partir de <strong>R$999,90</strong></p>
            <img class="img-fluid rounded mb-4 mb-lg-0" src="img/tv_slide_dois.png" alt="">
          </div>
          
        </div>
      </div>
     
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Smart TV LG</h2>
            <p class="card-text">TV 55" 4K a partir de <strong>R$2.999,90</strong></p><br>
            <img class="img-fluid rounded mb-4 mb-lg-0" src="img/TV_slide_quatro.jpg" alt="">
          </div>
          
        </div>
      </div>
      
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <div class="card-body">
            <h2 class="card-title">Smart TV LG</h2>
            <p class="card-text">TV 55" 4K a partir de <strong>R$1.999,90</strong></p>
            <img class="img-fluid rounded mb-4 mb-lg-0" src="img/tv_slide_tres.png" alt="">
          </div>
          
        </div>
      </div>

    </div>
    
    <!--FORMULÁRIO  PARA CADASTRO-->

    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="mt-5">CADASTRE E RECEBA TODAS AS PROMOÇÕES</h2>      
                
      </div>
    </div>

    
    <form id="cadEmail" method="POST" action="salavar.php">
      <div class="form-group mt-5">
        <label for="exampleInputEmail1">Endereço de e-mail</label>
        <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Seu e-mail">
        <small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seu e-mail, com ninguém.</small>
      </div>
      <div class="form-group ">
        <label for="exampleInputPassword1">Nome</label>
        <input  type="text" name="nome" class="form-control" id="nome" placeholder="Nome Completo">
      </div>     
       
      <input type="submit " value="Cadastrar" class="btn btn-primary mb-5" id="Cadastrar"></input>
    </form>
  
  
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- PARTE LÓGICA DE VERIFICAÇÃO -->

  <script type="text/javascript" language="javascript">
  function validarEmail(email){
        var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
}

      $(document).ready(function(){

      $('#Cadastrar').click(function(){


        var nome = document.forms["cadEmail"]["nome"].value;
        var email = document.forms["cadEmail"]["email"].value;
        if (nome == "" ||  email == "" ) {
        alert("Favor preencher os campos Email e Nome");
        return false;
        }else  {
          if ( !validarEmail(email)){
            alert('Email inválido') 
            return false;
          }
            var dados = $('#cadEmail').serialize();

              $.ajax({
                  type: 'POST',
                  dataType: 'html',
                  url: 'salvar.php',      
                  data: dados,
                  success: function(response) {
                  location.reload();
                  alert('Cadastrado com sucesso!')
                  }
              });
              
              return false;

        }	
 
      });

    });

  </script>

</body>

</html>
