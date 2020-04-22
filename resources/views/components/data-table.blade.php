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
                        <div class="d-flex align-items-center">
                            <h4 class="card-title">{{$title}}</h4>
                            <button class="btn btn-primary btn-round ml-auto" onclick="add_data()">
                                <i class="fa fa-plus"></i>
                                Add {{$title}}
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="modal fade" id="modal_form" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold">
                                            New</span> 
                                            <span class="fw-light">
                                                {{$title}}
                                            </span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        {{Form::open(['id' => 'form'])}}
                                        <div class="row">
                                            {{$slot}}
                                        </div>
                                        {{Form::close()}}
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" onclick="save_data()" id="btn_save" class="btn btn-primary">Save data</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        var table;
        var method;
        $(function () {
            $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
            table = $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                pageLength: 5,
                ajax: "{{$resource."/json"}}",
                columns: [
                        @foreach($header as $key => $val)
                    {
                        data: '{{$key}}',
                        name: '{{$key}}',
                        orderable: '{{$key == "action" ? false : true }}' ? true : false,
                    },
                    @endforeach
                ]
            });
        });

        function add_data(){
            method = "POST";
            $("#form")[0].reset();
            $("#modal_form").modal('show');
            $('.modal-title').text('Add Data');
        }

        function edit_data(id){
            method = "PATCH";
            $("#form")[0].reset();
            $("#modal_form").modal('show');
            $('.modal-title').text('Edit Data');
        }

        function save_data(){
            var url = "{{$resource}}";
            alert(url);
            alert($("#form").serialize());
            $.ajax({
                url: url,
                type: method,
                data: $("#form").serialize(),
                dataType: "JSON",
                success: function(data){
                    console.log(data);
                    $("#modal_form").modal('hide');
                    reload_table()
                }
            })
        }

        function reload_table(){
            table.ajax.reload(false);
        }
    </script>
@endpush
