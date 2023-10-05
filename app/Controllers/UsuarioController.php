<?php
namespace App\Controllers;
use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends BaseController{
    public function __construct(){
        // Los helper son bibliotecas de código disponibles en codeigniter, que nos permiten manejar de manera simple las funciones que necesitamos.
        helper(['form', 'url']);
    }

    // Renderizamos las vistas del formulario de registro
    public function create(){
        $data['titulo'] = 'Destiny Travel - Registrarse'; // Array asociativo
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registrarse');
        echo view('front/footer_view');
    }

    // Validamos el formulario
    public function formValidation(){
        // Validamos cada uno de los inputs del formulario.
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]|is_unique[usuarios.usuario]',
            'mail' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.mail]',
            'pass' => 'required|min_length[3]|max_length[100]'

        ]);

        // Llamamos al modelo porque vamos a utilizar la tabla de la BD.
        $formModel = new UsuarioModel();

        // Si $input es false porque no pasó la validación va a ir mostrando los mensaje de error en cada input del formulario que esté erroneo.
        if(!$input){
            $data['titulo'] = 'Destiny Travel - Registrarse';
            echo view('front/head_view',$data);
            echo view('front/navbar_view');
            echo view('back/usuario/registrarse', ['validation' => $this->validator]);
            echo view('front/footer_view');
        }else{
            // Si el $input es true va a ir guardando en los campos de la tabla, lo que trae de los inputs del formulario.
            $formModel->save([
                // Del lado izquierdo corresponde a los nombres que pusimos en la BD y del lado derecho -> getVar() corresponde a los nombres de los names de los inputs del form
                'nombre' => $this->request->getVar('nombre'),
                'apellido' => $this->request->getVar('apellido'),
                'usuario' => $this->request->getVar('usuario'),
                'mail' => $this->request->getVar('mail'),
                'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)
                // password_hash() crea un nuevo hash de contraseña usando un algoritmo de hash de único sentido.
            ]);
            
            // flashdata se encarga de redirigir la función en el controlador en la vista de carga. Es la forma de enviar a otra página un mensaje.
            session()->setFlashdata('success', 'Usuario registrado con exito');
            
            return $this->response->redirect('/destinytravel/acceso');

            // Otra forma de escribir el return
            // return redirect()->to(base_url('/acceso'));
        }
    }
}