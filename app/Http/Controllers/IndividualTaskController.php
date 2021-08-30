<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Karyawan;
use App\TesKesehatan;

class IndividualTaskController extends Controller
{
    public function index()
    {
        $app['data']    = Karyawan::all();

        return view('pages.individualTask.index', $app);
    }

    public function createStepOne(Request $request)
    {
        $app['judul']   = 'II.A. Identitas Individu Pekerja Perempuan';
        $app['aktif']   = '';
        $app['data']    = $request->session()->get('datakaryawan');

        return view('pages.individualTask.create-step-one', $app);
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'NamaLengkap' => 'required',
            'TglLahir' => 'required',
            'UnitKerja' => 'required',
            'TglMasuk' => 'required',
            'TglMasukUnit' => 'required',
            'Shift' => 'required',
            'TglInput' => 'required'

        ]);
        if (empty($request->session()->get('datakaryawan'))) {
            $karyawan = new Karyawan();
            $karyawan->fill($validatedData);
            $request->session()->put('datakaryawan', $karyawan);
            $karyawan->save();
        } else {
            $karyawan = $request->session()->get('datakaryawan');
            $karyawan->fill($validatedData);
            $request->session()->put('datakaryawan', $karyawan);
        }

        return redirect()->route('individualtask.create.step.two');
    }

    public function createStepTwo(Request $request)
    {
        $app['judul']           = 'II.B. Hasil Pengukuran';
        $app['aktif']           = '';
        $app['dataKaryawan']    = $request->session()->get('datakaryawan');
        $app['data']            = $request->session()->get('teskesehatan');
        return view('pages.individualTask.create-step-two', $app);
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'IDKaryawan' => 'required',
            'TglInput' => 'required',
            'Usia' => 'required',
            'TinggiBadan' => 'required',
            'BeratBadan' => 'required',
            'MassaTubuh' => 'required',
            'LemakTotal' => 'required',
            'LemakViseral' => 'required',
            'Sistol' => 'required',
            'Diastol' => 'required',

        ]);
        if (empty($request->session()->get('teskesehatan'))) {
            $teskes = new TesKesehatan();
            $teskes->fill($validatedData);
            $request->session()->put('teskesehatan', $teskes);
            $teskes->save();
        } else {
            $teskes = $request->session()->get('teskesehatan');
            $teskes->fill($validatedData);
            $request->session()->put('teskesehatan', $teskes);
        }

        return redirect()->route('individualtask.create.step.three');
    }

    public function createStepThree(Request $request)
    {
        $product = $request->session()->get('product');

        return view('pages.individualTask.create-step-three', compact('product'));
    }

    public function postCreateStepThree(Request $request)
    {
        $product = $request->session()->get('product');
        $product->save();

        $request->session()->forget('product');

        return redirect()->route('individualtask.index');
    }
}
