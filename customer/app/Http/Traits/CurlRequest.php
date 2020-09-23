<?php

namespace App\Http\Traits;


trait CurlRequest
{
    public function apiReqGet($url)
    {
        $response = array();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => config('project.parking_url') . $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "accept: application/json",
            ),
        ));
        $response['response'] = curl_exec($curl);
        $response['err'] = curl_error($curl);

        curl_close($curl);
        /*end api consuming*/
        return $response;
    }

    public function apiReqPost($url, $data)
    {
        $response = array();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => config('project.parking_url') .$url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "accept: application/json",
                "authorization: ".session()->get('auth_token')
            ),
        ));
        $response['response'] = curl_exec($curl);
        $response['err'] = curl_error($curl);

        curl_close($curl);
        /*end api consuming*/
        return $response;
    }

    public function apiReqPut($url, $data)
    {
        $response = array();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => config('project.parking_url') .$url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => http_build_query($data),
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "cache-control: no-cache",
                "content-type: application/x-www-form-urlencoded",
                "authorization: ".session()->get('auth_token')
            ),
        ));
        $response['response'] = curl_exec($curl);
        $response['err'] = curl_error($curl);

        curl_close($curl);
        /*end api consuming*/
        return $response;
    }
    public function apiReqDel($url)
    {
        $response = array();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => config('project.parking_url') .$url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => "DELETE",
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                "accept: application/json",
                "authorization: ".session()->get('auth_token')
            ),
        ));
        $response['response'] = curl_exec($curl);
        $response['err'] = curl_error($curl);

        curl_close($curl);
        /*end api consuming*/
        return $response;
    }
}
