<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\URL;

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

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/userprofile', [App\Http\Controllers\ProfileController::class, 'index'])->name('userprofile');

Route::resource('/blog', BlogController::class);
Route::resource('/video', VideoController::class);
Route::resource('/category', BlogCategoryController::class);

Route::resource('/contact',ContactUsController::class);

Route::get('/subscribe',function (){
    return view('subscribe');
});

Route::get('/icons',function (){
    return view('icons');
});

Route::get('/search', [App\Http\Controllers\SearchController::class,'search'])->name('search');

Route::get('/terms', function (){
    return view('terms');
});

Route::get('/about', function (){
    return view('about');
});
Route::get('/dashboard', function (){
    return view('dashboard');
});

Route::get('/migrate', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate');
});

Route::resource('/comment', App\Http\Controllers\BlogCommentController::class);
Route::resource('/newsletters', App\Http\Controllers\NewsletterController::class);

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);


Route::get('/notifications',[App\Http\Controllers\NotificationsController::class,'index']);
Route::get('/notifications/{id}',[App\Http\Controllers\NotificationsController::class,'show'])->name('notification.read');




Route::get('/profile', [App\Http\Controllers\ProfileController::class,'index'])->name('admin_profile');

Route::get('/newapp', function (){
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
    \Illuminate\Support\Facades\Artisan::call('db:seed');
    echo 'initialized';
});




Route::group(['middleware' => 'role:admin'], function() {

    Route::resource('/user', App\Http\Controllers\UserController::class);
    Route::resource('/permission', App\Http\Controllers\PermissionController::class);
    Route::resource('/role', App\Http\Controllers\RoleController::class);

    Route::get('/init', function (){

        \Illuminate\Support\Facades\Artisan::call('storage:link');
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
        \Illuminate\Support\Facades\Artisan::call('db:seed');
        echo 'initialized';
    });

    Route::get('/route-cache', function() {
        $exitCode = Artisan::call('route:cache');
        return 'Routes cache cleared';
    });


    Route::get('/config-cache', function() {
        $exitCode = Artisan::call('config:cache');
        return 'Config cache cleared';
    });

    Route::get('/cache-clear', function() {
        $exitCode = Artisan::call('cache:clear');
        return 'Config cache cleared';
    });


});


Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile');
Route::get('/restart-server',function (){

    $exitCode = Artisan::call('route:clear');

    echo  $exitCode;
    $exitCode1 = Artisan::call('view:clear');

    echo  $exitCode1;
    $exitCode2 = Artisan::call('config:clear');

    echo  $exitCode2;
    $exitCode3 = Artisan::call('cache:clear');

    echo  $exitCode3;
});
Route::get('/mail-test',function (){
    $user=\App\Models\User::find(1);
    $user->Notify(new \App\Notifications\UserRegisteredNotification());
    echo "Notified";
});
Route::get('sitemap', function() {

    // create new sitemap object
    $sitemap = App::make('sitemap');

    // set cache key (string), duration in minutes (Carbon|Datetime|int), turn on/off (boolean)
    // by default cache is disabled
    $sitemap->setCache('laravel.sitemap', 60);

    // check if there is cached sitemap and build new only if is not
    if (!$sitemap->isCached()) {
        // add item to the sitemap (url, date, priority, freq)
        $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
        $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

        // add item with translations (url, date, priority, freq, images, title, translations)
        $translations = [
            ['language' => 'fr', 'url' => URL::to('pageFr')],
            ['language' => 'de', 'url' => URL::to('pageDe')],
            ['language' => 'bg', 'url' => URL::to('pageBg')],
            ['language' => 'en', 'url' => URL::to('pageUs')],
        ];
        $sitemap->add(URL::to('pageEn'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', [], null, $translations);

        // add item with images
        $images = [
            ['url' => URL::to('images/pic1.jpg'), 'title' => 'Image title', 'caption' => 'Image caption', 'geo_location' => 'Plovdiv, Bulgaria'],
            ['url' => URL::to('images/pic2.jpg'), 'title' => 'Image title2', 'caption' => 'Image caption2'],
            ['url' => URL::to('images/pic3.jpg'), 'title' => 'Image title3'],
        ];
        $sitemap->add(URL::to('blog'), '2015-06-24T14:30:00+02:00', '0.9', 'monthly', $images);

        // get all posts from db
        $posts = DB::table('blogs')->orderBy('created_at', 'desc')->get();

        // add every post to the sitemap
        foreach ($posts as $post) {
            $sitemap->add('/blog/'.$post->slug, $post->updated_at, 1, 1);
        }


        // get all posts from db
        $videos = DB::table('videos')->orderBy('created_at', 'desc')->get();

        // add every post to the sitemap
        foreach ($videos as $post) {
            $sitemap->add('/video/'.$post->slug, $post->updated_at, 1, 1);
        }

    }

    // show your sitemap (options: 'xml' (default), 'html', 'txt', 'ror-rss', 'ror-rdf')
    return $sitemap->render('xml');
});
