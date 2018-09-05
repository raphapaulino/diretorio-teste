<?php

function base_url() {
	return 'http://localhost/ifix/';
}

function echoSlot($i, $breakline, $prefix, $os, $tipo, $name, $total, $parou = 0)
{
    echo '<td class="itembg1 1 '.$prefix.'">' . "\n";
    echo "\t\t\t\t\t\t\t\t\t\t" . '<div class="divimg">'  . "\n";

    if ($os != 0) {
        echo "\t\t\t\t\t\t\t\t\t\t\t" . '<a href="editar/'.$os.'">' . "\n";
        
        echo "\t\t\t\t\t\t\t\t\t\t\t\t" . '<img class="tip-bottom iconimg" src="'. base_url() . echoEquipmentTypeImage($tipo) . '" ';

        echo 'data-original-title="Equipamento:&nbsp;'.$name.'&#09;Clique&nbsp;pra&nbsp;ver&nbsp;OS&nbsp;(#'.$os.')">' . "\n";                             
        echo "\t\t\t\t\t\t\t\t\t\t\t" . '</a>' . "\n";
    }
    
    echo "\t\t\t\t\t\t\t\t\t\t" . '</div>' . "\n";
    // echo '        <div class="slotname"> '.$prefix.($i+1).' </div>';
    echo "\t\t\t\t\t\t\t\t\t" . '</td>' . "\n";
    
    if ((( ($i + 1) % $breakline) == 0))
        echo `</tr>
                <tr>
                    <td style="font-size: 18px;font-weight: bold;text-align: center;color: #0088cc;">
                        <img src="http://www.dominio.com.br/sistema/letras/'.(ceil(((($i+1)+$parou)/($breakline))+1)).'.jpg" width="37" height="36" style="min-width: 37px !important;">
                    </td>`  . "\n";
		
}

function echoEquipmentTypeImage($equipment_type) {

	$img = 'assets/img/';

    switch ($equipment_type):
    
        case 'celular': 
        case 'Celular':   
        	$img = $img . 'cell.png';
        	break;

        case 'tablet': 
        case 'Tablet':     
        	$img = $img . 'tablet.png';
        	break;

        case 'notebook': 
        case 'Notebook':  
        	$img = $img . 'notebook.png';
        	break;

        case 'computador': 
        case 'Computador':  
        	$img = $img . 'pc.png';
        	break;

        case 'videogame': 
        case 'Videogame': 
        	$img = $img . 'videogame.png';
        	break;

        case 'tv': 
        case 'TV': 
        	$img = $img . 'tv.png';
        	break;

        default:      
        	$img = $img . 'null';
        	break;

    endswitch;

    return $img;

}

function echoCorrespondentLetter($finalNumber) {

    $correspondentLetter = '';

    switch($finalNumber):
    
    	case 1:
    		$correspondentLetter = "A";
    		break;
    
    	case 2:
    		$correspondentLetter = "B";
    		break;
    
    	case 3:
    		$correspondentLetter = "C";
    		break;
    
    	case 4:
    		$correspondentLetter = "D";
    		break;
    
    	case 5:
    		$correspondentLetter = "E";
    		break;
    
    	case 6:
    		$correspondentLetter = "F";
    		break;
    
    	case 7:
    		$correspondentLetter = "G";
    		break;
    
    	case 8:
    		$correspondentLetter = "H";
    		break;
    
    	case 9:
    		$correspondentLetter = "I";
    		break;
    
    	case 10:
    		$correspondentLetter = "J";
    		break;
    
    	case 11:
    		$correspondentLetter = "K";
    		break;
    
    	case 12:
    		$correspondentLetter = "M";
    		break;
    
    	case 13:
    		$correspondentLetter = "N";
    		break;
    
    	case 14:
    		$correspondentLetter = "O";
    		break;
    
    	case 15:
    		$correspondentLetter = "P";
    		break;
    
    	case 16:
    		$correspondentLetter = "Q";
    		break;
    
    	case 17:
    		$correspondentLetter = "R";
    		break;
    
    	case 18:
    		$correspondentLetter = "S";
    		break;
    
    	case 19:
    		$correspondentLetter = "A";
    		break;
    
    	case 20:
    		$correspondentLetter = "T";
    		break;
    
    	case 21:
    		$correspondentLetter = "U";
    		break;
    
    	case 22:
    		$correspondentLetter = "X";
    		break;
    
    	case 23:
    		$correspondentLetter = "Y";
    		break;

    	case 24:
    		$correspondentLetter = "Z";
    		break;

    	default: 
    		$correspondentLetter = "-";
    		break;

    endswitch;

	return $correspondentLetter;
}

function createColumnsArray($end_column, $first_letters = '')
{
  $columns = array();
  $length = strlen($end_column);
  $letters = range('A', 'Z');

  // Iterate over 26 letters.
  foreach ($letters as $letter) {
      // Paste the $first_letters before the next.
      $column = $first_letters . $letter;

      // Add the column to the final array.
      $columns[] = $column;

      // If it was the end column that was added, return the columns.
      if ($column == $end_column)
          return $columns;
  }

  // Add the column children.
  foreach ($columns as $column) {
      // Don't itterate if the $end_column was already set in a previous itteration.
      // Stop iterating if you've reached the maximum character length.
      if (!in_array($end_column, $columns) && strlen($column) < $length) {
          $new_columns = createColumnsArray($end_column, $column);
          // Merge the new columns which were created with the final columns array.
          $columns = array_merge($columns, $new_columns);
      }
  }

  return $columns;
}