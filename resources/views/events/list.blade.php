@extends('layout.master-layout')
@section('content')
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                       data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                    <thead>
                                    <tr>
                                        {{--                                        <th data-field="state" data-checkbox="true"></th>--}}
                                        <th data-field="id">ID</th>
                                        <th data-field="eventName">Event Name</th>
                                        <th data-field="bandNames">Band Names</th>
                                        <th data-field="startDate">Start Date</th>
                                        <th data-field="endDate">End Date</th>
                                        <th data-field="portfolio">Portfolio</th>
                                        <th data-field="ticketPrice">Ticket Price</th>
                                        <th data-field="status">Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($list as $listEvent)
                                        <tr>
                                            <td>{{$listEvent->id}}</td>
                                            <td>{{$listEvent->eventName}}</td>
                                            <td>{{$listEvent->bandNames}}</td>
                                            <td>{{$listEvent->startDate}}</td>
                                            <td>{{$listEvent->endDate}}</td>
                                            <td>{{$listEvent->portfolio}}</td>
                                            <td>{{$listEvent->ticketPrice}}</td>
                                            <td>{{$listEvent->status}}</td>
                                            <td><a href="/admin/events/update/{{$listEvent->id}}"><i class="far fa-edit"></i></a></td>
                                            <td><a href="/admin/events/delete/{{$listEvent->id}}" onclick="return confirm('Bạn có chắc ?')"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
