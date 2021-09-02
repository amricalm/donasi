<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Karyawan;
use App\TesData;
use App\TesKesehatan;
use App\TesKesPro;

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
        $app['tesdata'] = Session::get('tesdata');
        $app['data']    = Session::get('datakaryawan');
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
            'Shift' => 'required'
        ]);
        $validateTesData = $request->validate([
            'TglInput' => 'required',
            'Petugas' => 'required'
        ]);
        if (empty(Session::get('datakaryawan'))) {
            $karyawan = new Karyawan();
            $karyawan->fill($validatedData);
            Session::put('datakaryawan', $karyawan);
            $karyawan->save();

            $tesData = new TesData();
            $tesData->TglInput  = $request->input('TglInput');
            $tesData->Petugas   = $request->input('Petugas');
            $tesData->IDKaryawan = $karyawan->id;
            Session::put('tesdata', $tesData);
            $tesData->save();
        } else {
            $karyawan = Session::get('datakaryawan');
            $karyawan->fill($validatedData);
            Session::put('datakaryawan', $karyawan);

            $tesData = Session::get('tesdata');
            $tesData->TglInput  = $request->input('TglInput');
            $tesData->Petugas   = $request->input('Petugas');
            $tesData->IDKaryawan = Session::get('datakaryawan')->IDKaryawan;
            Session::put('tesdata', $tesData);
            Karyawan::where('ID', Session::get('datakaryawan')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update($validateTesData);
        }

        return redirect()->route('individualtask.create.step.two');
    }

    public function createStepTwo(Request $request)
    {
        $app['judul']           = 'II.B. Hasil Pengukuran';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskesehatan');
        return view('pages.individualTask.create-step-two', $app);
    }

    public function postCreateStepTwo(Request $request)
    {
        $validatedData = $request->validate([
            'Usia' => 'required',
            'TinggiBadan' => 'required',
            'BeratBadan' => 'required',
            'MassaTubuh' => 'required',
            'LemakTotal' => 'required',
            'LemakViseral' => 'required',
            'Sistol' => 'required',
            'Diastol' => 'required',
            'GulaDarah' => 'required',
            'HbDarah' => 'required',
        ]);
        if (empty(Session::get('teskesehatan'))) {
            $teskes = new TesKesehatan();
            $teskes->fill($validatedData);
            Session::put('teskesehatan', $teskes);
            $teskes->save();
            TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesehatan' => $teskes->id]);
        } else {
            $teskes = Session::get('teskesehatan');
            $teskes->fill($validatedData);
            Session::put('teskesehatan', $teskes);
            TesKesehatan::where('ID', Session::get('teskesehatan')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesehatan' => $teskes->id]);
        }
        return redirect()->route('individualtask.create.step.three');
    }

    public function createStepThree(Request $request)
    {
        $app['judul']           = 'II.C. Kespro';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.create-step-three', $app);
    }

    public function postCreateStepThree(Request $request)
    {
        $validatedData = $request->validate([
            'Rokok' => 'required',
            'LamaRokok' => 'required',
            'BanyakRokok' => 'required',
            'TempatRokok' => 'required'
        ]);

        if (empty(Session::get('teskespro'))) {
            $teskespro = new TesKesPro();
            $teskespro->fill($validatedData);
            Session::put('teskespro', $teskespro);
            $teskespro->save();
        } else {
            $teskespro = Session::get('teskespro');
            $teskespro->fill($validatedData);
            Session::put('teskespro', $teskespro);
            TesKesPro::where('ID', Session::get('teskespro')->id)->update($validatedData);
        }
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => $teskespro->id]);

        return redirect()->route('individualtask.create.step.four');
    }

    public function createStepFour(Request $request)
    {
        $app['judul']           = 'II.C. Kespro';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.create-step-four', $app);
    }

    public function postCreateStepFour(Request $request)
    {
        $validatedData = $request->validate([
            'BebanKerjaHaid' => 'required',
            'CutiHaid' => 'required',
            'JumlahAnak' => 'required',
            'Baduta' => 'required',
            'UsiaBaduta' => 'required',
            'AsiBaduta' => 'required',
            'LamaAsiBaduta' => 'required',
            'MemerahAsi' => 'required',
            'TempatMemerahAsi' => 'required',
            'IzinMemerahAsi' => 'required',
            'HambatanMemerahAsi' => 'required',
            'AsiEkslusif' => 'required',
            'UsiaDiberiSusu' => 'required',
            'AlasanDiberiSusu' => 'required',
            'HambatanAsi' => 'required',
            'UsiaMpAsi' => 'required',
            'JenisMpAsi' => 'required',
            'HambatanMpAsi' => 'required'
        ]);

        $teskespro = Session::get('teskespro');
        $teskespro->fill($validatedData);
        Session::put('teskespro', $teskespro);
        TesKespro::where('ID', Session::get('teskespro')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => Session::get('teskespro')->id]);

        return redirect()->route('individualtask.create.step.five');
    }

    public function createStepFive(Request $request)
    {
        $app['judul']           = 'II.C. Kespro';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.create-step-five', $app);
    }

    public function postCreateStepFive(Request $request)
    {
        $validatedData = $request->validate([
            'BeratHamil' => 'required',
            'PeriksaHamil' => 'required',
            'TempatPeriksa' => 'required',
            'JumlahPeriksa' => 'required',
            'HambatanPeriksa' => 'required',
            'BebanKerjaHamil' => 'required',
            'CutiUsiaHamil' => 'required',
            'LamaCutiHamil' => 'required'
        ]);

        $teskespro = Session::get('teskespro');
        $teskespro->fill($validatedData);
        Session::put('teskespro', $teskespro);
        TesKespro::where('ID', Session::get('teskespro')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => Session::get('teskespro')->id]);

        return redirect()->route('individualtask.create.step.six');
    }

    public function createStepSix(Request $request)
    {
        $app['judul']           = 'II.C. Kespro';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.create-step-six', $app);
    }

    public function postCreateStepSix(Request $request)
    {
        $validatedData = $request->validate([
            'YankesNifas' => 'required',
            'YankesNifasDari' => 'required',
            'JumlahYankes' => 'required',
            'BebanKerjaNifas' => 'required',
            'Kb' => 'required',
            'JenisKb' => 'required',
            'YankesKb' => 'required'
        ]);

        $teskespro = Session::get('teskespro');
        $teskespro->fill($validatedData);
        Session::put('teskespro', $teskespro);
        TesKespro::where('ID', Session::get('teskespro')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => Session::get('teskespro')->id]);

        return redirect()->route('individualtask.create.step.six');
    }
}
