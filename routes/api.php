<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//versao 1 da API
$this->group(['prefix' => 'v1'], function() {
    $this->get('demo', function (Request $request) {
         $data_result = array(
            'channel' => array(
                array(
                    'id' => '10',
                    'title' => '三立都會台直播',
                    'des' => '看三小',
                    'image' => 'https://d2zivlyurrignx.cloudfront.net/channels/cover_images/000/000/010/original/%E9%83%BD%E6%9C%83%E5%8F%B0170623_Event.jpg?1498206929',
                    'url' =>'http://vidol.tv/channel/10',
                    'free' => true,
                    'player' => 'normal',
                ),
                array(
                    'id' => '9',
                    'title' => '三立台灣台直播',
                    'des' => '看三小',
                    'image' => 'https://d2zivlyurrignx.cloudfront.net/channels/cover_images/000/000/009/original/%E5%8F%B0%E7%81%A3%E5%8F%B0170623_EVENT.jpg?1498206914',
                    'url' =>'http://vidol.tv/channel/9',
                    'free' => true,
                    'player' => 'normal',
                ),
            ),
            'episode' => array(),
            'event' => array(),
        );
        return response()->json($data_result, 200);
    });
});
