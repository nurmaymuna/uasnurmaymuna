<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $menu = [
            'beranda' => [
                'title' =>'Beranda',
                'link' =>base_url(),
                'icon' =>'fa-solid fa-house',
                'aktif'=>'active',
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
                'aktif'=>'',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                           <h1 class="m-0">beranda</h1>
                     </div>
                    <div class="col-sm-6">
                       <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item active"><a href"'. base_url() . '">Beranda</a></li>
                       </ol>
                  </div>'; 
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] ="welcome to my rumah sakit";
        $data['selamat_datang'] = "selamat datang";
       return view('template/content',$data); 
    }
}
