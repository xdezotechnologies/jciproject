<?php

namespace App\Exports;

use App\Models\Hotel;
use Maatwebsite\Excel\Concerns\FromCollection;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class HotelsExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Hotel::select('name')->get();
    }

    public function headings(): array
    {
        return [
            'Hotel Name',
        ];
    }

    public function registerEvents(): array
    {
        $styleArray = [
                'font' => [
                'bold' => true,
                ],
                'borders' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                        'color' => ['argb' => '00000000'],
                    ]
                ]
        ];


            return [
                AfterSheet::class    => function(AfterSheet $event) use ($styleArray)
                {
                    $cellRange = 'A1:A1'; // All headers
                    //$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setName('Calibri');
                    $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(12);
                    $event->sheet->getStyle($cellRange)->ApplyFromArray($styleArray);
                },
            ];


    }
}
