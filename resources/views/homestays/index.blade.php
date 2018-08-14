@extends('layouts.app')

@section('content')

<div class="section nomargin">
    <div class="container clearfix">
        <div class="heading-block center nobottommargin nobottomborder">
                <h3>Select Homestay</h3>
        </div>
    </div>
</div>

    <div id="portfolio" class="portfolio-nomargin portfolio-full portfolio-overlay-open clearfix">
        @foreach ($homestays as $homestay)
        <article class="portfolio-item pf-media pf-icons">
            <div class="portfolio-image" style="height:350px;">
                <a href="{{ route('homestays.show',$homestay->id) }} ">
                    <img src="images/folkend/{{ $homestay->image1 }} "/>
                    <div class="portfolio-overlay">
                        <div class="portfolio-desc" style="margin-top: 150px;">
                            <h3>{{ $homestay->name }}</h3>
                        </div>
                    </div>
                </a>
            </div>
        </article>
        @endforeach
    </div>


@endsection