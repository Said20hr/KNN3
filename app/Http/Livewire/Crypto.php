<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Crypto extends Component
{
    public $readyToLoad = false;
    public $active = null;

    public function render()
    {
        return view('livewire.crypto',[
            'crypto' =>$this->readyToLoad ? $this->connectCrypto() : []
        ]);
    }
    private function connectCrypto()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'api.coincap.io/v2/assets',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = array_slice(json_decode(curl_exec($curl))->data,0,24);
        curl_close($curl);

        return $response;
    }
    public function loadData()
    {
        $this->readyToLoad = true;
    }

}
