<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeviceData extends Model
{

	const UPDATED_AT = null;


    protected $table = 'device_data';

    protected $fillable = [
    	'tem1',
    	'tem2',
    	'tem3',
    	'tem4',
    	'hum1',
    	'hum2',
    	'hum3',
        'light1',
        'light2',
        'light3',
        'light4',
    	'ph1',
    ];

    protected $appends = ["tem_avg", "hum_avg", "light_avg"];

    public function getTemperature() {
        return $this->get(['id', 'tem1', 'tem2', 'tem3', 'tem4', 'created_at'], 'tem_avg');
    }

    public function getHumidity() {
        return $this->get(['id','hum1', 'hum2', 'hum3', 'created_at'], 'hum_avg');
    }

    public function getLighting() {
        return $this->get(['id','light1', 'light2', 'light3', 'light4', 'created_at'], 'light_avg');
    }

    public function getTemAvgAttribute() {
        return ($this->tem1 + $this->tem2 + $this->tem3 + $this->tem4) / 4;
    }

    public function getHumAvgAttribute() {
        return ($this->hum1 + $this->hum2 + $this->hum3) / 3;
    }

    public function getLightAvgAttribute() {
        return ($this->light1 + $this->light2 + $this->light3 + $this->light4) / 4;
    }


}
