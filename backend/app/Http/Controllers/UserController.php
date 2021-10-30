<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Get(
     *   path="/user/{user_id}",
     *   summary="ユーザープロフィール取得API",
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       type="object",
     *       @OA\Property(
     *         property="user_name",
     *         type="string",
     *         description="ユーザー名"
     *       )
     *       @OA\Property(
     *         property="club_names",
     *         type="array",
     *         description="所属している部活名一覧"
     *       )
     *       @OA\Property(
     *         property="thumbnail_image_path",
     *         type="string",
     *         description="サムネイル画像のパス"
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response=400,
     *     description="Bad Request",
     *     @OA\JsonContent(
     *       type="object",
     *       @OA\Property(
     *         property="message",
     *         type="string",
     *         description="レスポンスパラメータの例を記載"
     *       )
     *     )
     *   ),
     *   @OA\Response(
     *     response="default",
     *     description="Unexpected Error",
     *     @OA\JsonContent(
     *       type="object",
     *       @OA\Property(
     *         property="message",
     *         type="string",
     *         description="レスポンスパラメータの例を記載"
     *       )
     *     )
     *   )
     * )
     */
    public function index()
    {
        //
    }
}
