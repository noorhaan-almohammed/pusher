<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Support\Facades\Log;

class StudentService
{
    public function storeSudent($inputs)
    {
        try {
            $student = Student::create($inputs);

            $data['student'] =  $student;
            $data['status'] = 201;
            return $data;

        } catch (\Throwable $th) {
            Log::error($th);
            $data['student'] = null;
            $data['status'] = 500;
            return $data;
        }
    }
}
