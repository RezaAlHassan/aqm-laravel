<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use HiFolks\Statistics\Stat;
use App\Models\MdlcOne;
use App\Models\BylcTwo;
use App\Models\Dashboard;
use App\Models\Stationwise;

class TableController extends Controller
{
    //
    public function chartData()
    {     
        
        //Average pm of all districts yearly
        $sylhetYearPm = Stationwise::where('district','Sylhet')
        ->select(
            DB::raw("YEAR(created_at) as year"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as pm"),       
        )
        ->orderBy('created_at', 'ASC')
        ->groupBy('year')
        ->get();  
        
        $barishalYearPm = Stationwise::where('district','Barishal')
        ->select(
            DB::raw("YEAR(created_at) as year"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as pm"),       
        )
        ->orderBy('created_at', 'ASC')
        ->groupBy('year')
        ->get();   
        
        $khulnaYearPm = Stationwise::where('district','Khulna')
        ->select(
            DB::raw("YEAR(created_at) as year"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as pm"),       
        )
        ->orderBy('created_at', 'ASC')
        ->groupBy('year')
        ->get();   
        
        $ctgYearPm = Stationwise::where('district','Chittagong')
        ->select(
            DB::raw("YEAR(created_at) as year"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as pm"),       
        )
        ->orderBy('created_at', 'ASC')
        ->groupBy('year')
        ->get(); 
        
        $rangpurYearPm = Stationwise::where('district','Rangpur')
        ->select(
            DB::raw("YEAR(created_at) as year"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as pm"),       
        )
        ->orderBy('created_at', 'ASC')
        ->groupBy('year')
        ->get(); 
        
        $dhakaYearPm = Stationwise::where('district','Dhaka')
        ->select(
            DB::raw("YEAR(created_at) as year"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as pm"),       
        )
        ->orderBy('created_at', 'ASC')
        ->groupBy('year')
        ->get(); 

        $rajshahiYearPm = Stationwise::where('district','Rajshahi')
        ->select(
            DB::raw("YEAR(created_at) as yearRaj"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as rajPm"),       
        )
        ->orderBy('created_at', 'ASC')
        ->groupBy('yearRaj')
        ->get(); 
        //all districts queried


        $yearPmAverages=DB::
        select(DB::raw("
            SELECT ROUND(AVG(pm),0) AS pm FROM stationwises GROUP BY YEAR(created_at)"
        ));
        
        $yearData = Stationwise::
        select(DB::raw("YEAR(created_at) as year") )
        ;
        $yearData = $yearData->where('district', 'Dhaka')->addSelect(DB::raw("round(AVG(pm),0) as dhkpm")); //works but onlyy one field can be added 
        $yearData = $yearData->orderBy('created_at', 'DESC')->groupBy('year')->get(); //works but onlyy one field can be added
        
        $barItem = Stationwise::select(
            DB::raw("YEAR(created_at) as year"), //finds average (using data from all districts)in a year
            DB::raw("round(AVG(pm),0) as pm"),        
        )
        ->orderBy('created_at', 'DESC')
        ->groupBy('year')
        ->get();

        //$barItemArray = $barItem->toArray();
        
        $stationBP = Stationwise::select(         //grabs all station related data
            DB::raw("station as stationNo"),
            DB::raw("MAX(pm) as maxPm"),
            DB::raw("MIN(pm) as minPm"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.75 as upper"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.25 as lower"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.50 as median")             
        )
        ->orderBy('stationNo', 'ASC')
        ->groupBy('stationNo')
        ->get();
        

        $getLatestDhakaSt=Stationwise::where('district','Dhaka')->latest()->first();//will get the lastest record for dhaka district from stationwise db
        $getLatestRajshahiSt=Stationwise::where('district','Rajshahi')->latest()->first();
        $getLatestRangpurSt=Stationwise::where('district','Rangpur')->latest()->first();
        $getLatestSylhetSt=Stationwise::where('district','Sylhet')->latest()->first();
        $getLatestBarishalSt=Stationwise::where('district','Barishal')->latest()->first();
        $getLatestKhulnaSt=Stationwise::where('district','Khulna')->latest()->first();
        $getLatestChittagongSt=Stationwise::where('district','Chittagong')->latest()->first();

        $mapItem = [
            ["bd-da",  $getLatestDhakaSt -> aqi],
            ["bd-kh",  $getLatestRajshahiSt -> aqi],
            ["bd-ba", $getLatestRangpurSt -> aqi],
            ["bd-cg",  $getLatestSylhetSt -> aqi],
            ["bd-sy", $getLatestBarishalSt -> aqi],
            ["bd-rj", $getLatestKhulnaSt -> aqi],
            ["bd-rp", $getLatestChittagongSt -> aqi],
        ];

        
        $getLatestDhaka=Dashboard::where('district','Dhaka')->latest()->first(); //will get the lastest record for dhaka district from dashboard db
        $getLatestRajshahi=Dashboard::where('district','Rajshahi')->latest()->first();
        $getLatestRangpur=Dashboard::where('district','Rangpur')->latest()->first();
        $getLatestSylhet=Dashboard::where('district','Sylhet')->latest()->first();
        $getLatestBarishal=Dashboard::where('district','Barishal')->latest()->first();
        $getLatestKhulna=Dashboard::where('district','Khulna')->latest()->first();
        $getLatestChittagong=Dashboard::where('district','Chittagong')->latest()->first();


       
        return view('index', compact(  'getLatestDhaka', 'getLatestRajshahi', 
        'getLatestRangpur', 'getLatestSylhet', 'getLatestBarishal', 'getLatestKhulna', 'getLatestChittagong',
        'getLatestDhakaSt',  'getLatestRajshahiSt', 'getLatestRangpurSt', 'getLatestSylhetSt', 'getLatestBarishalSt', 
        'getLatestKhulnaSt', 'getLatestChittagongSt', 'barItem', 'rajshahiYearPm', 'yearData', 'stationBP', 'yearPmAverages',
        'barishalYearPm','dhakaYearPm', 'ctgYearPm', 'sylhetYearPm', 'rangpurYearPm', 'khulnaYearPm' ));
    }
    
    
    
    
    
    
    
    public function tableView()
    {
        // $array = [];

        // $object = {
        //     year: "",
        //     avg : "",
        //     dhakaAvg : "",
        //     rajshahiavg : "",
        // }

        

        $rajshahiYearPm = Stationwise::where('district','Rajshahi')
        ->select(
            DB::raw("YEAR(created_at) as yearRaj"), //finds average of dhaka per year
            DB::raw("round(AVG(pm),0) as rajPm"),       
        )
        ->orderBy('created_at', 'DESC')
        ->groupBy('yearRaj')
        ->get(); 

        
        $yearData = Stationwise::
        select(DB::raw("YEAR(created_at) as year") )
        ;
        
        $yearData = $yearData->where('district', 'Dhaka')->addSelect(DB::raw("round(AVG(pm),0) as dhkpm")); //works but onlyy one field can be added 

            $yearData = $yearData->orderBy('created_at', 'DESC')->groupBy('year')->get(); //works but onlyy one field can be added

        
        $barItem = Stationwise::select(
            DB::raw("YEAR(created_at) as year"), //finds average (using data from all districts)in a year
            DB::raw("round(AVG(pm),0) as pm"),        
        )
        ->orderBy('created_at', 'DESC')
        ->groupBy('year')
        ->get();

        //$median=Stat::median($stationPmData);

        
        $stationBP = Stationwise::select(         //grabs all station related data
            DB::raw("station as stationNo"),
            DB::raw("MAX(pm) as maxPm"),
            DB::raw("MIN(pm) as minPm"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.75 as upper"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.25 as lower"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.50 as median")          
        )
        ->orderBy('stationNo', 'ASC')
        ->groupBy('stationNo')
        ->get();

        $monthBP = Stationwise::select(         //grabs all station related data
            DB::raw("MONTH(created_at) as month"),
            DB::raw("MAX(pm) as maxPm"),
            DB::raw("MIN(pm) as minPm"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.75 as upper"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.25 as lower"),
            DB::raw("(MAX(pm) - MIN(pm))* 0.50 as median")          
        )
        ->orderBy('month', 'ASC')
        ->groupBy('month')
        ->get();
       
        $seasonBP = Stationwise::
        select(         //grabs all station related data
            DB::raw("season"),
            DB::raw("MAX(aqi) as maxaqi"),
            DB::raw("MIN(aqi) as minaqi"),
            DB::raw("(MAX(aqi) - MIN(pm))* 0.75 as upper"),
            DB::raw("(MAX(aqi) - MIN(pm))* 0.25 as lower"),
            DB::raw("(MAX(aqi) - MIN(pm))* 0.50 as median")          
        )
        ->orderBy('season', 'ASC')
        ->groupBy('season')
        ->get();
        
        

        $getLatestDhakaSt=Stationwise::where('district','Dhaka')->latest()->first();//will get the lastest record for dhaka district from stationwise db
        $getLatestRajshahiSt=Stationwise::where('district','Rajshahi')->latest()->first();
        $getLatestRangpurSt=Stationwise::where('district','Rangpur')->latest()->first();
        $getLatestSylhetSt=Stationwise::where('district','Sylhet')->latest()->first();
        $getLatestBarishalSt=Stationwise::where('district','Barishal')->latest()->first();
        $getLatestKhulnaSt=Stationwise::where('district','Khulna')->latest()->first();
        $getLatestChittagongSt=Stationwise::where('district','Chittagong')->latest()->first();
        
        
        
        $getLatestDhaka=Dashboard::where('district','Dhaka')->latest()->first(); //will get the lastest record for dhaka district from dashboard db
        $getLatestRajshahi=Dashboard::where('district','Rajshahi')->latest()->first();
        $getLatestRangpur=Dashboard::where('district','Rangpur')->latest()->first();
        $getLatestSylhet=Dashboard::where('district','Sylhet')->latest()->first();
        $getLatestBarishal=Dashboard::where('district','Barishal')->latest()->first();
        $getLatestKhulna=Dashboard::where('district','Khulna')->latest()->first();
        $getLatestChittagong=Dashboard::where('district','Chittagong')->latest()->first();

        
        return view('chart-tables', compact(  'getLatestDhaka', 'getLatestRajshahi', 
        'getLatestRangpur', 'getLatestSylhet', 'getLatestBarishal', 'getLatestKhulna', 'getLatestChittagong',
        'getLatestDhakaSt',  'getLatestRajshahiSt', 'getLatestRangpurSt', 'getLatestSylhetSt', 'getLatestBarishalSt', 
        'getLatestKhulnaSt', 'getLatestChittagongSt', 'barItem', 'rajshahiYearPm', 'yearData', 'stationBP','monthBP', 'seasonBP'  ));
       
    }

    public function stationwise_table()
    {
        $tableData = Stationwise::all();
        return view('stationwise.stationwise-table', compact('tableData'));
    }

    public function add_row()
    {
        return view('stationwise.add-table-row');
    }

    public function edit_row($id)
    {
        $row = Stationwise::find($id);
        return view('stationwise.edit-table-row', compact('row'));
    }

    public function delete_row($id)
    {
        $row= Stationwise::find($id);
        $row->delete();
        return redirect()->back()->with('status','Updated');
    }

    public function update_row(Request $request, $id)//for edit
    {
        $row = Stationwise::find($id);
        $row->year = $request->input('year');
        
        $row->dhaka = $request->input('dhaka');
        $dhakapm=$request->input('dhaka');
        
        $row->rajshahi = $request->input('rajshahi');
        $rajshahipm = $request->input('rajshahi');

        $row->sylhet= $request->input('sylhet');
        $sylhetpm= $request->input('sylhet');

        $row->rangpur = $request->input('rangpur');
        $rangpurpm = $request->input('rangpur');

        $row->chittagong = $request->input('chittagong');
        $chittagongpm = $request->input('chittagong');

        $row->khulna = $request->input('khulna');
        $khulnapm = $request->input('khulna');

        $row->barishal = $request->input('barishal');
        $barishalpm = $request->input('barishal');

        $row->average = ($dhakapm+$rajshahipm+$chittagongpm +$khulnapm+$barishalpm+$rangpurpm+$sylhetpm)/7;
        $row->update();
        return redirect()->back()->with('status','Updated');
    }

    public function store_row(Request $request) //for add
    {
        $row = new Stationwise;
        $row->timestamps = true;
        $row->district = $request->input('district');
        $row->station = $request->input('station');
        $row->pm = $request->input('pm');
        $row->aqi = $request->input('aqi');
        $row->organization = $request->input('organization');
        $row->season = $request->input('season');
        $row->save();
        return redirect()->back()->with('status','Added');
    }
    

    
}
