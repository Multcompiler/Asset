<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Asset - Home </title>

    {{Html::style("lib/Hover/hover.css")}}
    {{Html::style("css/font-awesome.css")}}
    {{Html::style("lib/weather-icons/css/weather-icons.css")}}
    {{Html::style("lib/ionicons/css/ionicons.css")}}
    {{Html::style("lib/jquery-toggles/toggles-full.css")}}
    {{Html::style("lib/morrisjs/morris.css")}}
    {{Html::style("css/quirk.css")}}

    {{Html::script("lib/modernizr/modernizr.js")}}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    {{Html::script("lib/html5shiv/html5shiv.js")}}
    {{Html::script("lib/respond/respond.src.js")}}
    <![endif]-->
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

            <div class="row">
                <div class="col-md-9 col-lg-8 dash-left">
                    <div class="panel panel-announcement">
                        <div class="panel-heading">
                            <h4 class="panel-title">Bar Chart</h4>
                            <p>With the categories plugin you can plot categories/textual data easily.</p>
                        </div>
                        <div class="panel-body">
                            <div id="barchart" class="flot-chart"></div>
                        </div>
                    </div><!-- panel -->

                </div><!-- col-md-9 -->
                <div class="col-md-3 col-lg-4 dash-left">
                    <div class="panel panel-announcement">
                        <ul class="panel-options">
                            <li><a><i class="fa fa-refresh"></i></a></li>
                            <li><a class="panel-remove"><i class="fa fa-remove"></i></a></li>
                        </ul>
                        <div class="panel-heading">
                            <h4 class="panel-title">Latest Announcement</h4>
                        </div>
                        <div class="panel-body">
                            <h2>A new admin template has been released by <span class="text-primary">ThemePixels</span> with a name <span class="text-success">Quirk</span> is now live and available for purchase!</h2>
                            <h4>Explore this new template and see the beauty of Quirk! <a href="#">Take a Tour!</a></h4>
                        </div>
                    </div><!-- panel -->

                </div><!-- col-md-9 -->
            </div><!-- row -->

        </div><!-- contentpanel -->

    </div><!-- mainpanel -->

</section>

{{Html::script("lib/jquery/jquery.js")}}
{{Html::script("lib/jquery-ui/jquery-ui.js")}}
{{Html::script("lib/bootstrap/js/bootstrap.js")}}
{{Html::script("lib/jquery-toggles/toggles.js")}}
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





</body>

</html>
