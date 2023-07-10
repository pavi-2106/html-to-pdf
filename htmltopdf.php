<?php
require __DIR__ . '/vendor/autoload.php';
include 'config.php';

$tempBodyHtml = '<style>
.tblInvItem, .tblInvItem th, .tblInvItem td {
    border: 1px solid black;
    border-collapse: collapse;
     padding: 5px;
  }
</style>';

$tempBodyHtml .=  $companyHeader;

$tempBodyHtml .= "<h3><strong>OFFICIAL INVOICE</strong></h3>
<table style='width:100%'>
        <tr>
            <td style='text-align:left;'>
                Customer Name
            </td>
            <td style='text-align:left; width:50%'>
                : $empName
            </td>
            <td style='text-align:left;'>
                Date
            </td>
            <td style='text-align:left;'>
                : " . date('d-m-Y', strtotime($invDate)) . "
            </td>
        </tr>

        <tr>
            <td style='text-align:left;'>
                Address
            </td>
            <td style='text-align:left; width:50%'>
                : $empAddress
            </td>
            <td style='text-align:left;'>
                Invoice No 
            </td>
            <td style='text-align:left;'>
            : " . $branchCode . ' ' . $invRefNo . "
            </td>
        </tr>

        <tr>
            <td style='text-align:left;'>
                Mobile
            </td>
            <td style='text-align:left; width:50%'>
                : $empContactNo
            </td>
            <td style='text-align:left;'>
                Ref No
            </td>
            <td style='text-align:left;'>
            : $caseRefNo
            </td>
        </tr>

        <tr>
            <td style='text-align:left;'>
                FDW Name
            </td>
            <td style='text-align:left; width:50%'>
                : $fdwName
            </td>
            <td style='text-align:left;'>
                Term 
            </td>
            <td style='text-align:left;'>
            : $paymentTerms
            </td>
        </tr>
    </table>";

$tempBodyHtml .= '<hr>  
      <table style="width:100%" class="tblInvItem">
      <tr>
      <td style="width:10%; text-align:center"><strong>S/N</strong></td>
      <td style="width:70%; text-align:center"><strong>SERVICES</strong></td>
      <td style="width:20%; text-align:center"><strong>AMOUNT (SGD)';

$tempBodyHtml .= '</strong></td>
      </tr>';
$tempBodyHtml .= '</table>';


$tempBodyHtml .= "<table style='width:100%'>";

$tempBodyHtml .= "<tr>
                    <td style='width:10%'></td>
                    <td style='text-align:right; width:70%'><strong>Total Amount :</strong></td>
                    <td style='text-align:right; width:20%'><strong>" . number_format($invoiceTotal, 2) . "</strong></td>
                </tr>";

$tempBodyHtml .= '</table><br> <hr>';

$tempBodyHtml .= "<table style='width:100%'>";
$tempBodyHtml .= "<tr>";

$tempBodyHtml .= "<td style='width:70%'>";
$tempBodyHtml .= "<strong>NOTE</strong><br>";

$tempBodyHtml .= $note;

$tempBodyHtml .= "<br> <br>";

$tempBodyHtml .= "Issued By : " . $issuedBy . ' (' . $eaRegNo . ')';
$tempBodyHtml .= "</td>";

$tempBodyHtml .= "</tr>";
$tempBodyHtml .= "</table>";


use Spipu\Html2Pdf\Html2Pdf;

try {
    $html2pdf = new HTML2PDF('P', 'A4', 'en');
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($tempBodyHtml);
    $html2pdf->Output(__DIR__ . '/biodata.pdf', 'F');
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>