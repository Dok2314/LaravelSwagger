<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;

/**
 * @OA\Post(
 *      path="/api/auth/login",
 *      summary="Логин",
 *      tags={"User"},
 *
 *     @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="email", type="string", example="user@gmail.com"),
 *                       @OA\Property(property="password", type="string", example="user123456"),
 *                   )
 *               }
 *           )
 *      ),
 *
 *     @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                   @OA\Property(property="access_token", type="integer", example="awdawdawwafkawfkwafk214.arwoiawfjawj421.awfreoreafkeafa"),
 *                   @OA\Property(property="token_type", type="string", example="bearer"),
 *                   @OA\Property(property="expires_in", type="integer", example="3600"),
 *              ),
 *          ),
 *      ),
 * ),
 */
class UserController extends Controller
{

}
