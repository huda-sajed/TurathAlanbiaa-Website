<!doctype html>
<html lang="ar">
<head>
    @include("ar.layout.head")
</head>

<body>

@include("ar.layout.mobile_header")


<div class="ui fluid container">

    @include("ar.layout.page_header")

    @include("ar.layout.nav_bar")
    @ye

    <div class="ui hidden divider"></div>
</div>

<div class="ui fluid container">
    <div class="ui grid" style="background-color:#eeeeee">
        @include("ar.layout.right_nav")

        <div class="fourteen wide computer sixteen wide mobile column">

            @yield("content")


        </div>
    </div>

</div>

    <div class="ui container">

        @include("ar.layout.footer")


    </div>

</body>
@include("ar.layout.owlCarousel")

</html>