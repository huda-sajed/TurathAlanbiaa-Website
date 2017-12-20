@extends("layout.index")

@section("main_content")

    <div class="ui green segment">

        <div class="ui stackable grid">
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
            @include("main.sub_views.grid_card")
        </div>

    </div>


    <div class="ui segment">
        <div class="ui small pagination menu">
            <a href="/all-news" class="blue active item">1</a>
            <a href="/all-news" class="item">2</a>
            <a href="/all-news" class="item">3</a>
            <a href="/all-news" class="item">4</a>
            <a href="/all-news" class="item">5</a>
            <a class="active item" href="/all-news">التالي</a>
            <a class="active item" href="/all-news">اخير</a>
        </div>
    </div>

@endsection