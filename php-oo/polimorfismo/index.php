<?php 

require __DIR__ . '/ExportInterface.php';
require __DIR__ . '/Export.php';
require __DIR__ . '/ExportCSV.php';
require __DIR__ . '/ExportJson.php';


$export = new Export();

print $export->exportar(['Qualquer coisa']);

print '<hr>';

class Relatorio
{
    private $dataRelatorio = [];

    public function gerarRelatorio(ExportInterface $export)
    {
        return $export->exportar($this->dataRelatorio);
    }
}

// print 'ExportJson' instanceof 'Export';

$relatorio = new Relatorio();

print $relatorio->gerarRelatorio(new ExportCSV());