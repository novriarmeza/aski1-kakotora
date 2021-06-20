@extends('layout.master')

@section('content')
<div class="col-md-6">
    {{-- @if (session('status'))
        <div class="alert alert-success" style="margin-bottom: 0px">
            {{ session('status') }}
        </div>
    @endif --}}
    <form method="POST" action="{{url('/kakotora-home/submit/'.$id)}}" enctype="multipart/form-data">
        @csrf
        @if (session('status'))
        <div class="alert alert-success" style="margin-bottom: 0px">
            {{ session('status') }}
        </div>
        @endif
        <h4>Kakotora Reguler Part</h4>
        <div class="col-md-12 mt-4">
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">No Registrasi</label>
                <input type="text" class="form-control" style="border-radius:7px" id="no_lkk_qro" name="no_lkk_qro" value="{{$addreguler->no_lkk_qro}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Issue Date</label>
                <input type="date" data-toggle="datepicker" style="border-radius:7px" name="tgl_surat_claim" id="tgl_surat_claim" class="form-control" value="{{$addreguler->tgl_surat_claim}}">
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">No. Rev</label>
                <input type="text" class="form-control" style="border-radius:7px" id="no_surat_claim" name="no_surat_claim" value="{{$addreguler->no_surat_claim}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Customer</label>
                <input type="text" class="form-control" style="border-radius:7px" id="nama_customer" name="nama_customer" value="{{$addreguler->nama_customer}}" required/>
            </div>
            <div class="form-group row">
                <label for="field-1" class="control-label" style="text-align:left; font-size:14px">Model</label>
                <input type="text" class="form-control" style="border-radius:7px" id="type" name="type" value="{{$addreguler->type}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Part Name</label>
                <input type="text" class="form-control" style="border-radius:7px" id="nama_part" name="nama_part" value="{{$addreguler->nama_part}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Part Number</label>
                <input type="text" class="form-control" style="border-radius:7px" id="no_sap" name="no_sap" value="{{$addreguler->no_sap}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Area</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Area" name="Area" placeholder="4M1E" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Problem</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Problem" name="Problem" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">History / Analysis</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Analysis" name="Analysis" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Cause</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Cause" name="Cause" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Countermeasure</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Countermeasure" name="Countermeasure" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">PIC</label>
                <input type="text" class="form-control" style="border-radius:7px" id="PIC" name="PIC" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Checkpoint</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Checkpoint" name="Checkpoint" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Defect Category</label>
                <input type="text" class="form-control" style="border-radius:7px" id="DefectCategory" name="DefectCategory" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Upload File</label>
                <input type="file" style="border-radius:7px" class="form-control" name="file" id="file">
            </div>
            <div class="form-group row">
                <input type="hidden" class="form-control" style="border-radius:7px" id="Kakotora" name="Kakotora" value="Reguler"/>
            </div>
            <div class="form-group row">
                <button style="width: 100%; font-size:20px; border-radius:7px; margin:20px" type="submit" class="btn btn-primary btn-sm">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.9/datepicker.min.js"></script>
<script type="text/javascript">
$(document).on('change', '#IssueDate', function(e) {
    var IssueDate = $(this).val();
    sessionStorage.setItem('#IssueDate', IssueDate);
  })
</script>
@endsection
