<?php

use Illuminate\Http\Request;

use App\Models\DeviceData;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

//
Route::get('/device/{device_id}/data', function (Request $request, $deviceId) {

    $data = new DeviceData($request->all());
    $data->save();
    return $data->toArray();
});


Route::get('/device/{device_id}/temperature', function (Request $request, $deviceId) {

    return (new DeviceData)->getTemperature();
});

Route::get('/device/{device_id}/humidity', function (Request $request, $deviceId) {

	return (new DeviceData)->getHumidity();
});

Route::get('/device/{device_id}/light', function (Request $request, $deviceId) {

	return (new DeviceData)->getLighting();
});

Route::get('/device/{device_id}/ph', function (Request $request, $deviceId) {

    return DeviceData::select('ph1', 'created_at')->get();
});