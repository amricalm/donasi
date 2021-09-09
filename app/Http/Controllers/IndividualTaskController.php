<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use App\Karyawan;
use App\TesData;
use App\TesKesehatan;
use App\TesKesPro;
use App\TesPolaMakan;
use App\TesFisik;
use App\TesStress;

class IndividualTaskController extends Controller
{
    public function index()
    {
        $app['data']    = Karyawan::all();

        return view('pages.individualTask.index', $app);
    }

    //data diri
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
            $tesData->TglInput  = Carbon::now();
            $tesData->Petugas   = $request->input('Petugas');
            $tesData->IDKaryawan = Session::get('UserEmployeeID');
            Session::put('tesdata', $tesData);
            $tesData->save();
        } else {
            $karyawan = Session::get('datakaryawan');
            $karyawan->fill($validatedData);
            Session::put('datakaryawan', $karyawan);

            $tesData = Session::get('tesdata');
            $tesData->TglInput  = Carbon::now();
            $tesData->Petugas   = $request->input('Petugas');
            $tesData->IDKaryawan = Session::get('datakaryawan')->IDKaryawan;
            Session::put('tesdata', $tesData);
            Karyawan::where('ID', Session::get('datakaryawan')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update($validateTesData);
        }

        return redirect()->route('individualtask.create.step.two');
    }

    //imt
    public function imtCreate(Request $request)
    {
        $app['judul']           = 'Hasil Pengukuran';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskesehatan');
        return view('pages.individualTask.imt.create', $app);
    }

    public function imtCreatePost(Request $request)
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

            if (empty(Session::get('tesdata'))) {
                $tesData = new TesData();
                $tesData->TglInput  = Carbon::now();
                $tesData->Petugas   = $request->input('Petugas');
                $tesData->IDKaryawan = Session::get('UserEmployeeID');
                $tesData->IDTesKesehatan   = $teskes->id;
                Session::put('tesdata', $tesData);
                $tesData->save();
            } else {
                TesData::where('ID', Session::get('tesdata')->id)
                    ->whereDate('TglInput', Session::get('tesdata')->CreatedDate)
                    ->update(['IDTesKesehatan' => $teskes->id]);
            }
        } else {
            $teskes = Session::get('teskesehatan');
            $teskes->fill($validatedData);
            Session::put('teskesehatan', $teskes);
            TesKesehatan::where('ID', Session::get('teskesehatan')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesehatan' => $teskes->id]);
        }
        return redirect()->route('imt.create');
    }

    //kespro
    public function kesproCreateStepOne(Request $request)
    {
        $app['judul']           = 'Kesehatan Reproduksi';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.kespro.create-step-one', $app);
    }

    public function kesproCreateStepOnePost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        if (empty(Session::get('teskespro'))) {
            $teskespro = new TesKesPro();
            $teskespro->fill($validatedData);
            Session::put('teskespro', $teskespro);
            $teskespro->save();

            if (empty(Session::get('tesdata'))) {
                $tesData = new TesData();
                $tesData->TglInput  = Carbon::now();
                $tesData->Petugas   = $request->input('Petugas');
                $tesData->IDKaryawan = Session::get('UserEmployeeID');
                $tesData->IDTesKesPro   = $teskespro->id;
                Session::put('tesdata', $tesData);
                $tesData->save();
            } else {
                TesData::where('ID', Session::get('tesdata')->id)
                    ->whereDate('TglInput', Session::get('tesdata')->CreatedDate)
                    ->update(['IDTesKesPro' => $teskespro->id]);
            }
        } else {
            $teskespro = Session::get('teskespro');
            $teskespro->fill($validatedData);
            Session::put('teskespro', $teskespro);
            TesKesPro::where('ID', Session::get('teskespro')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => $teskespro->id]);
        }

        return redirect()->route('kespro.create.step.two');
    }

    public function kesproCreateStepTwo(Request $request)
    {
        $app['judul']           = 'Kesehatan Reproduksi';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.kespro.create-step-two', $app);
    }

    public function kesproCreateStepTwoPost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        $teskespro = Session::get('teskespro');
        $teskespro->fill($validatedData);
        Session::put('teskespro', $teskespro);
        TesKespro::where('ID', Session::get('teskespro')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => Session::get('teskespro')->id]);

        return redirect()->route('kespro.create.step.three');
    }

    public function kesproCreateStepThree(Request $request)
    {
        $app['judul']           = 'Kesehatan Reproduksi';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.kespro.create-step-three', $app);
    }

    public function kesproCreateStepThreePost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        $teskespro = Session::get('teskespro');
        $teskespro->fill($validatedData);
        Session::put('teskespro', $teskespro);
        TesKespro::where('ID', Session::get('teskespro')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => Session::get('teskespro')->id]);

        return redirect()->route('kespro.create.step.four');
    }

    public function kesproCreateStepFour(Request $request)
    {
        $app['judul']           = 'Kesehatan Reproduksi';
        $app['aktif']           = '';
        $app['data']            = Session::get('teskespro');
        return view('pages.individualTask.kespro.create-step-four', $app);
    }

    public function kesproCreateStepFourPost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        $teskespro = Session::get('teskespro');
        $teskespro->fill($validatedData);
        Session::put('teskespro', $teskespro);
        TesKespro::where('ID', Session::get('teskespro')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesKesPro' => Session::get('teskespro')->id]);

        return redirect()->route('kespro.create.step.four');
    }

    //pola makan
    public function polaMakanCreateStepOne(Request $request)
    {
        $app['judul']           = 'Pola Makan';
        $app['aktif']           = '';
        $app['data']            = Session::get('tespolamakan');
        return view('pages.individualTask.polaMakan.create-step-one', $app);
    }

    public function polaMakanCreateStepOnePost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        if (empty(Session::get('tespolamakan'))) {
            $tespolamakan = new TesPolaMakan();
            $tespolamakan->fill($validatedData);
            Session::put('tespolamakan', $tespolamakan);
            $tespolamakan->save();

            if (empty(Session::get('tesdata'))) {
                $tesData = new TesData();
                $tesData->TglInput  = Carbon::now();
                $tesData->Petugas   = $request->input('Petugas');
                $tesData->IDKaryawan = Session::get('UserEmployeeID');
                $tesData->IDTesPolaMakan   = $tespolamakan->id;
                Session::put('tesdata', $tesData);
                $tesData->save();
            } else {
                TesData::where('ID', Session::get('tesdata')->id)
                    ->whereDate('TglInput', Session::get('tesdata')->CreatedDate)
                    ->update(['IDTesPolaMakan' => $tespolamakan->id]);
            }
        } else {
            $tespolamakan = Session::get('tespolamakan');
            $tespolamakan->fill($validatedData);
            Session::put('tespolamakan', $tespolamakan);
            TesPolaMakan::where('ID', Session::get('tespolamakan')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesPolaMakan' => $tespolamakan->id]);
        }

        return redirect()->route('polamakan.create.step.two');
    }

    public function polaMakanCreateStepTwo(Request $request)
    {
        $app['judul']           = 'Pola Makan';
        $app['aktif']           = '';
        $app['data']            = Session::get('tespolamakan');
        return view('pages.individualTask.polaMakan.create-step-two', $app);
    }

    public function polaMakanCreateStepTwoPost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        $tespolamakan = Session::get('tespolamakan');
        $tespolamakan->fill($validatedData);
        Session::put('tespolamakan', $tespolamakan);
        TesPolaMakan::where('ID', Session::get('tespolamakan')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesPolaMakan' => Session::get('tespolamakan')->id]);

        return redirect()->route('polamakan.create.step.three');
    }

    public function polaMakanCreateStepThree(Request $request)
    {
        $app['judul']           = 'Pola Makan';
        $app['aktif']           = '';
        $app['data']            = Session::get('tespolamakan');
        return view('pages.individualTask.polaMakan.create-step-three', $app);
    }

    public function polaMakanCreateStepThreePost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        $tespolamakan = Session::get('tespolamakan');
        $tespolamakan->fill($validatedData);
        Session::put('tespolamakan', $tespolamakan);
        TesPolaMakan::where('ID', Session::get('tespolamakan')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesPolaMakan' => Session::get('tespolamakan')->id]);

        return redirect()->route('polamakan.create.step.four');
    }

    public function polaMakanCreateStepFour(Request $request)
    {
        $app['judul']           = 'Pola Makan';
        $app['aktif']           = '';
        $app['data']            = Session::get('tespolamakan');
        return view('pages.individualTask.polaMakan.create-step-four', $app);
    }

    public function polaMakanCreateStepFourPost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        $tespolamakan = Session::get('tespolamakan');
        $tespolamakan->fill($validatedData);
        Session::put('tespolamakan', $tespolamakan);
        TesPolaMakan::where('ID', Session::get('tespolamakan')->id)->update($validatedData);
        TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesPolaMakan' => Session::get('tespolamakan')->id]);

        return redirect()->route('polamakan.create.step.four');
    }

    //aktifitas fisik
    public function fisikCreate(Request $request)
    {
        $app['judul']           = 'Level Aktivitas Fisik';
        $app['aktif']           = '';
        $app['data']            = Session::get('tesfisik');
        return view('pages.individualTask.fisik.create', $app);
    }

    public function fisikCreatePost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        if (empty(Session::get('tesfisik'))) {
            $tesfisik = new TesFisik();
            $tesfisik->fill($validatedData);
            Session::put('tesfisik', $tesfisik);
            $tesfisik->save();

            if (empty(Session::get('tesdata'))) {
                $tesData = new TesData();
                $tesData->TglInput  = Carbon::now();
                $tesData->Petugas   = $request->input('Petugas');
                $tesData->IDKaryawan = Session::get('UserEmployeeID');
                $tesData->IDTesFisik   = $tesfisik->id;
                Session::put('tesdata', $tesData);
                $tesData->save();
            } else {
                TesData::where('ID', Session::get('tesdata')->id)
                    ->whereDate('TglInput', Session::get('tesdata')->CreatedDate)
                    ->update(['IDTesFisik' => $tesfisik->id]);
            }
        } else {
            $tesfisik = Session::get('tesfisik');
            $tesfisik->fill($validatedData);
            Session::put('tesfisik', $tesfisik);
            TesFisik::where('ID', Session::get('tesfisik')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesFisik' => $tesfisik->id]);
        }
        return redirect()->route('fisik.create');
    }

    //stress kerja
    public function stressCreate(Request $request)
    {
        $app['judul']           = 'Stress Kerja';
        $app['aktif']           = '';
        $app['data']            = Session::get('tesstress');
        return view('pages.individualTask.stress.create', $app);
    }

    //stress kerja
    public function stressCreatePost(Request $request)
    {
        $validatedData = $request->except(['_token']);
        if (empty(Session::get('tesstress'))) {
            $tesstress = new TesStress();
            $tesstress->fill($validatedData);
            Session::put('tesstress', $tesstress);
            $tesstress->save();

            if (empty(Session::get('tesdata'))) {
                $tesData = new TesData();
                $tesData->TglInput  = Carbon::now();
                $tesData->Petugas   = $request->input('Petugas');
                $tesData->IDKaryawan = Session::get('UserEmployeeID');
                $tesData->IDTesStress   = $tesstress->id;
                Session::put('tesdata', $tesData);
                $tesData->save();
            } else {
                TesData::where('ID', Session::get('tesdata')->id)
                    ->whereDate('TglInput', Session::get('tesdata')->CreatedDate)
                    ->update(['IDTesStress' => $tesstress->id]);
            }
        } else {
            $tesstress = Session::get('tesstress');
            $tesstress->fill($validatedData);
            Session::put('tesstress', $tesstress);
            TesStress::where('ID', Session::get('tesstress')->id)->update($validatedData);
            TesData::where('ID', Session::get('tesdata')->id)->update(['IDTesStress' => $tesstress->id]);
        }
        return redirect()->route('stress.create');
    }
}
