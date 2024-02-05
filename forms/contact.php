<?php


require_once '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadSheet = new Spreadsheet;

$sheet = $spreadSheet->getActiveSheet();

$data = [
  $_POST['name'],
  $_POST['email'],
  $_POST['subject'],
  $_POST['message'],
];


$sheet->fromArray([$data], null, 'A1');

$writer = new Xlsx($spreadSheet);

$writer->save('./index.xlsx');

header('Location: ../index.php');



