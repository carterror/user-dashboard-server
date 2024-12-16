<?php

namespace App\OpenApi\Responses;

use App\OpenApi\Schemas\UserSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Response;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\ResponseFactory;

class ListUsersResponse extends ResponseFactory implements Reusable
{
    public function build(): Response
    {
        $media = MediaType::json()->schema(UserSchema::ref());
        return Response::ok()->description('Successful response')->content($media);
    }
}
