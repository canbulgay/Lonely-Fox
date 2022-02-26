<?php


namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function __construct(protected ApiClient $client){

        $this->client = $client;
    }

    public function subscribe($email , string $list = null)
    {
        return $this->client->lists->addListMember(config('services.mailchimp.lists.subscribers'),[
            'email_address' => $email,
            'status' => 'subscribed'
        ]);
    }
}