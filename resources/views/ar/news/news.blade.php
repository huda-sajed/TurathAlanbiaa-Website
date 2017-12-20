@extends("ar.layout.main")



@section("content")
    <div class="ui green segment">
        <h2 style="color:black">أخر الاخبار</h2>

    @include("ar.card.card" , ["card" => $card])
    @include("ar.card.card" , ["card" => $card])
    @include("ar.card.card" , ["card" => $card])
    @include("ar.card.card" , ["card" => $card])
    @include("ar.card.card" , ["card" => $card])
    @include("ar.card.card" , ["card" => $card])
    @include("ar.card.card" , ["card" => $card])



    </div>


@endsection