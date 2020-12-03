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

    $data = (new DeviceData)->getTemperature()->take(30);

	$result['id'] = $data->pluck('id');
	$result['tem1'] = $data->pluck('tem1');
	$result['tem2'] = $data->pluck('tem2');
	$result['tem3'] = $data->pluck('tem3');
	$result['tem4'] = $data->pluck('tem4');
	$result['tem_avg'] = $data->pluck('tem_avg');
    
    return $result;
});

Route::get('/device/{device_id}/humidity', function (Request $request, $deviceId) {

	$data = (new DeviceData)->getHumidity()->take(30);

	$result['id'] = $data->pluck('id');

	$result['hum1'] = $data->pluck('hum1');
	$result['hum2'] = $data->pluck('hum2');
	$result['hum3'] = $data->pluck('hum3');
	$result['hum_avg'] = $data->pluck('hum_avg');
    
    return $result;

});

Route::get('/device/{device_id}/lighting', function (Request $request, $deviceId) {

	$data = (new DeviceData)->getLighting()->take(30);

	$result['id'] = $data->pluck('id');

	$result['light1'] = $data->pluck('light1');
	$result['light2'] = $data->pluck('light2');
	$result['light3'] = $data->pluck('light3');
	$result['light4'] = $data->pluck('light4');
	$result['light_avg'] = $data->pluck('light_avg');
    
    return $result;

});

Route::get('/device/{device_id}/ph', function (Request $request, $deviceId) {

    return DeviceData::select('ph1', 'created_at')->get();
});