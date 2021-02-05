<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeBanner;
use App\Testimonail;
use App\NewsBoard;
use App\Team;
use App\Quotes;
use App\Service;
use App\ServiceCategory;
use App\ServiceStructureFour;
use App\ServiceStructureTwo;
use App\ServiceStructureOne;
use App\WhitePaper;
use App\CaseBook;
use App\CaseBookContent;
use App\VideoGallery;
use App\NewsRoom;
use App\UpcomingEvent;
use App\PhotoGallery;
use App\WhitePaperLeads;
use App\ServiceLeads;
use App\ContactUs;
use App\Career;
use App\CareerDepartment;
use App\CareerLocation;
use App\CareerPos;
use App\Newsletter;
use App\WorkWithUsContact;
use App\QuickEnquiry;
use View;
use Response;
use Validator;
use DB;
use Redirect;
use \App\Mail\SendMail;
use \App\Mail\SendMailt;

use Tzsk\Payu\Facade\Payment;
use Session;
use Illuminate\Support\Facades\Route;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public $meta_title;
    public $meta_description;
    public $meta_keywords;

    public function __construct()
    {

//        $get_service_cat = ServiceCategory::all()->sortBy('name');
//        $get_service = Service::all()->sortBy('name');
//        $data = array(
//            'get_service_cat' => $get_service_cat,
//            'get_service' => $get_service,
//        );
//
//        View::share('menudata', $data);

    }


    public function work_with_us(Request $request){

        $data = array();

        $get_career = Career::where('status',1)
            ->orderBy('id','desc')
            ->paginate(5);

        $get_career_dep = CareerDepartment::where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $get_career_location = CareerLocation::where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $get_career_pos = CareerPos::where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $get_newsroom_data = NewsRoom::limit(10)->where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $quotes = $this->quotes();


        if ($request->ajax()) {

            $cat_slug = $request->cat_slug;
            $position = $request->position;
            $location = $request->location;
            $department = $request->department;


            if ($cat_slug == 999999) {

                $get_career = Career::where('status', 1)
                    ->orderBy('id', 'desc')
                    ->paginate(5);

            }else{

                $q = DB::table("careers");

                if ($position != null){
                    $q->where('career_pos_id',$position);
                }

                if ($department != null){
                    $q->where('career_department_id',$department);
                }

                if ($location != null){
                    $q->whereRaw("find_in_set('".$location."',career_location_id)");
                }

                $get_career = $q->where('status',1)
                    ->orderBy('id','desc')
                    ->paginate(5);


                if ($get_career->first() == null){
                    echo '<strong style="color: red;">No Position Available!</strong>';
                }

            }


            return view('pages.work-with-us-ajax', compact('get_career'))->render();
        }


        $data['get_newsroom_data'] = $get_newsroom_data;
        $data['get_career_dep'] = $get_career_dep;
        $data['get_career_location'] = $get_career_location;
        $data['get_career_pos'] = $get_career_pos;

        return view('pages.work-with-us',compact('quotes','get_career','data'));
    }

    public function industries(){

        $quotes = $this->quotes();
        return view('pages.industries',compact('quotes'));
    }

    public function life_at_netrika(){

        $quotes = $this->quotes();


        $get_video_gallery = VideoGallery::where('status',1)
            ->orderBy('priority','asc')
            ->paginate(9);

        $get_photogallery = PhotoGallery::where('status',1)
            ->orderBy('priority','asc')
            ->paginate(9);

        $data['get_photogallery'] = $get_photogallery;
        $data['get_video_gallery'] = $get_video_gallery;

        return view('pages.life-at-netrika',compact('quotes','data'));
    }

    public function upcoming_event(){

        $data = array();
        $get_photogallery = PhotoGallery::where('status',1)
            ->orderBy('priority','asc')
            ->paginate(9);

        $get_upcoming_event = UpcomingEvent::where('status',1)
//            ->orderBy('event_date')
            ->orderBy('priority','asc')
            ->get();

        $quotes = $this->quotes();
        $data['get_photogallery'] = $get_photogallery;
        $data['get_upcoming_event'] = $get_upcoming_event;
        return view('pages.upcoming-event',compact('quotes','data'));

    }




    public function index()
    {

        $data = array();

        $get_banner = HomeBanner::where('status',1)
                                    ->orderBy('priority','desc')
                                    ->get();

        $get_cat_data = ServiceCategory::where('status',1)
            ->orderBy('priority','asc')
            ->get();

        $get_testimonail = Testimonail::where('status',1)
                                        ->orderBy('priority','desc')
                                        ->get();

        $get_news_board = NewsBoard::orderBy('event_date')
                                        ->get();


        $get_newsroom_board = NewsRoom::orderBy('custom_date','desc')
            ->take(10)
            ->get();

        $get_news_board_get_three = NewsBoard::orderBy('event_date')
                                            ->take(3)
                                            ->get();

        $get_newsroom_board_get_three = NewsRoom::orderBy('custom_date','desc')
            ->take(3)
            ->get();

        $get_white_paper = WhitePaper::limit(1)
                                    ->orderBy('priority','desc')
                                    ->get();

        $get_upcoming_event = UpcomingEvent::limit(3)
            ->where('status',1)
            ->orderBy('event_date')
            ->get();

        $get_casebook = CaseBook::limit(1)
                                    ->orderBy('priority','asc')
                                    ->get();

        $data['get_casebook'] = $get_casebook;
        $data['get_cat_data'] = $get_cat_data;
        $data['get_white_paper'] = $get_white_paper;
        $data['get_upcoming_event'] = $get_upcoming_event;
        $data['get_banner'] = $get_banner;
        $data['get_testimonail'] = $get_testimonail;
        $data['get_news_board'] = $get_news_board;
        $data['get_news_board_get_three'] = $get_news_board_get_three;
        $data['get_newsroom_board'] = $get_newsroom_board;
        $data['get_newsroom_board_get_three'] = $get_newsroom_board_get_three;

        return view('pages.home',compact('data'));
    }


    public function team(){

        $data = array();

        $get_team = Team::where('status',1)
            ->orderBy('priority','asc')
            ->get();

        $get_white_paper = WhitePaper::limit(3)
            ->orderBy('id','asc')
            ->get();

        $get_quotes = $this->quotes();


        $get_newsroom_data = NewsRoom::limit(10)->where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $data['get_newsroom_data'] = $get_newsroom_data;
        $data['get_team'] = $get_team;
        $data['get_white_paper'] = $get_white_paper;
        $data['get_quotes'] = $get_quotes;

        return view('pages.team',compact('data'));
    }

    public function quotes(){
        $get_quotes = Quotes::where('status',1)
            ->orderBy('priority','asc')
            ->get();

        return $get_quotes;
    }

    public function team_details($name){

        $data = array();

        $get_team = Team::where('slug',$name)->first();

        if ($get_team == null){
            abort(404);
        }

        //metas
        $this->meta_title = $get_team->meta_title;
        $this->meta_description = $get_team->meta_description;
        $this->meta_keywords = $get_team->meta_keywords;
        $this->metas();


        $get_white_paper = WhitePaper::limit(3)
            ->orderBy('id','asc')
            ->get();

        $get_newsroom_data = NewsRoom::limit(10)->where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $get_quotes = $this->quotes();

        $data['get_newsroom_data'] = $get_newsroom_data;
        $data['get_quotes'] = $get_quotes;
        $data['get_white_paper'] = $get_white_paper;
        $data['get_team'] = $get_team;

        return view('pages.team_details',compact('data'));
    }



    public function service_details($cat,$name){
        $data = array();

        if ($cat == 'gdpr-compliance '){
            return Redirect::to('/services/information-security/gdpr-compliance');
        }

        $get_service_cat = ServiceCategory::where('slug',$cat)->first();

        if ($get_service_cat == null){
            abort(404);
        }

//        dd($cat);


        if ($cat == 'training-and-certifications'){
            return Redirect::to('https://training.netrika.com/');
        }


        $cat_id = $get_service_cat->id;

        $get_service_data = Service::where('slug',$name)
                                    ->where('service_category_id',$cat_id)
                                    ->first();

        if ($get_service_data == null){
            abort(404);
        }


        //metas
        $this->meta_title = $get_service_data->meta_title;
        $this->meta_description = $get_service_data->meta_description;
        $this->meta_keywords = $get_service_data->meta_keywords;
        $this->metas();

        //others
        $experts_user_id = $get_service_data->experts_user_id;
        $get_team = $this->get_service_expert($experts_user_id);
        $get_quotes = $this->get_service_expert_quotes($experts_user_id);
        $get_casebook = $this->get_casebook($cat_id);


        $_check_flip_style= $get_service_data->structure_four_title;

        if ($_check_flip_style != null) {
            $get_flip_style = ServiceStructureFour::where('service_category_id', $cat_id)
                ->where('sub_service_category_id', $get_service_data->id)
                ->get();

            $get_flip_style = $get_flip_style->first() == null ? null : $get_flip_style;

        }else{
            $get_flip_style = null;
        }


        $_check_icon_style= $get_service_data->structure_two_title;

        if ($_check_icon_style != null) {
            $get_icon_style = ServiceStructureTwo::where('service_category_id', $cat_id)
                ->where('sub_service_category_id', $get_service_data->id)

                ->get();

            $get_icon_style = $get_icon_style->first() == null ? null : $get_icon_style;

        }else{
            $get_icon_style = null;
        }


        $_check_list_style= $get_service_data->structure_one_title;

//        dd($_check_list_style);

        if ($_check_list_style != null) {
//            dd($get_service_data->id);
            $get_list_style = ServiceStructureOne::where('service_category_id', $cat_id)
                ->where('sub_service_category_id', $get_service_data->id)
                ->get();

//            dd($get_list_style);

            $get_list_style = $get_list_style->first() == null ? null : $get_list_style;

        }else{
            $get_list_style = null;
        }

        $white_paper_id = $get_service_cat->white_paper_id;
        $white_paper_id = explode(',',$white_paper_id);


        $get_white_paper = WhitePaper::whereIn('id', $white_paper_id)
                                        ->limit(3)
                                        ->get();


        $get_related_service = $this->get_related_service_by_cat($cat_id,$get_service_data->id);

        $get_all_services = $this->get_all_services();


        $data['get_casebook'] = $get_casebook;
        $data['get_service_cat'] = $get_service_cat;
        $data['get_flip_style'] = $get_flip_style;
        $data['get_icon_style'] = $get_icon_style;
        $data['get_list_style'] = $get_list_style;
        $data['get_team'] = $get_team;
        $data['get_white_paper'] = $get_white_paper;
        $data['get_all_services'] = $get_all_services;
        $data['get_quotes'] = $get_quotes;
        $data['get_service_data'] = $get_service_data;
        $data['get_related_service'] = $get_related_service;



        return view('pages.services',compact('data'));
    }


    public function metas(){


        $data_metas = array();

        $data_metas['meta_title'] = $this->meta_title;
        $data_metas['meta_description'] = $this->meta_description;
        $data_metas['meta_keywords'] = $this->meta_keywords;

        return View::share('data_metas', $data_metas);

    }

    public function get_all_services()
    {
        $get_all_services = ServiceCategory::all();
        return $get_all_services;
    }

    public function get_casebook($cat_id){

        $get_casebook = CaseBook::where('service_category_id',$cat_id)
            ->get();

        return $get_casebook;
    }

    public function get_all_services_cat_by_casebook()
    {
        $get_all_services = new CaseBook();
        $get_all_services = $get_all_services->servicecat_all();
        return $get_all_services;
    }

    public function get_related_service_by_cat($cat_id,$get_service_data_id)
    {
        $get_related_service = Service::where('service_category_id',$cat_id)
//                                        ->where('id','!=',$get_service_data_id)
//                                        ->sortBy('id',$get_service_data_id)
                                        ->get();

//        dd($get_related_service);

        return $get_related_service;
    }

    public function get_service_expert($experts_user_id)
    {
        $experts_user_id = explode(',',$experts_user_id);

        $get_team = Team::whereIn('id',$experts_user_id)
            ->where('status',1)
            ->orderBy('priority','asc')
            ->get();

        return $get_team;
    }

    public function get_service_expert_quotes($experts_user_id)
    {
        $experts_user_id = explode(',',$experts_user_id);

        $get_quotes = Quotes::whereIn('team_id',$experts_user_id)
            ->where('status',1)
            ->orderBy('priority','asc')
            ->get();

        return $get_quotes;
    }


    public function about_us(){
        return view('pages.who_are_we');
    }

    public function get_white_paper_download($file)
    {
        $file= public_path(). "/img/white-paper/files/".$file;

        $headers = array(
            'Content-Type: application/pdf',
        );

        return Response::download($file, 'white_paper.pdf', $headers);
    }

    public function casebook(Request $request){

        $data = array();

        $get_service_category = $this->get_all_services_cat_by_casebook();

        $get_casebook = CaseBook::where('status',1)
            ->orderBy('priority','asc')
            ->paginate(9);

        $data['get_service_category'] = $get_service_category;
        $data['get_casebook'] = $get_casebook;

        if ($request->ajax()) {

            $cat_slug = $request->cat_slug;

            if ($cat_slug == 999999) {

                $get_casebook = CaseBook::where('status', 1)
                    ->orderBy('priority', 'asc')
                    ->paginate(9);

            }else{

            $get_service_category_by_id =  ServiceCategory::where('slug',$cat_slug)->first();

            $get_casebook = CaseBook::where('status',1)
                ->where('service_category_id',$get_service_category_by_id->id)
                ->orderBy('priority','asc')
                ->paginate(9);
            }


            $data['get_casebook'] = $get_casebook;

            return view('pages.casebook-ajax', compact('data'))->render();
        }

        $get_white_paper = WhitePaper::limit(3)
            ->orderBy('id','asc')
            ->get();

        $data['get_white_paper'] = $get_white_paper;

        return view('pages.casebook',compact('data'));
    }

    public function casebook_details($slug){

        $data = array();

        $get_casebook = CaseBook::where('slug',$slug)->first();

        if ($get_casebook == null){
            abort(404);
        }

        $get_casebook_details = CaseBookContent::where('case_book_id',$get_casebook->id)
            ->orderBy('priority','asc')
             ->get();

        $get_white_paper = WhitePaper::limit(3)
            ->orderBy('id','asc')
            ->get();

        $data['get_white_paper'] = $get_white_paper;
        $data['get_casebook'] = $get_casebook;
        $data['get_casebook_details'] = $get_casebook_details;

        return view::make("pages.casebook-inner",compact('data'));
    }


    public function videogallery(){
        $data = array();

        $get_video_gallery = VideoGallery::where('status',1)
            ->orderBy('priority','desc')
            ->paginate(9);

        $get_photogallery = PhotoGallery::where('status',1)
            ->orderBy('priority','asc')
            ->paginate(9);

        $get_newsroom_data = NewsRoom::limit(10)->where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $data['get_newsroom_data'] = $get_newsroom_data;
        $data['get_photogallery'] = $get_photogallery;
        $data['get_video_gallery'] = $get_video_gallery;

        return view('pages.videogallery',compact('data'));

    }


    public function newsroom(){
        $data = array();


        $get_newsroom = NewsRoom::where('status',1)
            ->orderBy('priority','desc')
            ->paginate(9);

        $get_casebook = CaseBook::limit(5)
            ->orderBy('priority','desc')
            ->get();

        $get_white_paper = WhitePaper::limit(3)
            ->orderBy('id','asc')
            ->get();

        $data['get_white_paper'] = $get_white_paper;
        $data['get_casebook'] = $get_casebook;
        $data['newsroom'] = $get_newsroom;

        return view('pages.newsroom',compact('data'));
    }


    public function photogallery(){
        $data = array();


        $get_photogallery = PhotoGallery::where('status',1)
            ->orderBy('priority','asc')
            ->paginate(9);

        $get_video_gallery = VideoGallery::limit(5)
            ->orderBy('priority','desc')
            ->get();

        $get_newsroom_data = NewsRoom::limit(10)->where('status',1)
            ->orderBy('priority','desc')
            ->get();

        $data['get_newsroom_data'] = $get_newsroom_data;
        $data['get_video_gallery'] = $get_video_gallery;
        $data['get_photogallery'] = $get_photogallery;

        return view('pages.picturegallery',compact('data'));

    }

    public function white_paper(){

        $data = array();


        $get_white_paper = WhitePaper::where('status',1)
            ->orderBy('priority','asc')
            ->get();

        $get_casebook = CaseBook::limit(3)
            ->orderBy('priority','desc')
            ->get();
        $data['get_casebook'] = $get_casebook;
        $data['get_white_paper'] = $get_white_paper;

        return view('pages.white-paper',compact('data'));

    }

    public function white_paper_details($slug){
        $data = array();

        $get_white_paper = WhitePaper::where('slug',$slug)->first();

        if ($get_white_paper == null){
            abort(404);
        }

        $get_casebook = CaseBook::limit(3)
            ->orderBy('priority','desc')
            ->get();
        $data['get_casebook'] = $get_casebook;
        $data['get_white_paper'] = $get_white_paper;

        return view('pages.white-paper-details',compact('data'));

    }

    public function white_paper_contact(Request $request){

        $white_paper_id = $request->white_paper_id;

        $save_white_paper = new WhitePaperLeads();
        $save_white_paper->white_paper_id = $white_paper_id;
        $save_white_paper->name = $request->name;
        $save_white_paper->email = $request->email;
        $save_white_paper->mobile_no = $request->phone_number;
        $check_save = $save_white_paper->save();

        $check_spam = $request->a_data_value;

        if (!empty($check_spam) && (bool) $check_spam != "kbees") {
            abort(404);
        } else {

            $details = [
                'title' => 'Whitepaper and Surveys Leads',
                'body' => $request->all(),
            ];

            $emails = ['suruchi.gaur@netrika.com', 'sanjay@netrika.com'];


            \Mail::to($emails)->send(new SendMail($details));


            if ($check_save) {

                $get_white_paper = WhitePaper::where('id', $white_paper_id)->first();

                if ($get_white_paper == null) {
                    abort(404);
                }

                $file = public_path() . "/img/white-paper/files/" . $get_white_paper->file;

                $headers = array(
                    'Content-Type: application/pdf',
                );

                return Response::download($file, 'white_paper-' . rand(1000, 9999) . '.pdf', $headers);
            }

        }

    }

    public function team_profile($white_paper_id){

        $file= public_path(). "/img/team/profile/".$white_paper_id;

        $headers = array(
                'Content-Type: application/pdf',
        );

            return Response::download($file, $white_paper_id, $headers);

    }


    public function services_form(Request $request){

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone_number;
        $message = $request->message;
        $organization = $request->organization;
        $subject = $request->subject;
        $services = $request->services;
        $check_spam = $request->a_data_value;


        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'message' => 'required',
            'organization' => 'required',
            'subject' => 'required',
            'services' => 'required',
        ]);

        if (!empty($check_spam) && (bool) $check_spam != "kbees") {

            return response()->json(['error'=>'Spam detected!']);

        } else {

            if ($validator->passes()) {

                $save_contact = new ServiceLeads();
                $save_contact->name = $name;
                $save_contact->email = $email;
                $save_contact->phone_no = $phone;
                $save_contact->message = $message;
                $save_contact->organization = $organization;
                $save_contact->subject = $subject;
                $save_contact->service = $services;
                $save_contact->ip = $request->ip();
                $save_contact->status = true;
                $save_contact->save();

                $details = [
                    'title' => 'Our Services Leads',
                    'body' => $request->all(),
                ];

                $emails = ['suruchi.gaur@netrika.com', 'sanjay@netrika.com'];

                \Mail::to($emails)->send(new SendMail($details));

                return response()->json(['success' => 'Added new records.']);
            }

        }

        return response()->json(['error'=>$validator->errors()]);

    }


    public function contact(){
        return view('pages.contact');
    }

    public function contact_us(Request $request){

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone_number;
        $message = $request->message;
        $check_spam = $request->a_data_value;

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'message' => 'required',
        ]);

        if (!empty($check_spam) && (bool) $check_spam != "kbees") {

            return response()->json(['error'=>'Spam detected!']);

        } else {

            if ($validator->passes()) {

                $save_contact = new ContactUs();
                $save_contact->name = $name;
                $save_contact->email = $email;
                $save_contact->phone_no = $phone;
                $save_contact->message = $message;
                $save_contact->ip = $request->ip();
                $save_contact->status = true;
                $save_contact->save();


                $details = [
                    'title' => 'Contact Us Leads',
                    'body' => $request->all(),
                ];


                $emails = ['suruchi.gaur@netrika.com', 'sanjay@netrika.com'];


                \Mail::to($emails)->send(new SendMail($details));


                return response()->json(['success' => 'Added new records.']);
            }

        }

        return response()->json(['error'=>$validator->errors()]);

    }


    public function work_with_us_contact(Request $request){

//        dd($request);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone_number;
        $message = $request->message;
        $resume = $request->resume;

        $check_spam = $request->a_data_value;

        if (!empty($check_spam) && (bool) $check_spam != "kbees") {
            abort(404);
        } else {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required|digits:10',
                'message' => 'required',
            ]);

            if ($validator->passes()) {

                $save_contact = new WorkWithUsContact();
                $save_contact->name = $name;
                $save_contact->email = $email;
                $save_contact->phone_no = $phone;
                $save_contact->message = $message;
                $save_contact->ip = $request->ip();
                $save_contact->status = true;

                if ($file = $request->hasFile('resume')) {

                    $file = $request->file('resume');

                    $fileName = $file->getClientOriginalName();
                    $destinationPath = public_path() . '/resume/';
                    $file->move($destinationPath, $fileName);
                    $save_contact->resume = $fileName;
                }


                $save_contact->save();


                $details = [
                    'title' => 'Work with Us Leads',
                    'body' => $request->all(),
                    'fileName' => $fileName,
                ];

                $emails = ['gayatri.rout@netrika.in', 'sanjay@netrika.com'];


                \Mail::to($emails)->send(new SendMailt($details));


                return redirect('/thank-you');
            }

        }
    }


    public function quick_enquiry(Request $request){


        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone_number;
        $message = $request->message;
        $subject = $request->subject;

        $check_spam = $request->a_data_value;

        if (!empty($check_spam) && (bool) $check_spam != "kbees") {
            abort(404);
        } else {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'phone_number' => 'required|digits:10',
                'message' => 'required',
            ]);

            if ($validator->passes()) {

                $save_contact = new QuickEnquiry();
                $save_contact->name = $name;
                $save_contact->email = $email;
                $save_contact->phone_no = $phone;
                $save_contact->subject = $subject;
                $save_contact->message = $message;
                $save_contact->ip = $request->ip();
                $save_contact->status = true;

                $save_contact->save();

                $details = [
                    'title' => 'Quick Enquiry Leads',
                    'body' => $request->all(),
                ];

            $emails = ['suruchi.gaur@netrika.com','sanjay@netrika.com'];


            \Mail::to($emails)->send(new SendMail($details));


                return redirect('/thank-you');
            }

        }

    }


    public function newsletter(Request $request){

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone_number;
        $organisation = $request->organisation;
        $designation = $request->designation;

        $check_spam = $request->a_data_value;

        if (!empty($check_spam) && (bool) $check_spam != "kbees") {
            abort(404);
        } else {

            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
            ]);

            if ($validator->passes()) {

                $save_contact = new Newsletter();
                $save_contact->name = $name;
                $save_contact->email = $email;
                $save_contact->phone_no = $phone;
                $save_contact->organisation = $organisation;
                $save_contact->designation = $designation;
                $save_contact->ip = $request->ip();
                $save_contact->status = true;

                $save_contact->save();


                $details = [
                    'title' => 'Newsletter Leads',
                    'body' => $request->all(),
                ];

                $emails = ['suruchi.gaur@netrika.com', 'sanjay@netrika.com'];


                \Mail::to($emails)->send(new SendMail($details));


                return redirect('/thank-you');
            }

        }

    }

    public function thank_you(){
        return view('pages.thank-you');
    }

    public function coming_soon(){
        return view('pages.coming-soon');
    }



    public function privacypolicy(){
        return view('pages.privacypolicy');
    }

    public function coffee_table(){
        return view('pages.coffee-table');
    }

    public function payu(){
        return view('pages.payu');
    }



    public function payu_save(Request $request){

        $attributes = [
            'txnid' => 'NET-'.rand(10000,999999), # Transaction ID.
            'amount' => $request->Amount, # Payee Name.
            'productinfo' => "Netrika payu transaction",
            'firstname' => $request->fname, # Payee Name.
            'lastname' => $request->lname, # Payee Name.
            'email' => $request->email, # Payee Email Address.
            'phone' => $request->phone_number, # Payee Phone Number.
            'address1' =>  $request->address, # Payee Phone Number.

        ];

        return Payment::make($attributes, function ($then) {
            $then->redirectAction('MainController@status');

        });

    }


    public function payment($request){

    }


    public function status(){
        $data = array();


        $check_trans = session()->get('tzsk_payu_data');


        if ($check_trans == null){
            return redirect('/payment-status');
        }

        $payment = Payment::capture();

        $check = $payment->isCaptured();

        if ($check == true) {

            $payment->save();

            $cont = "   <div>
             <h4>Transaction has been successful!</h4>

             <h4>Your transction id is <span style='    font-weight: bold;'>$payment->txnid.</span></h4>

         </div>";

        }else{
            
            $payment->save();

            $cont = "   <div>
             <h4>Transaction has been failed!</h4>

             <h4>Please try after sometime.</h4>

         </div>";

        }


        Session::flash('message', $cont);

        return view('pages.paysuccess',compact('payment'));

    }


    public function mailsend()
    {
        $details = [
            'title' => 'Title: Mail from Real Programmer',
            'body' => 'Body: This is for testing email using smtp'
        ];

        $emails = ['suruchi.gaur@netrika.com','sanjay@netrika.com'];


        \Mail::to($emails)->send(new SendMail($details));

//        return view('emails.thanks');
    }



//    public function white_paper(){
//
//        $data = array();
//
//        $get_white_paper = WhitePaper::where('status',1)
//                            ->pluck('id','name','files')
//                            ->get();
//
//        if ($get_white_paper == null){
//            abort(404);
//        }else{
//            $data['status'] = "success";
//        }
//
//        return view('pages.whitepaper',compact('data'));
//
//    }





}
