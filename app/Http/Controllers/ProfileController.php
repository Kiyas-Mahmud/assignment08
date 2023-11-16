<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    function index($id)
    {

        $userName = "Donal Trump";
        $age = "75";

        $data = [
            'id' => $id,
            'userName' => $userName,
            'age' => $age,
        ];


        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        return response("id: {$id}, <br> name: {$userName} , <br> age: {$age}", 200)->cookie(
            $name, $value, $minutes, $path, $domain, $secure, $httpOnly
        );
    }
}
