<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    

    public function case_study($id)
    {
        $pages = DB::table('page')->where('title', '=', $id)->get();

        $main_menu = DB::table('menus')->where('menu_link','!=','#')->get();
        $para_style_1 = "";
        $para_style_2 = "";
        $para_style_3 = "";
        $para_style_4 = "";
        $para_style_5 = "";
        $request = "";
        $industries = "";
        $news = "";
        $client_and_partner = "";
        $case_study = "";
        $sliders = "";
        $team_section = "";
        $videos = "";
        
        return view('welcome', Compact('id','para_style_1', 'para_style_2', 'main_menu', 'para_style_3', 'para_style_4', 'para_style_5', 'pages','client_and_partner','request','industries','news','case_study','team_section','sliders','videos'));
    }


    public function index($id)
    {
        $pages = DB::table('page')->where('title', '=', $id)->get();

        $main_menu = DB::table('menus')->where('menu_link','!=','#')->get();
        $para_style_1 = "";
        $para_style_2 = "";
        $para_style_3 = "";
        $para_style_4 = "";
        $para_style_5 = "";
        $request = "";
        $industries = "";
        $news = "";
        $client_and_partner = "";
        $case_study = "";
        $sliders = "";
        $team_section = "";
        $videos = "";
        
        return view('welcome', Compact('id','para_style_1', 'para_style_2', 'main_menu', 'para_style_3', 'para_style_4', 'para_style_5', 'pages','client_and_partner','request','industries','news','case_study','team_section','sliders','videos'));
    }
    public function services_by_id($id){
        
        $sub_category = DB::table('child_menus')->where('menu_id', '=', $id)->get();
            $Array = [];
            foreach($sub_category as $row){
                $Array[] = '<option value="'.$row->id.'">'.$row->item_name.'</option>';
            }
            $final_Result = $Array;
            // return response()->json(["sliders" => $final_Result]);
            return $final_Result;
    }
}
