<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Rawatinap extends BaseController
{
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' =>'Beranda',
                'link' =>base_url(),
                'icon' =>'fa-solid fa-house',
                'aktif'=>'',
            ],
            'pasien' => [
                'title' =>'Pasien',
                'link' =>base_url(), '/pasien',
                'icon' =>'fa-solid fa-users',
                'aktif'=>'',
            ],
            'dokter' => [
                'title' =>'Dokter',
                'link' =>base_url(), '/dokter',
                'icon' =>'fa-solid fa-users',
                'aktif'=>'',
            ],
            'rawat inap' => [
                'title' =>'Rawat Inap',
                'link' =>base_url(), '/rawatinap',
                'icon' =>'fa-solid fa-building-columns',
                'aktif'=>'active',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                           <h1 class="m-0">rawatinap</h1>
                     </div>
                    <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href"'. base_url() . '">beranda</a></li>
                          <li class="breadcrumb-item active">rawatinap</li>
                       </ol>
                  </div>'; 
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
       return view('rawatinap/content',$data); 
    }
}
