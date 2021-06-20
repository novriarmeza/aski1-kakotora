@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('/assets/plugins/plugin.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/datatable.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">List Claim Customer</h4>
            <div class="table-responsive">
              <table class="table table-hover" id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Registration</th>
                    <th>Issue Date</th>
                    <th>Customer</th>
                    <th>Model</th>
                    <th>Part Name</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                @php $nomor = 1; @endphp
                @foreach($reguler as $data)
                  <tr>
                    <td>{{$nomor}}</td>
                    <td>{{$data->no_lkk_qro}}</td>
                    <td>{{$data->tgl_surat_claim}}</td>
                    <td>{{$data->nama_customer}}</td>
                    <td>{{$data->type}}</td>
                    <td>{{$data->nama_part}}</td>
                    <td><a class="badge badge-warning" href="{{url('/kakotora-home/reguler-add/'.$data->id_customer_claim)}}">Lengkapin data</a></td>
                  </tr>
                @php $nomor++; @endphp
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

@push('plugin-scripts')
{{-- <script src="{{asset('/assets/plugins/chartjs/chart.min.js')}}"></script> --}}
{{-- <script src="{{asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script> --}}
@endpush

@push('custom-scripts')
{{-- <script src="{{asset('/assets/js/dashboard.js')}}"></script> --}}
@endpush

@section('js')
<script src="{{asset('/assets/js/jquery.js')}}"></script>
<script src="{{asset('/assets/js/datatable.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            scrollY:        '100vh',
            scrollCollapse: true,
            paging:         false
        } );
    } );
</script>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous">
</script>
@endsection
