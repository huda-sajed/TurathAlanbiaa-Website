<!doctype html>
<html lang="ar">
<head>
    @include("layout.head")
</head>

<body style="direction: rtl;">

@include("layout.mobile_header")


<div class="ui fluid container">

    @include("layout.page_header")

    @include("layout.nav_bar")


    <div class="ui hidden divider"></div>
</div>

<div class="ui fluid container">
    <div class="ui grid" style="background-color:#eeeeee">

        @include("layout.right_nav")

        <div class="fourteen wide computer sixteen wide mobile column">

            @yield("main_content")

        </div>
    </div>

</div>

    <div class="ui container">

        @include("layout.footer")


    </div>

</body>

@include("layout.owlCarousel_script")

</html>