<?php
// Development
Route::group(['middleware' => 'dev_only', 'prefix' => 'test', 'namespace' => 'App\Http\Client\Controllers\Test'], function() {
	$files = glob(app_path() . '/Http/Client/Controllers/Test/*.php');
	foreach ($files as $file) {
		$route = str_replace('Controller', '', basename($file, '.php'));
		if ($route == 'Base') { continue; }
		$route = strtolower(preg_replace('/(?<=\\w)[A-Z]/', '-$0', $route));
		Route::controller($route, basename($file, '.php'));
	}
});

// Utility routes
Route::group(['namespace' => 'App\Http\Controllers'], function() {
	// Queues
	Route::group(['prefix' => 'queue', 'middleware' => 'queues'], function() {
		Route::post('receive', ['uses' => 'QueueController@postReceive']);
	});
});

// Restrict non-production access
Route::group(['middleware' => 'non_production'], function() {
	// Admin
	Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Admin\Controllers'], function() {
		Route::group(['middleware' => 'guest.admin'], function() {
			Route::controller('login', 'AuthController', [
				'getIndex'  => 'admin.login',
				'postIndex' => 'admin.login.attempt'
			]);
		});
		Route::get('logout', ['as' => 'admin.logout', 'uses' => 'AuthController@getLogout']);
		Route::controller('password', 'AuthController', [
			'getReset'  => 'admin.password.reset',
			'postReset' => 'admin.password.update',
			'postEmail' => 'admin.password.email'
		]);
		Route::group(['middleware' => 'auth.admin'], function() {
			Route::controller('dashboard', 'DashboardController', [
				'getIndex' => 'admin.dashboard'
			]);
			Route::controller('widgets', 'WidgetsController', [
				'getIndex' => 'admin.widgets',
				'getEdit'  => 'admin.widgets.edit'
			]);
			Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@getIndex']);
		});
	});

	// API
	Route::group(['prefix' => 'api', 'namespace' => 'App\Http\Api\Controllers', 'middleware' => ['csrf', 'cors']], function() {
		Route::controller('widgets', 'WidgetsController');
		Route::controller('upload',  'UploadController');
	});

	// Client
	Route::group(['namespace' => 'App\Http\Client\Controllers'], function() {
		Route::group(['middleware' => 'guest'], function() {
			Route::controller('login', 'AuthController', [
				'getIndex'  => 'login',
				'postIndex' => 'login.attempt'
			]);
		});
		Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);
		Route::controller('password', 'AuthController', [
			'getReset'  => 'password.reset',
			'postReset' => 'password.update',
			'postEmail' => 'password.email'
		]);
		Route::group(['middleware' => 'auth'], function() {

		});
		Route::get('sitemap.xml', 'SitemapController@getXml');
		Route::get('sitemap',     'SitemapController@getIndex');
		Route::get('home',        ['as' => 'home',    'uses' => 'HomeController@getIndex']);
		Route::get('/',           ['as' => 'default', 'uses' => 'HomeController@getIndex']);
	});
});
