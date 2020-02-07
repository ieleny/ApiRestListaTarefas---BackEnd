<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    //Funcao Listar
    public function listar(Request $request)
    {
        return response()->json(
            [
                [
                    'id' => 0, 
                    'titulo' => 'Comprar Pao',
                    'selected' => false
                ],
                [
                    'id' => 1, 
                    'titulo' => 'Comprar Nescau',
                    'selected' => false
                ],
                [
                    'id' => 2, 
                    'titulo' => 'Comprar Sabonete',
                    'selected' => false
                ],
                [
                    'id' => 3, 
                    'titulo' => 'Comprar Achocolatado',
                    'selected' => false
                ]
            ]
            
        );
    }


}