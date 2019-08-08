@extends('layouts/backendLayout')
@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css ">
<style>
    ul.pagination {
        list-style: none;
        display: inline-flex;
    }
    li#DataTables_Table_0_previous {
        padding: 0px;
        margin: 9px;
    }
    li.paginate_button.page-item {
        margin: 9px;
    }
    div#DataTables_Table_0_length {
        float: left;
    }
    div#DataTables_Table_0_filter {
        float: right;
    }
    .box-header{
        margin-left: -28px;
    }
</style>
@endpush
@section('backContent')
<div class="container-fluid-full">
    <div class="row-fluid">    
      @include('backendPartial.sidebar-left')
        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>
        <div style="margin-right:30px;" id="content" class="span12">
            @if (Session::has('successMsg'))
            <div style="width: 100%;" class="alert alert-success d-block">
                    {{session('successMsg')}}
            </div>
            @endif
            <div style="margin-left:3px; margin-bottom:5px;">
            </div>
            <div class="span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>All categories</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-sm table-bordered">
                      <thead>
                          <tr>
                              <th style="text-align:center;">Logo</th>
                              <th style="text-align:center;">Slogan</th>
                              <th style="text-align:center;">Actions</th>
                          </tr>
                      </thead>   
                      <tbody style="text-align:center;">
                            @foreach ($logos as $logo)
                        <tr style="text-align:center;">
                            <td style="text-align:center;"><img style="height:45px; width:50px;" src="{{asset('uploads/logo/'.$logo->logo)}}" alt=""></td>
                            <td style="text-align:center;">{{$logo->slogan}}</td>
                            <td style="text-align:center;" style="display:inline-block;" class="center">
                                <a class="btn btn-success" href="{{route('logo.show', $logo->id)}}">
                                    <i class="halflings-icon white zoom-in"></i>                                     
                                </a>
                            </td>  
                        </tr>
                        @endforeach
                      </tbody>
                  </table>            
                </div>
            </div><!--/span-->
        </div>
<div class="clearfix"></div>
@endsection	
@push('script')
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>   
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
      $('.table').DataTable({
        //ordering: false
      });
  } );
</script>
@endpush
