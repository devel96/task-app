<?php

namespace App\Module\Swagger\V1\Application\Action;

use OpenApi\Annotations as OA;
use Symfony\Component\HttpFoundation\Response;

class SwaggerAction
{
    #[OA\Info(properties: [
        "title" => "My app",
        "version" => "0.1"
    ])]
    #[OA\Get(properties: [
        "path" => 'api/v2/swagger'
    ])]
//    #[OA\Response(response: '200', description: 'The data')]
    #[OA\Response(properties: ["response" => '200', "description" => 'The data'])]
    public function swaggerDocs(): Response
    {
//        $openapi = \OpenApi\scan(__DIR__ . '/../');

        return new Response('');
    }

}