<?php

namespace App\Http\Controllers\SimpleFinance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Income;
use Yajra\DataTables\Facades\DataTables;

class IncomeController extends Controller
{
    public function index(){
        return view("pages_sf.incomes.index");
    }

    public function add(){
        return view("pages_sf.incomes.add");
    }

    public function create(request $request){
        Income::create([
            "total" => $request->total,
            "category" => $request->category,
        ]);
        return redirect("income");
    }

    public function dataTable(){
        $data = Income::orderBy("id", "desc");
        return DataTables::of($data)
        ->editColumn('created_at', function($data) {
            return $data->created_at->format("Y-m-d H:i:s");
        })
        ->editColumn('total', function($data) {
            return number_format($data->total);
        })
        ->editColumn('action', function($data) {
            return '
                <a name="" id="" class="btn btn-sm btn-danger" href="#" role="button"><i class="material-icons">delete_forever</i></a>
                <a name="" id="" class="btn btn-sm btn-primary" href="#" role="button"><i class="material-icons">question_mark</i></a>
            ';
        })
        ->rawColumns(["action"])
        ->make(true);
    }
}
