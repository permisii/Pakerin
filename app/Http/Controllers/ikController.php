<?php

namespace App\Http\Controllers;


use App\Models\ik;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ikController extends Controller

{
    private function getMenu()
    {
        return Menu::whereNamaMenu('ik')->first();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Menu $menu)
    {

        if (Gate::denies('read-menu', $this->getMenu())) {
            abort(403, 'Unauthorized');
        }

        $data = ik::all();

        return view('ik.index', compact('data'));
        return view('ik.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Menu $menu)
    {
        if (Gate::denies('create-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        return view('ik.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    /**
     * Display the specified resource.
     */
    public function show(ik $ik, Menu $menu)
    {
        if (Gate::denies('read-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        return view('ik.show', compact('ik'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ik $ik, Menu $menu)
    {
        if (Gate::denies('update-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ik $ik, Menu $menu)
    {
        if (Gate::denies('delete-menu', $menu)) {
            abort(403, 'Unauthorized');
        }

        $ik->delete();

        return redirect()
            ->route('ik.index')
            ->with('success', "data berhasil dihapus");
    }
}
