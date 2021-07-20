
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
                                <div class="breadcome-heading">
                                    <form id="form-filter">
                                        <div class="col-md-3 form-group">
                                            <input type="text" placeholder="Search..." name="search" class="search-int form-control" id="search">
                                        </div>
                                        <div class="form-group col-md-9">
                                            <select class="form-control dt-tb" name="status" id="status">
                                                <option value="">All status</option>
                                                @foreach(\App\Enums\EventStatus::getValues() as $type)
                                                    <option value="{{$type}}" {{$type== $status ? 'selected' : ''}}>{{\App\Enums\EventStatus::getDescription($type)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </form>

                                </div>
{{--                                data-search="true" data-show-pagination-switch="true" data-show-export="true"--}}
                                <table id="table" data-toggle="table"
{{--                                       data-pagination="true"--}}
{{--                                       data-show-columns="true"--}}
{{--                                       data-show-refresh="true" --}}
                                       data-key-events="true"
{{--                                       data-show-toggle="true"--}}
                                       data-resizable="true"
{{--                                       data-cookie="true"--}}
{{--                                       data-cookie-id-table="saveId" --}}
{{--                                       data-click-to-select="true"--}}
                                       data-toolbar="#toolbar"
                                >
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
                                            <td>{{\App\Enums\EventStatus::getDescription($listEvent->status)}}</td>
                                            <td><a href="/admin/events/update/{{$listEvent->id}}"><i class="far fa-edit"></i></a></td>
                                            <td><a href="/admin/events/delete/{{$listEvent->id}}" onclick="return confirm('Bạn có chắc ?')"><i class="fas fa-trash-alt"></i></a></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            // config
                            $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                            ?>
                            @if ($list->lastPage() > 1)
                                <ul class="pagination">
                                    <li class="{{ ($list->currentPage() == 1) ? ' disabled' : '' }}">
                                        <a href="{{ $list->url(1) }}">First</a>
                                    </li>
                                    @if($list->currentPage() > 1)
                                        <li>
                                            <a href="{{ $list->url($list->currentPage() - 1) }}">Previous</a>
                                        </li>
                                    @endif
                                    @for ($i = 1; $i <= $list->lastPage(); $i++)

                                        <?php
                                        $half_total_links = floor($link_limit / 2);
                                        $from = $list->currentPage() - $half_total_links;
                                        $to = $list->currentPage() + $half_total_links;
                                        if ($list->currentPage() < $half_total_links) {
                                            $to += $half_total_links - $list->currentPage();
                                        }
                                        if ($list->lastPage() - $list->currentPage() < $half_total_links) {
                                            $from -= $half_total_links - ($list->lastPage() - $list->currentPage()) - 1;
                                        }
                                        ?>
                                        @if ($from < $i && $i < $to)
                                            <li class="{{ ($list->currentPage() == $i) ? ' active' : '' }}">
                                                <a href="{{ $list->url($i) }}">{{ $i }}</a>
                                            </li>
                                        @endif
                                    @endfor
                                    @if($list->currentPage() < $list->lastPage())
                                        <li>
                                            <a href="{{ $list->url($list->currentPage() + 1) }}">Next</a>
                                        </li>
                                    @endif
                                    <li class="{{ ($list->currentPage() == $list->lastPage()) ? ' disabled' : '' }}">
                                        <a href="{{ $list->url($list->lastPage()) }}">Last</a>
                                    </li>
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        const form = document.getElementById('form-filter')
        const search = document.getElementById('search')
        const type = document.getElementById('status')
        search.onkeypress = function (event) {
            if (event.key == 'Enter') {
                form.submit();
            }
        }
        if (type) {
             type.onchange = function () {
                form.submit();
            }
        }
    </script>
@endsection
