<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\report;
use App\Models\product;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index(Request  $request)
    {
       $data = match($request->type){
        "1"=>$this->createReports(numberOfReports:1),
        "2"=>$this->createReports(numberOfReports:2),
        "3"=>$this->createReports(numberOfReports:3),
        "4"=>$this->createReports(numberOfReports:4),
        "5"=>$this->createReports(numberOfReports:5),
       };
       return view('report\R2',compact('data'));
    }
    public function createReports($numberOfReports)
    {
        switch ($numberOfReports) {
            case 1:
                $report_name='اكثر 5 منتجات مبيعا';
                $data["columns"]=[
                    ["code"=>'name',"name"=>"المنتج"],
                    ["code"=>'brand->name',"name"=>"العلامة التجارية"],
                    ["code"=>'quantity_price',"name"=>"الكمية المباعة"],
                    ["code"=>'remaining',"name"=>"الكمية المتبقية"],
                    ["code"=>'x',"name"=>"الربح"],
                ];
                $data["data"]=product::
                select('*', \DB::raw('quantity - quantity_price as remaining'),
                 \DB::raw('((price - price_purchas) - ((price - price_purchas) * 0.15)) * quantity_price  as x'))
                ->with(['brand'])->where('quantity_price','!=',0)->orderBy('quantity_price','desc')->take(5)->get();
                
            break;
            case 2:
                $report_name='المنتجات المباعة';
                $data["columns"]=[
                    ["code"=>'name',"name"=>"المنتج"],
                    ["code"=>'brand->name',"name"=>"العلامة التجارية"],
                    ["code"=>'quantity_price',"name"=>"الكمية المباعة"],
                    ["code"=>'remaining',"name"=>"الكمية المتبقية"],
                    ["code"=>'x',"name"=>"الربح"],
                    
                    
                ];
              
                $data["data"]=product::
                select('*', \DB::raw('quantity - quantity_price as remaining'),
                \DB::raw('((price - price_purchas) - ((price - price_purchas) * 0.15)) * quantity_price  as x')) 
                ->with(['brand'])->where('quantity_price','!=',0)->orderBy('quantity_price','desc')->get();
              
            break;
            case 3:
                $report_name='جرد مالي ';
                $data["columns"]=[
                    ["code"=>'name',"name"=>"المنتج"],
                    ["code"=>'brand->name',"name"=>"العلامة التجارية"],
                    ["code"=>'quantity_price',"name"=>"الكمية المباعة"],
                    ["code"=>'remaining',"name"=>"الكمية المتبقية"],
                    ["code"=>'x',"name"=>"الربح"],
                ];
                $data["data"]=product::
                select('*', \DB::raw('quantity - quantity_price as remaining'),
                 \DB::raw('((price - price_purchas) - ((price - price_purchas) * 0.15)) * quantity_price  as x'))
                ->with(['brand'])->orderBy('quantity_price','desc')->get();
                
            break; 
            case 4:
                $report_name='المنتجات الغير مباعة ';
                $data["columns"]=[
                    ["code"=>'name',"name"=>"المنتج"],
                    ["code"=>'brand->name',"name"=>"العلامة التجارية"],
                    ["code"=>'quantity',"name"=>"الكمية "],
                ];
                $data["data"]=product::
                select('*')
                ->with(['brand'])->where('quantity_price','==',0)->orderBy('quantity_price','desc')->get();
            break;
            case 5:
                $report_name='جرد المنتجات';
                $data["columns"]=[
                    ["code"=>'name',"name"=>"المنتج"],
                    ["code"=>'brand->name',"name"=>"العلامة التجارية"],
                    ["code"=>'quantity_price',"name"=>"الكمية المباعة"],
                    ["code"=>'remaining',"name"=>"الكمية المتبقية"],
                    ["code"=>'price_purchas',"name"=>"سعر الشراء"],
                    ["code"=>'price',"name"=>"سعر البيع"],
                    ["code"=>'x',"name"=>"الربح"],
                ];
                $data["data"]=product::
                select('*', \DB::raw('quantity - quantity_price as remaining'),
                 \DB::raw('((price - price_purchas) - ((price - price_purchas) * 0.15)) * quantity_price  as x'))
                ->with(['brand'])->orderBy('quantity_price','desc')->get();
            break;           
        }
        report::create([
            "user_id"=>auth()->user()->id,
            'name'=>$report_name
        ]);
        Notification::create([
            'user_id'=>auth()->user()->id,
            'type'=>'new_report',
            'data'=>$report_name,
            'created_at'=>Carbon::now('Africa/Tripoli'),
        ]);
        return  $data;
    }
}
