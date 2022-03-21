<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SwaggerController extends Controller
{
    /**
     * @SWG\Swagger(
     *     @SWG\Info(
     *          version="1.0.0",
     *          title="Epigra SpaceX API",
     *          description="Epigra SpaceX API Documentation"
     *     )
     * )
     */

    /** @SWG\GET(
     *     path="/api/capsules",
     *     tags={"Get Capsules"},
     *     summary="Get all capsules with or without status parameter.",
     *     description="Get all capsules with or without status parameter.",
     *     @SWG\Parameter(
     *          name="status",
     *          description="Status of a SpaceX Capsule",
     *          required=false,
     *          type="string",
     *          in="query"
     *     ),
     *     @SWG\Response(
     *          response=200,
     *          description="Successful",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="capsules",
     *                  type="string"
     *             )
     *          )
     *     ),
     *     @SWG\Response(
     *          response=401,
     *          description="Unauthorized"
     *     )
     *     @SWG\Response(
     *          response=500,
     *          description="Internal Server Error"
     *     )
     * )
    /** @SWG\Get(
     *     path="/api/capsules/{serial}",
     *     tags={"Get capsule with serial"},
     *     summary="Get capsule informations with serial.",
     *     description="Get capsule informations with serial.",
     *     @SWG\Response(
     *          response=200,
     *          description="Successful",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="capsule",
     *                  type="json"),
     *         )
     *     ),
     *     @SWG\Response(
     *          response=401,
     *          description="Unauthorized"
     *     )
     *
     *  *     @SWG\Response(
     *          response=500,
     *          description="Internal Server Error"
     *     )
     * )
     */

}
