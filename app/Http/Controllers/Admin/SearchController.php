<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use App\ProjectExpenseCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin.search.searchByCat',compact('projects'));
    }

    public function findCatName(Request $id){

        $data=DB::table('project_expense_categories')
            ->join('project_expenses','project_expense_categories.id','=','project_expenses.cat_id')
            ->join('projects','projects.id','=','project_expenses.pro_id')
            //->join('project_expense_categories','project_expense_categories.id','=','project_expenses.cat_id')
            ->select('project_expense_categories.*','project_expenses.*')
            ->where('projects.id','=',$id)
            ->get();

    }

}
