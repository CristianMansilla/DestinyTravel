<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Si el usuario no está logueado
        if(!session()->get('logged_in')){
            return redirect()->to('/acceso');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Hacer algo aquí
    }
    
}