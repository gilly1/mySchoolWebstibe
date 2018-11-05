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

//vue+laravel routes match
Route::get('/','HomeController@index')->name('home');

Route::get('/about/{any?}','AboutController@index')->where('any', '.*')->name('about');

Route::get('/academics/{any?}','AcademicsController@index')->where('any', '.*')->name('academics');

Route::get('/administration/{any?}','AdministrationController@index')->where('any', '.*')->name('administration');

Route::get('/cocurriculars/{any?}','CocurricularsController@index')->where('any', '.*')->name('cocurriculars');

Route::get('/faith/{any?}','FaithServiceController@index')->where('any', '.*')->name('faith');

//fetching data with axios routes
Route::get('/axiosAbout','Axios\aboutController@axiosAbout')->name('axiosAbout');
Route::get('/axiosNews','Axios\aboutController@axiosNews')->name('axiosNews');
Route::get('/axiosTender','Axios\aboutController@axiosTender')->name('axiosTender');
Route::get('/axiosSocialMediaParent','Axios\socialmediaController@parents')->name('axiosSocialMediaParent');
Route::get('/axiosSocialMediaAlumni','Axios\socialmediaController@alumni')->name('axiosSocialMediaAlumni');

Route::get('/axiosCoverImage','Axios\homeController@coverimage')->name('axiosCoverImage');
Route::get('/axiosJumbotron','Axios\homeController@jumbotron')->name('axiosJumbotron');
Route::get('/axiosWhyUs','Axios\homeController@whyus')->name('axiosWhyUs');
Route::get('/axiosFrontGallery','Axios\homeController@frontgallery')->name('axiosFrontGallery');
Route::get('/axiosCounter','Axios\homeController@counter')->name('axiosCounter');

Route::get('/axiosAcademics','Axios\academicsController@axiosAcademics')->name('axiosAcademics');

Route::get('/axiosSchbosspage','Axios\administrationController@axiosSchbosspage')->name('axiosSchbosspage');
Route::get('/axiosSchbossimage','Axios\administrationController@axiosSchbossimage')->name('axiosSchbossimage');
Route::get('/axiosPta','Axios\administrationController@axiosPta')->name('axiosPta');
Route::get('/axiosBoard','Axios\administrationController@axiosBoard')->name('axiosBoard');
Route::get('/axiosTeachers','Axios\administrationController@axiosTeachers')->name('axiosTeachers');
Route::get('/axiosWorkers','Axios\administrationController@axiosWorkers')->name('axiosWorkers');

Route::get('/axiosFaith','Axios\faithController@axiosFaith')->name('axiosFaith');
Route::get('/axiosGames','Axios\gamesController@axiosGames')->name('axiosGames');
Route::get('/axiosHome','Axios\homeController@axiosHome')->name('axiosHome');
Route::get('/axiosOverview','Axios\overviewController@axiosOverview')->name('axiosOverview');




//Admin routes

Auth::routes();

// Start of index page
Route::get('/dashboard','Admin\dashboardController@index')->name('dashboard');

Route::get('/indexPageEdit','Admin\indexPageEditController@index')->name('indexPageEdit');

Route::resource('/coverimage','Admin\CoverimageController',['names'=>[
    'create'=>'coverimage.add',
    'index'=>'coverimage.view',
    'edit'=>'coverimage.edit',
    'destroy'=>'coverimage.destroy',
    'store'=>'coverimage.store',
    'update'=>'coverimage.update'
]]);

Route::resource('/covergallery','Admin\CoverpagegalleryController',['names'=>[
    'create'=>'covergallery.add',
    'index'=>'covergallery.view',
    'edit'=>'covergallery.edit',
    'destroy'=>'covergallery.destroy',
    'store'=>'covergallery.store',
    'update'=>'covergallery.update'
]]);

Route::resource('/jumbotron','Admin\JumbotronController',['names'=>[
    'create'=>'jumbotron.add',
    'index'=>'jumbotron.view',
    'edit'=>'jumbotron.edit',
    'destroy'=>'jumbotron.destroy',
    'store'=>'jumbotron.store',
    'update'=>'jumbotron.update'
]]);

Route::resource('/whyus','Admin\WhyusController',['names'=>[
    'create'=>'whyus.add',
    'index'=>'whyus.view',
    'edit'=>'whyus.edit',
    'destroy'=>'whyus.destroy',
    'store'=>'whyus.store',
    'update'=>'whyus.update'
]]);

Route::resource('/counter','Admin\CounterController',['names'=>[
    'create'=>'counter.add',
    'index'=>'counter.view',
    'edit'=>'counter.edit',
    'destroy'=>'counter.destroy',
    'store'=>'counter.store',
    'update'=>'counter.update'
]]);
//end of index page

//start of all overviews
Route::resource('overview','Admin\OverviewController',['names'=>[
    'create'=>'overview.add',
    'index'=>'overview.view',
    'edit'=>'overview.edit',
    'destroy'=>'overview.destroy',
    'store'=>'overview.store',
    'update'=>'overview.update'
]]);
//end of all overviews

//start of all faith and services
Route::resource('faithadmin','Admin\FaithController',['names'=>[
    'create'=>'faithadmin.add',
    'index'=>'faithadmin.view',
    'edit'=>'faithadmin.edit',
    'destroy'=>'faithadmin.destroy',
    'store'=>'faithadmin.store',
    'update'=>'faithadmin.update'
]]);
//end of all faith and services

//start of all academics
Route::resource('academicsadmin','Admin\AcademicController',['names'=>[
    'create'=>'academicsadmin.add',
    'index'=>'academicsadmin.view',
    'edit'=>'academicsadmin.edit',
    'destroy'=>'academicsadmin.destroy',
    'store'=>'academicsadmin.store',
    'update'=>'academicsadmin.update'
]]);
//end of all academics

//start of all about
Route::resource('aboutadmin','Admin\AboutController',['names'=>[
    'create'=>'aboutadmin.add',
    'index'=>'aboutadmin.view',
    'edit'=>'aboutadmin.edit',
    'destroy'=>'aboutadmin.destroy',
    'store'=>'aboutadmin.store',
    'update'=>'aboutadmin.update'
]]);

Route::resource('eventadmin','Admin\EventController',['names'=>[
    'create'=>'eventadmin.add',
    'index'=>'eventadmin.view',
    'edit'=>'eventadmin.edit',
    'destroy'=>'eventadmin.destroy',
    'store'=>'eventadmin.store',
    'update'=>'eventadmin.update'
]]);

Route::resource('tenderadmin','Admin\TenderController',['names'=>[
    'create'=>'tenderadmin.add',
    'index'=>'tenderadmin.view',
    'edit'=>'tenderadmin.edit',
    'destroy'=>'tenderadmin.destroy',
    'store'=>'tenderadmin.store',
    'update'=>'tenderadmin.update'
]]);

Route::resource('newsalumni','Admin\NewsalumniController',['names'=>[
    'create'=>'newsalumni.add',
    'index'=>'newsalumni.view',
    'edit'=>'newsalumni.edit',
    'destroy'=>'newsalumni.destroy',
    'store'=>'newsalumni.store',
    'update'=>'newsalumni.update'
]]);

Route::resource('newsparents','Admin\NewsparentController',['names'=>[
    'create'=>'newsparents.add',
    'index'=>'newsparents.view',
    'edit'=>'newsparents.edit',
    'destroy'=>'newsparents.destroy',
    'store'=>'newsparents.store',
    'update'=>'newsparents.update'
]]);
//end of all about

//start of all games
Route::resource('co-curricularadmin','Admin\GameController',['names'=>[
    'create'=>'co-curricularadmin.add',
    'index'=>'co-curricularadmin.view',
    'edit'=>'co-curricularadmin.edit',
    'destroy'=>'co-curricularadmin.destroy',
    'store'=>'co-curricularadmin.store',
    'update'=>'co-curricularadmin.update'
]]);


Route::resource('co-curricular','Admin\GameController',['names'=>[
    'create'=>'co-curricular.add',
    'index'=>'co-curricular.view',
    'edit'=>'co-curricular.edit',
    'destroy'=>'co-curricular.destroy',
    'store'=>'co-curricular.store',
    'update'=>'co-curricular.update'
]]);
//end of all games

//end of all administration
Route::resource('schboss','Admin\SchbosspageController',['names'=>[
    'create'=>'schboss.add',
    'index'=>'schboss.view',
    'edit'=>'schboss.edit',
    'destroy'=>'schboss.destroy',
    'store'=>'schboss.store',
    'update'=>'schboss.update'
]]);


Route::resource('board','Admin\BoardController',['names'=>[
    'create'=>'board.add',
    'index'=>'board.view',
    'edit'=>'board.edit',
    'destroy'=>'board.destroy',
    'store'=>'board.store',
    'update'=>'board.update'
]]);



Route::resource('pta','Admin\PtaController',['names'=>[
    'create'=>'pta.add',
    'index'=>'pta.view',
    'edit'=>'pta.edit',
    'destroy'=>'pta.destroy',
    'store'=>'pta.store',
    'update'=>'pta.update'
]]);


Route::resource('schbossimg','Admin\SchbossimageController',['names'=>[
    'create'=>'schbossimg.add',
    'index'=>'schbossimg.view',
    'edit'=>'schbossimg.edit',
    'destroy'=>'schbossimg.destroy',
    'store'=>'schbossimg.store',
    'update'=>'schbossimg.update'
]]);


Route::resource('teachers','Admin\TeacherController',['names'=>[
    'create'=>'teachers.add',
    'index'=>'teachers.view',
    'edit'=>'teachers.edit',
    'destroy'=>'teachers.destroy',
    'store'=>'teachers.store',
    'update'=>'teachers.update'
]]);


Route::resource('workers','Admin\WorkerController',['names'=>[
    'create'=>'workers.add',
    'index'=>'workers.view',
    'edit'=>'workers.edit',
    'destroy'=>'workers.destroy',
    'store'=>'workers.store',
    'update'=>'workers.update'
]]);
//end of all administration

//start of sending message
Route::get('/index','Admin\sendMessagesController@index')->name('index');
Route::post('/store','Admin\sendMessagesController@sendMessage')->name('store');
Route::get('/deleteForm','Admin\sendMessagesController@delete_Form')->name('deleteForm');
Route::get('/destroy','Admin\sendMessagesController@destroy_delete_Form')->name('destroy');

Route::resource('formOne','Admin\formOneController',['names'=>[
    'create'=>'formOne.add',
    'index'=>'formOne.view',
    'edit'=>'formOne.edit',
    'destroy'=>'formOne.destroy',
    'store'=>'formOne.store',
    'update'=>'formOne.update'
]]);


Route::resource('formTwo','Admin\formTwoController',['names'=>[
    'create'=>'formTwo.add',
    'index'=>'formTwo.view',
    'edit'=>'formTwo.edit',
    'destroy'=>'formTwo.destroy',
    'store'=>'formTwo.store',
    'update'=>'formTwo.update'
]]);


Route::resource('formThree','Admin\formThreeController',['names'=>[
    'create'=>'formThree.add',
    'index'=>'formThree.view',
    'edit'=>'formThree.edit',
    'destroy'=>'formThree.destroy',
    'store'=>'formThree.store',
    'update'=>'formThree.update'
]]);

Route::resource('formFour','Admin\formFourController',['names'=>[
    'create'=>'formFour.add',
    'index'=>'formFour.view',
    'edit'=>'formFour.edit',
    'destroy'=>'formFour.destroy',
    'store'=>'formFour.store',
    'update'=>'formFour.update'
]]);

//end of sending message

Route::resource('page','Admin\PageController',['names'=>[
    'index'=>'page.view',
]]);


Route::resource('superadmin','Admin\AcademicLinkController',['names'=>[
    'index'=>'superadmin.view',
    'store'=>'superadmin.store',
]]);

Route::resource('faithLink','Admin\FaithLinkController',['names'=>[
    'store'=>'faithLink.store',
]]);

Route::resource('gamesLink','Admin\GameLinkController',['names'=>[
    'store'=>'gamesLink.store',
]]);

Route::resource('aboutLink','Admin\AboutLinkController',['names'=>[
    'store'=>'aboutLink.store',
]]);

Route::resource('pages','Admin\PageController',['names'=>[
    'store'=>'pages.store',
]]);

Route::resource('SchbosspageLink','Admin\SchbosspageLinkController',['names'=>[
    'store'=>'SchbosspageLink.store',
]]);


Route::get('/home', 'HomeController@index')->name('home');
