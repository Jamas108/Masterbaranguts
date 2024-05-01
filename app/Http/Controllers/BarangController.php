<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Validation\Rule;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Daftar Barang';
        // return view('barang.index', ['pageTitle' => $pageTitle]);

        //Query Builder
        // $barangs = DB::table('barangs')->select('barangs.*','barangs.id as barang_id', 'satuans.nama_satuan as satuan_nama_satuan')->join('satuans', 'satuans.id', '=', 'barangs.satuan_id')->get();
        // return view('barang.index', [
        //     'pageTitle' => $pageTitle,
        //     'barangs' => $barangs

        // ELOQUENT
        $barangs = Barang::all();
        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barang' => $barangs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $pageTitle = 'Create Barang';

        //QUERYBUILDER
        // $pageTitle = 'Create Employee';
        // $satuans = DB::table('satuans')->get();
        // return view('barang.create', compact('pageTitle','satuans'));

        //ELOQUENT
        $satuans = Satuan::all();
        return view('barang.create', compact('pageTitle', 'satuans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka',
            'kodebarang.unique' => 'kode barang sudah ada',
        ];

        $validator = Validator::make($request->all(), [
            'kodebarang' => 'required|unique:barangs,kode_barang',
            'namabarang' => 'required',
            'hargabarang' => 'required|numeric',
            'deskripsibarang' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();


        }

        //INSERT QUERY
        // DB::table('barangs')->insert([
        //     'kode_barang' => $request->kodebarang,
        //     'nama_barang' => $request->namabarang,
        //     'harga_barang' => $request->hargabarang,
        //     'deskripsi_barang' => $request->deskripsibarang,
        //     'satuan_id' => $request->satuan,
        // ]);

        //ELOQUENT
        $barang = New Barang;
        $barang->kode_barang = $request->kodebarang;
        $barang->nama_barang = $request->namabarang;
        $barang->harga_barang = $request->hargabarang;
        $barang->deskripsi_barang = $request->deskripsibarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barang.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';

        //QueryBuilder
        // $barang = DB::table('barangs')->select('barangs.*', 'satuans.nama_satuan as satuan_nama_satuan', 'satuans.id as satuan_id')
        // ->leftJoin('satuans', 'satuans.id', '=', 'barangs.satuan_id')
        // ->where('barangs.id', $id)
        // ->first();

        //ELOQUENT
        $barang = Barang::find($id);

        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';

    //QUERYBUILDER
    // $satuans = DB::table('satuans')->get();
    // $barang = DB::table('barangs')
    //     ->select('barangs.*', 'satuans.nama_satuan as satuan_nama_satuan', 'satuans.id as satuan_id')
    //     ->leftJoin('satuans', 'satuans.id', '=', 'barangs.satuan_id')
    //     ->where('barangs.id', $id)
    //     ->first();

    // ELOQUENT
    $satuans = Satuan::all();
    $barang = Barang::find($id);

    return view('barang.edit', compact('pageTitle', 'satuans', 'barang'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            // 'numeric' => 'Isi :attribute dengan angka',
            'kodebarang.unique' => 'kode barang sudah ada',
            // 'kodebarang.required' => 'harus diisi',
        ];

        $validator = Validator::make($request->all(), [
            'kodebarang' => 'required',
            'namabarang' => 'required',
            'hargabarang' => 'required',
            'deskripsibarang' => 'required',
        ],$messages);

        $validator->after(function ($validator) use ($request, $id) {
            $value = $request->input('kodebarang');
            $count = DB::table('barangs')
                ->where('kode_barang', $value)
                ->where('id', '<>', $id)
                ->count();

            if ($count > 0) {
                $validator->errors()->add('kodebarang', 'Kode Barang ini sudah dipakai.');
            }
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        //QUERY BUILDER
        // DB::table('barangs')
        // ->where('id', $id)
        // ->update([
        //     'kode_barang' => $request->input('kodebarang'),
        //     'nama_barang' => $request->input('namabarang'),
        //     'harga_barang' => $request->input('hargabarang'),
        //     'deskripsi_barang' => $request->input('deskripsibarang'),
        //     'satuan_id' => $request->input('satuan')
        // ]);

        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kode_barang = $request->kodebarang;
        $barang->nama_barang = $request->namabarang;
        $barang->harga_barang = $request->hargabarang;
        $barang->deskripsi_barang = $request->deskripsibarang;
        $barang->satuan_id = $request->satuan;
        $barang->save();

        return redirect()->route('barang.index');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    //QUERY BUILDER
    // DB::table('barangs')
    // ->where('id', $id)
    // ->delete();

    // ELOQUENT
    Barang::find($id)->delete();

    return redirect()->route('barang.index');
    }
}
