<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class PanelController extends Controller{
    // Muestra la vista de usuario_logueado
    public function index(){
        $session = session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('perfil_id');

        $dato['perfil_id']=$perfil;

        $data['titulo'] = 'Destiny Travel - Panel del usuario';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/usuario_logueado',$dato);
        echo view('front/footer_view');

    }
}