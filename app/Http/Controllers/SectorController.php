<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Sector_model;




class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \iluminate\Http\Response
     */
    public function index()
    {


        $sectorregister = Sector_model::paginate();
        /*SE ESPERA LA VISTA QUE CORRESPONDE A "SECTOR" PARA LA CONEXIÓN CON LA MISMA. MIENTRAS SE ESPERA 
        LA CREACIÓN DE LA VISTA, SE USA 'REGISTER.BLADE' SOLO COMO EJEMPLO, DADA LA NECESIDAD DE LA ESTRUCTURA.*/
        return  view('..blade', compact('sector'))
        ->with('i' (request()->input('page', 1) -1) * 
        $sectorregister->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sector= new Sector_model ();
         /*SE ESPERA LA VISTA QUE CORRESPONDE A "SECTOR" PARA LA CONEXIÓN CON LA MISMA. MIENTRAS SE ESPERA 
        LA CREACIÓN DE LA VISTA, SE USA 'REGISTER.BLADE' SOLO COMO EJEMPLO, DADA LA NECESIDAD DE LA ESTRUCTURA.*/
        return view('register.blade', compact('sector'));
    }

    /**
     * Store a newly created resource in storage.
     *@param \Iluminate\Http\Request $request
    *@return \Iluminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sector_model::$rules);
        $sectorregister=Sector_model::create($request->all());
 /*SE ESPERA LA VISTA QUE CORRESPONDE A "SECTOR" PARA LA CONEXIÓN CON LA MISMA. MIENTRAS SE ESPERA 
        LA CREACIÓN DE LA VISTA, SE USA 'REGISTER.BLADE' SOLO COMO EJEMPLO, DADA LA NECESIDAD DE LA ESTRUCTURA.*/
        return redirect()->route('register.blade')
        ->with('Éxito', 'El sector se ha añadido.');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Iluminate\Http\Response
     */
    public function show(string $id)
    {
        $sectorregister = Sector_model::find($id);
        return view('register.blade', compact('sector'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sectorregister = Sector_model::find($id);
        return view('register.blade', compact ('sector'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Iluminate\Http\Request $request
     * @param Sector_model $sectorregister
     * @return \Iluminate\Http\Response
     */
    public function update(Request $request, Sector_model $sectorregister ,string $id)
    {
        request()->validate(Sector_model::$rules);

        $sectorregister->update ($request->all());

        return redirect()->route('register.blade')
        ->with('Éxito', 'Sector actualizado');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return \Iluminate\Http\RedirectResponse
     * 
     */
    public function destroy(string $id, Request $request, Sector_model $sectorregister)
    {
        $sectorregister = Sector_model::find($id)->delete();

        return redirect()->route('register.blade')
        ->with('Éxito', 'El sector sido borrado');
    }
}
