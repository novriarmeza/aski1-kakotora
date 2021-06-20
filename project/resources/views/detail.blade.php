@extends('layout.masterhome')

@push('plugin-styles')
  <link href="{{ asset('/assets/plugins/plugin.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="col-md-12" style="margin:20px 100px;">

    <div class="row">
        <div class="col-md-5">
            <h5><span style="color: blue; font-weight:bold">Nomor Registasi :</span> {{$data->NoRegistration}}</h5>
            <h5><span style="color: blue; font-weight:bold">Nomor Rev :</span> {{$data->NoRev}}</h5>
            <h5><span style="color: blue; font-weight:bold">Date Issue :</span> {{$data->IssueDate}}</h5>
        </div>
        <div class="col-md-2">
            <h2 class="text-center" style="font-weight:bold">{{$data->Customer}}</h2>
        </div>
        <div class="col-md-5">
            <h5 style="text-align: right"><span style="color: blue; font-weight:bold">Model :</span> {{$data->Model}}</h5>
            <h5 style="text-align: right"><span style="color: blue; font-weight:bold">Part Number :</span> {{$data->PartNumber}}</h5>
            <h5 style="text-align: right"><span style="color: blue; font-weight:bold">Part Name :</span> {{$data->PartName}}</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
            <h6><span style="color: blue; font-weight:bold">Problem :</span> {{$data->Problem}}</h6>
            <h6><span style="color: blue; font-weight:bold">Area :</span> {{$data->Area}}</h6>
            <br><br>
            <p><span style="color: blue; font-weight:bold">Analisa :</span> {{$data->Analysis}}</p>
            <p><span style="color: blue; font-weight:bold">Cause :</span> {{$data->Cause}}</p>
            <p><span style="color: blue; font-weight:bold">Countermeasure :</span> {{$data->Countermeasure}}</p>
            <p><span style="color: blue; font-weight:bold">PIC :</span> {{$data->PIC}}</p>
            <p><span style="color: blue; font-weight:bold">Checkpoint :</span> {{$data->Checkpoint}}</p>
            <p><span style="color: blue; font-weight:bold">Defect Category :</span> {{$data->DefectCategory}}</p>
        </div>
    </div>
</div>

@endsection

@push('plugin-scripts')
<script src="{{asset('/assets/plugins/chartjs/chart.min.js')}}"></script>
<script src="{{asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
@endpush

@push('custom-scripts')
<script src="{{asset('/assets/js/dashboard.js')}}"></script>
@endpush

@section('js')
<script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous">
</script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous">
</script>
@endsection
