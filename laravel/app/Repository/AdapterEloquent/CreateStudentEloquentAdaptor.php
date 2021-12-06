<?php

namespace App\Repository\AdapterEloquent;

use App\Models\Student;
use App\Repository\StudentRepositoryInterface;

class CreateStudentEloquentAdaptor implements StudentRepositoryInterface {

    protected $student;

    public function show()
    {
        return Student::all();
    }

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function save(array $data): int
    {
        $student = Student::create([
            "nom" => $data['nom'],
            "email" => $data['email'],
            "phone" => $data['phone'],
            "cours" => $data['cours']
        ]);

        if (!$student){
            return 0;
        }
        return $student->id;
    }
}
