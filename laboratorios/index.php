<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>SLOTS LABORATÓRIO</title>

    <style>
    	body {
    		padding-bottom: 60px;
    	}
    	.number-column {
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			color: #0088cc;
			height: 36px;
			width: 36px;
    	}
    	.letter-column {
			font-size: 18px;
			font-weight: bold;
			text-align: center;
			color: #0088cc;
			padding-right: 9px;
    	}
    	.medium-slot-title {
			background: #e0c9a9;
			width: 36px;
			border: 1px solid;
			height: 36px;
			display: inline-block;
			margin-right: 15px;
    	}
		.large-slot-title {
			background: #f1ddc1;
			width: 36px;
			border: 1px solid;
			height: 55px;
			display: inline-block;
			margin-right: 15px;
		}

	    .itembg1 {
	        width: 36px;
	        height: 36px;
	        background: #e0c9a9;
	        padding: 0;
	        /* padding-left: 2px; */
	        border: 1px solid;
	    }
	    .slotname {
	        margin-top: 7px;
	        text-align: center;
	    }
	    .divimg {
	        margin-top: -12px;
	        position: absolute;
	        margin-left: 8px;
	    }
	    .itembg1:hover {
	        background-color: #c7ac87;
	    }
	    td.itembg1.G {
	        height: 55px;
	        background: #f1ddc1;
	    }
	    td.itembg1.G:hover {
	        background: #e0c9a9;
	    }
	    .iconimg {
	        border: 0px; 
	        width: 20px;
	        height: 20px;
	    }
	    @media(min-width:1200px) {
	        .container{ 
	        	width: 600px;
	        }
	    }
    </style>

  </head>
  <body>

  	<?php

  		include_once('functions.php');

  		$slotsm 		= isset($_GET['slotsm']) ? $_GET['slotsm'] : 0;
  		$slotsg 		= isset($_GET['slotsg']) ? $_GET['slotsg'] : 0;
  		$fileiras_slots = isset($_GET['fileiras_slots']) ? $_GET['fileiras_slots'] : 0;

  		$prefix = 'M';
  		$cm 	= $slotsm;
  		$cg 	= $slotsg;

  		$numbers_config = 44;
  		$numbers = [];

  		for($index=0, $k=1; $k <= $numbers_config; $k++, $index++):
  			$numbers[$index] = $k;
  		endfor;
  	?>

  	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php

					$slotsm1 = 4;
					$slotsg1 = 7;
					$fileiras_slots1 = 7;

					// for($c=1; $c <= $slotsm1; $c++):
					// 	echo $c . ' ';
					// endfor;

					// echo '<br>';

					// for($d=1; $d <= $slotsg1; $d++):
					// 	echo $d . ' ';
					// endfor;

					$p = ["0"];
					// $m = [7979,8084,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
					$m = [7979,0,0,0,8084,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
					$g = [0,0,0,0,0,0,0,0,0,0];

					// for($h=0; $h <= count($m); $h++):
					foreach($m as $key => $value):

						// if($m[$h] > 0) {
						if($value > 0) {
							// echo 'A posição ' . $m . ' do slot médio NÃO está vazia <br>';
							echo 'A posição ' . $key . ' do slot médio NÃO está vazia <br>';
						}

						// if($m[$h] == 0) {
						if($value == 0) {
							// echo 'A posição ' . $m[$h] . ' do slot médio está vazia <br>';
							echo 'A posição ' . $key . ' do slot médio está vazia <br>';
						}

					endforeach;

					$slots[]  = [
						[
							'letra' 	=> 'A',
							'numero' 	=> '1',
							'posicao' 	=> 'A1',
							'matriz_x' 	=> 0,
							'matriz_y' 	=> 0,
							'slot_size' => 'm',
							'equipment_id' => 1,
						],						[
							'letra' 	=> 'B',
							'numero' 	=> '2',
							'posicao' 	=> 'B2',
							'matriz_x' 	=> 2,
							'matriz_y' 	=> 2,
							'slot_size' => 'm',
							'equipment_id' => 1,
						],
					];

					$matriz = [];

					$matriz[0][0] = 1; // matriz_x matriz_y
					$matriz[0][1] = 2;
					$matriz[0][3] = 3;

					echo '<pre>';
					// var_dump($matriz);
					// var_dump($slots[0][0]);
					// print_r($slots[0][0]);
					foreach($slots as $slot1):
						
						
						foreach($slot1 as $slot2):

							// var_dump($slot1[ $slot2['matriz_x'] ][ $slot2['matriz_y'] ]);
							// var_dump($slot1[ $slot2['matriz_x'] ]);

							// var_dump($slot2);
						// 	echo $slot2['letra'] . '-' . $slot2['numero'];
						endforeach;

						break;

					endforeach;

					echo '</pre>';
				?>
			</div>
		</div>
	</div>


  	<div class="container">
		<div class="row">
			<div class="col-lg-12">

			    <h1><?php echo 'Hello World!' ?></h1>

				<form action="" method="get">
					<div class="row">

						<div class="col-lg-6 mt-5">

							<h4>Número de Slots</h4>

							<div class="form-group">
								<label for="exampleInputEmail1">Médios</label>
								<input id="slotsm" type="number" name="slotsm" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ex.: 20">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Grandes</label>
								<input id="slotsg" type="number" name="slotsg" class="form-control" id="exampleInputPassword1" placeholder="ex.: 10">
							</div>

							<div class="form-group">
								<label for="exampleInputPassword1">Qtd. por Fileira</label>
								<input id="fileiras_slots" type="number" name="fileiras_slots" class="form-control" id="exampleInputPassword1" placeholder="ex.: 20">
							</div>

							<button type="submit" class="btn btn-primary">Submit</button>

							<a href="http://localhost/ifix" class="btn btn-secondary">
								Limpar
							</a>

							<input id="slotsp" type="hidden" name="slotsp" value="0">

						</div>

						<?php if( isset($_GET['slotsm']) ): ?>	
							<div class="col-lg-6 mt-5">

								<h4 class="mb-4">Slots Informados</h4>
								
								<ul class="list-group">
									<li class="list-group-item">
										Slots Médios: <?= $_GET['slotsm'] . "\n" ?>
									</li>
									<li class="list-group-item">
										Slots Grandes: <?= $_GET['slotsg'] . "\n" ?>
									</li>
									<li class="list-group-item">
										Qtde. por Fileira: <?= $_GET['fileiras_slots'] . "\n" ?>
									</li>
								</ul>

							</div>
						<?php endif; ?>

					</div>
				</form>

			</div>

			<div class="col-lg-12 mt-5">
                <h2><div class="medium-slot-title" style=""></div>SLOTS MÉDIOS</h2>
                <h2><div class="large-slot-title" style=""></div>SLOTS GRANDES</h2>
            </div>

			<div class="col-lg-12 mt-5">

				<table id="table2" align="center">
				    <tbody>
				        <tr id="letras">

				            <td></td> <!-- letters column -->

	                        <?php for ($i = 0; $i < $fileiras_slots; $i++): ?>

                        	<td class="number-column"><?= $numbers[$i] ?></td>

	                        <?php endfor; ?>

				        </tr>

		        		<tr>
		        			<td class="letter-column">
								A
		        			</td>

		        			<?php
	                            for($f = 0; $f < $cm; $f++):
	                                //$array = $CI->GetSlotData($prefix, $f);
	                                //echoSlot($f, $fileiras_slots, $prefix, $array['os'], $array['tipo'], str_replace(' ','&nbsp;',$array['nome']), $cm);
	                                echoSlot($f, $fileiras_slots, 'M', 100, 'celular', str_replace(' ','&nbsp;','Samsung - Celular J7 Prime'), $cm);
	                            endfor;
		        			?>
		        		</tr>

			        	<tr>
			                <?php
			                    $prefix = 'G';
			                    // $cg = $CI->GetSlotMax($prefix);
			                ?>

			                <?php if ($cg > 0): ?>

				        		<?php $parou = $f; ?>

				        		<td class="letter-column">

					        		<?php
			                            $numerofinal = ceil((($parou)/$fileiras_slots)+1);
			                            echo echoCorrespondentLetter($numerofinal);
									?>

	                            </td>

	                            <?php
		                            for ($i = 0; $i < $cg; $i++):
		                                // $array = $CI->GetSlotData($prefix, $i);
		                                // echoSlot($i, $franquia->fileiras_slots, $prefix, $array['os'], $array['tipo'], str_replace(' ','&nbsp;',$array['nome']), $cm, $parou);
		                                echoSlot($i, $fileiras_slots, $prefix, 100, 'tv', str_replace(' ','&nbsp;','Tv LG 4K'), $cg, $parou);
		                            endfor;
					        	?>

					        <?php endif; ?>
				        </tr>
				    </tbody>
				</table>

			</div>

		</div>
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>


