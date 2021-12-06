<?php

namespace App\Repository;

use App\Models\Student;

interface StudentRepositoryInterface{
    public function save(array $data): int;
    public function show();
}
