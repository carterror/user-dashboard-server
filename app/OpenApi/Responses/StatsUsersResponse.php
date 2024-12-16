<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\StatsSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class StatsUsersResponse extends ResponseFactory implements Reusable
{
    public function build(): Response
    {
        $media = MediaType::json()->schema(StatsSchema::ref());
        return Response::ok()->description('Successful response')->content($media);
    }
}
