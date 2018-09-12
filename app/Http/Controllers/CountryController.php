<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;



use Goutte\Client;



class CountryController extends Controller
{
    
    public function index()
    {
        $client = new Client();

        $crawler = $client->request('GET', 'https://en.wikipedia.org/wiki/List_of_countries_by_population_(United_Nations)');      

        $status_code = $client->getResponse()->getStatus();

        // if ($status_code == 200) {echo "Nice";}

        $content = $crawler->filter( 'table.wikitable > tbody > tr > td' )->extract( array( '_text' ) );




        
        $countries = array();
        $continents = array();
        for($i=1;$i<sizeof($content); $i+=7) {

            if(strpos($content[$i], ']') == true) {
                $content[$i] = substr($content[$i], 0, strpos($content[$i], "["));
            }

            $slug = ucfirst(trim($content[$i]));

            if(strpos($slug, ' ') == true) {
                $slug = str_replace(' ', '_', $slug);
            }

            $countryflagurl = "http://flagpedia.net/".$slug; 
            $countries[] = array(
                    'country' => $content[$i], 
                    'continent'=>$content[$i+1],
                    'region'=>$content[$i+2],
                    'popuplation2016'=>str_replace(',', '',$content[$i+3]),
                    'popuplation2017'=>str_replace(',', '',$content[$i+4]),
                    'slug'=> $slug,
                    'url'=>"https://en.wikipedia.org/wiki/".$slug,
                    );

           

        }


       
        print("<pre>".print_r($countries,true)."</pre>");
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
