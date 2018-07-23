@extends('user.layout.app')
@section('content')

    <div class="breadcrumbs overlay-black" style="background:url({{url('user-assets/img/banner.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumbs-title text-center">
                            <h1>PROPERTIES</h1>
                        </div>
                        <div class="breadcrumbs-menu">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Breadcrumbs end-->

    <!--Feature property section-->
    <div class="feature-property properties-list pt-130">
        <div class="container">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script> <script type="text/javascript" src="https://www.realestatelistingsiframe.ca/js/iframeheight.js"></script> <script type="text/javascript"> $(document).ready(function () { $('#autoIframe').iframeHeight({ debugMode : true }); }); </script> <iframe id="autoIframe" src="https://www.realestatelistingsiframe.ca/iSimplePortal.php?siteID=kju65rdghkmnhgtrdxc&showMapNiche=No&searchform=residentialsale" width="100%" height="0" style="border:0px solid gray;overflow:hidden;" scrolling="no"></iframe>
        </div>
    </div>
@stop