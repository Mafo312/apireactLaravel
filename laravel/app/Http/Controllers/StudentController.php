<?php

namespace App\Http\Controllers;

use App\Repository\StudentRepositoryInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class StudentController
{

    public function index(StudentRepositoryInterface $repository)
    {
        $student = $repository->show();

        return response()->json([
            'status' => 200,
            'students' => $student
        ]);
    }

    public function store(StudentRepositoryInterface $repository, Request $request)
    {

        $data = $request->all();

        $is_save = $repository->save($data);

        if ($is_save){
            return response()->json([
                'status' => 200,
                'message' => 'L\'étudiant a été enregistré avec succès'
            ]);
        }

        return redirect()->back();
    }

}
