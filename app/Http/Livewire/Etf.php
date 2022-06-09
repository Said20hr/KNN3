<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Etf extends Component
{
    public $readyToLoad = false;
    public $active = null;


    public function render()
    {
        return view('livewire.etf',[
            'etf' =>$this->readyToLoad ? $this->connectEtf() : []
        ]);
    }

    private function connectEtf()
    {
        $url_info = "https://financialmodelingprep.com/api/v3/etf/list?apikey=8b1452d2f1c51dbbd8ff5d2c723d4f6f";
        $channel = curl_init();
        curl_setopt($channel, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($channel, CURLOPT_HEADER, 0);
        curl_setopt($channel, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($channel, CURLOPT_URL, $url_info);
        curl_setopt($channel, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($channel, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($channel, CURLOPT_TIMEOUT, 0);
        curl_setopt($channel, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($channel, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($channel, CURLOPT_SSL_VERIFYPEER, FALSE);

        $output = $response = array_slice(json_decode(curl_exec($channel)),0,10);

        if (curl_error($channel)) {
            return 'error:' . curl_error($channel);
        } else {
            return $outputJSON = $output;
        }

    }
    public function loadData()
    {
        $this->readyToLoad = true;
    }

}
