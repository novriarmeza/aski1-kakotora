@extends('layout.master')

@section('content')
<div class="col-md-6">
    {{-- @if (session('status'))
        <div class="alert alert-success" style="margin-bottom: 0px">
            {{ session('status') }}
        </div>
    @endif --}}
    <form method="POST" action="{{url('/kakotora-home/updatereg/'.$kakotora->id)}}" enctype="multipart/form-data">
        @csrf
        <h4>Edit Kakotora Project Part</h4>
        <div class="col-md-12 mt-4">
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">No Registrasi</label>
                <input type="text" class="form-control" style="border-radius:7px" id="NoRegistration" name="NoRegistration" value="{{$kakotora->NoRegistration}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Issue Date</label>
                <input type="date" data-toggle="datepicker" style="border-radius:7px" name="IssueDate" id="IssueDate" class="form-control" value="{{$kakotora->IssueDate}}">
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">No. Rev</label>
                <input type="text" class="form-control" style="border-radius:7px" id="NoRev" name="NoRev" value="{{$kakotora->NoRev}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Customer</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Customer" name="Customer" value="{{$kakotora->Customer}}" required/>
            </div>
            <div class="form-group row">
                <label for="field-1" class="control-label" style="text-align:left; font-size:14px">Model</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Model" name="Model" value="{{$kakotora->Model}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Part Name</label>
                <input type="text" class="form-control" style="border-radius:7px" id="PartName" name="PartName" value="{{$kakotora->PartName}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Part Number</label>
                <input type="text" class="form-control" style="border-radius:7px" id="PartNumber" name="PartNumber" value="{{$kakotora->PartNumber}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Area</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Area" name="Area" value="{{$kakotora->Area}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Problem</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Problem" name="Problem" value="{{$kakotora->Problem}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">History / Analysis</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Analysis" name="Analysis" value="{{$kakotora->Analysis}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Cause</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Cause" name="Cause" value="{{$kakotora->Cause}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Countermeasure</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Countermeasure" name="Countermeasure" value="{{$kakotora->Countermeasure}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">PIC</label>
                <input type="text" class="form-control" style="border-radius:7px" id="PIC" name="PIC" value="{{$kakotora->PIC}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Checkpoint</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Checkpoint" name="Checkpoint" value="{{$kakotora->Checkpoint}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Defect Category</label>
                <input type="text" class="form-control" style="border-radius:7px" id="DefectCategory" name="DefectCategory" value="{{$kakotora->DefectCategory}}" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Upload File</label>
                <input type="file" style="border-radius:7px" class="form-control" name="file" id="file" value="{{$kakotora->file}}">
            </div>
            <div class="form-group row">
                <input type="hidden" class="form-control" style="border-radius:7px" id="Kakotora" name="Kakotora" value="Project"/>
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
