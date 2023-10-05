<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class AccesoController extends BaseController{
    public function index(){
        helper(['form', 'url']);

        $data['titulo'] = 'Destiny Travel - Acceso';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/acceso');
        echo view('front/footer_view');
    }

    // Función de autorizado
    public function auth(){
        // Inicia la sesión
        $session = session();
        // Instancio un nuevo modelo
        $model = new UsuarioModel();
        // Traemos los datos del formulario y los guardamos en una variable
        $mail = $this->request->getVar('mail');
        $password = $this->request->getVar('pass');

        // Compara los datos de la columna mail de la BD con el $mail del input del form hasta que encuentre la primer coincidencia y lo guarda en una variable
        $data = $model->where('mail', $mail)->first();
        if($data){
            $pass = $data['pass'];
            $ba = $data['baja'];

            // Controla si el usuario fue dado de baja
            if($ba == 'SI'){
                $session->setFlashdata('msg', 'Usuario dado de baja');
                return redirect()->to('/acceso');
            }

            // Se verifican los datos ingresados para iniciar, si cumple con la verificación inicia la sesión. Se compara la pass ingresada en el form con la pass guardada en la BD
            $verify_pass = password_verify($password, $pass);
            // password_verify determina los requisitos de configuración de la contraseña.

            // Se arma la data de la sesión si las pass coinciden
            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'mail' => $data['mail'],
                    'usuario' => $data['usuario'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];

                $session->set($ses_data);

                session()->setFlashdata('msg', 'Datos validados con éxito!');
                return redirect()->to('/panel');
            }else{
                // Si no pasa la validación del password
                $session->setFlashdata('msg', 'Contraseña incorrecta');
                return redirect()->to('/acceso');
            }

        }else{
            // Si no pasa la validación del email
            $session->setFlashdata('msg', 'No existe el email o es incorrecto');
            return redirect()->to('/acceso');
        }
    }

    public function logout(){
        $session = session(); //Carga la sesión
        $session->destroy(); //Destroy es una función de sesion. Destruye la sesión
        return redirect()->to('/');
    }
}