<?php

namespace App\Models\Admin;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class TeacherImport implements ToCollection
{
    public $rows;

    public function collection(Collection $collection)
    {
        $this->rows = $collection;
    }
}
