<?php

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
use App\Navbar;
use App\Configurations;

Route::get('/cache', function () {

    Artisan::call("config:cache");
    Artisan::call("cache:clear");
    echo "clear";
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin.login');
});
//new routes
Route::get('/dashboard','DashboardController@index');

Route::post('/login','Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::resource('/projects','ProjectsController');
Route::get('/project-delete/{id}','ProjectsController@destroy');
Route::get('/project-photos/{id}','ProjectsController@photos');
Route::post('/project-photos-upload/{id}','ProjectsController@uploadPhotos');
Route::get('/project-photos-delete/{id}','ProjectsController@deletePhotos');

Route::get('/project-location-map/{id}','ProjectsController@locationMap');
Route::post('/project-location-map-upload/{id}','ProjectsController@locationMapUpload');
Route::get('/project-location-map-delete/{id}','ProjectsController@locationMapDelete');

Route::get('/project-layout-plan/{id}','ProjectsController@layoutPlan');
Route::post('/project-layout-plan-upload/{id}','ProjectsController@layoutPlanUpload');
Route::get('/project-layout-plan-delete/{id}','ProjectsController@layoutPlanDelete');


Route::resource('blog-config','BlogController');
Route::get('blog-config/delete/{id}','BlogController@destroy');
Route::get('blog-config/comment/{id}','BlogController@blogComment');

Route::resource('purchase','PurchaseController');
Route::get('purchase-payments/{id}','PurchaseController@purchasePayments');
Route::post('purchase-payments/{id}','PurchaseController@storePurchasePayments');
Route::get('list-purchase-payments/{id}','PurchaseController@purchasePaymentList');
Route::get('edit-purchase-payments/{id}','PurchaseController@purchasePaymentEdit');
Route::post('update-purchase-payments/{id}','PurchaseController@purchasePaymentUpdate');

Route::resource('properties','PropertiesController');
Route::get('properties-delete/{id}','PropertiesController@destroy');
Route::get('/properties-photos/{id}','PropertiesController@photos');
Route::post('/properties-photos-upload/{id}','PropertiesController@uploadPhotos');
Route::get('/properties-photos-delete/{id}','PropertiesController@deletePhotos');

Route::get('/properties-documents/{id}','PropertiesController@document');
Route::get('/properties-feature-photo/{id}','PropertiesController@featurePhotos');
Route::post('/properties-feature-photo/{id}','PropertiesController@uploadFeaturePhoto');

Route::post('/properties-documents-upload/{id}','PropertiesController@documentsUpload');
Route::get('/properties-documents-delete/{id}','PropertiesController@documentsDelete');
Route::get('/properties-flats/{id}','PropertiesController@flats');


Route::get('/condo/{id}','PropertiesController@condoList');
Route::get('/condo/feature-image/{id}','PropertiesController@condoFeatureImage');
Route::post('/condo/feature-image-upload/{id}','PropertiesController@condoFeatureImageUpload');
Route::get('/condo/images/{id}','PropertiesController@condoImages');
Route::post('/condo/image-upload/{id}','PropertiesController@condoImagesupload');
Route::get('/condo/floor-plan/{id}','PropertiesController@condoFloorPlan');
Route::post('/condo/floor-plan/{id}','PropertiesController@condoFloorPlanupload');




//configuration Routes

View::composer('*', function($view)
{
    $view->with('nav', Navbar::all())->with('config',Configurations::select('photo','contact')->first());
});


Route::get('/navbar','ConfigurationController@configNavBar');
Route::get('/update-navbar/{id}','ConfigurationController@editNavBar');
Route::post('/update-navbar/{id}','ConfigurationController@updateNavBar');


Route::get('/general','ConfigurationController@general');
Route::post('/general','ConfigurationController@general');
Route::get('/category-list','ConfigurationController@categoryList');
Route::get('/category-create','ConfigurationController@categoryCreate');
Route::post('/category-create','ConfigurationController@categoryStore');
Route::get('/category-update/{id}','ConfigurationController@categoryEdit');
Route::post('/category-update/{id}','ConfigurationController@categoryUpdate');
Route::get('/category-delete/{id}','ConfigurationController@categoryDelete');

Route::get('/payment-type','ConfigurationController@paymentType');
Route::get('/payment-type-create','ConfigurationController@paymentTypeCreate');
Route::post('/payment-type-create','ConfigurationController@paymentTypeStore');
Route::get('/payment-type-update/{id}','ConfigurationController@paymentTypeEdit');
Route::post('/payment-type-update/{id}','ConfigurationController@paymentTypeUpdate');
Route::get('/payment-type-delete/{id}','ConfigurationController@paymentTypeDelete');

Route::get('/currency','ConfigurationController@currency');
Route::get('/currency-create','ConfigurationController@currencyCreate');
Route::post('/currency-create','ConfigurationController@currencyStore');
Route::get('/currency-update/{id}','ConfigurationController@currencyEdit');
Route::post('/currency-update/{id}','ConfigurationController@currencyUpdate');
Route::get('/currency-delete/{id}','ConfigurationController@currencyDelete');

Route::get('/tax','ConfigurationController@tax');
Route::get('/tax-create','ConfigurationController@taxCreate');
Route::post('/tax-create','ConfigurationController@taxStore');
Route::get('/tax-update/{id}','ConfigurationController@taxEdit');
Route::post('/tax-update/{id}','ConfigurationController@taxUpdate');
Route::get('/tax-delete/{id}','ConfigurationController@taxDelete');

Route::get('/unit','ConfigurationController@unit');
Route::get('/unit-create','ConfigurationController@unitCreate');
Route::post('/unit-create','ConfigurationController@unitStore');
Route::get('/unit-update/{id}','ConfigurationController@unitEdit');
Route::post('/unit-update/{id}','ConfigurationController@unitUpdate');
Route::get('/unit-delete/{id}','ConfigurationController@unitDelete');

Route::resource('users','UsersController');
Route::get('/users-delete/{id}','UsersController@delete');
Route::post('add-team','UsersController@storeTeam');
Route::get('add-team','UsersController@addTeam');
Route::get('team','UsersController@team');
Route::get('team-update/{id}','UsersController@teamEdit');
Route::post('team-update/{id}','UsersController@teamUpdate');
Route::get('team-member/{id}','UsersController@teamMember');
Route::get('delete-team/{id}','UsersController@teamDelete');





Route::resource('plan','PlanController');
Route::get('/plan-delete/{id}','PlanController@delete');

Route::get('/orgazniation-image','ConfigurationController@orgImage');
Route::post('/orgazniation-image','ConfigurationController@orgImageStore');

Route::resource('client','ClientController');
Route::get('client-delete/{id}','ClientController@destroy');
Route::get('applicant/{id}','ClientController@applicant');
Route::get('applicant-create/{id}','ClientController@createApplicant');
Route::post('applicant-create/{id}','ClientController@storeApplicant');
Route::get('applicant-update/{id}','ClientController@editApplicant');
Route::post('applicant-update/{id}','ClientController@updateApplicant');
Route::get('applicant-view/{id}','ClientController@viewAppliant');
Route::get('applicant-delete/{id}','ClientController@deleteAppliant');


Route::resource('leads','LeadsController');


Route::get('campaign-properties/{id}','RentalPropertiesController@campaignProperties');
Route::get('campaign-properties/detail/{id}','RentalPropertiesController@campaignPropertiesDetail');
Route::post('campaign-leads/{id}','RentalPropertiesController@campaginLeads');
Route::get('condo-properties/detail/{id}','RentalPropertiesController@detailCondoProperty');

Route::resource('brokerage','BrokerageController');
Route::get('brokerage/delete/{id}','BrokerageController@destroy');

Route::resource('condo-review','CondoReviewController');
Route::get('condo-review/delete/{id}','CondoReviewController@destroy');



/// public Routes



Route::get('/landing','LandingController@index');
Route::get('/blog-detail/{id}','LandingController@blogDetail');
Route::post('/blog-comment/{id}','LandingController@blogComment');


Route::get('/rent-condo','LandingController@rentCondo');
Route::get('/sale-condo','LandingController@saleCondo');
Route::get('/condo-reviews','LandingController@rentCondo');

Route::get('/property/detail/latlong/{id}','LandingController@propertyLatLong');

Route::get('/condo/detail/latlong/{id}','LandingController@propertyLatLong');


Route::get('/mls-property','LandingController@mlsProperty');


Route::get('/condo-list/{id}','LandingController@condoList');
Route::get('/property/detail/{id}','LandingController@propertyDetail');
Route::get('/condo/detail/{id}','LandingController@condoDetail');
Route::post('/property-leads/{id}','LandingController@propertyLeads');


Route::get('/blog',function(){
	return  view('user.blog');
});
Route::get('/article',function(){
    return  view('user.article');
});
Route::get('/condo-reviews',function(){
    return  view('user.condo-reviews');
});
Route::get('/contact','LandingController@contactUs');
Route::get('/buying','LandingController@buying');
Route::get('/selling','LandingController@selling');
Route::get('/checking-mls',function (){
    return  view('user.mls-check');
});

Route::get('/walkscore',function(){
    function getWalkScore($lat, $lon, $address) {
        $address=urlencode($address);
        $url = "http://api.walkscore.com/score?format=json&address=$address";
        $url .= "&lat=$lat&lon=$lon&wsapikey=d5aa124570c0886b597f617bfd863c39";
        $str = @file_get_contents($url);
        return $str;
    }

    $lat = 51.5079111;
    $lon = -0.092105;
    $address = stripslashes('London Bridge, London, UK');
    $json = getWalkScore($lat,$lon,$address);
    echo $json;
});
Route::get('/walkscore-demo',function(){
    return view('user.walkscore');
});


