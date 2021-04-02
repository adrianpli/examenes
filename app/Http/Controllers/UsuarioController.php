<?php


namespace App\Http\Controllers;


use App\Models\Examen;
use App\Models\Usuario;
use App\Models\admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use PDF;

class UsuarioController extends Controller
{
public function login(){
    return view("login");
}
public function loginAdmin(){
    return view("loginAdmin");
}
public function registro(){
    return view("registro");
}
public function examen(){
    return view("examen");
}


    public function registroForm(Request $datos){

        if(!$datos -> nombre || !$datos -> edad || !$datos -> btnsexo || !$datos -> correo || !$datos -> password)
            return view("registro",["estatus"=> "error", "mensaje"=> "¡Falta información!"]);

        $usuario = Usuario::where('correo',$datos->correo)->first();
        if($usuario)
            return view("registro",["estatus"=> "error", "mensaje"=> "¡El correo ya se encuentra registrado!"]);

        $nombre = $datos -> nombre;
        $edad = $datos -> edad;
        $sexo = $datos -> btnsexo;
        $correo = $datos -> correo;
        $password = $datos -> password;

        $usuario = new Usuario();
        $usuario -> nombre = $nombre;
        $usuario -> edad = $edad;
        $usuario -> sexo = $sexo;
        $usuario -> correo =  $correo;
        $usuario -> contra = bcrypt($password);
        $usuario -> res_examen = 0;
        $usuario -> save();

        return view("login",["estatus"=> "success", "mensaje"=> "¡Cuenta Creada!"]);

    }
    public function verificarUsuario(Request $datos){
    $usuario = Usuario::where("correo",$datos -> correo)->first();

        if(!$usuario)
            return view("login",["estatus"=> "error", "mensaje"=> "¡El correo no esta registrado!"]);
        if(!Hash::check($datos->password,$usuario->contra))
            return view("login",["estatus"=> "error", "mensaje"=> "¡Datos incorrectos!"]);

        Session::put("usuario",$usuario);

       return view("examen");
}
public function verificarAdmin(Request $datos){
    $admin = admins::where("correo",$datos -> correo)->first();
    if(!$admin)
        return view("loginAdmin",["estatus"=> "error", "mensaje"=> "¡El correo no esta registrado!"]);
    if($datos->password===$admin->contrasena){
        Session::put("usuario",$admin->nombre);

        $usuarios = Usuario::get();
        $examenes = Examen::get();

       // $sql1 = "SELECT SUM(res_examen) FROM empleados WHERE sexo = 'Mujer' ";
      //  $sql2 = "SELECT SUM(res_examen) FROM empleados WHERE sexo = 'Hombre' ";

        $usuariosmujeres = Usuario::where('sexo','Mujer')->get();
        $respuestasMujeres = 0;
        foreach ($usuariosmujeres as $resmujer){
            $respuestasMujeres = $resmujer -> res_examen + $respuestasMujeres;
        }
        $usuarioshombres = Usuario::where('sexo','Hombre')->get();
        $respuestasHombres = 0;
        foreach ($usuarioshombres as $reshombre){
            $respuestasHombres = $reshombre -> res_examen + $respuestasHombres;
        }
        $edades = Usuario::orderBy('edad','ASC')->get();
$altos = Usuario::orderBy('res_examen','DESC')->take(5)->get();
$bajos = Usuario::orderBy('res_examen','ASC')->take(5)->get();


        return view("menu",["usuarios" => $usuarios, "respuestasH" => $respuestasHombres,"respuestasM" => $respuestasMujeres,"edades" => $edades,"altos" => $altos,"bajos" => $bajos]);
    }else{
        return view("loginAdmin",["estatus"=> "error", "mensaje"=> "¡Datos incorrectos!"]);

    }
}
public function imprimirPDF($id){

$datos = Usuario::where('ID',$id)->get();
$data = compact('datos');
    $pdf = PDF::loadView('pdf.reporteUsuario', $data);
    return $pdf->stream();
   //
}
public function informacion($id,$nombre,$edad,$sexo,$correo,$resultado){
    return view('graficousuario',["id" => $id,"nombre" => $nombre, "edad" => $edad, "sexo" => $sexo, "correo" => $correo, "resultado" => $resultado]);

}
public function cerrarSesion(){
    if(Session::has('usuario'))
        Session::forget('usuario');

    return view("inicio");
}

}
