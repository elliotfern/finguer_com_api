<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class HealthController
{
    #[Route('/v1/health', name: 'api_health', methods: ['GET'])]
    public function __invoke(): JsonResponse
    {
        return new JsonResponse([
            'ok' => true,
            'service' => 'finguer-api',
            'ts' => (new \DateTimeImmutable())->format(DATE_ATOM),
        ]);
    }
}
