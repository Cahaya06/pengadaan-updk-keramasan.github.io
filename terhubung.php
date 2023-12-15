<?php
set_time_limit(300); // Set batas waktu eksekusi menjadi 300 detik atau sesuai kebutuhan
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// Ganti 'your_excel_file.xlsx' dengan nama file Excel Anda
$excelFilePath = 'AnggaranOperasi2023.xlsx';

$reader = new Xlsx();
$spreadsheet = $reader->load($excelFilePath);
$sheet = $spreadsheet->getActiveSheet();

// Output awal untuk memulai tabel HTML
echo '<table border="1">';

// Loop untuk membaca setiap baris
foreach ($sheet->getRowIterator() as $row) {
    echo '<tr>';
    $cellIterator = $row->getCellIterator();
    $cellIterator->setIterateOnlyExistingCells(false);

    // Loop untuk membaca setiap sel dalam baris
    foreach ($cellIterator as $cell) {
        echo '<td>' . $cell->getValue() . '</td>';
    }

    echo '</tr>';
}

// Akhiri tabel HTML
echo '</table>';
