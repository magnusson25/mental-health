<?php

include './config.php'; 
require_once __DIR__ . './vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
$html .='
<h3>All Patient</h3>
<p>
<br>
<table border="1" style="width:100%;border-collapse: collapse;">
  <tr>
  <td style="font-weight: bold"> First name</td>
  <td style="font-weight: bold" > Last name</td>
  <td style="font-weight: bold" > Email</td>
  <td style="font-weight: bold" > Date Of birth</td>
  <td style="font-weight: bold" > Gender</td>
  <td style="font-weight: bold" > Phone</td>
  <td style="font-weight: bold" > Doctor</td>
  <td style="font-weight: bold" > Contact Use</td>
  </tr>
  ';
  $sel=$conn->query("SELECT * from patient order by patient_id desc ");  
  while ($row=mysqli_fetch_array($sel)) {
    $html .='
    <tr>
    <td >'.$row['patient_firstname'].'</td>
    <td >'.$row['patient_lastname'].'</td>
    <td >'.$row['patient_email'].'</td>
    <td >'.$row['patient_dob'].'</td>
    <td >'.$row['patient_gender'].'</td>
    <td >'.$row['patient_phone'].'</td>
    <td >'.$row['doctor_postion'].'</td>
    <td >'.$row['contact_method'].'</td>
    </tr>
    ';
  }
    $html .='
</table>
<p>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>