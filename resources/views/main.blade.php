<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Asset Management System">
    <meta name="author" content="Godson Mandla">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>ASMS @yield("title") </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{Html::style("lib/jquery-ui/jquery-ui.css")}}
    {{Html::style("lib/select2/select2.css")}}
    {{Html::style("lib/dropzone/dropzone.css")}}
    {{Html::style("lib/Hover/hover.css")}}
    {{Html::style("css/font-awesome.css")}}
    {{Html::style("lib/weather-icons/css/weather-icons.css")}}
    {{Html::style("lib/ionicons/css/ionicons.css")}}
    {{Html::style("lib/jquery-toggles/toggles-full.css")}}
    {{Html::style("lib/jquery-toggles/toggles-full.css")}}
    {{Html::style("lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css")}}

    {{Html::style("lib/morrisjs/morris.css")}}
    {{Html::style("css/quirk.css")}}

    {{Html::script("lib/modernizr/modernizr.js")}}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{Html::script("lib/html5shiv/html5shiv.js")}}
    {{Html::script("lib/respond/respond.src.js")}}
    <![endif]-->

    <style type="text/css">
        .no-js #loader { display: none;  }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url({{asset("images/Preloader_2.gif")}}) center no-repeat #fff;
        }


        #loading-image,#loading-image-description,#loading-image-sub-description {
            display: none;
            position: absolute;
            top: 25%;
            left: 40%;
            z-index: 100;
        }
        #loading-spinner-save {
            display: none;
            position: absolute;
            top: 50%;
            left: 45%;
            z-index: 100;
        }

        .lds-dual-ring {
            display: inline-block;
            width: 64px;
            height: 64px;
        }
        .lds-dual-ring:after {
            content: " ";
            display: block;
            width: 30px;
            height: 30px;
            margin: 40px;
            border-radius: 50%;
            border: 5px solid #fff;
            border-color: #b9a3ff transparent #b9a3ff transparent;
            animation: lds-dual-ring 1.2s linear infinite;
        }
        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

    </style>
</head>

<body>

<header>
    <div class="headerpanel">
        @include("partials.top_navigation")
    </div><!-- header-->
</header>

<section>

    <div class="leftpanel">
        <div class="leftpanelinner">
            @include("partials.side_navigation")
        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

        <!--<div class="pageheader">
          <h2><i class="fa fa-home"></i> Dashboard</h2>
        </div>-->
        <div class="contentpanel">
            @yield("link-description")
            <div class="row">
                @yield("main-content")
            </div><!-- row -->

        </div><!-- contentpanel -->

    </div><!-- mainpanel -->

</section>

{{Html::script("lib/jquery/jquery.js")}}
{{Html::script("lib/jquery-ui/jquery-ui.js")}}
{{Html::script("lib/bootstrap/js/bootstrap.js")}}
{{Html::script("lib/jquery-autosize/autosize.js")}}
{{Html::script("lib/select2/select2.js")}}
{{Html::script("lib/jquery-toggles/toggles.js")}}
{{Html::script("lib/datatables/jquery.dataTables.js")}}
{{Html::script("lib/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.js")}}
{{Html::script("lib/jquery-maskedinput/jquery.maskedinput.js")}}
{{Html::script("lib/morrisjs/morris.js")}}
{{Html::script("lib/raphael/raphael.js")}}
{{Html::script("lib/flot/jquery.flot.js")}}
{{Html::script("lib/flot/jquery.flot.resize.js")}}
{{Html::script("lib/flot/jquery.flot.symbol.js")}}
{{Html::script("lib/flot/jquery.flot.crosshair.js")}}
{{Html::script("lib/flot/jquery.flot.categories.js")}}
{{Html::script("lib/flot/jquery.flot.pie.js")}}
{{Html::script("lib/flot-spline/jquery.flot.spline.js")}}
{{Html::script("lib/jquery-knob/jquery.knob.js")}}
{{Html::script("js/quirk.js")}}
{{Html::script("js/charts.js")}}


@yield("page-script")


</body>

</html>
