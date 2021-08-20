<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    private $apiUrl;
    private $endpoint;
    

    public function __construct() {
        $this->apiUrl = "http://127.0.0.1:8080/";
    }

    public function getAll(string $endpoint){
        $this->endpoint = $endpoint;
        
        $url = $this->apiUrl . $this->endpoint;
        $ch = curl_init();
        
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
        $response = curl_exec($ch);
        $dados = json_decode($response);
        curl_close($ch);
        return $dados;
    }
}
