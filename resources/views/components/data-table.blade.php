<div>
    <div class="page-inner">
        <div class="page-header">
            <h3 class="page-title">
                {{$title}}
            </h3>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href=""><i class="flaticon-home"></i></a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="{{route($resource.".index")}}">{{$title}}</a>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">{{$title}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table width="100%" id="dataTable" class="display table table-striped table-hover">
                                <thead>
                                <tr>
                                    @foreach($header as $title)
                                        <th>{{ucfirst($title)}}</th>
                                    @endforeach
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('js')
    <script !src="">
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 5,
                ajax : "{{$resource."/json"}}",
                columns: [
                        @foreach($header as $key => $val)
                    {
                        data: '{{$key}}',
                        name: '{{$key}}',
                        orderable: '{{$key == "action" ? false : true }}' ? true: false,
                    },
                    @endforeach
                ]
            });
        })
    </script>
@endpush
