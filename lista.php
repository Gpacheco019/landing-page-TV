<!DOCTYPE html>
<html lang="pt-BR">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TVoff</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top " id="navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">TV OFF</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
             
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="lista.php">Lista
                <span class="sr-only">(current)</span>
            </a>
          </li>       
        
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">LISTA DE E-MAILS CADASTRADOS</h1>
        <p class="lead">Nesta lista de E-MAILS são todos as pessoas cadastradas em nosso banco de dados, participando das promoções</p>
        
      </div>
    </div>

  <div class="table-responsive-md">
	<table class="table table-striped">
	<thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>      
    </tr>
	</thead>
	<tbody>  

       	
    <?php
//COMUNICAÇÃO COM O BANCO
                include 'conexao.php'; 
// REQUISIÇÃO DE CADASTROS DO BANCO
                $select = "SELECT * FROM cadastros";
                $result = mysqli_query($conn, $select); //resultado do select
//MOSTRAR OS CADASTROS
                while ($row = mysqli_fetch_array($result)) { 
                    
                    $email = $row['Email'];
					$nome = $row['Nome'];
                    
 
                    echo"
					<tr>
				<td>$nome</td>  					
                <td>$email</td>
				</tr> 
                ";
                }
                ?>
            </ul>
      
	     
  </tbody>
</table>

  </div>  

  </div>  


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
