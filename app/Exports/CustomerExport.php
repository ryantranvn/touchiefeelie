<?php

namespace App\Exports;

use App\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CustomerExport implements FromCollection, WithHeadings
{
    
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Customer::all();
        return Customer::query()->get(['customer_id', 'child_name', 'child_birthday', 'child_month', 'child_weight', 'father_name', 'father_tel', 'mother_name', 'mother_tel', 'address', 'branch', 'time_frame', 'note', 'guardian_name', 'pathological', 'feeling_experience', 'desire', 'created_at']);
    }

    public function headings(): array
    {
        return [
            '#',
            'Child Name',
            'Child Birthday',
            'Month Age',
            'Weight',
            'Father Name',
            'Father Tel',
            'Mother Name',
            'Mother Tel',
            'Address',
            'Branch',
            'Time frame',
            'Note',
            'Guardian',
            'Pathological',
            'Feeling Experience',
            'Desire',
            'Created at'
        ];
    }

}
