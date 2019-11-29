<?php

use App\Serie;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/key', function() {
    return str_random(32);
});




$router->group(['prefix' => 'api', 'middleware' => 'auth'], function () use ($router) {

    // End-points de la tabla series.

    
  
    $router->get('series/{id}', ['uses' => 'SerieController@showOneSerie']);
  
    $router->post('series', ['uses' => 'SerieController@create']);
  
    $router->delete('series/{id}', ['uses' => 'SerieController@delete']);
  
    $router->put('series/{id}', ['uses' => 'SerieController@update']);


    // End-points de la tabla episodes.


    
  
    $router->get('episodes/{id}', ['uses' => 'EpisodeController@showOneEpisode']);
  
    $router->post('episodes', ['uses' => 'EpisodeController@create']);
  
    $router->delete('episodes/{id}', ['uses' => 'EpisodeController@delete']);
  
    $router->put('episodes/{id}', ['uses' => 'EpisodeController@update']);


    // End-points de la tabla actors.


    
  
    $router->get('actors/{id}', ['uses' => 'ActorController@showOneActor']);
  
    $router->post('actors', ['uses' => 'ActorController@create']);
  
    $router->delete('actors/{id}', ['uses' => 'ActorController@delete']);
  
    $router->put('actors/{id}', ['uses' => 'ActorController@update']);



// End-points de la tabla users.



    $router->get('users/{id}', ['uses' => 'UserController@showOneUser']);
  
    $router->delete('users/{id}', ['uses' => 'UserController@delete']);
  
    $router->put('users/{id}', ['uses' => 'UserController@update']);
    
    
});


$router->group(['prefix' => 'api/auth'], function () use ($router) {


     // End-points de la tabla users.


    $router->post('register',['uses' => 'AuthController@register']);

    $router->post('login', ['uses' => 'AuthController@login']);

   


});


$router->group(['prefix' => 'api/all'], function () use ($router) {


    $router->get('series',  ['uses' => 'SerieController@showAllSeries']);

    $router->get('episodes',  ['uses' => 'EpisodeController@showAllEpisodes']);

    $router->get('actors',  ['uses' => 'ActorController@showAllActors']);

    $router->get('users',  ['uses' => 'UserController@showAllUsers']);
 
   

});