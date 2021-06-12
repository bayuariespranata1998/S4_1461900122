<?php

namespace App\Imports;

use App\Models\Dokter;
use Maatwebsite\Excel\Concern\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class DokterImport implements ToModel
{
    public function model(array $row)
    {
        return new Dokter([
            'nama' => $row[0],
            'jabatan'=>$row[1],
        ]);
    }
    public function startRow():int{
        return 2;
    }
}
