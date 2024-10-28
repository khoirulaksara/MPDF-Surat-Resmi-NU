<?php
// error_reporting(0);
require_once "vendor/autoload.php";
require "functions.php";

$html = '
<htmlpageheader name="MyHeader1">
    <div style="text-align: center"><img src="kop.svg"/></div>
</htmlpageheader>


<div>Start of the document ... and all the rest</div>

<htmlpagefooter name="MyFooter1">
    <table width="100%">
        <tr>
            <td width="33%"><span style="font-weight: bold; font-style: italic;">{dateid d M Y}</span></td>
            <td width="33%" align="center" style="font-weight: bold; font-style: italic;">{PAGENO}/{nbpg}</td>
            <td width="33%" style="text-align: right; ">My document</td>
        </tr>
    </table>
</htmlpagefooter>

<sethtmlpageheader name="MyHeader1" value="on" show-this-page="1" />
<sethtmlpagefooter name="MyFooter1" value="on" />';

// konfigurasi mPDF
$mpdf = new \Mpdf\Mpdf();

// $mpdf->AddPage("P","","","","","2","2","2","2","","","","","","","","","","","","Folio");
$mpdf->AddPageByArray(array(
    'orientation' => 'P',
    'mgl' => '2',
    'mgr' => '2',
    'mgt' => '1',
    'mgb' => '1',
    'sheet-size'=> 'Folio',
));
$mpdf->SetAuthor('Test PDF');
$mpdf->SetTitle('Test PDF');
$mpdf->SetDisplayMode('real');
$mpdf->SetProtection(array('print-highres','print'), '', 'HidupIniIndah\m/');
// $mpdf->WriteHtml($css);
$mpdf->WriteHTML(utf8_encode($html));
//$mpdf->Output();
$mpdf->Output('Test PDF.pdf', \Mpdf\Output\Destination::DOWNLOAD);

echo $html;
?>