@extends('layouts.employee')

@section('content')

    <div id="content-container">
        <div class="pageheader hidden-xs">
            <h3><i class="fa fa-home"></i> Task </h3>
            <div class="breadcrumb-wrapper">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li> <a href="#"> Home </a> </li>
                    <li class="active"> Plans </li>
                </ol>
            </div>
        </div>
        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">

                            <h3 class="col-md-10 panel-title">Task
                            </h3>
                            <a class="col-md-2 btn btn-success add text-left" href="/employee/task/create">
                                <i class="fa fa-plus-square"></i>
                                Add Task
                            </a>



                        </div>
                        <!-- Striped Table -->
                        <!--===================================================-->
                        <div class="panel-body">
                            @include('includes.flash')
                            @if(sizeof($tasks)>0)
                                <input class="form-control" placeholder="Search..." onkeyup="search()"  id="searchId" type="text">
                                <div class="table-responsive">
                                    <table id="tableId" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Due Date</th>
                                            <th>Level</th>
                                            <th>Employee</th>
                                            <th>Status</th>
                                            <th>Project</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tasks as $task)
                                            <tr>
                                                <td>{{$task->title}}</td>
                                                <td>{{$task->date}}</td>
                                                <td>{{$task->due_date}}</td>
                                                <td>{{ucfirst($task->level)}}</td>
                                                <td>{{$task->user->name}}</td>
                                                <td>{{  $task->Status()}}</td>
                                                <td>{{$task->project?$task->project->title:'NA'}}</td>

                                                <td>
                                                    <a class="btn btn-sm btn-default btn-labeled fa fa-edit" href="/employee/task/{{$task->id}}/edit">Edit</a>
                                                    <a href="#" onclick="clicked({{$task->id}})" class="btn btn-sm btn-danger btn-labeled fa fa-cut"> Delete</a>



                                                    <form style="display: none;" id="del{{$task->id}}" action="/employee/task/{{$task->id}}" method="POST">
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        @csrf
                                                    </form>
                                                </td>
                                            </tr>


                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div id="chart_div"></div>

                                </div>
                            @else
                                <div class="alert alert-warning">
                                    No Task
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .add{
                    margin-left: -16px;
                    margin-top: 10px;
                }
            </style>


            <!--===================================================-->
            <!--End page content-->
        </div>
    {{--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {packages:["orgchart"]});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Name');
            data.addColumn('string', 'Manager');
            data.addColumn('string', 'ToolTip');

            // For each orgchart box, provide the name, manager, and tooltip to show.
            data.addRows([
                @php
                    $tasks= Auth::user()->organization->tasks;
                    $head=Auth::user()->organization->head;
                    echo ` [{v:'Mike', f:'Mike<div style="color:red; font-style:italic">President</div>'},
                    '', 'The President']`;
                    foreach ($head->juniors as $d){
                        echo   `  ['$d->name', '$d->senior->name', ''],`;
                    }


                @endphp
              --}}{{--  [{v:'Mike', f:'Mike<div style="color:red; font-style:italic">President</div>'},
                    '', 'The President'],
                [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Vice President</div>'},
                    'Mike', 'VP'],
                ['Alice', 'Mike', ''],
                ['Bob', 'Jim', 'Bob Sponge'],
                ['Carol', 'Alice', '']--}}{{--
            ]);

            // Create the chart.
            var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
            // Draw the chart, setting the allowHtml option to true for the tooltips.
            chart.draw(data, {allowHtml:true});
        }
    </script>--}}

    @include('includes.search')
    @include('includes.delete')


@endsection