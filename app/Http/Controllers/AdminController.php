<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeBanner;
use App\Testimonail;
use App\NewsBoard;
use App\ContactUs;
use App\WhitePaper;
use App\CaseBook;
use App\CaseBookContent;
use App\VideoGallery;
use App\NewsRoom;
use App\Media;
use App\UpcomingEvent;
use App\PhotoGallery;
use App\Career;
use App\CareerLocation;
use App\Team;
use App\CMS;
use App\Quotes;
use App\Service;
use App\ServiceCategory;
use App\ServiceStructureOne;
use App\ServiceStructureTwo;
use App\ServiceStructureFour;
use App\WhitePaperLeads;
use App\WorkWithUsContact;
use App\ServiceLeads;
use App\QuickEnquiry;
use App\Newsletter;
use App\CareerDepartment;
use Tzsk\Payu\Facade\Payment;
use DB;
use Str;
use Hash;
use Auth;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Analytics;
use Spatie\Analytics\Period;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $getdata = $this->dashboard();
        return $getdata;
    }

    public function dashboard()
    {

//        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::months(6));
//dd($analyticsData);
        $data = array();
        $date_t = \Carbon\Carbon::today()->subDays(1);
        $date_w = \Carbon\Carbon::today()->subDays(7);
        $date_m = \Carbon\Carbon::today()->subDays(30);

        $get_total_contact_us_leads = ContactUs::all()->count();
        $get_today_contact_us_leads = ContactUs::whereDate('created_at', Carbon::today())->count();
        $get_weekly_contact_us_leads = ContactUs::where('created_at', '>=', $date_w)->count();
        $get_monthly_contact_us_leads = ContactUs::where('created_at', '>=', $date_m)->count();

        $data['get_today_contact_us_leads'] = $get_today_contact_us_leads;
        $data['get_total_contact_us_leads'] = $get_total_contact_us_leads;
        $data['get_weekly_contact_us_leads'] = $get_weekly_contact_us_leads;
        $data['get_monthly_contact_us_leads'] = $get_monthly_contact_us_leads;

        $get_total_QuickEnquiry_leads = QuickEnquiry::all()->count();
        $get_today_QuickEnquiry_leads = QuickEnquiry::whereDate('created_at', Carbon::today())->count();
        $get_weekly_QuickEnquiry_leads = QuickEnquiry::where('created_at', '>=', $date_w)->count();
        $get_monthly_QuickEnquiry_leads = QuickEnquiry::where('created_at', '>=', $date_m)->count();

        $data['get_today_QuickEnquiry_leads'] = $get_total_QuickEnquiry_leads;
        $data['get_total_QuickEnquiry_leads'] = $get_today_QuickEnquiry_leads;
        $data['get_weekly_QuickEnquiry_leads'] = $get_weekly_QuickEnquiry_leads;
        $data['get_monthly_QuickEnquiry_leads'] = $get_monthly_QuickEnquiry_leads;

        $get_total_WhitePaperLeads_leads = WhitePaperLeads::all()->count();
        $get_today_WhitePaperLeads_leads = WhitePaperLeads::whereDate('created_at', Carbon::today())->count();
        $get_weekly_WhitePaperLeads_leads = WhitePaperLeads::where('created_at', '>=', $date_w)->count();
        $get_monthly_WhitePaperLeads_leads = WhitePaperLeads::where('created_at', '>=', $date_m)->count();

        $data['get_today_WhitePaperLeads_leads'] = $get_total_WhitePaperLeads_leads;
        $data['get_total_WhitePaperLeads_leads'] = $get_today_WhitePaperLeads_leads;
        $data['get_weekly_WhitePaperLeads_leads'] = $get_weekly_WhitePaperLeads_leads;
        $data['get_monthly_WhitePaperLeads_leads'] = $get_monthly_WhitePaperLeads_leads;


        $get_total_WorkWithUsContact_leads = WorkWithUsContact::all()->count();
        $get_today_WorkWithUsContact_leads = WorkWithUsContact::whereDate('created_at', Carbon::today())->count();
        $get_weekly_WorkWithUsContact_leads = WorkWithUsContact::where('created_at', '>=', $date_w)->count();
        $get_monthly_WhitePaperLeads_leads = WorkWithUsContact::where('created_at', '>=', $date_m)->count();

        $get_total_ServiceLeads_leads = ServiceLeads::all()->count();
        $get_today_ServiceLeads_leads = ServiceLeads::whereDate('created_at', Carbon::today())->count();
        $get_weekly_ServiceLeads_leads = ServiceLeads::where('created_at', '>=', $date_w)->count();
        $get_monthly_ServiceLeads_leads = ServiceLeads::where('created_at', '>=', $date_m)->count();

        $get_total_Newsletter_leads = Newsletter::all()->count();
        $get_today_Newsletter_leads = Newsletter::whereDate('created_at', Carbon::today())->count();
        $get_weekly_Newsletter_leads = Newsletter::where('created_at', '>=', $date_w)->count();
        $get_monthly_Newsletter_leads = Newsletter::where('created_at', '>=', $date_m)->count();

        $get_total_Payment_leads = DB::table('payu_payments')->count();
        $get_today_Payment_leads = DB::table('payu_payments')->whereDate('created_at', Carbon::today())->count();
        $get_weekly_Payment_leads = DB::table('payu_payments')->where('created_at', '>=', $date_w)->count();
        $get_monthly_Payment_leads = DB::table('payu_payments')->where('created_at', '>=', $date_m)->count();

        $data['$get_total_Payment_leads'] = $get_total_Payment_leads;
        $data['$get_today_Payment_leads'] = $get_today_Payment_leads;
        $data['$get_weekly_Payment_leads'] = $get_weekly_Payment_leads;
        $data['$get_monthly_Payment_leads'] = $get_monthly_Payment_leads;

        $data['get_total_Newsletter_leads'] = $get_total_Newsletter_leads;
        $data['get_today_Newsletter_leads'] = $get_today_Newsletter_leads;
        $data['get_weekly_Newsletter_leads'] = $get_weekly_Newsletter_leads;
        $data['get_monthly_Newsletter_leads'] = $get_monthly_Newsletter_leads;

        $data['get_total_ServiceLeads_leads'] = $get_total_ServiceLeads_leads;
        $data['get_today_ServiceLeads_leads'] = $get_today_ServiceLeads_leads;
        $data['get_weekly_ServiceLeads_leads'] = $get_weekly_ServiceLeads_leads;
        $data['get_monthly_ServiceLeads_leads'] = $get_monthly_ServiceLeads_leads;

        $data['get_total_WorkWithUsContact_leads'] = $get_total_WorkWithUsContact_leads;
        $data['get_today_WorkWithUsContact_leads'] = $get_today_WorkWithUsContact_leads;
        $data['get_weekly_WorkWithUsContact_leads'] = $get_weekly_WorkWithUsContact_leads;
        $data['get_monthly_WorkWithUsContact_leads'] = $get_monthly_WhitePaperLeads_leads;


        return view('admin.dashboard',compact('data'));
    }


    public function home_banner(){

        $get_banner = HomeBanner::latest()->get();
        return view('admin.pages.home.banner',compact('get_banner'));
    }

    public function home_banner_add(){
        return view('admin.pages.home.add_banner');
    }

    public function home_banner_edit($id){

        $get_banner = HomeBanner::where('id',$id)->first();
        return view('admin.pages.home.edit_banner',compact('get_banner'));
    }

    public function home_banner_update_save(Request $request,$id){

        $request->validate([
            'text' => 'required',
            'about_us_link' => 'required',
            'know_more_link' => 'required'
        ]);

        $banner = null;
        $responsive  = null;

        if ($request->banner != null){

            $banner = time().'.'.$request->banner->getClientOriginalName();
            $request->banner->move(public_path('img/homebanner/'), $banner);

        }

        if ($request->responsive != null) {
            $responsive = time() . '.' . $request->responsive->getClientOriginalName();
            $request->responsive->move(public_path('img/homebanner/responsive'), $responsive);

        }

        $create_banner = HomeBanner::findOrFail($id);
        $create_banner->banner = $banner== null ? $create_banner->banner : $banner;
        $create_banner->responsive = $banner== null ? $create_banner->responsive : $responsive;
        $create_banner->text = $request->text;
        $create_banner->para = $request->para;
        $create_banner->about_us_link = $request->about_us_link;
        $create_banner->know_more_link = $request->know_more_link;
        $create_banner->priority = $request->priority;
        $create_banner->status = 1;
        $create_banner->save();

        return redirect('/admin/home/banner')
            ->with('success','Banner Updated Successfully');

    }

    public function home_banner_delete($id){

        $delete_banner = HomeBanner::findOrFail($id);
        $delete_banner->delete();

        return redirect('/admin/home/banner')
            ->with('delete','Banner Deleted Successfully');
    }

    public function home_banner_add_save(Request $request){

        $request->validate([
            'banner' => 'required',
            'responsive' => 'required',
            'text' => 'required',
            'about_us_link' => 'required',
            'know_more_link' => 'required'
        ]);

        $banner = time().'.'.$request->banner->getClientOriginalName();
        $responsive = time().'.'.$request->responsive->getClientOriginalName();

        $request->banner->move(public_path('img/homebanner/'), $banner);
        $request->responsive->move(public_path('img/homebanner/responsive'), $responsive);

        $create_banner = new HomeBanner();
        $create_banner->banner = $banner;
        $create_banner->responsive = $responsive;
        $create_banner->text = $request->text;
        $create_banner->para = $request->para;
        $create_banner->about_us_link = $request->about_us_link;
        $create_banner->know_more_link = $request->know_more_link;
        $create_banner->status = 1;
        $create_banner->save();

        return redirect('/admin/home/banner')
            ->with('success','Banner Created Successfully');
    }


    /**
     *
     * Testimonial
     *
     */

    public function home_testimonial(){

        $get_testimonial_data = Testimonail::latest()->get();
        return view('admin.pages.testimonial.testimonial',compact('get_testimonial_data'));
    }


    public function payment(){

        $payment = DB::table('payu_payments')->where('status','Completed')->where('unmappedstatus','captured')->get();

        return view('admin.pages.leads.payments',compact('payment'));
    }

    public function services(){

        $services = ServiceLeads::latest()->get();
        return view('admin.pages.leads.services',compact('services'));
    }

    public function work_with_us(){

        $work_with_us = WorkWithUsContact::latest()->get();
        return view('admin.pages.leads.work-with-us',compact('work_with_us'));
    }

    public function newsletter(){

        $newsletter = Newsletter::latest()->get();
        return view('admin.pages.leads.newsletter',compact('newsletter'));
    }


    public function white_papers(){

        $white_papers = WhitePaperLeads::latest()->get();
        return view('admin.pages.leads.white-papers',compact('white_papers'));
    }

    public function quick_enquiries(){

        $quick_enquiry = QuickEnquiry::latest()->get();
        return view('admin.pages.leads.quick-enquiry',compact('quick_enquiry'));
    }


    public function contactus(){

        $contact_us = ContactUs::latest()->get();
        return view('admin.pages.leads.contact-us',compact('contact_us'));
    }




    public function home_testimonial_add(){
        return view('admin.pages.testimonial.add_testimonial');
    }

    public function home_testimonial_edit($id){

        $get_testimonial_data = Testimonail::where('id',$id)->first();
        return view('admin.pages.testimonial.edit_testimonial',compact('get_testimonial_data'));
    }

    public function home_testimonial_update_save(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);


        $image = null;

        if ($request->image != null){

            $image = time().'.'.$request->image->getClientOriginalName();
            $request->image->move(public_path('img/testimonial/'), $image);

        }

        $create_banner = Testimonail::findOrFail($id);
        $create_banner->image = $image== null ? $create_banner->image : $image;
        $create_banner->name = $request->name;
        $create_banner->position = $request->position;
        $create_banner->description = $request->description;
        $create_banner->status = 1;
        $create_banner->save();

        return redirect('/admin/home/testimonial')
            ->with('success','Testimonial Updated Successfully');

    }

    public function home_testimonial_delete($id){

        $delete_banner = Testimonail::findOrFail($id);
        $delete_banner->delete();

        return redirect('/admin/home/testimonial')
            ->with('delete','Testimonial Deleted Successfully');
    }

    public function home_testimonial_add_save(Request $request){

        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
        ]);

        $image = time().'.'.$request->image->getClientOriginalName();

        $request->image->move(public_path('img/testimonial/'), $image);

        $create_banner = new Testimonail();
        $create_banner->image = $image;
        $create_banner->name = $request->name;
        $create_banner->position = $request->position;
        $create_banner->description = $request->description;
        $create_banner->status = 1;
        $create_banner->save();

        return redirect('/admin/home/testimonial')
            ->with('success','Testimonial Created Successfully');
    }



    /**
     *
     * Newsboard
     *
     */

    public function home_newsboard(){

        $get_newsboard_data = NewsBoard::latest()->get();
        return view('admin.pages.newsboard.newsboard',compact('get_newsboard_data'));
    }

    public function home_newsboard_add(){
        return view('admin.pages.newsboard.add_newsboard');
    }

    public function home_newsboard_edit($id){

        $get_newsboard_data = NewsBoard::where('id',$id)->first();
        return view('admin.pages.newsboard.edit_newsboard',compact('get_newsboard_data'));
    }

    public function home_newsboard_update_save(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'event_date' => 'required',
            'description' => 'required',
        ]);


        $create_banner = NewsBoard::findOrFail($id);
        $create_banner->title = $request->title;
        $create_banner->description = $request->description;
        $create_banner->event_date = $request->event_date;
        $create_banner->save();

        return redirect('/admin/home/newsboard')
            ->with('success','Newsboard Updated Successfully');

    }

    public function home_newsboard_delete($id){

        $delete_banner = NewsBoard::findOrFail($id);
        $delete_banner->delete();

        return redirect('/admin/home/newsboard')
            ->with('delete','Newsboard Deleted Successfully');
    }

    public function home_newsboard_add_save(Request $request){

        $request->validate([
            'title' => 'required',
            'event_date' => 'required',
            'description' => 'required',
        ]);

        $create_banner = new NewsBoard();
        $create_banner->title = $request->title;
        $create_banner->description = $request->description;
        $create_banner->event_date = $request->event_date;
        $create_banner->save();

        return redirect('/admin/home/newsboard')
            ->with('success','Newsboard Created Successfully');
    }


    /**
     *
     * Services
     *
     */

    public function services_list(){

        $get_service_data = Service::latest()->get();
        return view('admin.pages.service.services',compact('get_service_data'));
    }

    public function services_create(){
        $get_service_data = new Service;
        return view('admin.pages.service.create',compact('get_service_data'));
    }

    public function services_edit($id){

        $get_service_data = Service::where('id',$id)->first();
        return view('admin.pages.service.edit_service',compact('get_service_data'));
    }

    public function services_update_save(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'service_category_id' => 'required',
            'main_content' => 'required',
            'experts_user_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $banner_image  = null;

        if ($request->banner_image != null) {
            $banner_image = time() . '.' . $request->banner_image->getClientOriginalName();
            $request->banner_image->move(public_path('img/services/banner/'), $banner_image);

        }

        $banner_image_res  = null;

        if ($request->banner_image_res != null) {
            $banner_image_res = time() . '.' . $request->banner_image_res->getClientOriginalName();
            $request->banner_image_res->move(public_path('img/services/banner/res/'), $banner_image_res);

        }


        $create_service = Service::findOrFail($id);
        $create_service->name = $request->name;
        $create_service->slug = Str::slug($request->name);
        $create_service->service_category_id = $request->service_category_id;
        $create_service->main_content = $request->main_content;
        $create_service->experts_user_id = implode(',',$request->experts_user_id);
        $create_service->banner_image_res = $banner_image_res== null ? $create_service->banner_image_res : $banner_image_res;
        $create_service->banner_image = $banner_image== null ? $create_service->banner_image : $banner_image;
        $create_service->meta_title = $request->meta_title;
        $create_service->meta_description = $request->meta_description;
        $create_service->meta_keywords = $request->meta_keywords;
        $create_service->priority = $request->priority;
        $create_service->status = $request->status;
        $create_service->save();

        return redirect('/admin/services/view')
            ->with('success','Service Updated Successfully');

    }

    public function services_delete($id){

        $delete_service = Service::findOrFail($id);
        $delete_service->delete();

        return redirect('/admin/services/view')
            ->with('delete','Service Deleted Successfully');
    }

    public function services_create_save(Request $request){

        $request->validate([
            'name' => 'required',
            'service_category_id' => 'required',
            'main_content' => 'required',
            'experts_user_id' => 'required',
            'banner_image' => 'required',
            'banner_image_res' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);



        $banner_image  = null;

        if ($request->banner_image != null) {
            $banner_image = time() . '.' . $request->banner_image->getClientOriginalName();
            $request->banner_image->move(public_path('img/services/banner/'), $banner_image);

        }

        $banner_image_res  = null;

        if ($request->banner_image_res != null) {
            $banner_image_res = time() . '.' . $request->banner_image_res->getClientOriginalName();
            $request->banner_image_res->move(public_path('img/services/banner/res/'), $banner_image_res);

        }



        $create_service = new Service();
        $create_service->name = $request->name;
        $create_service->slug = Str::slug($request->name);
        $create_service->service_category_id = $request->service_category_id;
        $create_service->main_content = $request->main_content;
        $create_service->experts_user_id = implode(',',$request->experts_user_id);
        $create_service->banner_image_res = $banner_image_res;
        $create_service->banner_image = $banner_image;
        $create_service->meta_title = $request->meta_title;
        $create_service->meta_description = $request->meta_description;
        $create_service->meta_keywords = $request->meta_keywords;
        $create_service->priority = $request->priority;
        $create_service->status = $request->status;

        $create_service->save();

        return redirect('/admin/services/view')
            ->with('success','Service Created Successfully');
    }


    /**
     *
     * Casebook
     *
     */

    public function casebook(){

        $get_casebook_data = CaseBook::latest()->get();
        return view('admin.pages.casebook.casebook',compact('get_casebook_data'));
    }

    public function casebook_content(){

        $get_casebook_data = CaseBook::latest()->get();
        return view('admin.pages.casebook.content',compact('get_casebook_data'));
    }

    public function casebook_content_edit($id){

        $case_id = $id;
        $get_casebook_data = CaseBookContent::where('case_book_id',$id)->get();

        return view('admin.pages.casebook.edit_casebook_content',compact('get_casebook_data','case_id'));
    }

    public function casebook_create(){
        $get_casebook_data = new CaseBook;
        return view('admin.pages.casebook.create',compact('get_casebook_data'));
    }

    public function casebook_edit($id){

        $get_casebook_data = CaseBook::where('id',$id)->first();
        return view('admin.pages.casebook.edit_casebook',compact('get_casebook_data'));
    }

    public function casebook_content_update(Request $request,$id){


        $request->validate([
            'tab_name.0' => 'required',
            'tab_content.0' => 'required',
        ]);

        $array_length = count($request->tab_content);

        $get_service = CaseBookContent::where('case_book_id',$id)->get();

        foreach ($get_service as $key=>$get_service_data){
            $get_service_data->delete();
        }

        for ($i=0; $i<$array_length; $i++){

            $create_service = new CaseBookContent();
            $create_service->case_book_id = $id;
            $create_service->tab_name = $request->tab_name[$i];
            $create_service->tab_content = $request->tab_content[$i];
            $create_service->priority = $request->priority[$i];
            $create_service->status = 1;

            $create_service->save();

        }

        return redirect('/admin/casebook/content')
            ->with('success','CaseBook Content Updated Successfully');

    }

    public function casebook_update_save(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'short_des_main' => 'required',
            'service_category_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $banner  = null;

        if ($request->banner != null) {
            $banner = time() . '.' . $request->banner->getClientOriginalName();
            $request->banner->move(public_path('img/case-studies/banner/'), $banner);

        }

        $banner_res  = null;

        if ($request->banner_res != null) {
            $banner_res = time() . '.' . $request->banner_res->getClientOriginalName();
            $request->banner_res->move(public_path('img/case-studies/banner/res/'), $banner_res);

        }

        $thumbnail  = null;

        if ($request->thumbnail != null) {
            $thumbnail = time() . '.' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('img/case-studies/'), $thumbnail);

        }


        $create_service = CaseBook::findOrFail($id);
        $create_service->title = $request->title;
        $create_service->slug = Str::slug($request->title);
        $create_service->short_des_main = $request->short_des_main;
        $create_service->service_category_id = $request->service_category_id;
        $create_service->case_book_content_status = 1;
        $create_service->meta_title = $request->meta_title;
        $create_service->meta_description = $request->meta_description;
        $create_service->meta_keywords = $request->meta_keywords;
        $create_service->priority = $request->priority;
        $create_service->banner = $banner== null ? $create_service->banner : $banner;
        $create_service->banner_res = $banner_res== null ? $create_service->banner_res : $banner_res;
        $create_service->thumbnail = $thumbnail== null ? $create_service->thumbnail : $thumbnail;
        $create_service->status = $request->status;

        $create_service->save();

        return redirect('/admin/casebook/view')
            ->with('success','CaseBook Updated Successfully');
    }

    public function casebook_delete($id){

        $delete_service = CaseBook::findOrFail($id);
        $delete_service->delete();

        return redirect('/admin/casebook/view')
            ->with('delete','CaseBook Deleted Successfully');
    }

    public function casebook_create_save(Request $request){

        $request->validate([
            'title' => 'required',
            'short_des_main' => 'required',
            'service_category_id' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'banner' => 'required',
            'banner_res' => 'required',
            'thumbnail' => 'required',
        ]);

        $banner  = null;

        if ($request->banner != null) {
            $banner = time() . '.' . $request->banner->getClientOriginalName();
            $request->banner->move(public_path('img/case-studies/banner/'), $banner);

        }

        $banner_res  = null;

        if ($request->banner_res != null) {
            $banner_res = time() . '.' . $request->banner_res->getClientOriginalName();
            $request->banner_res->move(public_path('img/case-studies/banner/res/'), $banner_res);

        }

        $thumbnail  = null;

        if ($request->thumbnail != null) {
            $thumbnail = time() . '.' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('img/case-studies/'), $thumbnail);

        }


        $create_service = new CaseBook();
        $create_service->title = $request->title;
        $create_service->slug = Str::slug($request->title);
        $create_service->short_des_main = $request->short_des_main;
        $create_service->service_category_id = $request->service_category_id;
        $create_service->case_book_content_status = 1;
        $create_service->meta_title = $request->meta_title;
        $create_service->meta_description = $request->meta_description;
        $create_service->meta_keywords = $request->meta_keywords;
        $create_service->priority = $request->priority;
        $create_service->banner = $banner;
        $create_service->banner_res = $banner_res;
        $create_service->thumbnail = $thumbnail;
        $create_service->status = $request->status;

        $create_service->save();

        return redirect('/admin/casebook/view')
            ->with('success','CaseBook Created Successfully');
    }


    /**
     *
     * Team
     *
     */

    public function team(){

        $get_team_data = Team::latest()->get();
        return view('admin.pages.team.team',compact('get_team_data'));
    }

    public function team_create(){
        return view('admin.pages.team.create');
    }

    public function team_edit($id){

        $get_team_data = Team::where('id',$id)->first();
        return view('admin.pages.team.edit_team',compact('get_team_data'));
    }

    public function team_update_save(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
//            'certifications' => 'required',
            'experience' => 'required',
//            'expert_in' => 'required',
            'email' => 'required',
//            'phone' => 'required',
            'quotes' => 'required',
            'linkedin' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
//            'meta_keywords' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $user_image  = null;

        if ($request->user_image != null) {
            $user_image = time() . '.' . $request->user_image->getClientOriginalName();
            $request->user_image->move(public_path('img/team/page/'), $user_image);

        }

        $pdf_data  = null;

        if ($request->pdf_data != null) {
            $pdf_data = time() . '.' . $request->pdf_data->getClientOriginalName();
            $request->pdf_data->move(public_path('team-profile/'), $pdf_data);

        }

        $create_team = Team::findOrFail($id);
        $create_team->name = $request->name;
        $create_team->slug = Str::slug($request->name);
        $create_team->designation = $request->designation;
        $create_team->certifications = $request->certifications;
        $create_team->experience = $request->experience;
        $create_team->expert_in = $request->expert_in;
        $create_team->email = $request->email;
        $create_team->phone = $request->phone;
        $create_team->quotes = $request->quotes;
        $create_team->linkedin = $request->linkedin;
        $create_team->description = $request->description;
        $create_team->meta_title = $request->meta_title;
        $create_team->meta_description = $request->meta_description;
        $create_team->meta_keywords = $request->meta_keywords;
        $create_team->priority = $request->priority;
        $create_team->user_image = $user_image== null ? $create_team->user_image : $user_image;
        $create_team->pdf_data = $pdf_data== null ? $create_team->pdf_data : $pdf_data;
        $create_team->status = $request->status;
        $create_team->save();

        return redirect('/admin/team/view')
            ->with('success','Team Updated Successfully');

    }

    public function team_delete($id){

        $delete_team = Team::findOrFail($id);
        $delete_team->delete();

        return redirect('/admin/team/view')
            ->with('delete','Team Deleted Successfully');
    }

    public function team_create_save(Request $request){

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
//            'certifications' => 'required',
            'experience' => 'required',
//            'expert_in' => 'required',
            'email' => 'required',
            'pdf_data' => 'required',
            'quotes' => 'required',
            'linkedin' => 'required',
            'description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'user_image' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $user_image  = null;

        if ($request->user_image != null) {
            $user_image = time() . '.' . $request->user_image->getClientOriginalName();
            $request->user_image->move(public_path('img/team/page/'), $user_image);

        }

        $pdf_data  = null;

        if ($request->pdf_data != null) {
            $pdf_data = time() . '.' . $request->pdf_data->getClientOriginalName();
            $request->pdf_data->move(public_path('team-profile/'), $pdf_data);

        }

        $create_team = new Team();
        $create_team->name = $request->name;
        $create_team->slug = Str::slug($request->name);
        $create_team->designation = $request->designation;
        $create_team->certifications = $request->certifications;
        $create_team->experience = $request->experience;
        $create_team->expert_in = $request->expert_in;
        $create_team->email = $request->email;
        $create_team->phone = $request->phone;
        $create_team->quotes = $request->quotes;
        $create_team->linkedin = $request->linkedin;
        $create_team->description = $request->description;
        $create_team->meta_title = $request->meta_title;
        $create_team->meta_description = $request->meta_description;
        $create_team->meta_keywords = $request->meta_keywords;
        $create_team->priority = $request->priority;
        $create_team->user_image = $user_image;
        $create_team->pdf_data = $pdf_data;
        $create_team->status = $request->status;
        $create_team->save();

        return redirect('/admin/team/view')
            ->with('success','Team Created Successfully');
    }



    /**
     *
     * Career
     *
     */

    public function career(){

        $get_career_data = Career::latest()->get();
        return view('admin.pages.career.career',compact('get_career_data'));
    }

    public function career_create(){
        $get_career_data = new Career;
        return view('admin.pages.career.create',compact('get_career_data'));
    }

    public function career_edit($id){

        $get_career_data = Career::where('id',$id)->first();
        return view('admin.pages.career.edit_career',compact('get_career_data'));
    }

    public function career_update_save(Request $request,$id){

        $request->validate([
            'position' => 'required',
            'type' => 'required',
            'designation' => 'required',
//            'department' => 'required',
//            'certification' => 'required',
            'career_department_id' => 'required',
            'career_pos_id' => 'required',
            'career_location_id' => 'required',
            'job_description' => 'required',
            'experience' => 'required',
//            'roles_n_responsiblities' => 'required',
//            'required_skills' => 'required',
//            'academic_qualification' => 'required',
            'status' => 'required'
        ]);


        $get_career_location_name = CareerLocation::whereIn('id',$request->career_location_id)->pluck('name')->toArray();

        $get_department_name = CareerDepartment::findOrFail($request->career_department_id);

        $dep_name = $get_department_name->name;


        $create_career = Career::findOrFail($id);
        $create_career->position = $request->position;
        $create_career->type = $request->type;
        $create_career->designation = $request->designation;
        $create_career->department = $dep_name;
        $create_career->certification = $request->certification;
        $create_career->career_department_id = $request->career_department_id;
        $create_career->career_pos_id = $request->career_pos_id;
        $create_career->career_location_id = implode(',',$request->career_location_id);
        $create_career->job_description = $request->job_description;
        $create_career->experience = $request->experience;
        $create_career->roles_n_responsiblities = $request->roles_n_responsiblities;
        $create_career->required_skills = $request->required_skills;
        $create_career->academic_qualification = $request->academic_qualification;
        $create_career->location = implode(', ',$get_career_location_name);
        $create_career->status = $request->status;
        $create_career->save();

        return redirect('/admin/career/view')
            ->with('success','Career Updated Successfully');

    }

    public function career_delete($id){

        $delete_career = Career::findOrFail($id);
        $delete_career->delete();

        return redirect('/admin/career/view')
            ->with('delete','Career Deleted Successfully');
    }

    public function career_create_save(Request $request){

//        dd($request);

        $request->validate([
            'position' => 'required',
            'type' => 'required',
            'designation' => 'required',
//            'department' => 'required',
//            'certification' => 'required',
            'career_department_id' => 'required',
            'career_pos_id' => 'required',
            'career_location_id' => 'required',
            'job_description' => 'required',
            'experience' => 'required',
//            'roles_n_responsiblities' => 'required',
//            'required_skills' => 'required',
//            'academic_qualification' => 'required',
            'status' => 'required'
        ]);


        $get_career_location_name = CareerLocation::whereIn('id',$request->career_location_id)->pluck('name')->toArray();

        $get_department_name = CareerDepartment::findOrFail($request->career_department_id);

        $dep_name = $get_department_name->name;


        $create_career = new Career();
        $create_career->position = $request->position;
        $create_career->type = $request->type;
        $create_career->designation = $request->designation;
        $create_career->department = $dep_name;
        $create_career->certification = $request->certification;
        $create_career->career_department_id = $request->career_department_id;
        $create_career->career_pos_id = $request->career_pos_id;
        $create_career->career_location_id = implode(',',$request->career_location_id);
        $create_career->job_description = $request->job_description;
        $create_career->experience = $request->experience;
        $create_career->roles_n_responsiblities = $request->roles_n_responsiblities;
        $create_career->required_skills = $request->required_skills;
        $create_career->academic_qualification = $request->academic_qualification;
        $create_career->location = implode(',',$get_career_location_name);
        $create_career->status = $request->status;
        $create_career->save();

        return redirect('/admin/career/view')
            ->with('success','Career Created Successfully');
    }


    /**
     *
     * Whitepaper
     *
     */

    public function whitepaper(){

        $get_whitepaper_data = WhitePaper::latest()->get();
        return view('admin.pages.whitepaper.whitepaper',compact('get_whitepaper_data'));
    }

    public function whitepaper_create(){
        return view('admin.pages.whitepaper.create');
    }

    public function whitepaper_edit($id){

        $get_whitepaper_data = WhitePaper::where('id',$id)->first();
        return view('admin.pages.whitepaper.edit_whitepaper',compact('get_whitepaper_data'));
    }

    public function whitepaper_update_save(Request $request,$id){

        $request->validate([
            "title" => "required",
            "meta_title" => "required",
            "meta_description" => "required",
//            "meta_keywords" => "required",
            "priority" => "required",
            "status" => "required",
        ]);

        $image  = null;

        if ($request->image != null) {
            $image = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('img/white-paper/'), $image);

        }

        $image_main  = null;

        if ($request->image_main != null) {
            $image_main = time() . '.' . $request->image_main->getClientOriginalName();
            $request->image_main->move(public_path('img/white-paper/main/'), $image_main);

        }

        $file  = null;

        if ($request->file != null) {
            $file = time() . '.' . $request->file->getClientOriginalName();
            $request->file->move(public_path('img/white-paper/files/'), $file);

        }

        $create_whitepaper = WhitePaper::findOrFail($id);
        $create_whitepaper->title = $request->title;
        $create_whitepaper->slug = Str::slug($request->title);
        $create_whitepaper->meta_title = $request->meta_title;
        $create_whitepaper->meta_description = $request->meta_description;
        $create_whitepaper->meta_keywords = $request->meta_keywords;
        $create_whitepaper->priority = $request->priority;
        $create_whitepaper->status = $request->status;
        $create_whitepaper->service_category_id = 0;
        $create_whitepaper->sub_service_category_id = 0;
        $create_whitepaper->image =  $image== null ? $create_whitepaper->image : $image;
        $create_whitepaper->image_main =  $image_main== null ? $create_whitepaper->image_main : $image_main;
        $create_whitepaper->file =  $file== null ? $create_whitepaper->file : $file;
        $create_whitepaper->save();

        return redirect('/admin/whitepaper/view')
            ->with('success','WhitePaper Updated Successfully');

    }

    public function whitepaper_delete($id){

        $delete_whitepaper = WhitePaper::findOrFail($id);
        $delete_whitepaper->delete();

        return redirect('/admin/whitepaper/view')
            ->with('delete','WhitePaper Deleted Successfully');
    }

    public function whitepaper_create_save(Request $request){

        $request->validate([
            "title" => "required",
            "meta_title" => "required",
            "meta_description" => "required",
//            "meta_keywords" => "required",
            "priority" => "required",
            "status" => "required",
            "image" => "required",
            "image_main" => "required",
            "file" => "required"
        ]);


        $image  = null;

        if ($request->image != null) {
            $image = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move(public_path('img/white-paper/'), $image);

        }

        $image_main  = null;

        if ($request->image_main != null) {
            $image_main = time() . '.' . $request->image_main->getClientOriginalName();
            $request->image_main->move(public_path('img/white-paper/main/'), $image_main);

        }

        $file  = null;

        if ($request->file != null) {
            $file = time() . '.' . $request->file->getClientOriginalName();
            $request->file->move(public_path('img/white-paper/files/'), $file);

        }

        $create_whitepaper = new WhitePaper();
        $create_whitepaper->title = $request->title;
        $create_whitepaper->slug = Str::slug($request->title);
        $create_whitepaper->meta_title = $request->meta_title;
        $create_whitepaper->meta_description = $request->meta_description;
        $create_whitepaper->meta_keywords = $request->meta_keywords;
        $create_whitepaper->priority = $request->priority;
        $create_whitepaper->status = $request->status;
        $create_whitepaper->service_category_id = 0;
        $create_whitepaper->sub_service_category_id = 0;
        $create_whitepaper->image = $image;
        $create_whitepaper->image_main = $image_main;
        $create_whitepaper->file = $file;
        $create_whitepaper->save();

        return redirect('/admin/whitepaper/view')
            ->with('success','WhitePaper Created Successfully');
    }

    /**
     *
     * Newsroom
     *
     */

    public function newsroom(){

        $get_newsroom_data = NewsRoom::latest()->get();
        return view('admin.pages.newsroom.newsroom',compact('get_newsroom_data'));
    }

    public function newsroom_create(){
        return view('admin.pages.newsroom.create');
    }

    public function newsroom_edit($id){

        $get_newsroom_data = NewsRoom::where('id',$id)->first();
        return view('admin.pages.newsroom.edit_newsroom',compact('get_newsroom_data'));
    }

    public function newsroom_update_save(Request $request,$id){

        $request->validate([
            'text' => 'required',
            'article_link' => 'required',
            'custom_date' => 'required',
            'priority' => 'required',
            'status' => 'required'
        ]);

        $thumbnail  = null;

        if ($request->thumbnail != null) {
            $thumbnail = time() . '.' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('img/newsroom/'), $thumbnail);

        }

        $create_newsroom = NewsRoom::findOrFail($id);
        $create_newsroom->text = $request->text;
        $create_newsroom->article_link = $request->article_link;
        $create_newsroom->custom_date = $request->custom_date;
        $create_newsroom->priority = $request->priority;
        $create_newsroom->thumbnail =  $thumbnail== null ? $create_newsroom->thumbnail : $thumbnail;
        $create_newsroom->status = $request->status;
        $create_newsroom->save();

        return redirect('/admin/newsroom/view')
            ->with('success','NewsRoom Updated Successfully');

    }

    public function newsroom_delete($id){

        $delete_newsroom = NewsRoom::findOrFail($id);
        $delete_newsroom->delete();

        return redirect('/admin/newsroom/view')
            ->with('delete','NewsRoom Deleted Successfully');
    }

    public function newsroom_create_save(Request $request){

        $request->validate([
            'text' => 'required',
            'article_link' => 'required',
            'custom_date' => 'required',
            'priority' => 'required',
            'thumbnail' => 'required',
            'status' => 'required'
        ]);

        $thumbnail  = null;

        if ($request->thumbnail != null) {
            $thumbnail = time() . '.' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('img/newsroom/'), $thumbnail);

        }

        $create_newsroom = new NewsRoom();
        $create_newsroom->text = $request->text;
        $create_newsroom->article_link = $request->article_link;
        $create_newsroom->custom_date = $request->custom_date;
        $create_newsroom->priority = $request->priority;
        $create_newsroom->thumbnail = $thumbnail;
        $create_newsroom->status = $request->status;
        $create_newsroom->save();

        return redirect('/admin/newsroom/view')
            ->with('success','NewsRoom Created Successfully');
    }


    /**
     *
     * Photo Gallery
     *
     */

    public function gallery_photo(){

        $get_gallery_photo_data = PhotoGallery::latest()->get();
        return view('admin.pages.gallery.photo.photo',compact('get_gallery_photo_data'));
    }

    public function gallery_photo_create(){
        return view('admin.pages.gallery.photo.create');
    }

    public function gallery_photo_edit($id){

        $get_gallery_photo_data = PhotoGallery::where('id',$id)->first();
        return view('admin.pages.gallery.photo.edit_photo',compact('get_gallery_photo_data'));
    }

    public function gallery_photo_update_save(Request $request,$id){

        $request->validate([
            'text' => 'required',
            'custom_date' => 'required',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $image = null;
        $thumbnail  = null;

        if ($request->image != null){

            $image = time().'.'.$request->image->getClientOriginalName();
            $request->image->move(public_path('img/picture-gallery/original/'), $image);

        }

        if ($request->thumbnail != null) {
            $thumbnail = time() . '.' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('img/picture-gallery/thumbnail/'), $thumbnail);

        }


        $create_gallery_photo = PhotoGallery::findOrFail($id);
        $create_gallery_photo->text = $request->text;
        $create_gallery_photo->custom_date = $request->custom_date;
        $create_gallery_photo->priority = $request->priority;
        $create_gallery_photo->image = $image== null ? $create_gallery_photo->image : $image;
        $create_gallery_photo->thumbnail = $thumbnail== null ? $create_gallery_photo->thumbnail : $thumbnail;

        $create_gallery_photo->status = $request->status;
        $create_gallery_photo->save();

        return redirect('/admin/gallery/photo/view')
            ->with('success','Photo Gallery Updated Successfully');

    }

    public function gallery_photo_delete($id){

        $delete_gallery_photo = PhotoGallery::findOrFail($id);
        $delete_gallery_photo->delete();

        return redirect('/admin/gallery/photo/view')
            ->with('delete','Photo Gallery Deleted Successfully');
    }

    public function gallery_photo_create_save(Request $request){

        $request->validate([
            'text' => 'required',
            'custom_date' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'image' => 'required',
            'thumbnail' => 'required'
        ]);

        $image = null;
        $thumbnail  = null;

        if ($request->image != null){

            $image = time().'.'.$request->image->getClientOriginalName();
            $request->image->move(public_path('img/picture-gallery/original/'), $image);

        }

        if ($request->thumbnail != null) {
            $thumbnail = time() . '.' . $request->thumbnail->getClientOriginalName();
            $request->thumbnail->move(public_path('img/picture-gallery/thumbnail/'), $thumbnail);

        }

        $create_gallery_photo = new PhotoGallery();
        $create_gallery_photo->text = $request->text;
        $create_gallery_photo->custom_date = $request->custom_date;
        $create_gallery_photo->priority = $request->priority;
        $create_gallery_photo->image = $image;
        $create_gallery_photo->thumbnail = $thumbnail;
        $create_gallery_photo->status = $request->status;
        $create_gallery_photo->save();

        return redirect('/admin/gallery/photo/view')
            ->with('success','Photo Gallery Created Successfully');
    }



    /**
     *
     * Gallery Video
     *
     */

    public function gallery_video(){

        $get_gallery_video_data = VideoGallery::latest()->get();
        return view('admin.pages.gallery.video.video',compact('get_gallery_video_data'));
    }

    public function gallery_video_create(){
        return view('admin.pages.gallery.video.create');
    }

    public function gallery_video_edit($id){

        $get_gallery_video_data = VideoGallery::where('id',$id)->first();
        return view('admin.pages.gallery.video.edit_video',compact('get_gallery_video_data'));
    }

    public function gallery_video_update_save(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'priority' => 'required',
            'status' => 'required'
        ]);

        $create_gallery_video = VideoGallery::findOrFail($id);
        $create_gallery_video->title = $request->title;
        $create_gallery_video->video_link = $request->video_link;
        $create_gallery_video->priority = $request->priority;
        $create_gallery_video->status = $request->status;
        $create_gallery_video->save();

        return redirect('/admin/gallery/video/view')
            ->with('success','Video Gallery Updated Successfully');

    }

    public function gallery_video_delete($id){

        $delete_gallery_video = VideoGallery::findOrFail($id);
        $delete_gallery_video->delete();

        return redirect('/admin/gallery/video/view')
            ->with('delete','Video Gallery Deleted Successfully');
    }

    public function gallery_video_create_save(Request $request){

        $request->validate([
            'title' => 'required',
            'video_link' => 'required',
            'priority' => 'required',
            'status' => 'required'
        ]);

        $create_gallery_video = new VideoGallery();
        $create_gallery_video->title = $request->title;
        $create_gallery_video->video_link = $request->video_link;
        $create_gallery_video->priority = $request->priority;
        $create_gallery_video->status = $request->status;
        $create_gallery_video->save();

        return redirect('/admin/gallery/video/view')
            ->with('success','Video Gallery Created Successfully');
    }


    /**
     *
     * CMS
     *
     */

    public function cms(){

        $get_cms_data = CMS::latest()->get();
        return view('admin.pages.cms.cms',compact('get_cms_data'));
    }

    public function cms_create(){
        return view('admin.pages.cms.create');
    }

    public function cms_edit($id){

        $get_cms_data = CMS::where('id',$id)->first();
        return view('admin.pages.cms.edit_cms',compact('get_cms_data'));
    }

    public function cms_update_save(Request $request,$id){

        $request->validate([
            'site_url' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'status' => 'required'
        ]);


        $create_cms = CMS::findOrFail($id);
        $create_cms->site_url = $request->site_url;
        $create_cms->meta_title = $request->meta_title;
        $create_cms->meta_description = $request->meta_description;
        $create_cms->meta_keywords = $request->meta_keywords;
        $create_cms->status = $request->status;
        $create_cms->save();

        return redirect('/admin/cms/view')
            ->with('success','CMS Updated Successfully');

    }

    public function cms_delete($id){

        $delete_cms = CMS::findOrFail($id);
        $delete_cms->delete();

        return redirect('/admin/cms/view')
            ->with('delete','CMS Deleted Successfully');
    }

    public function cms_create_save(Request $request){

        $request->validate([
            'site_url' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'status' => 'required'
        ]);

        $create_cms = new CMS();
        $create_cms->site_url = $request->site_url;
        $create_cms->meta_title = $request->meta_title;
        $create_cms->meta_description = $request->meta_description;
        $create_cms->meta_keywords = $request->meta_keywords;
        $create_cms->status = $request->status;
        $create_cms->save();

        return redirect('/admin/cms/view')
            ->with('success','CMS Created Successfully');
    }


    /**
     *
     * Service Category
     *
     */

    public function services_cat_list(){

        $get_category_data = ServiceCategory::latest()->get();
        return view('admin.pages.service.category.category',compact('get_category_data'));
    }

    public function services_cat_create(){
        $get_category_data = new ServiceCategory;
        return view('admin.pages.service.category.create',compact('get_category_data'));
    }

    public function services_cat_edit($id){

        $get_category_data = ServiceCategory::where('id',$id)->first();
        return view('admin.pages.service.category.edit_category',compact('get_category_data'));
    }

    public function services_cat_update_save(Request $request,$id){

//        dd($request);

        $request->validate([
            'name' => 'required',
            'quotes' => 'required',
            'short_description' => 'required',
//            'white_paper_id' => 'required'
        ]);


        $create_category = ServiceCategory::findOrFail($id);
        $create_category->name = $request->name;
        $create_category->slug = Str::slug($request->name);
        $create_category->quotes = $request->quotes;
        $create_category->short_description = $request->short_description;
        $create_category->white_paper_id = $request->white_paper_id != null ? implode(',',$request->white_paper_id) : null;
        $create_category->priority = $request->priority;
        $create_category->status = $request->status;
        $create_category->save();

        return redirect('/admin/service/category/view')
            ->with('success','CMS Updated Successfully');

    }

    public function services_cat_delete($id){

        $delete_category = ServiceCategory::findOrFail($id);
        $delete_category->delete();

        return redirect('/admin/service/category/view')
            ->with('delete','Service Category Deleted Successfully');
    }

    public function services_cat_create_save(Request $request){

        $request->validate([
            'name' => 'required',
            'quotes' => 'required',
            'short_description' => 'required',
            'priority' => 'required',

//            'white_paper_id' => 'required'
        ]);

        $create_category = new ServiceCategory();
        $create_category->name = $request->name;
        $create_category->slug = Str::slug($request->name);
        $create_category->quotes = $request->quotes;
        $create_category->short_description = $request->short_description;
        $create_category->white_paper_id = $request->white_paper_id != null ? implode(',',$request->white_paper_id) : null;
        $create_category->priority = $request->priority;
        $create_category->status = $request->status;
        $create_category->save();

        return redirect('/admin/service/category/view')
            ->with('success','Service Category Created Successfully');
    }

    /**
     *
     * Quotes
     *
     */

    public function quotes(){

        $get_quotes_data = Quotes::latest()->get();
        return view('admin.pages.quotes.quotes',compact('get_quotes_data'));
    }

    public function quotes_create(){
        $get_quotes_data = new Quotes;
        return view('admin.pages.quotes.create',compact('get_quotes_data'));
    }

    public function quotes_edit($id){

        $get_quotes_data = Quotes::where('id',$id)->first();
        return view('admin.pages.quotes.edit_quotes',compact('get_quotes_data'));
    }

    public function quotes_update_save(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'quotes' => 'required',
            'team_id' => 'required',
            'priority' => 'required',
            'status' => 'required'

        ]);


        $user_image = null;

        if ($request->user_image != null){

            $user_image = time().'.'.$request->user_image->getClientOriginalName();
            $request->user_image->move(public_path('img/team/quotes/'), $user_image);

        }


        $create_quotes = Quotes::findOrFail($id);
        $create_quotes->name = $request->name;
        $create_quotes->designation = $request->designation;
        $create_quotes->quotes = $request->quotes;
        $create_quotes->team_id = $request->team_id;
        $create_quotes->priority = $request->priority;
        $create_quotes->status = $request->status;
        $create_quotes->user_image = $user_image == null ? $create_quotes->user_image : $user_image;
        $create_quotes->save();

        return redirect('/admin/quotes/view')
            ->with('success','Quotes Updated Successfully');

    }

    public function quotes_delete($id){

        $delete_quotes = Quotes::findOrFail($id);
        $delete_quotes->delete();

        return redirect('/admin/quotes/view')
            ->with('delete','Quotes Deleted Successfully');
    }

    public function quotes_create_save(Request $request){

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'quotes' => 'required',
            'team_id' => 'required',
            'priority' => 'required',
            'status' => 'required',
            'user_image'  => 'required'
        ]);

        $user_image = null;

        if ($request->user_image != null){

            $user_image = time().'.'.$request->user_image->getClientOriginalName();
            $request->user_image->move(public_path('img/team/quotes/'), $user_image);

        }

        $create_quotes = new Quotes();
        $create_quotes->name = $request->name;
        $create_quotes->designation = $request->designation;
        $create_quotes->quotes = $request->quotes;
        $create_quotes->team_id = $request->team_id;
        $create_quotes->priority = $request->priority;
        $create_quotes->status = $request->status;
        $create_quotes->user_image = $user_image;

        $create_quotes->save();

        return redirect('/admin/quotes/view')
            ->with('success','Quotes Created Successfully');
    }

    /**
     *
     * Media
     *
     */

    public function media(){

        $get_media_data = Media::latest()->get();
        return view('admin.pages.media.media',compact('get_media_data'));
    }

    public function media_create(){
        $get_media_data = new Media;
        return view('admin.pages.media.create',compact('get_media_data'));
    }

    public function media_edit($id){

        $get_media_data = Media::where('id',$id)->first();
        return view('admin.pages.media.edit_media',compact('get_media_data'));
    }

    public function media_update_save(Request $request,$id){

        $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'quotes' => 'required',
            'team_id' => 'required',
            'priority' => 'required',
            'status' => 'required'

        ]);


        $user_image = null;

        if ($request->user_image != null){

            $user_image = time().'.'.$request->user_image->getClientOriginalName();
            $request->user_image->move(public_path('img/team/quotes/'), $user_image);

        }


        $create_quotes = Media::findOrFail($id);
        $create_quotes->name = $request->name;
        $create_quotes->designation = $request->designation;
        $create_quotes->quotes = $request->quotes;
        $create_quotes->team_id = $request->team_id;
        $create_quotes->priority = $request->priority;
        $create_quotes->status = $request->status;
        $create_quotes->user_image = $user_image == null ? $create_quotes->user_image : $user_image;
        $create_quotes->save();

        return redirect('/admin/quotes/view')
            ->with('success','Quotes Updated Successfully');

    }

    public function media_delete($id){

        $delete_quotes = Media::findOrFail($id);
        $delete_quotes->delete();

        return redirect('/admin/media/view')
            ->with('delete','Media Deleted Successfully');
    }

    public function media_create_save(Request $request){

        $request->validate([
            'file_name' => 'required',
        ]);

        $file_name = null;

        $current_year = date("Y");
        $current_month = date("M");
        $current_month = Str::slug($current_month);
        $path = 'img/media/'.$current_year.'/'.$current_month.'/';

        if ($request->file_name != null){

            $file_name = time().'.'.$request->file_name->getClientOriginalName();
            $request->file_name->move(public_path($path), $file_name);

        }

        $create_quotes = new Media();
        $create_quotes->file_name =$file_name;
        $create_quotes->path = $path;
        $create_quotes->save();

        return redirect('/admin/media/view')
            ->with('success','Media Created Successfully');
    }


    public function change_password(){
        return view('admin.change_password');
    }


    public function updatePassword(Request $request){

        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            return redirect('/admin/change-password')->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('old_password'), $request->get('new_password')) == 0){
            return redirect('/admin/change-password')->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = Validator::make($request->all(),[
            'old_password' => 'required',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if ($validatedData->fails()){
            return redirect('/admin/change-password')->with("error",$validatedData->errors()->all()[0]);
        }

        $user = Auth::user();
        $user->password = Hash::make($request->get('new_password'));
        $user->save();

        return redirect('/admin/change-password')->with("success","Password has been successfully updated!");
    }


    /**
     *
     * Service List Style
     *
     */

    public function services_list_style_list(){

        $get_category_data = Service::latest()->get();
        return view('admin.pages.service.list_style.list_style',compact('get_category_data'));
    }

    public function services_list_style_create(){
        $get_category_data = new ServiceCategory;
        return view('admin.pages.service.list_style.create',compact('get_category_data'));
    }

    public function services_list_style_edit($id,$cat){
        $service_id = $id;

        $get_category_data = Service::where('id',$service_id)->first();

        $structure_one_title = $get_category_data->structure_one_title;

        $get_list_style_data = ServiceStructureOne::where('sub_service_category_id',$id)->get();
        return view('admin.pages.service.list_style.edit_list_style',compact('get_list_style_data','service_id','cat','structure_one_title'));
    }


    public function services_list_style_update_save(Request $request,$id){

//        $request->validate([
//            'list_text.0' => 'required',
//            'priority.0' => 'required',
//        ]);

        $get_category_f_data = Service::findOrFail($id);;
        $get_category_f_data->structure_one_title = $request->structure_one_title;
        $get_category_f_data->save();

        if ($request->list_text == null){

            $array_length = null;

        }else{

            $array_length = count($request->list_text);

        }

        $get_service_list = ServiceStructureOne::where('sub_service_category_id',$id)->get();

        foreach ($get_service_list as $key=>$get_service_data){
            $get_service_data->delete();
        }

        if ($array_length != null) {

            for ($i = 0; $i < $array_length; $i++) {

                $create_category = new ServiceStructureOne();
                $create_category->list_text = $request->list_text[$i];
                $create_category->priority = $request->priority[$i];
                $create_category->status = 1;
                $create_category->sub_service_category_id = $id;
                $create_category->service_category_id = $request->service_cat;
                $create_category->save();


            }

        }

        return redirect('/admin/service/list-style/view')
            ->with('success','List Style Updated Successfully');

    }

    public function services_list_style_delete($id){

        $delete_category = ServiceCategory::findOrFail($id);
        $delete_category->delete();

        return redirect('/admin/service/list_style/view')
            ->with('delete','Service List Style Deleted Successfully');
    }

    public function services_list_style_create_save(Request $request){

        $request->validate([
            'name' => 'required',
            'quotes' => 'required',
            'short_description' => 'required',

//            'white_paper_id' => 'required'
        ]);



        $create_category = new ServiceCategory();
        $create_category->name = $request->name;
        $create_category->slug = Str::slug($request->name);
        $create_category->quotes = $request->quotes;
        $create_category->short_description = $request->short_description;
        $create_category->white_paper_id = $request->white_paper_id != null ? implode(',',$request->white_paper_id) : null;
        $create_category->priority = $request->priority;
        $create_category->status = $request->status;
        $create_category->save();

        return redirect('/admin/service/list_style/view')
            ->with('success','Service List Style Created Successfully');
    }



    /**
     *
     * Service Icon Style
     *
     */

    public function services_icon_style_list(){

        $get_category_data = Service::latest()->get();
        return view('admin.pages.service.icon_style.icon_style',compact('get_category_data'));
    }

    public function services_icon_style_edit($id,$cat){
        $service_id = $id;

        $get_category_data = Service::where('id',$service_id)->first();

        $structure_two_title = $get_category_data->structure_two_title;


        $get_icon_style_data = ServiceStructureTwo::where('sub_service_category_id',$id)->get();

        return view('admin.pages.service.icon_style.edit_icon_style',compact('get_icon_style_data','service_id','cat','structure_two_title'));
    }

    public function services_icon_style_update_save(Request $request,$id){

//        $request->validate([
//            'text.0' => 'required',
//            'icon.0' => 'required',
//            'priority.0' => 'required',
//        ]);

        $get_category_f_data = Service::findOrFail($id);;
        $get_category_f_data->structure_two_title = $request->structure_two_title;
        $get_category_f_data->save();


        if ($request->text == null){

            $array_length = null;

        }else{

            $array_length = count($request->text);

        }


        $get_service_list = ServiceStructureTwo::where('sub_service_category_id',$id)->get();

        foreach ($get_service_list as $key=>$get_service_data){
            $get_service_data->delete();
        }

        if ($array_length != null) {

            for ($i = 0; $i < $array_length; $i++) {

                $create_category = new ServiceStructureTwo();
                $create_category->text = $request->text[$i];
                $create_category->icon = $request->icon[$i];
                $create_category->priority = $request->priority[$i];
                $create_category->status = 1;
                $create_category->sub_service_category_id = $id;
                $create_category->service_category_id = $request->service_cat;
                $create_category->save();


            }

        }

        return redirect('/admin/service/icon-style/view')
            ->with('success','Icon Style Updated Successfully');

    }

    /**
     *
     * Service Flip Style
     *
     */

    public function services_flip_style_list(){

        $get_category_data = Service::latest()->get();
        return view('admin.pages.service.flip_style.flip_style',compact('get_category_data'));
    }

    public function services_flip_style_edit($id,$cat){
        $service_id = $id;

        $get_category_data = Service::where('id',$service_id)->first();

        $structure_four_title = $get_category_data->structure_four_title;

        $get_flip_style_data = ServiceStructureFour::where('sub_service_category_id',$id)->get();
        return view('admin.pages.service.flip_style.edit_flip_style',compact('get_flip_style_data','service_id','cat','structure_four_title'));
    }

    public function services_flip_style_update_save(Request $request,$id){

//        $request->validate([
//            'front_text.0' => 'required',
//            'back_text.0' => 'required',
//            'priority.0' => 'required',
//        ]);

        $get_category_f_data = Service::findOrFail($id);;
        $get_category_f_data->structure_four_title = $request->structure_four_title;
        $get_category_f_data->save();


//        $array_length = count($request->front_text);

        if ($request->front_text == null){

            $array_length = null;

        }else{

            $array_length = count($request->front_text);

        }


        $get_service_list = ServiceStructureFour::where('sub_service_category_id',$id)->get();

        foreach ($get_service_list as $key=>$get_service_data){
            $get_service_data->delete();
        }

        if ($array_length != null) {

            for ($i = 0; $i < $array_length; $i++) {

                $create_category = new ServiceStructureFour();
                $create_category->front_text = $request->front_text[$i];
                $create_category->back_text = $request->back_text[$i];
                $create_category->priority = $request->priority[$i];
                $create_category->status = 1;
                $create_category->sub_service_category_id = $id;
                $create_category->service_category_id = $request->service_cat;
                $create_category->save();

            }

        }

        return redirect('/admin/service/flip-style/view')
            ->with('success','Flip Style Updated Successfully');

    }

}
