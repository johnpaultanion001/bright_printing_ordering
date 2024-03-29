@extends('../layouts.admin')
@section('sub-title','Sales Reports')
@section('navbar')
    @include('../partials.admin.navbar')
@endsection
@section('sidebar')
    @include('../partials.admin.sidebar')
@endsection

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-2">
                    <div class="card-header border-0">
                        <div class="row ">
                            <div class="col-md-9">
                                <h4 class="mb-0 text-uppercase" id="titletable">Sales Reports</h4>
                                <b class="mb-0 text-uppercase">{{$title_filter}}</b>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select name="filter_dd" id="filter_dd" class="select2" style="width: 100%;">
                                        <option value="daily">FILTER BY DATE</option>
                                        <option value="daily" {{ request()->is('admin/sales_reports/daily') ? 'selected' : '' }}>DAILY</option>
                                        <option value="weekly" {{ request()->is('admin/sales_reports/weekly') ? 'selected' : '' }}>WEEKLY</option>
                                        <option value="monthly" {{ request()->is('admin/sales_reports/monthly') ? 'selected' : '' }}>MONTHLY</option>
                                        <option value="yearly" {{ request()->is('admin/sales_reports/yearly') ? 'selected' : '' }}>YEARLY</option>
                                        <option value="all" {{ request()->is('admin/sales_reports/all') ? 'selected' : '' }}>ALL</option>
                                    </select>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table datatable-table display" width="100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>ORDER ID</th>
                                    <th>CUSTOMER</th>
                                    <th>PRODUCT</th>
                                    <th>PRICE</th>
                                    <th>SOLD</th>
                                    <th>AMOUNT</th>
                                    <th>ORDER AT</th>
                                </tr>
                            </thead>
                            <tbody class="text-uppercase font-weight-bold">
                                @foreach($sales as $order)
                                        <tr>
                                            <td>
                                                {{$order->order->id ?? ''}}
                                            </td>
                                            <td>
                                                {{$order->user->name ?? ''}}
                                            </td>
                                            <td>
                                                {{$order->product->name ?? ''}}
                                            </td>
                                            <td>
                                                {{$order->price ?? ''}}
                                            </td>
                                            <td>
                                                {{$order->qty ?? ''}}
                                            </td>
                                         
                                            <td>
                                                {{ number_format($order->amount ?? '' , 2, '.', ',') }}
                                                
                                            </td>
                                            <td>
                                                {{ $order->created_at->format('M j , Y h:i A') }}
                                            </td>
                                        </tr>       
                                @endforeach
                            </tbody>
                            <tfoot class="text-uppercase font-weight-bold">
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>TOTAL AMOUNT</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    @section('footer')
        @include('../partials.admin.footer')
    @endsection
@endsection


@section('script')
<script> 


$(function () {
   
    var title = 'title';
    var header =  'title';
    $('.datatable-table').DataTable({
        bDestroy: true,
        responsive: true,
        scrollY: 500,
        scrollCollapse: true,
        buttons: [
            { 
                extend: 'excel',
                className: 'btn btn-dark m-2',
                footer: true,
                exportOptions: {
                    columns: ':visible'
                }
            },
            { 
                extend: 'print',
                footer: true,
                className: 'btn btn-dark m-2',
                
            }
        ],
        footerCallback: function (row, data, start, end, display) {
            var api = this.api();
            var intVal = function (i) {
                return typeof i === 'string' ? i.replace(/[^\d.-]/g, '') * 1 : typeof i === 'number' ? i : 0;
            };
            
            
            total = api
                .column(5)
                .data()
                .reduce(function (a, b) {
                    return intVal(a) + intVal(b);
            }, 0);
         
           
            $(api.column(5).footer()).html(number_format(total, 2,'.', ','));
          
            
        },
    });
});

function table_report(){
  
}


$('#filter_dd').on("change", function(event){
    var date = $(this).val();
    window.location.href = '/admin/sales_reports/'+date;
});





</script>
@endsection




