@extends("main")

@section("title","| Add Base Details")

@section("link-description")
    <ol class="breadcrumb breadcrumb-quirk">
        <li><a href="/"><i class="fa fa-home mr5"></i> Home</a></li>
        <li class="active">Add Base Details</li>
    </ol>
    @endsection
@section("main-content")
    <div class="col-sm-4">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Selection</h4>
            </div>
            <div class="panel-body">
                <div class="row mb20">
                    <button class="btn btn-primary btn-block btn-quirk btn-stroke" onclick="mainCategory()">Main Category</button>
                </div>
                <div class="row mb20">
                    <button class="btn btn-primary btn-block btn-quirk btn-stroke" onclick="categoryDescription()">Category Description</button>
                </div>
                <div class="row mb20">
                    <button class="btn btn-primary btn-block btn-quirk btn-stroke" onclick="subCategoryDescription()">Sub Category Description</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8" id="main-category" style="display: none;">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Category Add</h4>
            </div>
            <div class="panel-body">
                <div class="row mb20">
                    <div id="loading">
                        <img id="loading-image" src="{{asset("img/spinners.gif")}}" alt="Loading..." width="100px"/>
                    </div>
                    <div id="success_category" class="alert alert-bordered alert-info" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong class="d-block d-sm-inline-block-force"> <i class="fa fa-check"></i> Well done!</strong>
                        New Category successfully Added.
                    </div>
                    <div id="fail_category" class="alert alert-bordered alert-danger" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong class="d-block d-sm-inline-block-force"><i class="fa fa-times"></i>  Error!</strong> <span id="category_error"></span>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 control-label">Category <span class="text-danger">*</span></label>
                        <div class="col-sm-12">
                            <input name="name" class="form-control" placeholder="Category Name" id="category"  type="text" required>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12">
                        <button onclick="saveCategory()" class="btn btn-success btn-quirk btn-wide mr5" id="category_btn" style="float: right;">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-8" id="category-description" style="display: none;">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Category Description Add</h4>
            </div>
            <div class="panel-body">

                <div class="row mb20">
                    <div id="loading">
                        <img id="loading-image-description" src="{{asset("img/spinners.gif")}}" alt="Loading..." width="100px"/>
                    </div>
                    <div id="success_category_description" class="alert alert-bordered alert-info" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong class="d-block d-sm-inline-block-force"> Well done!</strong> New Category Description successfully Added.
                    </div>
                    <div id="fail_category_description" class="alert alert-bordered alert-danger" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong class="d-block d-sm-inline-block-force"> Error!</strong> <span id="category_description_error"></span>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-12 control-label">Category <span class="text-danger">*</span></label>
                        <div class="col-sm-12">
                                <div class="form-group">
                                    <select id="categ" class="form-control" style="width: 100%">
                                        <option value=""> -- Default -- </option>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 65px;">
                        <label class="col-sm-12 control-label">Category Description<span class="text-danger">*</span></label>
                        <div class="col-sm-12">
                            <input name="name" class="form-control" id="category_description" placeholder="Category Description Name"  type="text" required>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12">
                        <button onclick="saveDescription()" id="description_btn" class="btn btn-success btn-quirk btn-wide mr5" style="float: right;">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-8" id="sub-category-description" style="display: none;">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Category Description Add</h4>
            </div>
            <div class="panel-body">

                <div class="row mb20">
                    <div id="loading">
                        <img id="loading-image-sub-description" src="{{asset("img/spinners.gif")}}" alt="Loading..." width="100px"/>
                    </div>
                    <div id="success_sub_category_description" class="alert alert-bordered alert-info" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong class="d-block d-sm-inline-block-force"> Well done!</strong> New Sub Category Description successfully Added.
                    </div>
                    <div id="fail_sub_category_description" class="alert alert-bordered alert-danger" role="alert" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <strong class="d-block d-sm-inline-block-force"> Error!</strong> <span id="sub_category_description_error"></span>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-12 control-label">Choose Category Description: <span class="text-danger">*</span></label>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <select id="categ_descrption" class="form-control" style="width: 100%">
                                    <option value=""> -- Default -- </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 65px;">
                        <label class="col-sm-12 control-label">Sub Category Description:<span class="text-danger">*</span></label>
                        <div class="col-sm-12">
                            <input name="name" class="form-control" id="sub_category_description" placeholder="Enter Sub Category Description"  type="text" required>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-sm-12">
                        <button onclick="saveSubDescription()" class="btn btn-success btn-quirk btn-wide mr5 sub_description_btn" style="float: right;">Add</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("page-script")
    <script>
        $(function() {

            // Textarea Auto Resize
            autosize($('#autosize'));

            // Select2 Box
            $('#select1, #select2, #select3').select2();
            $("#select4").select2({ maximumSelectionLength: 2 });
            $("#select5").select2({ minimumResultsForSearch: Infinity });
            $("#select6").select2({ tags: true });

            // Toggles
            $('.toggle').toggles({
                on: true,
                height: 26
            });

            // Input Masks
            $("#date").mask("99/99/9999");
            $("#phone").mask("(999) 999-9999");
            $("#ssn").mask("999-99-9999");

            // Date Picker
            $('#datepicker').datepicker();
            $('#datepicker-inline').datepicker();
            $('#datepicker-multiple').datepicker({ numberOfMonths: 2 });

            // Time Picker
            $('#tpBasic').timepicker();
            $('#tp2').timepicker({'scrollDefault': 'now'});
            $('#tp3').timepicker();

            $('#setTimeButton').on('click', function (){
                $('#tp3').timepicker('setTime', new Date());
            });

            // Colorpicker
            $('#colorpicker1').colorpicker();
            $('#colorpicker2').colorpicker({
                customClass: 'colorpicker-lg',
                sliders: {
                    saturation: {
                        maxLeft: 200,
                        maxTop: 200
                    },
                    hue: { maxTop: 200 },
                    alpha: { maxTop: 200 }
                }
            });

        });
    </script>


 <script type="text/javascript">
         function mainCategory() {
             $("#main-category").css("display","block");
             $("#category-description").css("display","none");
             $("#sub-category-description").css("display","none");
         }
         function categoryDescription() {
             $.ajax({
                 url: "/get/category/list",
                 type: 'GET',

                 success: function (response) {
                     if(response.length > 0){
                         var item1 = $("#categ");
                         item1.empty();
                         var html = "";
                         html += "<option value=\"\"> -- Default -- </option>";
                         for (var i = 0; i < response.length; i++) {
                            html += "<option value= \""+response[i]['id'] +"\"> "+response[i]['category_name'] +"</option>";
                         }
                         item1.append(html);
                     }
                    // console.log(response);
                 },

                 error: function (jqXHR) {
                     var response = $.parseJSON(jqXHR.responseText);
                     console.log(response);

                 }
             });

             $("#category-description").css("display","block");
             $("#main-category").css("display","none");
             $("#sub-category-description").css("display","none");
         }
         function subCategoryDescription() {
             $.ajax({
                 url: "/get/sub/category/list",
                 type: 'GET',

                 success: function (response) {

                     if(response.length > 0){
                         var item = $("#categ_descrption");
                         item.empty();
                         var html1 = "";
                         html1 += "<option value=\"\"> -- Default -- </option>";
                         for (var i = 0; i < response.length; i++) {
                             html1 += "<option value= \" "+response[i]['id'] +"\"> "+response[i]['category_description_name'] +"</option>";
                         }
                         item.append(html1);
                     }
                    // console.log(response);
                 },

                 error: function (jqXHR) {
                     var response = $.parseJSON(jqXHR.responseText);
                     console.log(response);

                 }
             });

             $("#category-description").css("display","none");
             $("#main-category").css("display","none");
             $("#sub-category-description").css("display","block");
         }
 </script>

 <script type="text/javascript">
     $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
     });
 </script>
 <script type="text/javascript">
         saveCategory = function () {
             $("#main-category").css("opacity","0.5");
             $("#loading-image").css("display","block");
             $(".category_btn").prop("disabled",true);

             $.ajax({
                 url: "/Manage/Save/Category",
                 type: 'POST',
                 data: {category: $("#category").val()},
                 success: function (response) {
                     //console.log(response);
                     $("#fail_category").css("display","none");
                     $(".category_btn").prop("disabled",false);
                     $("#success_category").css("display","block");
                 },

                 error: function (jqXHR) {
                     var response = $.parseJSON(jqXHR.responseText);
                     //console.log(jqXHR);
                     //console.log(response);
                     if(response) {
                         $("#fail_category").css("display","block");
                         var message = $("#category_error");
                         message.empty();
                         message.append(response['category'].toString());
                         $("#loading-image").css("display", "none");
                         $("#main-category").css("opacity","unset");
                         document.getElementById('category').value = '';
                         $(".category_btn").prop("disabled",false);

                         //hide success alert after 3 seconds
                         setTimeout(function(){
                             $("#success_category").css("display","none");
                         },3000);
                     }
                 }
             }).done (function(data){
                 $("#loading-image").css("display", "none");
                 $("#main-category").css("opacity","unset");
                 document.getElementById('category').value = '';

                 //hide success alert after 3 seconds
                 setTimeout(function(){
                     $("#success_category").css("display","none");
                 },3000);
             });
         }
     </script>

 <script type="text/javascript">
     saveDescription = function () {
         $("#category-description").css("opacity","0.5");
         $("#loading-image-description").css("display","block");
         $(".description_btn").prop("disabled",true);

         $.ajax({
             url: "/Manage/Save/Description",
             type: 'POST',
             data: {category: $("#categ").val(),description: $("#category_description").val()},
             success: function (response) {
                // console.log(response);
                 $("#fail_category_description").css("display","none");
                 $(".description_btn").prop("disabled",false);
                 $("#success_category_description").css("display","block");
             },

             error: function (jqXHR) {
                 var response = $.parseJSON(jqXHR.responseText);
                 //console.log(jqXHR);
                 //console.log(response);
                 if(response) {
                     $("#fail_category_description").css("display","block");
                     var message = $("#category_description_error");
                     message.empty();
                     if(response['category']){
                         message.append("<br/>"+response['category'].toString()+"<br/>");
                     }
                     if(response['description']){
                         message.append("<br/>"+response['description'].toString()+"<br/>");
                     }

                     $("#loading-image-description").css("display", "none");
                     $("#category-description").css("opacity","unset");

                     //hide success alert after 3 seconds
                     setTimeout(function(){
                         $("#success_category_description").css("display","none");
                     },3000);
                 }
             }
         }).done (function(data){
             $("#loading-image-description").css("display", "none");
             $("#category-description").css("opacity","unset");
             $(".description_btn").prop("disabled",false);
             document.getElementById('category_description').value = '';
             $('#categ').prop('selectedIndex',0);
             //hide success alert after 3 seconds
             setTimeout(function(){
                 $("#success_category_description").css("display","none");
             },3000);
         });
     }
 </script>
 <script type="text/javascript">
     saveSubDescription = function () {
         $("#sub-category-description").css("opacity","0.5");
         $("#loading-image-sub-description").css("display","block");
         $(".sub_description_btn").prop("disabled",true);

         $.ajax({
             url: "/Manage/Save/Sub/Description",
             type: 'POST',
             data: {description: $("#categ_descrption").val(),sub_description: $("#sub_category_description").val()},
             success: function (response) {
                 //console.log(response);
                 $("#fail_sub_category_description").css("display","none");
                 $(".sub_description_btn").prop("disabled",false);
                 $("#success_sub_category_description").css("display","block");
             },

             error: function (jqXHR) {
                 var response = $.parseJSON(jqXHR.responseText);
                 //console.log(jqXHR);
                 //console.log(response);
                 if(response) {
                     $("#fail_sub_category_description").css("display","block");
                     var message = $("#sub_category_description_error");
                     message.empty();
                     if(response['description']){
                         message.append("<br/>"+response['description'].toString()+"<br/>");
                     }
                     if(response['sub_description']){
                         message.append("<br/>"+response['sub_description'].toString()+"<br/>");
                     }

                     $("#loading-image-sub-description").css("display", "none");
                     $("#sub-category-description").css("opacity","unset");
                     $(".sub_description_btn").prop("disabled",false);
                     //hide success alert after 3 seconds
                     setTimeout(function(){
                         $("#success_sub_category_description").css("display","none");
                     },3000);
                 }
             }
         }).done (function(data){
             $("#loading-image-sub-description").css("display", "none");
             $("#sub-category-description").css("opacity","unset");
             $(".sub_description_btn").prop("disabled",false);
             document.getElementById('sub_category_description').value = '';
             $('#categ_descrption').prop('selectedIndex',0);
             //hide success alert after 3 seconds
             setTimeout(function(){
                 $("#success_sub_category_description").css("display","none");
             },3000);
         });
     }
 </script>

@endsection