<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/user/{user_id}",
     *   summary="ユーザープロフィール取得API",
     *   @OA\Parameter(
     *     name="user_id",
     *     in="path",
     *     required=true,
     *     description="ユーザーID"
     *   ),
     *   @OA\Response(
     *     response=200,
     *     description="OK",
     *     @OA\JsonContent(
     *       type="object",
     *       @OA\Property(
     *         property="user_name",
     *         type="string",
     *         description="ユーザー名"
     *       ),
     *       @OA\Property(
     *         property="club_names",
     *         type="array",
     *         description="所属している部活名一覧",
     *       ),
     *       @OA\Property(
     *         property="thumbnail_path",
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
    public function index(Request $request, $id)
    {
        if (is_null($id)) {
            return response(["message" => "Undefined Path Parameter Error"], 400);
        }
        $user = \DB::table("users")->select(\DB::raw("users.name as user_name, users.thumbnail_path, clubs.name as club_name"))->join("club_members", "users.id", "=", "club_members.user_id")
            ->join("clubs", "club_members.club_id", "=", "clubs.id")
            ->where("users.id", $id)
            ->get()
            ->toArray();
        if (count($user) === 0) {
            return response(["message" => "Not found"], 404);
        }
        $targetUser = $user[0];
        $responseUser = [
            "user_name" => $targetUser->user_name,
            "thumbnail_path" => $targetUser->thumbnail_path,
            "club_name" => array_map(function ($u) {
                return $u->club_name;
            },$user)
        ];
        return response($responseUser);
    }
}
