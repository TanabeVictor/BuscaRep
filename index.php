<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Exemplo: Populando selects de cidades e estados com AJAX (PHP e jQuery) | DaviFerreira blog!</title>
		
	</head>
	<body>
		        <?php
				include_once('connection/connect.php');
				$comando = "SELECT * FROM estados";
				$resultado = mysqli_query($conn, $comando);
				?>			
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Estados</label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="type" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="type" required>                 
                          <option> Escolha um tipo </option>
                          <?php while($dado = mysqli_fetch_array($resultado)){ ?>
						 <option><?php echo $dado["nome"]; ?></option>
                          <?php }?>
                          </select>
                        </div>
                      </div>
						
						<?php
						include_once('connection/connect.php');
						$id = 14;
						$comando = "SELECT * FROM cidades WHERE estados_cod_estados =($id)";
						$resultado = mysqli_query($conn, $comando);
						?>		
						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="type">Cidades</label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select id="type" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="type" required>                 
                          <option> Escolha um tipo </option>
                          <?php while($dado = mysqli_fetch_array($resultado)){ ?>
						 <option><?php echo $dado["nome"]; ?></option>
                          <?php }?>
                          </select>
                        </div>
                      </div>
	</body>
</htm>