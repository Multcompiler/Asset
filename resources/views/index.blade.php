@extends("main")

@section("title","| Home")

@section("main-content")
    <div class="col-md-9 col-lg-8 dash-left">
        <div class="panel panel-announcement">
            <div class="panel-body">
                <div id="carousel12" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel12" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel12" data-slide-to="1"></li>
                        <li data-target="#carousel12" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="bg-br-primary  ht-300 pos-relative d-flex align-items-center rounded">
                                <img src="{{asset("img/slide1.jpeg")}}" alt="..." width="100%">
                                <div class="carousel-caption">
                                    <h5 class="lh-5 mg-b-20">Asset Storage</h5>
                                </div>
                            </div><!-- d-flex -->
                        </div>
                        <div class="carousel-item">
                            <div class="bg-info  ht-300 pos-relative d-flex align-items-center rounded">
                                <img src="{{asset("img/slide2.jpg")}}" alt="..." width="100%">
                                <div class="carousel-caption">
                                    <h5 class="lh-5 mg-b-20">Asset Storage</h5>
                                </div>

                            </div><!-- d-flex -->
                        </div>
                        <div class="carousel-item">
                            <div class="bg-purple  ht-300 d-flex pos-relative align-items-center rounded">
                                <img src="{{asset("img/slide3.jpg")}}" alt="..." width="100%">
                                <div class="carousel-caption">
                                    <h5 class="lh-5 mg-b-20">Asset Storage</h5>
                                </div>

                            </div><!-- d-flex -->
                        </div>
                    </div><!-- carousel-inner -->
                </div><!-- carousel -->
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
@endsection


@section("page-script")

@endsection
