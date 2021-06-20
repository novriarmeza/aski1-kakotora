@extends('layout.master')

@section('content')
<div class="col-md-6">
    {{-- @if (session('status'))
        <div class="alert alert-success" style="margin-bottom: 0px">
            {{ session('status') }}
        </div>
    @endif --}}
    <form method="POST" action="{{url('/kakotora-home')}}" enctype="multipart/form-data">
        @csrf
        @if (session('status'))
        <div class="alert alert-success" style="margin-bottom: 0px">
            {{ session('status') }}
        </div>
        @endif
        <h4>Kakotora Project Part</h4>
        <div class="col-md-12 mt-4">
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">No Registrasi</label>
                <input type="text" class="form-control" style="border-radius:7px" id="NoRegistration" name="NoRegistration" placeholder="EKT/31/QA/ASKI/11/2019" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Issue Date</label>
                <input type="date" data-toggle="datepicker" style="border-radius:7px" name="IssueDate" id="IssueDate" class="form-control auto-save">
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">No. Rev</label>
                <input type="text" class="form-control" style="border-radius:7px" id="NoRev" name="NoRev" placeholder="AHM/00182/1100078/11/2020" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px;">Customer</label>
                <select name="Customer" class="form-control" id="Customer" style="border-radius:7px">
                    <option value="">Select Customer</option>
                    <option value="AHM 1">AHM 1</option>
                    <option value="AHM 2">AHM 2</option>
                    <option value="AHM 3">AHM 3</option>
                    <option value="AHM 4">AHM 4</option>
                    <option value="AHM 5">AHM 5</option>
                    <option value="AHM PC">AHM PC</option>
                </select>
            </div>
            <div class="form-group row">
                <label for="field-1" class="control-label" style="text-align:left; font-size:14px">Model</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Model" name="Model" placeholder="K60R" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Part Name</label>
                <input type="text" class="form-control" style="border-radius:7px" id="PartName" name="PartName" placeholder="COVER R UNDER SIDE SET K60R" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Part Number</label>
                <input type="text" class="form-control" style="border-radius:7px" id="PartNumber" name="PartNumber" placeholder="QI2FEN-GFNF59BK10" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Area</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Area" name="Area" placeholder="4M1E" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Problem</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Problem" name="Problem" placeholder="Gores" required/>
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
                <input type="text" class="form-control" style="border-radius:7px" id="PIC" name="PIC" placeholder="QRO" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Checkpoint</label>
                <input type="text" class="form-control" style="border-radius:7px" id="Checkpoint" name="Checkpoint" placeholder="Verifikasi awal proses" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Defect Category</label>
                <input type="text" class="form-control" style="border-radius:7px" id="DefectCategory" name="DefectCategory" placeholder="Methode" required/>
            </div>
            <div class="form-group row">
                <label style="text-align:left; font-size:14px">Upload File</label>
                <input type="file" style="border-radius:7px" class="form-control" name="file" id="file">
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
