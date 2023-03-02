<?php
namespace App\Services;

use MailchimpMarketing\ApiClient;

class Newsletter{


    public function __construct(protected ApiClient $client){

    }

    public function subscribe(string $email, string $list =null)
    {
        $list ??= config('services.mailchimp.list.subscribers');
        request()->validate(['email' => 'required|email']);


    return $this->client->lists->
        addListMember($list, [
        "email_address" =>  $email,
        "status" => "subscribed",
    ]);

    }
}