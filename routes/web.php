<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index')->name('home');
Route::get('/team', 'MainController@team');
Route::get('/team/{name}', 'MainController@team_details');
Route::get('/team-profile/{file}', 'MainController@team_profile');

Route::get('/services/{cat}/{name}', 'MainController@service_details')->name('servicesdetails');
Route::post('/services', 'MainController@services_form')->name('services');

Route::get('/who-we-are', 'MainController@about_us');
Route::get('/download-white-paper/{file}', 'MainController@get_white_paper_download');


Route::get('/casebook', 'MainController@casebook');
Route::get('/casebook/{slug}', 'MainController@casebook_details');
Route::get('/videogallery', 'MainController@videogallery');
Route::get('/newsroom', 'MainController@newsroom');
Route::get('/photogallery', 'MainController@photogallery');
Route::get('/white-paper', 'MainController@white_paper');
Route::get('/white-paper/{slug}', 'MainController@white_paper_details');
Route::post('/white-paper', 'MainController@white_paper_contact');

Route::get('/contact-us', 'MainController@contact');
Route::post('/contact-us', 'MainController@contact_us')->name('contact-us');

Route::get('/work-with-us', 'MainController@work_with_us');
Route::post('/work-with-us', 'MainController@work_with_us_contact');

Route::get('/industries', 'MainController@industries');
Route::get('/upcoming-event', 'MainController@upcoming_event');

Route::post('/quick-enquiry', 'MainController@quick_enquiry');
Route::post('/newsletter', 'MainController@newsletter');


Route::get("/life-at-netrika", 'MainController@life_at_netrika');
Route::get("/thank-you", 'MainController@thank_you');
//Route::get("/coming-soon", 'MainController@coming_soon');


Route::get("privacy-policy", 'MainController@privacypolicy');

Route::get("/coffee-table", 'MainController@coffee_table');

Route::get("/payu", 'MainController@payu');
Route::post("/payu", 'MainController@payu_save');

# Call Route
Route::get('payment', ['as' => 'payment', 'uses' => 'MainController@payment']);

# Status Route
Route::get('payment/status', ['as' => 'payment.status', 'uses' => 'MainController@status']);


Route::get('send-mail','MainController@mailsend');




/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', 'AdminController@index');

Route::get('/admin/home/banner', 'AdminController@home_banner');
Route::get('/admin/home/add-banner', 'AdminController@home_banner_add');
Route::post('/admin/home/add-banner','AdminController@home_banner_add_save')->name('home_banner.save');

Route::get('/admin/home/banner/edit/{key}', 'AdminController@home_banner_edit');
Route::post('/admin/home/add-banner/edit/{update}','AdminController@home_banner_update_save')->name('home_banner.update');

Route::delete('/admin/home/banner/delete/{key}', 'AdminController@home_banner_delete')->name('banner.destroy');


//testimonial


Route::get('/admin/home/testimonial', 'AdminController@home_testimonial');
Route::get('/admin/home/add-testimonial', 'AdminController@home_testimonial_add');
Route::post('/admin/home/add-testimonial','AdminController@home_testimonial_add_save')->name('home_testimonial.save');

Route::get('/admin/home/testimonial/edit/{key}', 'AdminController@home_testimonial_edit');
Route::post('/admin/home/add-testimonial/edit/{update}','AdminController@home_testimonial_update_save')->name('home_testimonial.update');

Route::delete('/admin/home/testimonial/delete/{key}', 'AdminController@home_testimonial_delete')->name('testimonial.destroy');



//newsboard


Route::get('/admin/home/newsboard', 'AdminController@home_newsboard');
Route::get('/admin/home/add-newsboard', 'AdminController@home_newsboard_add');
Route::post('/admin/home/add-newsboard','AdminController@home_newsboard_add_save')->name('home_newsboard.save');

Route::get('/admin/home/newsboard/edit/{key}', 'AdminController@home_newsboard_edit');
Route::post('/admin/home/add-newsboard/edit/{update}','AdminController@home_newsboard_update_save')->name('home_newsboard.update');

Route::delete('/admin/home/newsboard/delete/{key}', 'AdminController@home_newsboard_delete')->name('newsboard.destroy');


//Services routes

Route::get('/admin/services/view', 'AdminController@services_list');
Route::get('/admin/services/create', 'AdminController@services_create');
Route::post('/admin/services/create','AdminController@services_create_save')->name('services_create_save.save');

Route::get('/admin/services/edit/{key}', 'AdminController@services_edit');
Route::post('/admin/services/edit/{update}','AdminController@services_update_save')->name('services.update');

Route::delete('/admin/services/delete/{key}', 'AdminController@services_delete')->name('services.destroy');


//Services list style routes

Route::get('/admin/service/list-style/view', 'AdminController@services_list_style_list');
Route::get('/admin/service/list-style/create', 'AdminController@services_list_style_create');
Route::post('/admin/service/list-style/create','AdminController@services_list_style_create_save')->name('services_list_style_create_save.save');

Route::get('/admin/service/list-style/edit/{key}/{cat}', 'AdminController@services_list_style_edit');
Route::post('/admin/service/list-style/edit/{update}','AdminController@services_list_style_update_save')->name('services_list_style.update');

Route::delete('/admin/service/list-style/delete/{key}', 'AdminController@services_list_style_delete')->name('services_list_style.destroy');


//Services icon style routes

Route::get('/admin/service/icon-style/view', 'AdminController@services_icon_style_list');
Route::get('/admin/service/icon-style/create', 'AdminController@services_icon_style_create');
Route::post('/admin/service/icon-style/create','AdminController@services_icon_style_create_save')->name('services_icon_style_create_save.save');

Route::get('/admin/service/icon-style/edit/{key}/{cat}', 'AdminController@services_icon_style_edit');
Route::post('/admin/service/icon-style/edit/{update}','AdminController@services_icon_style_update_save')->name('services_icon_style.update');

Route::delete('/admin/service/icon-style/delete/{key}', 'AdminController@services_icon_style_delete')->name('services_icon_style.destroy');

//Services flip style routes

Route::get('/admin/service/flip-style/view', 'AdminController@services_flip_style_list');
Route::get('/admin/service/flip-style/create', 'AdminController@services_flip_style_create');
Route::post('/admin/service/flip-style/create','AdminController@services_flip_style_create_save')->name('services_flip_style_create_save.save');

Route::get('/admin/service/flip-style/edit/{key}/{cat}', 'AdminController@services_flip_style_edit');
Route::post('/admin/service/flip-style/edit/{update}','AdminController@services_flip_style_update_save')->name('services_flip_style.update');

Route::delete('/admin/service/flip-style/delete/{key}', 'AdminController@services_flip_style_delete')->name('services_flip_style.destroy');




//Services Category routes



Route::get('/admin/service/category/view', 'AdminController@services_cat_list');
Route::get('/admin/service/category/create', 'AdminController@services_cat_create');
Route::post('/admin/service/category/create','AdminController@services_cat_create_save')->name('services_cat_create_save.save');

Route::get('/admin/service/category/edit/{key}', 'AdminController@services_cat_edit');
Route::post('/admin/service/category/edit/{update}','AdminController@services_cat_update_save')->name('services_cat.update');

Route::delete('/admin/service/category/delete/{key}', 'AdminController@services_cat_delete')->name('services_cat.destroy');



//Team routes

Route::get('/admin/team/view', 'AdminController@team');
Route::get('/admin/team/create', 'AdminController@team_create');
Route::post('/admin/team/create','AdminController@team_create_save')->name('team_create_save.save');

Route::get('/admin/team/edit/{key}', 'AdminController@team_edit');
Route::post('/admin/team/edit/{update}','AdminController@team_update_save')->name('team.update');

Route::delete('/admin/team/delete/{key}', 'AdminController@team_delete')->name('team.destroy');

//Casebook routes

Route::get('/admin/casebook/view', 'AdminController@casebook');
Route::get('/admin/casebook/create', 'AdminController@casebook_create');
Route::post('/admin/casebook/create','AdminController@casebook_create_save')->name('casebook_create_save.save');

Route::get('/admin/casebook/content', 'AdminController@casebook_content');

Route::get('/admin/casebook/content/edit/{key}', 'AdminController@casebook_content_edit');
Route::post('/admin/casebook/content/edit/{update}','AdminController@casebook_content_update')->name('casebook_content_update.update');

Route::get('/admin/casebook/edit/{key}', 'AdminController@casebook_edit');
Route::post('/admin/casebook/edit/{update}','AdminController@casebook_update_save')->name('casebook.update');

Route::delete('/admin/casebook/delete/{key}', 'AdminController@casebook_delete')->name('casebook.destroy');

//Newsroom routes

Route::get('/admin/newsroom/view', 'AdminController@newsroom');
Route::get('/admin/newsroom/create', 'AdminController@newsroom_create');
Route::post('/admin/newsroom/create','AdminController@newsroom_create_save')->name('newsroom_create_save.save');

Route::get('/admin/newsroom/edit/{key}', 'AdminController@newsroom_edit');
Route::post('/admin/newsroom/edit/{update}','AdminController@newsroom_update_save')->name('newsroom.update');

Route::delete('/admin/newsroom/delete/{key}', 'AdminController@newsroom_delete')->name('newsroom.destroy');

//Career routes

Route::get('/admin/career/view', 'AdminController@career');
Route::get('/admin/career/create', 'AdminController@career_create');
Route::post('/admin/career/create','AdminController@career_create_save')->name('career_create_save.save');

Route::get('/admin/career/edit/{key}', 'AdminController@career_edit');
Route::post('/admin/career/edit/{update}','AdminController@career_update_save')->name('career.update');

Route::delete('/admin/career/delete/{key}', 'AdminController@career_delete')->name('career.destroy');


//Whitepaper routes

Route::get('/admin/whitepaper/view', 'AdminController@whitepaper');
Route::get('/admin/whitepaper/create', 'AdminController@whitepaper_create');
Route::post('/admin/whitepaper/create','AdminController@whitepaper_create_save')->name('whitepaper_create_save.save');

Route::get('/admin/whitepaper/edit/{key}', 'AdminController@whitepaper_edit');
Route::post('/admin/whitepaper/edit/{update}','AdminController@whitepaper_update_save')->name('whitepaper.update');

Route::delete('/admin/whitepaper/delete/{key}', 'AdminController@whitepaper_delete')->name('whitepaper.destroy');


//Photo gallery routes

Route::get('/admin/gallery/photo/view', 'AdminController@gallery_photo');
Route::get('/admin/gallery/photo/create', 'AdminController@gallery_photo_create');
Route::post('/admin/gallery/photo/create','AdminController@gallery_photo_create_save')->name('gallery_photo_create_save.save');

Route::get('/admin/gallery/photo/edit/{key}', 'AdminController@gallery_photo_edit');
Route::post('/admin/gallery/photo/edit/{update}','AdminController@gallery_photo_update_save')->name('gallery_photo.update');

Route::delete('/admin/gallery/photo/delete/{key}', 'AdminController@gallery_photo_delete')->name('gallery_photo.destroy');


//Video gallery routes

Route::get('/admin/gallery/video/view', 'AdminController@gallery_video');
Route::get('/admin/gallery/video/create', 'AdminController@gallery_video_create');
Route::post('/admin/gallery/video/create','AdminController@gallery_video_create_save')->name('gallery_video_create_save.save');

Route::get('/admin/gallery/video/edit/{key}', 'AdminController@gallery_video_edit');
Route::post('/admin/gallery/video/edit/{update}','AdminController@gallery_video_update_save')->name('gallery_video.update');

Route::delete('/admin/gallery/video/delete/{key}', 'AdminController@gallery_video_delete')->name('gallery_video.destroy');

//CMS routes

Route::get('/admin/cms/view', 'AdminController@cms');
Route::get('/admin/cms/create', 'AdminController@cms_create');
Route::post('/admin/cms/create','AdminController@cms_create_save')->name('cms_create_save.save');

Route::get('/admin/cms/edit/{key}', 'AdminController@cms_edit');
Route::post('/admin/cms/edit/{update}','AdminController@cms_update_save')->name('cms.update');

Route::delete('/admin/cms/delete/{key}', 'AdminController@cms_delete')->name('cms.destroy');


//Quotes routes

Route::get('/admin/quotes/view', 'AdminController@quotes');
Route::get('/admin/quotes/create', 'AdminController@quotes_create');
Route::post('/admin/quotes/create','AdminController@quotes_create_save')->name('quotes_create_save.save');

Route::get('/admin/quotes/edit/{key}', 'AdminController@quotes_edit');
Route::post('/admin/quotes/edit/{update}','AdminController@quotes_update_save')->name('quotes.update');

Route::delete('/admin/quotes/delete/{key}', 'AdminController@quotes_delete')->name('quotes.destroy');

//Media routes

Route::get('/admin/media/view', 'AdminController@media');
Route::get('/admin/media/create', 'AdminController@media_create');
Route::post('/admin/media/create','AdminController@media_create_save')->name('media_create_save.save');

Route::get('/admin/media/edit/{key}', 'AdminController@media_edit');
Route::post('/admin/media/edit/{update}','AdminController@media_update_save')->name('media.update');

Route::delete('/admin/media/delete/{key}', 'AdminController@media_delete')->name('media.destroy');


//Admin Dash routes

Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/change-password', 'AdminController@change_password');
Route::put('/update-password', ['as' => 'update-password', 'uses' => 'AdminController@updatePassword']);



Route::get('/admin/leads/contactus', 'AdminController@contactus');
Route::get('/admin/leads/quick-enquiries', 'AdminController@quick_enquiries');
Route::get('/admin/leads/white-papers', 'AdminController@white_papers');
Route::get('/admin/leads/work-with-us', 'AdminController@work_with_us');
Route::get('/admin/leads/services', 'AdminController@services');
Route::get('/admin/leads/payment', 'AdminController@payment');

Route::get('/admin/leads/newsletter', 'AdminController@newsletter');

//
//Route::get("/who-we-are", function(){
//    return View::make("pages.who_are_we");
//});



//Route::get("/services", function(){
//    return View::make("pages.services");
//});


Route::get("/teamsecond", function(){
    return View::make("pages.teamperson");
});

Route::get("/news", function(){
    return View::make("pages.news");
});



Route::get("/white-paper-inner", function(){
    return View::make("pages.white-paper-inner");
});


Route::get("/payment-status", function(){
    return View::make("pages.paysuccess");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/home", function(){
    return redirect('/admin');
});




Route::get('/pay-now', function(){
    return redirect('/payu', 301);
});

Route::get('/Background-Checks/employee-screening', function(){return redirect(' /services/background-checks/basic-checks', 301);
});
Route::get('/media', function(){return redirect('/newsroom', 301);
});
Route::get('/Brand-Protection-and-IPR/cyber-surveillance', function(){return redirect('/services/brand-protection/online-monitoring', 301);
});

Route::get('/Due-Diligence/vendor-due-diligence', function(){return redirect('/services/due-diligence/due-diligence', 301);
});

Route::get('pages/uae/due-diligence-in-uae', function () {
    return view('/pages/uae/due-diligence-in-uae');
});

Route::get('pages/uae/anti-money-laundering-aml-and-know-your-customers-kyc-in-uae', function () {
    return view('/pages/uae/anti-money-laundering-aml-and-know-your-customers-kyc-in-uae');
});

Route::get('pages/uae/background-checks-in-uae', function () {
    return view('/pages/uae/background-checks-in-uae');
});

Route::get('pages/uae/brand-protection-in-uae', function () {
    return view('/pages/uae/brand-protection-in-uae');
});

Route::get('pages/uae/e-discovery-and-cyber-forensics-in-uae', function () {
    return view('/pages/uae/e-discovery-and-cyber-forensics-in-uae');
});

Route::get('pages/uae/corporate-investigation-in-uae', function () {
    return view('/pages/uae/corporate-investigation-in-uae');
});

Route::get('pages/uae/information-security-in-uae', function () {
    return view('/pages/uae/information-security-in-uae');
});


Route::get('pages/uk/due-diligence-in-uk', function () {
    return view('/pages/uk/due-diligence-in-uk');
});

Route::get('pages/uk/forensic-investigation-in-uk', function () {
    return view('/pages/uk/forensic-investigation-in-uk');
});

Route::get('pages/uk/background-checks-in-uk', function () {
    return view('/pages/uk/background-checks-in-uk');
});

Route::get('pages/uk/company-due-diligence-in-uk', function () {
    return view('/pages/uk/company-due-diligence-in-uk');
});

Route::get('pages/uk/criminal-background-check-in-uk', function () {
    return view('/pages/uk/criminal-background-check-in-uk');
}); 


Route::get('pages/singapore/personal-data-protection-compliance-in-singapore', function () {
    return view('/pages/singapore/personal-data-protection-compliance-in-singapore');
}); 

Route::get('pages/singapore/due-diligence-in-singapore', function () {
    return view('/pages/singapore/due-diligence-in-singapore');
});

Route::get('pages/singapore/cyber-security-in-singapore', function () {
    return view('/pages/singapore/cyber-security-in-singapore');
});

Route::get('pages/singapore/gdpr-compliance-in-singapore', function () {
    return view('/pages/singapore/gdpr-compliance-in-singapore');
});

Route::get('pages/singapore/litigation-services-in-singapore', function () {
    return view('/pages/singapore/litigation-services-in-singapore'); 
});


Route::get('pages/singapore/mergers-and-acquisitions-in-singapore', function () {
    return view('/pages/singapore/mergers-and-acquisitions-in-singapore');
});

Route::get('pages/singapore/dispute-resolution-in-singapore', function () {
    return view('/pages/singapore/dispute-resolution-in-singapore');
});




Route::get('/Background-Checks/third-party-screening-vendor-due-diligence', function(){return redirect('/services/background-checks/background-checks', 301);
});

Route::get('/Information-Security', function(){return redirect('/services/information-security/information-security', 301);
});

Route::get('/survey/cyber-security-preparedness', function(){return redirect('/white-paper/cyber-security-preparedness-survey', 301);
});

Route::get('/ncbt-coffee-table-book', function(){return redirect('/coffee-table', 301);
});

Route::get('/media', function(){return redirect('/newsroom', 301);
});

Route::get('/Background-Checks', function(){return redirect('/services/background-checks/background-checks', 301);
});

Route::get('/Information-Security/security-testing-vapt-application-security', function(){return redirect('/services/information-security/security-testing%E2%80%93vapt-application-security', 301);
});

Route::get('/Brand-Protection-and-IPR/litigation-support', function(){return redirect('/services/brand-protection/enforcement-actions-offline', 301);
});



Route::get('/Information-Security/information-security-management-system', function(){return redirect('/services/information-security/information-security-management-system', 301);
});

Route::get('/blog/due-diligence/the-advantages-of-forensic-due-diligence', function(){return redirect('https://blog.netrika.com/the-advantages-of-forensic-due-diligence/', 301);
});

Route::get('/Fraud-Risk-Management/anti-bribery-corruption-compliance', function(){return redirect('/services/forensic-investigation/anti-bribery-and-corruption%E2%80%93investigation', 301);
});

Route::get('/Security-and-Risk-Consulting/event-security-executive-protection', function(){return redirect('/services/security-and-risk-consulting/executive-protection', 301);
});

Route::get('/Fraud-Risk-Management/mystery-shopping', function(){return redirect('/services/forensic-investigation/mystery-shopping', 301);
});

Route::get('/blog/investigations/an-overview-on-corporate-investigation-for-business-continuity-of-your-company', function(){return redirect('https://blog.netrika.com/an-overview-on-corporate-investigation-for-business-continuity-of-your-company/', 301);
});


Route::get('/Due-Diligence/counter-party-due-diligence', function(){return redirect('/services/due-diligence/counterparty-due-diligence', 301);
});

Route::get('/blog/brand-protection/impact-on-counterfeiting', function(){return redirect('https://blog.netrika.com/impact-on-counterfeiting-current-market-response__trashed/', 301);
});

Route::get('/Due-Diligence/integrity-due-diligence', function(){return redirect('/services/due-diligence/integrity-due-diligence', 301);
});

Route::get('/Security-and-Risk-Consulting/security-audits', function(){return redirect('/services/security-and-risk-consulting/security-audits', 301);
});


Route::get('/Security-and-Risk-Consulting/threat-risk-assessment', function(){return redirect('/services/security-and-risk-consulting/threat-risk-assessment', 301);
});

Route::get('/Fraud-Risk-Management/process-audit-and-process-reviews', function(){return redirect('/services/forensic-investigation/forensic-investigation', 301);
});

Route::get('/career', function(){return redirect('/work-with-us/', 301);
});

Route::get('/work-life-at-netrika', function(){return redirect('/life-at-netrika', 301);
});

Route::get('/our-value', function(){return redirect('/who-we-are', 301);
});

Route::get('/GDPR-Compliance', function(){return redirect('/services/information-security/gdpr-compliance', 301);
});

Route::get('/Fraud-Risk-Management/discreet-background-checks-integrity-checks', function(){return redirect('/services/forensic-investigation/forensic-investigation', 301);
});

Route::get('/Fraud-Risk-Management/forensics-due-diligence', function(){return redirect('/services/forensic-investigation/forensic-investigation', 301);
});

Route::get('/Due-Diligence', function(){return redirect('/services/due-diligence/due-diligence', 301);
});

Route::get('/Brand-Protection-and-IPR/anti-piracy-anti-counterfieting', function(){return redirect('/services/brand-protection/anti-piracy-and-anti-counterfeiting', 301);
});

Route::get('/Information-Security/vendor-risk-management', function(){return redirect('/services/information-security/vendor-risk-management', 301);
});

Route::get('/Security-and-Risk-Consulting/emergency-response-crisis-management', function(){return redirect('/services/security-and-risk-consulting/crisis-management-and%20-business-continuity-planning', 301);
});

Route::get('/Fraud-Risk-Management/corporate-fraud-investigations-assessments', function(){return redirect('/services/forensic-investigation/fraud-risk-assessment-fraud-risk-management', 301);
});

Route::get('/Fraud-Risk-Management/whistle-blower-vigil-mechanism', function(){return redirect('/services/forensic-investigation/whistle-blower-line-management', 301);
});

Route::get('/Security-and-Risk-Consulting/security-design-engineering', function(){return redirect('/services/security-and-risk-consulting/security-and-engineering-design', 301);
});

Route::get('/Information-Security/information-security-training-and-awareness', function(){return redirect('/services/information-security/information-security-training-and-awareness', 301);
});

Route::get('/Brand-Protection-and-IPR/enforcement-actions-civil-criminal', function(){return redirect('/services/brand-protection/enforcement-actions-offline', 301);
});

Route::get('/Brand-Protection-and-IPR', function(){return redirect('/services/brand-protection/brand-protection', 301);
});

Route::get('/Security-and-Risk-Consulting', function(){return redirect('/services/security-and-risk-consulting/security-and-risk-consulting', 301);
});

Route::get('/Due-Diligence/senior-management-due-diligence', function(){return redirect('/services/due-diligence/senior-management-due-diligence', 301);
});

Route::get('/Fraud-Risk-Management', function(){return redirect('/services/forensic-investigation/fraud-risk-assessment-fraud-risk-management', 301);
});

Route::get('/case-study', function(){return redirect('/casebook', 301);
});

Route::get('/about-us', function(){return redirect('/who-we-are', 301);
});

Route::get('/Information-Security/get-free-quote', function(){return redirect('/contact-us', 301);
});

Route::get('/our-team', function(){return redirect('/team', 301);
});

Route::get('/Information-Security/business-continuity-management-system', function(){return redirect('/services/information-security/business-continuity-management-system', 301);
});

Route::get('/blog/investigations/an-overview-on-fraud-investigation', function(){return redirect('https://blog.netrika.com/an-overview-on-fraud-investigation/', 301);
});

Route::get('/blog/brand-protection/importance-of-data-security-for-privacy-and-protection-of-an-enterprise', function(){return redirect('https://blog.netrika.com/importance-of-data-security-for-privacy-and-protection-of-an-enterprise/', 301);
});

Route::get('/sanjay', function(){return redirect('/team/sanjay-kaushik', 301);
});

Route::get('/aashish', function(){return redirect('/team/aashish-taneja', 301);
});

Route::get('/dhruv', function(){return redirect('/team/dhruv-maingi', 301);
});

Route::get('/sanganagouda', function(){return redirect('/team/col-sanganagouda-dhawalgi', 301);
});

Route::get('/munies', function(){return redirect('/team', 301);
});

Route::get('/parakrama', function(){return redirect('/team/col-parakrama-dissanayake', 301);
});

Route::get('/vaibhav', function(){return redirect('/team', 301);
});

Route::get('/angelo', function(){return redirect('/team/angelo-bani', 301);
});

Route::get('/suruchi', function(){return redirect('/team/suruchi-gaur', 301);
});

Route::get('/pravin', function(){return redirect('/team/pravin-parab', 301);
});

Route::get('/ashutosh', function(){return redirect('/team/ashoutosh-chaudhary', 301);
});

Route::get('/rajesh', function(){return redirect('/team/rajesh-kumar', 301);
});

Route::get('/ketan-mehta', function(){return redirect('/team/ketan-mehta', 301);
});

Route::get('/kartik-vig', function(){return redirect('/team/kartik-vig', 301);
});

Route::get('/images/netrika-consulting-pvt-ltd-brochure.pdf', function(){return redirect('/pdf/netrika-consulting-pvt-ltd-brochure.pdf', 301);
});

Route::get('/case-study/dispute-resolved-after-forensic-study', function(){return redirect('/casebook/dispute-resolved-after-forensic-study', 301);
});

Route::get('/case-study/challenging-verification-for-employee-background', function(){return redirect('/casebook/challenging-verification-for-employee-background', 301);
});

Route::get('/case-study/forensic-accounting-leads-to-improved-business-process', function(){return redirect('/casebook/forensic-accounting-leads-to-improved-business-process', 301);
});

Route::get('/case-study/real-estate-ethics-concern-addressed', function(){return redirect('/casebook/real-estate-ethics-concern-addressed', 301);
});

Route::get('/case-study/better-deal-after-actionable-information', function(){return redirect('/casebook/real-estate-ethics-concern-addressed', 301);
});

Route::get('/case-study/forensic-audit-that-capped-leakage', function(){return redirect('/casebook/forensic-audit-that-capped-leakage', 301);
});

Route::get('/case-study/integrity-check-of-promoter-family', function(){return redirect('/casebook/integrity-check-of-promoter-family', 301);
});

Route::get('/case-study/integrity-check-of-a-high-performer', function(){return redirect('/casebook/integrity-check-of-a-high-performer', 301);
});

Route::get('/blog/training-certifications', function(){return redirect('https://blog.netrika.com/category/training-and-certification/', 301);
});

Route::get('/blog/fraud-risk-management', function(){return redirect('https://blog.netrika.com/category/fraud-risk-management/', 301);
});

Route::get('/blog/information-security', function(){return redirect('https://blog.netrika.com/category/information-security/', 301);
});

Route::get('/blog/background-check', function(){return redirect('https://blog.netrika.com/category/background-check/', 301);
});

Route::get('/blog/brand-protection', function(){return redirect('https://blog.netrika.com/category/brand-protection/', 301);
});

Route::get('/blog/cyber-security', function(){return redirect('https://blog.netrika.com/category/cyber-security/', 301);
});

Route::get('/blog/risk-management', function(){return redirect('https://blog.netrika.com/category/risk-management/', 301);
});

Route::get('/blog/business-security', function(){return redirect('https://blog.netrika.com/category/business-security/', 301);
});

Route::get('/blog/due-diligence', function(){return redirect('https://blog.netrika.com/category/due-diligence/', 301);
});

Route::get('/blog/investigations', function(){return redirect('https://blog.netrika.com/category/investigations/', 301);
});

Route::get('/blog/forensics', function(){return redirect('https://blog.netrika.com/category/forensics/', 301);
});

Route::get('/blog', function(){return redirect('https://blog.netrika.com/', 301);
});

Route::get('/blog/training-certifications/clpos-certified-loss-prevention-and-operations-specialist', function(){return redirect('https://blog.netrika.com/clpos-certified-loss-prevention-and-operations-specialist/', 301);
});

Route::get('/blog/training-certifications/cats-certified-anti-terrorism-specialist', function(){return redirect('https://blog.netrika.com/cats-certified-anti-terrorism-specialist/', 301);
});

Route::get('/blog/training-certifications/ccps-certified-crime-prevention-specialist', function(){return redirect('https://blog.netrika.com/ccps-certified-crime-prevention-specialist/', 301);
});

Route::get('/blog/training-certifications/certificate-corporate-security-management-specialist-ccsms', function(){return redirect('https://blog.netrika.com/certificate-corporate-security-management-specialist-ccsms/', 301);
});

Route::get('/blog/fraud-risk-management/how-whistle-blower-friendly-is-your-workplace', function(){return redirect('https://blog.netrika.com/how-whistle-blower-friendly-is-your-workplace/', 301);
});

Route::get('/blog/fraud-risk-management/the-pros-and-cons-of-mystery-shopping', function(){return redirect('https://blog.netrika.com/the-pros-and-cons-of-mystery-shopping/', 301);
});

Route::get('/blog/fraud-risk-management/reasons-to-hire-netrika-for-mystery-shopping', function(){return redirect('https://blog.netrika.com/reasons-to-hire-netrika-for-mystery-shopping/', 301);
});

Route::get('/blog/information-security/7-most-important-things-for-information-security-training-program', function(){return redirect('/https://blog.netrika.com/7-most-important-things-for-information-security-training-program/', 301);
});

Route::get('/blog/information-security/what-is-penetration-testing-and-why-it-is-so-important', function(){return redirect('https://blog.netrika.com/what-is-penetration-testing-and-why-it-is-so-important/', 301);
});

Route::get('/blog/information-security/information-security-audit', function(){return redirect('https://blog.netrika.com/information-security-audit/', 301);
});

Route::get('/blog/information-security/fraud-protection-and-information-security-services', function(){return redirect('https://blog.netrika.com/fraud-protection-and-information-security-services/', 301);
});

Route::get('/blog/information-security/some-information-security-suggestions-for-businesses', function(){return redirect('https://blog.netrika.com/some-information-security-suggestions-for-businesses/', 301);
});

Route::get('/blog/background-check/why-is-background-check-important-at-the-time-of-pre-employment-screening', function(){return redirect('https://blog.netrika.com/why-is-background-check-important-at-the-time-of-pre-employment-screening/', 301);
});

Route::get('/blog/background-check/the-lowdown-on-background-checks', function(){return redirect('https://blog.netrika.com/the-lowdown-on-background-checks/', 301);
});

Route::get('/blog/background-check/the-different-facets-of-employee-screening-in-india', function(){return redirect('https://blog.netrika.com/the-different-facets-of-employee-screening-in-india/', 301);
});

Route::get('/blog/background-check/some-important-reasons-for-conducting-background-checks', function(){return redirect('https://blog.netrika.com/some-important-reasons-for-conducting-background-checks/', 301);
});

Route::get('/blog/background-check/netrika-and-background-screening-services-in-india', function(){return redirect('https://blog.netrika.com/netrika-and-background-screening-services-in-india/', 301);
});

Route::get('/blog/background-check/mistakes-the-background-verification-company-in-india-never-makes', function(){return redirect('https://blog.netrika.com/mistakes-the-background-verification-company-in-india-never-makes/', 301);
});

Route::get('/blog/background-check/employee-background-checks-in-india-is-vital-to-the-recruitment-process', function(){return redirect('https://blog.netrika.com/employee-background-checks-in-india-is-vital-to-the-recruitment-process/', 301);
});

Route::get('/blog/background-check/employee-background-checks-company-in-india-makes-the-job-of-employer-easier', function(){return redirect('https://blog.netrika.com/employee-background-checks-company-in-india-makes-the-job-of-employer-easier/', 301);
});

Route::get('/blog/background-check/employee-background-checks-services-in-india-what-does-this-involves', function(){return redirect('https://blog.netrika.com/employee-background-checks-services-in-india-what-does-this-involves/', 301);
});


Route::get('/blog/background-check/employment-background-checks-in-india-for-different-organizations', function(){return redirect('https://blog.netrika.com/employment-background-checks-in-india-for-different-organizations/', 301);
});

Route::get('/blog/background-check/the-importance-of-employment-background-checks-services-in-india', function(){return redirect('https://blog.netrika.com/the-importance-of-employment-background-checks-services-in-india/', 301);
});

Route::get('/blog/background-check/the-process-of-background-checks-services-in-india', function(){return redirect('https://blog.netrika.com/the-process-of-background-checks-services-in-india/', 301);
});

Route::get('/blog/background-check/evolution-of-background-check-what-makes-it-more-important-than-ever', function(){return redirect('https://blog.netrika.com/evolution-of-background-check-what-makes-it-more-important-than-ever/', 301);
});

Route::get('/blog/background-check/employment-check-solutions-in-india', function(){return redirect('https://blog.netrika.com/employment-check-solutions-in-india/', 301);
});

Route::get('/blog/background-check/employee-screening-and-background-check', function(){return redirect('https://blog.netrika.com/employee-screening-and-background-check/', 301);
});

Route::get('/blog/background-check/criminal-verification-services-in-india', function(){return redirect('https://blog.netrika.com/criminal-verification-services-in-india/', 301);
});

Route::get('/blog/background-check/the-importance-of-background-checks', function(){return redirect('https://blog.netrika.com/the-importance-of-background-checks/', 301);
});

Route::get('/blog/brand-protection/what-are-the-ways-in-which-a-counterfeiter-tries-to-imitate-the-original-brand', function(){return redirect('https://blog.netrika.com/what-are-the-ways-in-which-a-counterfeiter-tries-to-imitate-the-original-brand/', 301);
});

Route::get('/blog/brand-protection/how-to-plug-data-leaks-with-data-leakage-prevention', function(){return redirect('https://blog.netrika.com/how-to-plug-data-leaks-with-data-leakage-prevention/', 301);
});

Route::get('/blog/brand-protection/the-importance-and-need-for-brand-protection', function(){return redirect('https://blog.netrika.com/the-importance-and-need-for-brand-protection/', 301);
});

Route::get('/blog/brand-protection/brand-protection-company-in-india', function(){return redirect('https://blog.netrika.com/brand-protection-company-in-india/', 301);
});

Route::get('/blog/cyber-security/security-configuration-review', function(){return redirect('https://blog.netrika.com/security-configuration-review/', 301);
});

Route::get('/blog/cyber-security/qualities-of-a-good-cyber-security-company-why-netrika-is-the-best', function(){return redirect('https://blog.netrika.com/qualities-of-a-good-cyber-security-company-why-netrika-is-the-best/', 301);
});

Route::get('/blog/cyber-security/the-importance-of-it-security-services-for-a-company-or-business', function(){return redirect('https://blog.netrika.com/the-importance-of-it-security-services-for-a-company-or-business/', 301);
});

Route::get('/blog/cyber-security/some-essential-it-security-tips-for-your-organization', function(){return redirect('https://blog.netrika.com/some-essential-it-security-tips-for-your-organization/', 301);
});

Route::get('/blog/cyber-security/the-significance-of-isms-in-a-modern-day-company', function(){return redirect('https://blog.netrika.com/the-significance-of-isms-in-a-modern-day-company/', 301);
});

Route::get('/blog/cyber-security/the-importance-and-reasons-of-an-it-security-audit', function(){return redirect('https://blog.netrika.com/the-importance-and-reasons-of-an-it-security-audit/', 301);
});

Route::get('/blog/cyber-security/the-need-for-strong-anti-piracy-legislature', function(){return redirect('https://blog.netrika.com/the-need-for-strong-anti-piracy-legislature/', 301);
});

Route::get('/blog/cyber-security/why-is-cyber-security-the-need-of-the-hour', function(){return redirect('https://blog.netrika.com/what-should-your-employees-be-aware-of-during-information-security-training/', 301);
});

Route::get('/blog/cyber-security/how-cyber-surveillance-in-india-works', function(){return redirect('https://blog.netrika.com/how-cyber-surveillance-in-india-works/', 301);
});

Route::get('/blog/cyber-security/protection-against-clear-and-present-danger-with-cyber-security-services-in-india', function(){return redirect('https://blog.netrika.com/protection-against-clear-and-present-danger-with-cyber-security-services-in-india/', 301);
});

Route::get('/blog/cyber-security/need-of-cyber-surveillance-in-india', function(){return redirect('https://blog.netrika.com/need-of-cyber-surveillance-in-india/', 301);
});

Route::get('/blog/cyber-security/cyber-surveillance-in-india-service-providers', function(){return redirect('https://blog.netrika.com/cyber-surveillance-in-india-service-providers/', 301);
});


Route::get('/blog/cyber-security/phishing', function(){return redirect('https://blog.netrika.com/phishing/', 301);
});

Route::get('/blog/risk-management/identification-of-network-vulnerabilities', function(){return redirect('https://blog.netrika.com/identification-of-network-vulnerabilities/', 301);
});

Route::get('/blog/risk-management/the-importance-of-vulnerability-testing-and-its-significance', function(){return redirect('https://blog.netrika.com/the-importance-of-vulnerability-testing-and-its-significance/', 301);
});

Route::get('/blog/risk-management/the-importance-of-choosing-a-good-vapt-team', function(){return redirect('https://blog.netrika.com/the-importance-of-choosing-a-good-vapt-team/', 301);
});

Route::get('/blog/risk-management/what-are-the-nuances-of-vulnerability-assessment', function(){return redirect('https://blog.netrika.com/what-are-the-nuances-of-vulnerability-assessment/', 301);
});

Route::get('/blog/risk-management/what-are-the-advantages-of-mystery-shopping-services-in-b2b-segment', function(){return redirect('https://blog.netrika.com/what-are-the-advantages-of-mystery-shopping-services-in-b2b-segment/', 301);
});

Route::get('/blog/risk-management/what-are-the-implications-of-fraud-in-a-top-company', function(){return redirect('https://blog.netrika.com/what-are-the-implications-of-fraud-in-a-top-company/', 301);
});

Route::get('/blog/risk-management/understanding-the-nuances-of-financial-loss-protection', function(){return redirect('https://blog.netrika.com/understanding-the-nuances-of-financial-loss-protection/', 301);
});

Route::get('/blog/risk-management/the-role-of-the-auditor-in-fraud-risk-management', function(){return redirect('https://blog.netrika.com/the-role-of-the-auditor-in-fraud-risk-management/', 301);
});

Route::get('/blog/risk-management/usefulness-of-mystery-shopping-in-india', function(){return redirect('https://blog.netrika.com/usefulness-of-mystery-shopping-in-india/', 301);
});

Route::get('/blog/risk-management/security-and-risk-management-in-india', function(){return redirect('https://blog.netrika.com/security-and-risk-management-in-india/', 301);
});

Route::get('/blog/business-security/ten-years-after-26-11-measures-that-can-keep-your-business-safe', function(){return redirect('https://blog.netrika.com/ten-years-after-26-11-measures-that-can-keep-your-business-safe/', 301);
});

Route::get('/blog/business-security/the-advantages-of-security-assessment-for-your-business', function(){return redirect('https://blog.netrika.com/the-advantages-of-security-assessment-for-your-business/', 301);
});

Route::get('/blog/business-security/what-is-the-advantage-of-doing-data-penetration-testing-for-your-business', function(){return redirect('https://blog.netrika.com/what-is-the-advantage-of-doing-data-penetration-testing-for-your-business/', 301);
});

Route::get('/blog/business-security/how-to-deal-with-data-privacy-issues', function(){return redirect('https://blog.netrika.com/how-to-deal-with-data-privacy-issues/', 301);
});

Route::get('/blog/business-security/the-increasing-importance-of-data-security-in-modern-times', function(){return redirect('https://blog.netrika.com/the-increasing-importance-of-data-security-in-modern-times/', 301);
});

Route::get('/blog/business-security/what-steps-should-be-taken-to-counter-the-rampant-piracy-of-today', function(){return redirect('https://blog.netrika.com/what-steps-should-be-taken-to-counter-the-rampant-piracy-of-today/', 301);
});


Route::get('/blog/business-security/cyber-security-services-in-india-for-you', function(){return redirect('https://blog.netrika.com/cyber-security-services-in-india-for-you/', 301);
});

Route::get('/blog/due-diligence/important-steps-to-be-taken-for-efficient-third-party-screening', function(){return redirect('https://blog.netrika.com/important-steps-to-be-taken-for-efficient-third-party-screening/', 301);
});

Route::get('/blog/due-diligence/importance-of-due-diligence-in-risk-management-of-the-company', function(){return redirect('https://blog.netrika.com/importance-of-due-diligence-in-risk-management-of-the-company/', 301);
});

Route::get('/blog/due-diligence/importance-of-senior-management-due-diligence', function(){return redirect('https://blog.netrika.com/importance-of-senior-management-due-diligence/', 301);
});

Route::get('/blog/due-diligence/why-due-diligence-is-need-of-the-hour-for-any-company', function(){return redirect('https://blog.netrika.com/why-due-diligence-is-need-of-the-hour-for-any-company/', 301);
});

Route::get('/blog/due-diligence/how-can-integrity-due-diligence-protect-the-company-from-risk', function(){return redirect('https://blog.netrika.com/how-can-integrity-due-diligence-protect-the-company-from-risk/', 301);
});

Route::get('/blog/due-diligence/what-is-the-importance-of-counter-party-due-diligence', function(){return redirect('https://blog.netrika.com/what-is-the-importance-of-counter-party-due-diligence/', 301);
});

Route::get('/blog/due-diligence/what-is-vendors-due-diligence', function(){return redirect('https://blog.netrika.com/what-is-vendors-due-diligence/', 301);
});

Route::get('/blog/due-diligence/why-does-due-diligence-matter', function(){return redirect('https://blog.netrika.com/why-does-due-diligence-matter/', 301);
});

Route::get('/blog/due-diligence/what-is-needed-to-be-due-diligence-ready', function(){return redirect('https://blog.netrika.com/what-is-needed-to-be-due-diligence-ready/', 301);
});

Route::get('/blog/due-diligence/the-process-of-due-diligence-for-a-business', function(){return redirect('https://blog.netrika.com/the-process-of-due-diligence-for-a-business/', 301);
});

Route::get('/blog/due-diligence/what-comprises-effective-third-party-due-diligence', function(){return redirect('https://blog.netrika.com/what-comprises-effective-third-party-due-diligence/', 301);
});

Route::get('/blog/due-diligence/how-are-new-tools-used-in-business-intelligence-research', function(){return redirect('https://blog.netrika.com/how-are-new-tools-used-in-business-intelligence-research/', 301);
});

Route::get('/blog/due-diligence/employment-checks-with-due-diligence-in-india', function(){return redirect('https://blog.netrika.com/employment-checks-with-due-diligence-in-india/', 301);
});

Route::get('/blog/due-diligence/top-4-reasons-for-hiring-a-vendor-due-diligence-company', function(){return redirect('https://blog.netrika.com/top-4-reasons-for-hiring-a-vendor-due-diligence-company/', 301);
});

Route::get('/blog/investigations/10-reasons-to-hire-netrika-in-2020', function(){return redirect('https://blog.netrika.com/10-reasons-to-hire-netrika-in-2020/', 301);
});

Route::get('/blog/investigations/the-corporate-sector-and-fraud-investigations', function(){return redirect('https://blog.netrika.com/the-corporate-sector-and-fraud-investigations/', 301);
});

Route::get('/blog/investigations/three-days-investigative-interviewing-techniques-for-the-corporate', function(){return redirect('https://blog.netrika.com/three-days-investigative-interviewing-techniques-for-the-corporate/', 301);
});

Route::get('/blog/investigations/corporate-sector-fraud-and-its-investigation', function(){return redirect('https://blog.netrika.com/corporate-sector-fraud-and-its-investigation/', 301);
});

Route::get('/blog/investigations/why-is-a-business-fraud-investigator-essential-for-your-company', function(){return redirect('https://blog.netrika.com/why-is-a-business-fraud-investigator-essential-for-your-company/', 301);
});

Route::get('/blog/investigations/where-in-the-company-is-secret-theft-most-likely-to-take-place', function(){return redirect('https://blog.netrika.com/where-in-the-company-is-secret-theft-most-likely-to-take-place/', 301);
});

Route::get('/blog/investigations/corporate-investigation-services-in-india', function(){return redirect('https://blog.netrika.com/corporate-investigation-services-in-india/', 301);
});

Route::get('/blog/forensics/some-popular-misconceptions-about-forensic-investigation', function(){return redirect('https://blog.netrika.com/some-popular-misconceptions-about-forensic-investigation/', 301);
});

Route::get('/blog/forensics/forensic-investigation-dealing-with-white-collar-crime', function(){return redirect('https://blog.netrika.com/forensic-investigation-dealing-with-white-collar-crime/', 301);
});

Route::get('/blog/forensics/the-world-of-cyber-forensics-and-how-to-benefit-from-it', function(){return redirect('https://blog.netrika.com/the-world-of-cyber-forensics-and-how-to-benefit-from-it/', 301);
});


Route::get('/blog/forensics/preventing-fraud-with-forensic-accounting', function(){return redirect('https://blog.netrika.com/preventing-fraud-with-forensic-accounting/', 301);
});

Route::get('/blog/forensics/the-usefulness-of-corporate-cyber-forensics', function(){return redirect('https://blog.netrika.com/the-usefulness-of-corporate-cyber-forensics/', 301);
});

Route::get('/blog/forensics/the-exciting-world-of-cyber-forensics', function(){return redirect('https://blog.netrika.com/the-exciting-world-of-cyber-forensics/', 301);
});

Route::get('/blog/forensics/digital-forensics-to-root-out-secret-theft', function(){return redirect('https://blog.netrika.com/digital-forensics-to-root-out-secret-theft/', 301);
});

Route::get('/blog/forensics/digital-forensics-services-for-organization-in-india', function(){return redirect('https://blog.netrika.com/digital-forensics-services-for-organization-in-india/', 301);
});


Route::get('/coming-soon', function(){return redirect('/', 301);
});

Route::get('/services/training-and-certifications/training-and-certifications', function(){return redirect('https://training.netrika.com/', 301);
});

Route::get('/insightssuccess.in/netrika-consulting-delivering-excellent-trusted-solutions-global-vision', function(){return redirect('http://www.insightssuccess.in/netrika-consulting-delivering-excellent-trusted-solutions-global-vision/', 301);
});

Route::get('/team-profile', function(){return redirect('/team', 301);
});

Route::get('/educationtimes.com/article/65779627/70178325/Portal-Exclusive-All-you-need-to-know-about-importance-of-thorough-background-check-of-prospective-employees-.html', function(){return redirect('https://educationtimes.com/article/65779627/70178325/Portal-Exclusive-All-you-need-to-know-about-importance-of-thorough-background-check-of-prospective-employees-.html', 301);
});

Route::get('/team/ketan-mehta', function(){return redirect('/team', 301);
});

Route::get('/contact', function(){return redirect('/contact-us', 301);
});