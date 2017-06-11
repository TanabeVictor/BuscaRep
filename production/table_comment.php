<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<ul class="messages">
                              <?php
						        include_once('connection/connect.php');
						        $id = $_GET['id'];
                                $comando = "SELECT * FROM avaliacao WHERE id_rep=1645";
						        $resultado3 = mysqli_query($conn, $comando)?>
					     	  <?php while($dado3 = mysqli_fetch_array($resultado3)){ ?>
                           	  <li>
                               <img src="upload/<?php echo $dado3['img_name']?>" class="avatar" alt="Avatar">
                                <div class="message_date">
                                
                                <h3 class="date text-info"><?php 
								$data = $dado3['date'];
								$partes = explode("-", $data);
								$dia = $partes[2];
								$mes = $partes[1];
							    $ano = $partes[0];													  
								echo $dia?></h3>
                                  <p class="month">May</p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading"><?php echo $dado3['author'] ?></h4>
                                  <blockquote class="message"><?php echo $dado3['description']?></blockquote>
                                  <br />
                                </div>
                              </li>
                              <?php } ?>
                              </ul>
</body>
</html>


