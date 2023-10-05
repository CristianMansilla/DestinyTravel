<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function principal()
    {
        $data['titulo'] = 'Destiny Travel';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }

    public function quienessomos()
    {
        $data['titulo'] = 'Destiny Travel - Quienes Somos';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/quienessomos');
        echo view('front/footer_view');
    }

    public function acercade()
    {
        $data['titulo'] = 'Destiny Travel - Acerca de';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('front/acercade');
        echo view('front/footer_view');
    }

    public function registrarse()
    {
        $data['titulo'] = 'Destiny Travel - Registrarse';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrarse');
        echo view('front/footer_view');
    }

    public function acceso()
    {
        $data['titulo'] = 'Destiny Travel - Acceso';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/acceso');
        echo view('front/footer_view');
    }
}
