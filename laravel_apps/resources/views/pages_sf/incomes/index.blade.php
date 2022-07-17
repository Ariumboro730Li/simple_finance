@extends('layouts.app', ['activePage' => 'income', 'menuParent' => 'income', 'titlePage' => __('Incomes')])
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card text-left">
            <div class="card-body">
                <figure class="highcharts-figure">
                    <div id="container"></div>
                </figure>
            </div>
            </div>

            <div class="card text-left">
                <div class="card-body">
                    <a name="" id="" class="btn btn-info" href="{{route("page.income.add")}}" role="button">Add Income</a>
                    <div class="table-responsive mt-4">
                        <table class="table table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Category</th>
                                    <th>Total</th>
                                    <th>Timestamp</th>
                                    <th>Timestamp Edit</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push("js")
<script>
    let configView = {
        url : "{{url('')}}",
    };
</script>
<script src="{{asset('js/pages_sf/income/graph.js')}}"></script>
<script src="{{asset('js/pages_sf/income/datatable.js')}}"></script>
@endpush
