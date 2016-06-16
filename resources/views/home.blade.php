@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    @include('flash_messages')
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Kroketten
                                </div>

                                <div class="panel-body">
                                    <table class="table table-striped table-responsive">
                                        <thead>
                                        <tr>
                                            <th>Kroket</th>
                                            <th>Teller</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($counters as $counter)
                                            <tr>
                                                <th scope="row-{{ $counter->id }}">
                                                    <img src="{{ $counter->image }}" height="100"/>
                                                    {{ $counter->type }}
                                                </th>
                                                <td>
                                                    <strong>{{ $counter->count }}</strong>
                                                </td>
                                                <td>
                                                    <div class="col-md-4 col-md-offset-1">
                                                        <form action="/add/{{ $counter->type }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <button type="submit" class="btn btn-success">
                                                                <span class="glyphicon glyphicon-plus"
                                                                      aria-hidden="true"></span> 1
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-default">
                                <div class="panel-heading">Report</div>
                                <div class="panel-body">
                                    <canvas id="kroketReport" width="400" height="150"></canvas>
                                </div>
                            </div>
                            <script>
                                var ctx = $('#kroketReport');
                                var apiReportChart = new Chart(ctx, {
                                    type: 'pie',
                                    data: {
                                        labels: [
                                            '{!! implode("','", $counters->pluck('type')->all()) !!}'
                                        ],
                                        datasets: [
                                            {
                                                data: [{{ implode(',', $counters->pluck('count')->all()) }}],
                                                backgroundColor: [
                                                    "#FF6961",
                                                    "#836953",
                                                    "#77DD77"
                                                ],
                                                hoverBackgroundColor: [
                                                    "#C23B22",
                                                    "#362312",
                                                    "#03C03C"
                                                ]
                                            }]
                                    }
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
