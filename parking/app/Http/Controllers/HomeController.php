<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "http://admin.test/api/v1/check-permission/parking.view",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "accept: application/json",
                "authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI5MGJkNWQzOC1iOGJhLTQzZTEtYWI1NC1mNjQwYmIxODZmYjkiLCJqdGkiOiIxZGZhM2RjZTg0NGU0ZWUwNzIwODM5OGI5YTA5MjU4NDllMTc2OTNmZGE0NWQ2NGIwMDE1OGE4MTcxZDhmYzE1NGJmYzhlYTJmZjllOGIzMyIsImlhdCI6MTU5MjAwMTYzOSwibmJmIjoxNTkyMDAxNjM5LCJleHAiOjE2MjM1Mzc2MzksInN1YiI6IjIiLCJzY29wZXMiOltdfQ.pwhDW9UAlZkxxkaU5Akg1Gw4ZR82nzdZvw0qcKQxjQ6mrrX1dQiyXUG280KS7I8ZXkk6Y5LQVjsZNMqUaQ-C0pKjO-m51Y4FSwxsxky54_AMla104PFIExxKpIFNoTy-uOEX377GMccs8ToRIy6_R_z7BkdH1H7zUWci_radiSPY5BcM8XYTSvyRlQuJKSEy1ASCQsZRk5zAy0NT6esws6Z-2GsiW4moGhvK9bbo0Uj_nxoJRSMa7fAwgrWMEe9QqfWy1wFbNuhuXbYdoyRAGQRiY3v5qv1EOO0e-TYIk8IueYrbfioEuFmzgwxqhvefW-ui5Tm0hhxBkl0eN2UeMqen51TZbL27ax6kuzI_GTxhUyqlc4kdMH3pM9nnzdAmE0ClUgT5LH0FgV6C7Fz7QigXkj97dIc-ksjKqts5n3ayw6ThoBSU6aoR81T2X2ztl4QOInPiM7R2QdABmbS0Eybo1u4NOjGB9BwB__EQFrd0-2QSuZrBSZ_Dr3o7UAFNIF0UYfdJPbDTLq4QD-_ubWNo0nsK25XeChwIoyXLH-sS6NPLuM63EFfSXjXUlIlxzstQWIuLJuhb8t704SL32_N5b6CpFQnzY0lZDAb6JDoOIFMoO1B6W4-bvk3AiPl2_krX9R3zGSPxiy8PZIDPLwtyyWUKJm8apT7Hc4Q8DW0"
            ),
        ));

        $response=array();
        $response['response']= curl_exec($curl);
        $response['err'] = curl_error($curl);

        curl_close($curl);
        dd($response);

        if ($response['err']) {
            echo "cURL Error #:" . $response['err'];
        } elseif ($response['response']) {
            echo $response['response'];
        }else{
            echo 'kkkkkkkkkkkk';
        }

    }
}
