<div class="ui green segment">
    <div class="ui three column divided grid" style="direction:ltr">
        <div class="row">
            <div class="column">
                <button class="ui orange button">
                    تواصل مع الاداره
                </button>
            </div>
            <div class="column">
                <p></p>
            </div>
            <div class="column">
                <p class="news">حديث اليوم</p>
            </div>
        </div>
    </div>
</div>

<div class="ui green segment">
    <h2 style="color:black">أخر الاخبار</h2>

    <div style="margin-top:5px;" id="news-carousel" class="owl-carousel">

        @include("main.sub_views.carousel_card")

        @include("main.sub_views.carousel_card")

        @include("main.sub_views.carousel_card")

        @include("main.sub_views.carousel_card")

        @include("main.sub_views.carousel_card")

        @include("main.sub_views.carousel_card")

        @include("main.sub_views.carousel_card")

        @include("main.sub_views.carousel_card")

    </div>

    <a href="/all-news">
        <h4 style="text-align:center;margin-top:10px">عرض الكل..</h4>
    </a>
</div>