<?php

namespace App\Http\Controllers\SimpleFinance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Income;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;

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

    public function edit(request $request){
        Income::where("id", $request->id)->update([
            "total" => $request->total,
            "category" => $request->category,
        ]);
        return redirect("income");
    }

    public function graph(){
        $data = Income::select("category", DB::raw("count(*) as jml_data"), DB::raw("sum(total) as total"))
        ->groupBy("category");

        foreach ($data->get() as $key => $value) {
            $results[] =[
                "name" => $value->category,
                "y" => (int)$value->total / 1000
            ];
        }

        return $results;
    }

    public function dataTable(){
        $data = Income::orderBy("id", "desc");
        return DataTables::of($data)
        ->editColumn('created_at', function($data) {
            return $data->created_at->format("Y-m-d H:i:s");
        })
        ->editColumn('updated_at', function($data) {
            return $data->updated_at->format("Y-m-d H:i:s");
        })
        ->editColumn('total', function($data) {
            return number_format($data->total);
        })
        ->editColumn('action', function($data) {
            return '
                <a name="" id="" class="btn btn-sm btn-danger" href="'.url("income/data-table/delete?id=$data->id").'" role="button"><i class="material-icons">delete_forever</i></a>
                <a name="" id="" class="btn btn-sm btn-primary" href="'.url("income/data-table/edit?id=$data->id").'" role="button"><i class="material-icons">question_mark</i></a>
            ';
        })
        ->rawColumns(["action"])
        ->make(true);
    }

    public function dataTableDelete(request $request){
        Income::where("id", $request->id)->delete();
        return redirect("income");
    }

    public function dataTableEdit(request $request){
        $data = Income::where("id", $request->id)->first();
        return view("pages_sf.incomes.edit")->with("data", $data);
    }
}
