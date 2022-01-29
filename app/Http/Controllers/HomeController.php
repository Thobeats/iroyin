<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use jcobhams\NewsApi\NewsApi;


class HomeController extends Controller
{
    public function index(){

       

        $cc = $this->getCountryCode();

        $data['title'] = 'Home';
        $data['cc'] = $cc;

        $api_key = '51ad14e1df1b4e11b48c7780e6160a4a';

        $client = new Client();

        $from = date("Y-m-d", strtotime("3 days ago"));

       try{

            // All Categories
            $req = $client->get("https://newsapi.org/v2/top-headlines?country=$cc&category=general&apiKey=$api_key&pageSize=4");
            $body = $req->getBody();
            $data['top_headlines'] = json_decode($body)->articles;
            $data['count'] = count(json_decode($body)->articles);

            // Business Category
            $business_req = $client->get("https://newsapi.org/v2/top-headlines?country=$cc&category=business&apiKey=$api_key&pageSize=4");
            $business_body = $business_req->getBody();
            $data['business'] = json_decode($business_body)->articles;

            // Health Category
            $health_req = $client->get("https://newsapi.org/v2/top-headlines?country=$cc&category=health&apiKey=$api_key&pageSize=4");
            $health_body = $health_req->getBody();
            $data['health'] = json_decode($health_body)->articles;

            // Entertainment Category
            $ent_req = $client->get("https://newsapi.org/v2/top-headlines?country=$cc&category=entertainment&apiKey=$api_key&pageSize=4");
            $ent_body = $ent_req->getBody();
            $data['entertainment'] = json_decode($ent_body)->articles;

            // Sports Category
            $sports_req = $client->get("https://newsapi.org/v2/top-headlines?country=$cc&category=sports&apiKey=$api_key&pageSize=4");
            $sports_body = $sports_req->getBody();
            $data['sports'] = json_decode($sports_body)->articles;

            // Technology Category
            $technology_req = $client->get("https://newsapi.org/v2/top-headlines?country=$cc&category=technology&apiKey=$api_key&pageSize=4");
            $technology_body = $technology_req->getBody();
            $data['technology'] = json_decode($technology_body)->articles;

            //Side Bar
            $sidebar_req = $client->get("https://newsapi.org/v2/everything?q=$cc&from=$from&apiKey=$api_key&pageSize=10&language=en");
            $sidebar_body = $sidebar_req->getBody();
            $data['sidebar'] = json_decode($sidebar_body)->articles;

            return view('newsapp.index', $data);

       }catch(Exception $e){
            var_dump($e);
       }
       
    }

    public function getCountryCode($country_code = null){
        
        if($country_code == null){
             // Initialize CURL:
            $ch  = curl_init('http://ip-api.com/json/');  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            // Store the data:
            $json = curl_exec($ch);
            curl_close($ch);
        
            $arr_result = json_decode($json, true);

            return strtolower($arr_result['countryCode']);
        }else{
            return strtolower($country_code);
        }
    }

    public function newsByCategory($category, $country_code){
        $data['title'] = ucfirst($category);

        $data['cc'] = $country_code;

        $api_key = '51ad14e1df1b4e11b48c7780e6160a4a';

        $client = new Client();


        try{
            // Category
            $req = $client->get("https://newsapi.org/v2/top-headlines?country=$country_code&category=$category&apiKey=$api_key");
            $body = $req->getBody();
            $articles = json_decode($body)->articles;   

            $data['big_card'] = $articles[1];
            
            foreach($articles as $key => $value){
                if($key == 0 || $key == 2){
                    $cards[] = $articles[$key];
                }else{
                    if($key != 1){
                        $rests[] = $articles[$key];
                    }
                }
            }

            $data['cards'] = $cards;
            $data['rests'] = $rests;

            $data['category_headlines'] = $articles;
            $view = 'newsapp.' . $category;

            return view($view, $data);

        }catch(Exception $e){

        }
    }
}
