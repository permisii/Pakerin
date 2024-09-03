<?php

namespace App\Http\Controllers;

use App\Http\Requests\Karyawan\StoreKaryawanRequest;
use App\Http\Requests\Karyawan\UpdateKaryawanRequest;
use App\Models\Karyawan;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class KaryawanController extends Controller
{
    private function getMenu()
    {
        return Menu::whereNamaMenu('Karyawan')->first();
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, Menu $menu)
    {

        if (Gate::denies('read-menu', $this->getMenu())) {
            abort(403, 'Unauthorized');
        }

        $data = Karyawan::all();

        return view('karyawan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Menu $menu)
    {
        if (Gate::denies('create-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKaryawanRequest $request, Menu $menu)
    {
        if (Gate::denies('create-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        Karyawan::create($request->validated());

        return redirect()
            ->route('karyawans.index')
            ->with('success', 'Karyawan berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan, Menu $menu)
    {
        if (Gate::denies('read-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Karyawan $karyawan, Menu $menu)
    {
        if (Gate::denies('update-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        return view('karyawan.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKaryawanRequest $request, Karyawan $karyawan, Menu $menu)
    {
        if (Gate::denies('update-menu', $menu)) {
            abort(403, 'Unauthorized');
        }
        $data = $request->validated();

        if (empty($data['password'])) {
            unset($data['password']);
        }

        $karyawan->update($data);

        return redirect()
            ->route('karyawans.index')
            ->with('success', "karyawan dengan nip {$karyawan->nip} berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Karyawan $karyawan, Menu $menu)
    {
        if (Gate::denies('delete-menu', $menu)) {
            abort(403, 'Unauthorized');
        }

        $karyawan->delete();

        return redirect()
            ->route('karyawans.index')
            ->with('success', "karyawan dengan nip {$karyawan->nip} berhasil dihapus");
    }
}
