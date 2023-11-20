<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
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


    // get category for create
    public function getCategory()
    {
        $categories = Category::orderBy('title', 'ASC')->get();

        if($categories->count() > 0){
            $data = '<option value="" selected disabled>--Select Category--</option>';

            foreach($categories as $category){
                $data .= '<option value="'. $category->id .'">'. $category->title .'</option>';
            }
        }else {
            $data = '<option value="" selected disabled>No Category Found!!</option>';
        }

        return response()->json([
            'data' => $data
        ]);
    }

    //get category for update/edit
    public function getCategorybyId($id)
    {
        $categories = Category::orderBy('title', 'ASC')->get();

        if($categories->count() > 0){
            $data = '<option value="" selected disabled>--Select Category--</option>';

            foreach($categories as $category){
                if($category->id == $id){
                    $data .= '<option value="'. $category->id .'" selected>'. $category->title .'</option>';
                }else{
                    $data .= '<option value="'. $category->id .'">'. $category->title .'</option>';
                }
            }
        }else {
            $data = '<option value="" selected disabled>No Category Found!!</option>';
        }

        return response()->json([
            'data' => $data
        ]);
    }
}
