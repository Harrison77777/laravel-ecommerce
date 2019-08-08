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
    
th.text-center.sorting {
    text-align: center;
}
td.center {
    margin-bottom: -19px;
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
            <div class="span12">
                <div class="box-header" data-original-title>
                    <h2><i class="halflings-icon user"></i><span class="break"></span>All orders</h2>
                   
                    <div class="box-icon">
                        <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                        <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    </div>
                </div>
                <div class="box-content">
                    <table class="table table-sm table-bordered table-striped">
                      <thead class="text-center">
                          <tr class="text-center">
                              <th class="text-center">#</th>
                              <th class="text-center">Order ID</th>
                              <th class="text-center">Order name</th>
                              <th class="text-center">Email </th>
                              <th class="text-center">phone no</th>
                              <th class="text-center">Is_paid</th>
                              <th class="text-center">Status</th>
                              <th class="text-center">Actions</th>
                          </tr>
                      </thead>   
                      <tbody class="text-center" style="text-align:center;">
                            @foreach ($orders as $order)
                        <tr style="text-align:center;">
                         
                            <td>{{$loop->index +1}}</td>
                            <td style="text-align:center;" class="center ">#rpe{{$order->id}}</td>
                            <td style="text-align:center;" class="center ">{{$order->name}}</td>
                            <td style="text-align:center;" class="center">{{$order->email}}</td>
                            <td style="text-align:center;" class="center">{{$order->phone_no}}</td>
                            
                            <td style="text-align:center;" class="center">
                                <a class="btn {{$order->is_paid ? 'btn-success' : 'btn-danger'}} btn-sm" href="">{{$order->is_paid ? 'Paid' : 'Notpaid'}}</a>
                            </td>
                            <td style="text-align:center;" class="center">
                                <a class="btn {{$order->is_seen_by_admin ? 'btn-success' : 'btn-danger'}} btn-sm" href="">{{$order->is_seen_by_admin ? 'Seen' : 'Not seen'}}</a>
                                <a class="btn {{$order->is_completed ? 'btn-success' : 'btn-danger'}} btn-sm" href="">{{$order->is_completed ? 'completed' : 'Not completed'}}</a>
                            </td>
                            <td  style="display:inline-block;" class="center">
                                <a class="btn btn-success" href="{{route('order.details',$order->id)}}">
                                    View ordered details                                    
                                </a>
                                <a
                                onclick="
                                event.preventDefault();
                                document.getElementById('deleteForm-{{$order->id}}').submit();
                                "
                                 class="btn btn-danger" href="index.php">
                                    Delete
                                </a>
                                <form id="deleteForm-{{$order->id}}" action="{{route('order.delete',$order->id)}}" 
                                         method="POST">
                                    @csrf
                                    @method("DELETE")
                                </form>
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