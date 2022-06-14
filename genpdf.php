<?php 


// use Dompdf\Option;
// use Dompdf\Dompdf;
// define("DOMPDF_UNICODE_ENABLED", true);

// require_once 'assets/includes/connexionbdd.php';
// $sql ="SELECT * FROM projets ";
// $query = $db ->query($sql);
// $users = $query->fetchAll();


// ob_start();
// require_once 'pdf-content.php';
// $html = ob_get_contents();
// ob_end_clean();




require_once 'includes/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
 define("DOMPDF_UNICODE_ENABLED", true);
  $dompdf= new Dompdf();

   $dompdf->loadHtml($aData['html']);
    $dompdf->set_option('isRemoteEnabled', TRUE);

   $dompdf->loadHtml($html);
  $dompdf->setPaper('A4','portrait');
 $dompdf->render();
$dompdf->stream("".$pdf_title."",array("Attachment"=>0));

// $dompdf = new Dompdf();

// $dompdf->loadHtml($html);

// $dompdf->render();

// $dompdf->stream();