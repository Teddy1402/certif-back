<?php 

use Dompdf\Dompdf
require_once 'includes/dompdf/autload.php';

$dompdf = new Dompdf();

$dompdf->loadHtml('Brouette');

$dompdf->render();

$dompdf->stream();