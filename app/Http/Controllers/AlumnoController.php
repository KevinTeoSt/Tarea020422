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
        /*$data =  request()->validate(Alumno::$rules);*/
        $data = request()->validate([
            'Carnet' => 'required',
            'categoria_id' => 'required',
            'FirstName' => 'required',
            'SecondName' => 'required',
            'LastName' => 'required',
            'DateOfBirth' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'Dpi' => 'required',
            'Cel' => 'required',
        ], [
            'Carnet.required' => 'No olvides llenar este campo',
            'categoria_id.required' => 'No olvides llenar este campo',
            'FirstName.required' => 'No olvides llenar este campo',
            'SecondName.required' => 'No olvides llenar este campo',
            'LastName.required' => 'No olvides llenar este campo',
            'DateOfBirth.required' => 'No olvides llenar este campo',
            'Address.required' => 'No olvides llenar este campo',
            'Email.required' => 'No olvides llenar este campo',
            'Dpi.required' => 'No olvides llenar este campo',
            'Cel.required' => 'No olvides llenar este campo',
        ]);


        $alumno = request()->except('_token');
/*
        if($request->hasFile('Foto')){
            $alumno['Foto']=$request->file('Foto')->store('uploads','public');
         }
*/
        try {
           /* Alumno::insert($alumno);*/
            Alumno::insert([
                'Carnet' => $data['Carnet'],
                'categoria_id' => $data['categoria_id'],
                'FirstName' => $data['FirstName'],
                'SecondName' => $data['SecondName'],
                'LastName' => $data['LastName'],
                'DateOfBirth' => $data['DateOfBirth'],
                'Address' => $data['Address'],
                'Email' => $data['Email'],
                'Dpi' => $data['Dpi'],
                'Cel' => $data['Cel'],
            ]);
        } catch (\Exception $exception) {
            $message=$exception->getMessage();
            $tipoError=" Excepción General del Sistema ";
            return view('exceptions.exceptions', compact('message', 'tipoError'));
        }catch (QueryException $queryException){
            $message= $queryException->getMessage();
            $tipoError=" Excepción de Base de Datos ";
            return view('errors.404', compact('message', 'tipoError'));
        }catch (ModelNotFoundException $modelNotFoundException){
            $message=$modelNotFoundException->getMessage();
            $tipoError=" Excepción en el Servidor ";
            return view('errors.404', compact('message', 'tipoError'));
        }


        return redirect('alumnos')->with('success', 'Alumno Agregado correctamente');
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
        try{
            $alumno = Alumno::find($id)->delete();
        }catch (\Exception $exception) {
            $message=$exception->getMessage();
            $tipoError=" Excepción General del Sistema ";
            return view('exceptions.exceptions', compact('message', 'tipoError'));
        }catch (QueryException $queryException){
            $message= $queryException->getMessage();
            $tipoError=" Excepción de Base de Datos ";
            return view('errors.404', compact('message', 'tipoError'));
        }

        return redirect()->route('alumnos.index')->with('success', 'Alumno deleted successfully');
    }
}
