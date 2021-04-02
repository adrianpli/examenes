<?php


namespace App\Http\Controllers;


use App\Models\Examen;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ExamenController extends Controller{
public function examen(){
    return view('examen');
}
public function respuestas(Request $respuestas){
    $puntaje = 0;
    if (strcmp($respuestas -> btnradio1 ,"Servidor")===0)
        $puntaje++;

    if (strcmp($respuestas -> btnradio2, "if (a==0) echo 'hola mundo';" )===0)
        $puntaje++;

    if (strcmp($respuestas -> btnradio3, "Un conjunto de elementos")===0)
        $puntaje++;

    if (strcmp($respuestas -> btnradio4, "En PHP no se define el tipo de las variables explicitamente")===0)
        $puntaje++;

    if (strcmp($respuestas -> btnradio5, "12")===0)
        $puntaje++;

   $usuario = Usuario::find($respuestas -> idempleado);
   $usuario -> where("ID",$respuestas -> idempleado)
       ->update(["res_examen" => $puntaje]);


    $destino = $usuario -> correo;

    mail($destino,"Resultados examen PHP","Felicidades completaste el examen de PHP con $puntaje respuestas correctas");
return view("resultado",["puntuacion" => $puntaje]);
}


}
