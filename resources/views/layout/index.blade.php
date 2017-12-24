<!doctype html>
<html lang="ar">
<head>
    @include("layout.head")
</head>

<body style="direction: rtl;background-color: #EEEEEE">

@include("layout.mobile_header")

<div style="background-color: #ffffff">
<div class="ui fluid container">

    @include("layout.page_header")

    @include("layout.nav_bar")


    <div class="ui hidden divider"></div>
</div>
</div>


    <div class="ui container">
        <div class="ui grid" >

            @include("layout.right_nav")

            <div class="thirteen wide computer sixteen wide mobile column">

                @yield("main_content")

            </div>
        </div>

    </div>

<div style="background-color: #ffffff">

    <div class="ui container">

        @include("layout.footer")


    </div>
</div>
</body>

@include("layout.owlCarousel_script")

</html>