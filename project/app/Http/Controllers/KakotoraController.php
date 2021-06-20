<?php

namespace App\Http\Controllers;

use App\Kakotora;
use App\Claim_customer;
use App\Data_parts;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Validator;
use Auth;
use App\User;

class KakotoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {
        $kakotora = Kakotora::all()->where('Kakotora', 'Project')->sortBy('id');
        $kakotorareg = Kakotora::all()->where('Kakotora', 'Reguler')->sortBy('id');
        return view('homepage', compact('kakotora','kakotorareg'));
    }

    public function index()
    {
        $kakotora = Kakotora::all()->where('Kakotora', 'Project')->sortBy('id');
        $kakotorareg = Kakotora::all()->where('Kakotora', 'Reguler')->sortBy('id');
        return view('dashboard', compact('kakotora','kakotorareg'));
    }

    public function index2()
    {
        return view('addproject');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    public function store(Request $request)
    {
            $current_time = Carbon::now();
            $data= new Kakotora;
            if($request->file('file')){
                $file=$request->file('file');
                $filename=$file->getClientOriginalName();
                $request->file->move('storage/', $filename);

                $data->file = $filename;
            }
            $data->NoRegistration = $request->NoRegistration;
            $data->IssueDate = $request->IssueDate;
            $data->NoRev = $request->NoRev;
            $data->Customer = $request->Customer;
            $data->Model = $request->Model;
            $data->PartNumber = $request->PartNumber;
            $data->PartName = $request->PartName;
            $data->Area = $request->Area;
            $data->Problem = $request->Problem;
            $data->Analysis= $request->Analysis;
            $data->Cause = $request->Cause;
            $data->Countermeasure = $request->Countermeasure;
            $data->PIC = $request->PIC;
            $data->Checkpoint = $request->Checkpoint;
            $data->DefectCategory = $request->DefectCategory;
            $data->Kakotora = $request->Kakotora;
            $data->created_at = $current_time;

            $data->save();
            // return redirect('/kakotora')->with('status', 'Data Berhasil Ditambahkan !');
            return redirect()->back();
    }

    public function show($id)
    {
        $data=Kakotora::find($id);
        return view('detail',compact('data'));
    }

    public function download($file)
    {
        return response()->download('storage/'.$file);
    }

    public function edit(Kakotora $kakotora)
    {
        return view('editproject', compact('kakotora'));
    }

    public function editreg(Kakotora $kakotorareg)
    {
        return view('editreguler', compact('kakotorareg'));
    }

    public function update(Request $request,$id)
    {
            // $kakotora = $data;
            $current_time = Carbon::now();
            $data = Kakotora::find($id);
            if($request->file('file')){
                $file=$request->file('file');
                $filename=$file->getClientOriginalName();
                $request->file->move('storage/', $filename);

                $data->file = $filename;
            }
            $data->NoRegistration = $request->NoRegistration;
            $data->IssueDate = $request->IssueDate;
            $data->NoRev = $request->NoRev;
            $data->Customer = $request->Customer;
            $data->Model = $request->Model;
            $data->PartNumber = $request->PartNumber;
            $data->PartName = $request->PartName;
            $data->Area = $request->Area;
            $data->Problem = $request->Problem;
            $data->Analysis= $request->Analysis;
            $data->Cause = $request->Cause;
            $data->Countermeasure = $request->Countermeasure;
            $data->PIC = $request->PIC;
            $data->Checkpoint = $request->Checkpoint;
            $data->DefectCategory = $request->DefectCategory;
            $data->Kakotora = $request->Kakotora;
            $data->created_at = $current_time;

            $data->save();
            return redirect('/kakotora-home')->with('status', 'Data Berhasil Ditambahkan !');
            return redirect()->back();
    }

    public function updatereg(Request $request,$id)
    {
            // $kakotora = $data;
            $current_time = Carbon::now();
            $data = Kakotora::find($id);
            if($request->file('file')){
                $file=$request->file('file');
                $filename=$file->getClientOriginalName();
                $request->file->move('storage/', $filename);

                $data->file = $filename;
            }
            $data->NoRegistration = $request->NoRegistration;
            $data->IssueDate = $request->IssueDate;
            $data->NoRev = $request->NoRev;
            $data->Customer = $request->Customer;
            $data->Model = $request->Model;
            $data->PartNumber = $request->PartNumber;
            $data->PartName = $request->PartName;
            $data->Area = $request->Area;
            $data->Problem = $request->Problem;
            $data->Analysis= $request->Analysis;
            $data->Cause = $request->Cause;
            $data->Countermeasure = $request->Countermeasure;
            $data->PIC = $request->PIC;
            $data->Checkpoint = $request->Checkpoint;
            $data->DefectCategory = $request->DefectCategory;
            $data->Kakotora = $request->Kakotora;
            $data->created_at = $current_time;

            $data->save();
            return redirect('/kakotora-home')->with('status', 'Data Berhasil Diupdate !');
            return redirect()->back();
    }

    public function destroy(Kakotora $kakotora)
    {
        //
    }

    public function reguler()
    {
        $reguler = DB::select("select * from public.claim_customer inner join public.data_parts on public.claim_customer.id_part = public.data_parts.id_part inner join public.customer on public.data_parts.customer = public.customer.id_customer where status_claim = 'Claim' and flag is null");
        return view('dashboardreguler', compact('reguler'));
    }

    public function addreguler($id)
    {
        $addreguler = DB::select("select * from public.claim_customer inner join public.data_parts on public.claim_customer.id_part = public.data_parts.id_part inner join public.customer on public.data_parts.customer = public.customer.id_customer where status_claim = 'Claim' and flag is null and id_customer_claim = $id")[0];
        return view('addreguler', compact('addreguler', 'id'));
    }

    public function submit(Request $request, $id) {
        // dd($id);
        $current_time = Carbon::now();
            $data= new Kakotora;
            if($request->file('file')){
                $file=$request->file('file');
                $filename=$file->getClientOriginalName();
                $request->file->move('storage/', $filename);

                $data->file = $filename;
            }
            $data->NoRegistration = $request->no_lkk_qro;
            $data->IssueDate = $request->tgl_surat_claim;
            $data->NoRev = $request->no_surat_claim;
            $data->Customer = $request->nama_customer;
            $data->Model = $request->type;
            $data->PartNumber = $request->no_sap;
            $data->PartName = $request->nama_part;
            $data->Area = $request->Area;
            $data->Problem = $request->Problem;
            $data->Analysis= $request->Analysis;
            $data->Cause = $request->Cause;
            $data->Countermeasure = $request->Countermeasure;
            $data->PIC = $request->PIC;
            $data->Checkpoint = $request->Checkpoint;
            $data->DefectCategory = $request->DefectCategory;
            $data->Kakotora = $request->Kakotora;
            $data->created_at = $current_time;

            $data->save();

            $update_flag = Claim_customer::where('id_customer_claim', $id)->first();
            $update_flag->flag = 1;
            $update_flag->save();

            return redirect('/kakotora-home/reguler-add');

    }
}
