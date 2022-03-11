<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Categoria;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{



    /***** Mostramos DATOS****/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $alumnos = Alumno::paginate();

        return view('alumno.index', compact('alumnos'));

    }




    /***** CREAMOS DATOS llamando a los datos relacionados****/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();

        $categoria = Categoria::pluck('Description', 'id');
        return view('alumno.create', compact('alumno', 'categoria'));
    }


    /***** GUARDAMOS DATOS****/


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);

        $alumno = request()->except('_token');

        /* if($request->hasFile('Foto')){
             $datosAlumno['Foto']=$request->file('Foto')->store('uploads','public');
         }*/

        Alumno::insert($alumno);

        return redirect('alumnos');
    }



    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }


    /***** EDITAMOS DATOS****/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        #Se agregó esto para hacer el select
        $categoria = Categoria::pluck('Description', 'id');
        return view('alumno.edit', compact('alumno', 'categoria'));
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id)->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno deleted successfully');
    }
}
