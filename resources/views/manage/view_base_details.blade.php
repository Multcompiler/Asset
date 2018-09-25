@extends("main")

@section("title","| View Base Details")

@section("link-description")
    <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="/"><i class="fa fa-home mr5"></i> Home</a></li>
        <li class="active">View Base Info</li>
    </ol>
@endsection
@section("main-content")

    <div class="col-md-12">

        <h4 class="panel-title mb5">Inverse Colored Tabs</h4>
        <p class="mb15">A colored tabs using class name of <code>.nav-inverse</code></p>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-inverse nav-justified">
            <li class="active"><a href="#popular10" data-toggle="tab"><strong>Category</strong></a></li>
            <li><a href="#recent10" data-toggle="tab"><strong>Description</strong></a></li>
            <li><a href="#comments10" data-toggle="tab"><strong>Sub-Description</strong></a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mb20">
            <div class="tab-pane active" id="popular10">
                <div class="table-responsive">
                    <table id="datatable1" class="table display responsive nowrap" style="width: 100%">
                        <thead>
                        <tr>
                            <th class="wd-15p">Category Name</th>
                            <th class="wd-15p"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <a class="btn btn-primary btn-icon">
                                        <i class="fa fa-fast-pencil"></i>
                                    </a>
                                    <a class="btn btn-danger btn-icon">
                                        <i class="fa fa-fast-trash"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>

            </div>
            <div class="tab-pane" id="recent10">
                <table id="datatable2" class="table display responsive nowrap" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="wd-15p">Category Name</th>
                        <th class="wd-15p">Description Name</th>
                        <th class="wd-15p"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($description as $desc)
                        <tr>
                            <td>{{ $desc->maincategory->category_name}}</td>
                            <td>{{$desc->category_description_name}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#editmodal2{{$desc->id}}">
                                    <div><i class="fa fa-pencil" ></i></div>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon"  data-toggle="modal" data-target="#deletemodal2{{$desc->id}}">
                                    <div ><i class="fa fa-trash"></i></div>
                                </a>

                                <!-- EDIT MODAL -->
                                <div id="editmodal2{{$desc->id}}" class="modal fade">
                                    <div class="modal-dialog modal-dialog-vertical-center" role="document" style="width: 100%">
                                        <div class="modal-content bd-0 tx-14">
                                            <div class="modal-header pd-y-20 pd-x-25">
                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Description</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pd-25">
                                                <div class="container">
                                                    <div class="col-md-12" style="padding-left: 0;">
                                                        {!! Form::model($desc, ['url' => ['/edit/description', $desc->id],'method' => 'PUT'],['data-parsley-validate' => '']) !!}
                                                        <div class="form-group">
                                                            <label class="form-control-label">Description Name: <span class="tx-danger">*</span></label>
                                                            {{Form::text('category_description_name', null , ['class' => 'form-control category_description_name_update','style' => 'height: 20px;width: 90%;','placeholder' => 'Enter Sub Category Description','required' => ''])}}
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Category Name: <span class="tx-danger">*</span></label>
                                                            {!! Form::select('category_id', $items_description, null, ['class' => 'form-control description_id_update_form3','style' => 'height: 20px;width: 90%;']) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-id="{{ $desc->id }}" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium update_description">Save changes</button>
                                                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div><!-- modal-dialog -->
                                </div><!-- modal -->

                                <!-- DELETE MODAL -->
                                <div id="deletemodal2{{$desc->id}}" class="modal fade">
                                    <div class="modal-dialog modal-dialog-vertical-center" role="document" style="width: 100%">
                                        <div class="modal-content bd-0 tx-14">
                                            <div class="modal-header pd-y-20 pd-x-25">
                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Delete Description</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pd-25">
                                                <div class="container">
                                                    <div class="col-md-12" style="padding-left: 0;">
                                                        <p> Are you sure you want to delete this information ?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-id="{{ $desc->id }}" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium delete_description">Delete</button>

                                                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div><!-- modal-dialog -->
                                </div><!-- modal -->
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
            <div class="tab-pane" id="comments10">
                <table id="datatable3" class="table display responsive nowrap ajaxtable" style="width: 100%">
                    <thead>
                    <tr>
                        <th class="wd-15p">Description Name</th>
                        <th class="wd-15p">Sub Description Name</th>
                        <th class="wd-15p"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sub_description as $sub_desc)
                        <tr>
                            <td>{{$sub_desc->descriptions->category_description_name}}</td>
                            <td>{{$sub_desc->sub_category_description_name}}</td>
                            <td>
                                <a href="#" class="btn btn-primary btn-icon" data-toggle="modal" data-target="#editmodal{{$sub_desc->id}}">
                                    <div><i class="fa fa-pencil" ></i></div>
                                </a>
                                <a href="#" class="btn btn-danger btn-icon"  data-toggle="modal" data-target="#deletemodal{{$sub_desc->id}}">
                                    <div ><i class="fa fa-trash"></i></div>
                                </a>

                                <!-- EDIT MODAL -->
                                <div id="editmodal{{$sub_desc->id}}" class="modal fade">
                                    <div class="modal-dialog modal-dialog-vertical-center" role="document" style="width: 100%">
                                        <div class="modal-content bd-0 tx-14">
                                            <div class="modal-header pd-y-20 pd-x-25">
                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Edit Sub-Description</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pd-25">
                                                <div class="container">
                                                    <div class="col-md-12" style="padding-left: 0;">
                                                        {!! Form::model($sub_desc, ['url' => ['/edit/sub/description', $sub_desc->id],'method' => 'PUT'],['data-parsley-validate' => '']) !!}
                                                        <div class="form-group">
                                                            <label class="form-control-label">Sub Description Name: <span class="tx-danger">*</span></label>
                                                            {{Form::text('sub_category_description_name', null , ['class' => 'form-control sub_category_description_name_update','style' => 'height: 20px;width: 90%;','placeholder' => 'Enter Sub Category Description','required' => ''])}}
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-control-label">Description Name: <span class="tx-danger">*</span></label>
                                                            {!! Form::select('category_id', $items_sub_description, null, ['class' => 'form-control description_id_update','style' => 'height: 20px;width: 90%;']) !!}
                                                        </div>
                                                        {!! Form::close() !!}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-id="{{ $sub_desc->id }}" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium update_sub_description">Save changes</button>
                                                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div><!-- modal-dialog -->
                                </div><!-- modal -->

                                <!-- DELETE MODAL -->
                                <div id="deletemodal{{$sub_desc->id}}" class="modal fade">
                                    <div class="modal-dialog modal-dialog-vertical-center" role="document" style="width: 100%">
                                        <div class="modal-content bd-0 tx-14">
                                            <div class="modal-header pd-y-20 pd-x-25">
                                                <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Delete Sub-Description</h6>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body pd-25">
                                                <div class="container">
                                                    <div class="col-md-12" style="padding-left: 0;">
                                                        <p> Are you sure you want to delete this information ?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-id="{{ $sub_desc->id }}" class="btn btn-primary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium delete_sub_category">Delete</button>

                                                <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div><!-- modal-dialog -->
                                </div><!-- modal -->
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div><!-- col-md-6 -->


    <!--DELETE MODAL ALERT MESSAGE -->
    <div id="success_deleted" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <i class="fa fa-check fa-3x  tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success tx-semibold mg-b-20">Success!</h4>
                    <p class="mg-b-20 mg-x-20">Information successful deleted.</p>
                    <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" onclick="reloadPage()">
                        Continue</button>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!--EDIT MODAL ALERT MESSAGE -->
    <div id="success_updated" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body tx-center pd-y-20 pd-x-20">
                    <i class="fa fa-check fa-3x  tx-100 tx-success lh-1 mg-t-20 d-inline-block"></i>
                    <h4 class="tx-success tx-semibold mg-b-20">Success!</h4>
                    <p class="mg-b-20 mg-x-20">Information successful updated.</p>
                    <button type="button" class="btn btn-success tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium mg-b-20" onclick="reloadPage()">
                        Continue</button>
                </div><!-- modal-body -->
            </div><!-- modal-content -->
        </div><!-- modal-dialog -->
    </div><!-- modal -->




@endsection

@section("page-script")
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript">
        $(".update_description").click(function(){
            var discription_name = $(".category_description_name_update").val();
            var category_id_form = $(".description_id_update_form3").val();
            var id_val1 = $(this).data("id");

            console.log(discription_name+" "+category_id_form +" "+ id_val1);
            $.ajax(
                {
                    url: "/edit/description/"+id_val1,
                    type: 'POST',
                    data: {
                        "description_name": discription_name,
                        "category_id_form": category_id_form
                    },
                    success: function ()
                    {
                        $('#editmodal1'+id_val).modal('hide');
                        // $('#success_updated').modal('show');
                        $('#success_updated').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        // location.reload(true);
                    },

                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        console.log(respose);
                        $('#deletemodal'+id).modal('hide');
                        console.log("It failed");
                    }
                });
        });
    </script>
    <script type="text/javascript">
        $(".update_sub_description").click(function(){
            var sub_discr_name = $(".sub_category_description_name_update").val();
            var description_id = $(".description_id_update").val();
            var id_val = $(this).data("id");

            //console.log(sub_discr_name+" "+description_id +" "+ id_val);
            $.ajax(
                {
                    url: "/edit/sub/description/"+id_val,
                    type: 'POST',
                    data: {
                        "description_name": sub_discr_name,
                        "description_id": description_id
                    },
                    success: function ()
                    {
                        $('#editmodal'+id_val).modal('hide');
                        // $('#success_updated').modal('show');
                        $('#success_updated').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        // location.reload(true);
                    },

                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        console.log(respose);
                        $('#deletemodal'+id).modal('hide');
                        console.log("It failed");
                    }
                });
        });
    </script>
    <script type="text/javascript">
        $(".delete_category").click(function(){
            var id = $(this).data("id");
            $.ajax(
                {
                    url: "/Remove/Category/"+id,
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "id": id
                    },
                    success: function ()
                    {
                        $('#deletemodal2'+id).modal('hide');
                       // $('#success_deleted').modal('show');
                        $('#success_deleted').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                       // location.reload(true);
                    },

                    error: function (jqXHR) {
                         var response = $.parseJSON(jqXHR.responseText);
                        console.log(respose);
                        $('#deletemodal'+id).modal('hide');
                        console.log("It failed");
                    }
                 });
        });
    </script>
    <script type="text/javascript">
        $(".delete_description").click(function(){
            var id = $(this).data("id");
            $.ajax(
                {
                    url: "/Remove/Description/"+id,
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "id": id
                    },
                    success: function ()
                    {
                        $('#deletemodal1'+id).modal('hide');
                        // $('#success_deleted').modal('show');
                        $('#success_deleted').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        // location.reload(true);
                    },

                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        console.log(respose);
                        $('#deletemodal'+id).modal('hide');
                        console.log("It failed");
                    }
                });
        });
    </script>
    <script type="text/javascript">
        $(".delete_sub_category").click(function(){
            var id = $(this).data("id");
            $.ajax(
                {
                    url: "/Remove/Sub/Description/"+id,
                    type: 'DELETE',
                    dataType: "JSON",
                    data: {
                        "id": id
                    },
                    success: function ()
                    {
                        $('#deletemodal'+id).modal('hide');
                        // $('#success_deleted').modal('show');
                        $('#success_deleted').modal({
                            backdrop: 'static',
                            keyboard: false
                        });
                        // location.reload(true);
                    },

                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        console.log(respose);
                        $('#deletemodal'+id).modal('hide');
                        console.log("It failed");
                    }
                });
        });
    </script>
<script type="text/javascript">

    function viewCategory() {
        $("#category").css("display","block");
        $("#description,#sub_description_view,#startup").css("display","none");
    }

    function viewDescription() {
        $("#description").css("display","block");
        $("#category,#sub_description_view,#startup").css("display","none");
    }
    function viewSubDescription() {
        $("#sub_description_view").css("display","block");
        $("#category,#description,#startup").css("display","none");
    }
    function reloadPage() {
        $('#success_deleted').modal('hide');
        $('#success_updated').modal('hide');
        location.reload(true);
    }
</script>

    <script>
        $(document).ready(function() {

            'use strict';

            $('#dataTable1').DataTable();

        });


        $('#datatable1').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        $('#datatable2').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
        $('#datatable3').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ items/page',
            }
        });
    </script>
    <script type="text/javascript">
//        window.onload = function() {
//            subDescriptionList();
//        };

        function mainCategory() {
            $("#main-category").css("display","block");
            $("#category-description").css("display","none");
            $("#sub-category-description").css("display","none");
        }

        function subescriptionList() {
            $.ajax({
                url: "/get/sub/desc/list",
                type: 'GET',

                success: function (response) {
                    console.log(response);
                    if(response.length > 0){
                        var trHTML = '';
                        $.each(response, function (i, item) {
                            trHTML += '<tr><td>' + item.id + '</td><td>' + item.sub_category_description_name + '</tr>';
                        });
                        $('#ajaxtable').html(trHTML);
                    }
                    // console.log(response);
                },

                error: function (jqXHR) {
                    var response = $.parseJSON(jqXHR.responseText);
                    console.log(response);

                }
            });
        }

    </script>

@endsection