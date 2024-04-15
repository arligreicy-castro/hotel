<?php
    date_default_timezone_set("America/Sao_Paulo");
    require_once "vendor/autoload.php";

    $mpdf = new \Mpdf\mpdf();
	$mpdf->AddPage("P");
	$head = "<h1>Lista de Reservas</h1>";
	$head = $head . "Data:" . date("d/m/Y");
	$body = "<table border='2'>
				<tr>
					<th>Nome do Hotel / </th>
					<th>Número do quarto / </th>
					<th>Andar</th>
				</tr>";

                
    foreach($reservas as $reserva){
        $body = $body . "<tr>
                            <td>{$reserva->nome}</td>
                            <td>{$reserva->numero}</td>
                            <td>{$reserva->andar}</td>
                        </tr>";
    }

    $body = $body . "</table>";
	$html = $head . $body;

    $mpdf->WriteHTML($html);
	$mpdf->output();

?>