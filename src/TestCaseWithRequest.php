<?php
declare(strict_types=1);

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;

class TestCaseWithRequest extends TestCase
{
    protected $url;

    protected $jsonStringParams;

    protected function sendPostRequestAndCheckStatusCodeIs200()
    {
        $request = new Request(
            'POST',
            $this->url,
            [],
            $this->jsonStringParams
        );

        $client = new Client();
        $response = $client->send($request);

        $this->assertEquals(
            200,
            $response->getStatusCode()
        );
    }
}