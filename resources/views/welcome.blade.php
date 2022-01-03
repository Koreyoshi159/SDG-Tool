@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="./image/sdg-header-en.png" />
        </div>
    </section>

    <section class="section">
        <div class="container">
        hello
            <div class="columns">
            <div class="section-sdg-goals is-align-content-space-evenly" style="padding-left: 90px">
                <div class="is-flex-wrap-wrap sdg-icon">
                        @foreach($sdgs as $sdg)
                            <a href="/sdgs/{{ $sdg->id }}"><img src="{{ $sdg->img_link }}" /></a>
                        @endforeach
                    <a href="#"><img src="./image/SDG-Icons-EN/sdg-en-18.png" /></a>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
