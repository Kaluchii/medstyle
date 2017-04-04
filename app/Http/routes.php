<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');


Route::get('home', 'HomeController@index');

/*Route::get('/generate', function(){
	$admin = new App\AdminViewGenerator();
	return $admin->AdminGenerate();
});

route::get('/reinit', function(){
	$config = config('qstorage');


	try {
		foreach($config as $item){
			$this->dispatch(
				new \Interpro\QuickStorage\Concept\Command\ReinitOneBlockCommand($item)
			);
		}

	} catch(\Exception $exception) {

		return ['status'=>('Что-то пошло не так. '.$exception->getMessage())];
	}

	return ['status'=>'OK'];
});*/

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::post('/raiting/send', 'RaitingController@saveRaiting');


/*
 * front routes
 */

Route::get('/','FrontController@getIndex');
Route::get('/full','FrontController@getFull');

Route::get('/about','FrontController@getAbout');

Route::get('/problems/{slug}','FrontController@getProblems');
Route::get('/specials/{slug}','FrontController@getSpecial');

Route::get('/specialists','FrontController@getSpecialists');
Route::get('/specialist/{slug}','FrontController@getSpecialist');

Route::get('/services', 'FrontController@getServices');
Route::get('/service/{slug}', 'FrontController@getService');

Route::get('/technology', 'FrontController@getTechnologys');
Route::get('/technology/{slug}', 'FrontController@getTechnology');

Route::get('/helpful', 'FrontController@getPoleznoes');
Route::get('/helpful/{slug}', 'FrontController@getPoleznoe');

Route::get('/news', 'FrontController@getNews');
Route::get('/news/{slug}', 'FrontController@getNew');

Route::get('/questions', 'FrontController@getQuestions');
Route::get('/questions/{slug}', 'FrontController@getQuestions_pr');


Route::get('/contacts', 'FrontController@getContacts');


Route::get('/age', 'TestController@selectAge');
Route::get('/test/{id}', 'TestController@getTest');
Route::get('/result/{page}', 'TestController@getResult');
Route::get('/no-result', 'TestController@noResult');



Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function(){

	Route::get('/', 'AdminController@getIndex');
	/*
	 * static admin routes
	 */
	Route::get('/edit/about', 'AdminController@getAbout');
	Route::get('/edit/specialists', 'AdminController@getSpec');
	Route::get('/edit/services', 'AdminController@getService');
	Route::get('/edit/technology', 'AdminController@getTechno');
	Route::get('/edit/poleznoe', 'AdminController@getPoleznoe');
	Route::get('/edit/questions', 'AdminController@getQuestions');
	Route::get('/edit/news', 'AdminController@getNews');
	Route::get('/edit/contacts', 'AdminController@getContacts');

	/*
	 * edit page routes
	 */
	Route::get('/edit/specialists/{id}', 'AdminController@editSpec');
	Route::get('/edit/category/{id}', 'AdminController@editCategory');
	Route::get('/edit/service/{id}', 'AdminController@editService');
	Route::get('/edit/technology/{id}', 'AdminController@editTechnology');
	Route::get('/edit/news/{id}', 'AdminController@editNews');
	Route::get('/edit/poleznoe/{id}', 'AdminController@editPoleznoe');
	Route::get('/edit/question/{id}', 'AdminController@editQuestions');


	/*
	 * special blocks routes
	 */
	Route::get('/edit/problems', 'AdminController@getProblems');
	Route::get('/edit/problems/{id}', 'AdminController@editProblems');
	Route::get('/edit/slider', 'AdminController@getSlider');
	Route::get('/edit/video', 'AdminController@getVideo');
	Route::get('/edit/special', 'AdminController@getSpecial');
	Route::get('/edit/special/{id}', 'AdminController@editSpecial');


	/*
	 * testing routes
	 */
	Route::get('/edit/age/','AdminController@getAge');
	Route::get('/edit/age/{id}','AdminController@editAge');
	Route::get('/edit/test/{id}','AdminController@editQuest');
	/*
	 * admin services routes
	 */
	Route::get('/services/popups','AdminController@getPopups');
});


