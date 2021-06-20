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
            <h4 class="card-title">Kakotora Project</h4>
            <div class="table-responsive">
              <table class="table table-hover" id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    {{-- <th>Action</th> --}}
                    <th>No Registration</th>
                    <th>Issue Date</th>
                    <th>Customer</th>
                    <th>Model</th>
                    <th>Part Name</th>
                    <th>Problem</th>
                    <th>Area</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                @php $nomor = 1; @endphp
                @foreach($kakotora as $data)
                  <tr>
                    <td>{{$nomor}}</td>
                    {{-- <td>
                        <a class="badge badge-dark" href="/kakotora-home/{{$data->id}}">Views</a>
                        <a class="badge badge-info" href="/kakotora-home/download/{{$data->file}}">Download</a>
                    </td> --}}
                    <td>{{$data->NoRegistration}}</td>
                    <td>{{$data->IssueDate}}</td>
                    <td>{{$data->Customer}}</td>
                    <td>{{$data->Model}}</td>
                    <td>{{$data->PartName}}</td>
                    <td>{{$data->Problem}}</td>
                    <td>{{$data->Area}}</td>
                    <td><a class="badge badge-warning" href="{{url('/kakotora-home/edit/'.$data->id)}}">Edit</a></td>
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
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Kakotora Reguler</h4>
            <div class="table-responsive">
              <table class="table table-hover" id="example" class="display" style="width:100%">
                <thead>
                  <tr>
                    <th>No</th>
                    {{-- <th>Action</th> --}}
                    <th>No Registration</th>
                    <th>Issue Date</th>
                    <th>Customer</th>
                    <th>Model</th>
                    <th>Part Name</th>
                    <th>Problem</th>
                    <th>Area</th>
                    <th>Edit</th>
                  </tr>
                </thead>
                <tbody>
                @php $nomor = 1; @endphp
                @foreach($kakotorareg as $data)
                  <tr>
                    <td>{{$nomor}}</td>
                    {{-- <td>
                        <a class="badge badge-dark" href="/kakotora-home/{{$data->id}}">Views</a>
                        <a class="badge badge-info" href="/kakotora-home/download/{{$data->file}}">Download</a>
                    </td> --}}
                    <td>{{$data->NoRegistration}}</td>
                    <td>{{$data->IssueDate}}</td>
                    <td>{{$data->Customer}}</td>
                    <td>{{$data->Model}}</td>
                    <td>{{$data->PartName}}</td>
                    <td>{{$data->Problem}}</td>
                    <td>{{$data->Area}}</td>
                    <td><a class="badge badge-warning" href="{{url('/kakotora-home/editreg/'.$data->id)}}">Edit</a></td>
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
