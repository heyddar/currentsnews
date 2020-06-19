<?php


namespace RoyalCodes\CurrentsNews;


use Illuminate\Support\Facades\Http;

class CurrentsNews
{
    public static function getNews()
    {
        $client = Http::get('https://api.currentsapi.services/v1/latest-news',[
            "apiKey" => config('currentsnews.api_key')
//                "xhFxbKGZH8eT6rUw3kgwmyXD90mKau908Jq3TzQuM5c7aPkf"
        ]);
        return $client->json()['news'];
    }
}