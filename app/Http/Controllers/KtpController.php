<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ktps = Ktp::latest()->paginate(10);
        return view('ktps.index', compact('ktps'));
    }

    public function create()
    {
        $no_kk_list = Ktp::pluck('no_kk')->unique();

        return view('ktps.create', compact('no_kk_list'));
    }

    public function store(Request $request): RedirectResponse
    {

        //validate form
        $request->validate([
            'no_ktp' => 'required|string|size:16', // Hanya angka
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',

            'jenis_kelamin' => 'required|max:255',
            'agama' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',

        ]);

        $no_kk = $request->kk_option === 'baru' ? $request->no_kk_baru : $request->no_kk_pilih;
        // var_dump($no_kk);
        // die;
        // Validasi bahwa no_kk harus terisi
        if (!$no_kk) {
            return back()->withErrors(['no_kk' => 'Nomor KK harus diisi.']);
        }

        Ktp::create([
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_kk' => $no_kk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan

        ]);

        //redirect to index
        return redirect()->route('ktps.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function show(string $no_ktp): View
    {
        //get post by ID
        $ktp = Ktp::where('no_ktp', $no_ktp)->firstOrFail();

        //render view with post
        return view('ktps.show', compact('ktp'));
    }

    public function destroy($no_ktp): RedirectResponse
    {

        //get post by KTP
        $ktp = Ktp::where('no_ktp', $no_ktp)->firstOrFail();


        //delete post
        $ktp->delete();

        //redirect to index
        return redirect()->route('ktps.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    public function edit(string $no_ktp): View
    {
        //get post by ID
        $ktp = Ktp::where('no_ktp', $no_ktp)->firstOrFail();

        //render view with post
        return view('ktps.edit', compact('ktp'));
    }
    public function update(Request $request, $no_ktp): RedirectResponse
    {
        //validate form
        $request->validate([
            'no_ktp' => 'required|string|size:16', // Hanya angka
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string|max:255',
            'no_kk' => 'required|string|size:16',
            'jenis_kelamin' => 'required|max:255',
            'agama' => 'required|string|max:255',
            'pekerjaan' => 'required|string|max:255',

        ]);
        //get post by ID
        $ktp = Ktp::where('no_ktp', $no_ktp)->firstOrFail();



        $ktp->update([
            'no_ktp' => $request->no_ktp,
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_kk' => $request->no_kk,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan
        ]);


        //redirect to index
        return redirect()->route('ktps.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
}
