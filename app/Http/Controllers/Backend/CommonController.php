<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;

class CommonController extends Controller
{
    // get department for create
    public function getDepartment()
    {
        $departments = Department::orderBy('title', 'ASC')->get();

        if ($departments->count() > 0) {
            $data = '<option value="" selected disabled>--Select Department--</option>';

            foreach ($departments as $department) {
                $data .= '<option value="' . $department->id . '">' . $department->title . '</option>';
            }
        } else {
            $data = '<option value="" selected disabled>No Department Found!!</option>';
        }


        return response()->json([
            'data' => $data
        ]);
    }


    // get department for edit
    // get department for create
    public function getDepartmentById($id)
    {
        $departments = Department::orderBy('title', 'ASC')->get();

        if ($departments->count() > 0) {
            $data = '<option value="" selected disabled>--Select Department--</option>';

            foreach ($departments as $department) {
                if ($department->id == $id) {
                    $data .= '<option value="' . $department->id . '" selected>' . $department->title . '</option>';
                } else {
                    $data .= '<option value="' . $department->id . '">' . $department->title . '</option>';
                }
            }
        } else {
            $data = '<option value="" selected disabled>No Department Found!!</option>';
        }


        return response()->json([
            'data' => $data
        ]);
    }
}
