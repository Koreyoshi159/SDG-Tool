@extends('common.master')

@section('script')
    <script type="text/javascript" src="/js/blog.js"></script>
@endsection

@section('content')
    <section class="hero is-info">
        <div class="hero-body container">
            <p class="title">
                All blogs on one page
            </p>
            <p class="subtitle">
                Use the filters to search for what you want
            </p>
        </div>
        <a href="{{ route('blogs.create') }}" class="button is-light is-link">Create a Blog</a>
    </section>
    <div class="container">
        <label for="textFilter">
            <input type="text" class="input is-fullwidth" name="textFilter" id="textFilter"
                   placeholder="Search for title" onkeyup="textFilter()">
            <p class="has-text-info">Important: Input filter does not work together with the select filter.</p>
        </label>
    </div>
    <div class="filter_container">
        <div class="single-filter select is-info is-rounded">
            <select id="filter1" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on SDG</option>
                <option>None</option>
                @foreach($sdgs as $sdg)
                    <option value="{{ $sdg->name }}">{{ $sdg->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter2" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Activity</option>
                <option>None</option>
                @foreach($activities as $activity)
                    <option value="{{ $activity->name }}">{{ $activity->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter3" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Business Operation</option>
                <option>None</option>
                @foreach($business_operations as $business_operation)
                    <option value="{{ $business_operation->name }}">{{ $business_operation->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter4" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Program</option>
                <option>None</option>
                @foreach($programs as $program)
                    <option value="{{ $program->name }}">{{ $program->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter select is-info is-rounded">
            <select id="filter5" onchange="myFilter()">
                <option value="None" class="filter-title" disabled selected>Filter on Research Group</option>
                <option>None</option>
                @foreach($research_groups as $research_group)
                    <option value="{{ $research_group->name }}">{{ $research_group->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="single-filter is-info is-rounded">
            <button onClick="window.location.reload()" class="is-rounded button is-info is-outlined">Reset</button>
        </div>
    </div>

    <div class="columns columns-container is-multiline blogs">
        @forelse($blogs as $blog)
            <div class="column is-full blogPost">
                <div class="card card_with_blog">
                    <div class="card-stacked">
                        <div class="card-content card_container">
                            <div class="media-content card_link">
                                <a class="title blogTitle is-3" href="//{{ $blog->link }}">
                                    {{ $blog->title }}
                                </a>
                            </div>
                            <div class="subtitle is-6 sdg-content">
                                <p class="card_title">Impact:</p>
                                <p class="card_content-full">{{ $blog->impact }}</p>
                                <div>
                                    @foreach($blog->sdgs as $sdg)
                                        <p class="card_title">SDG:</p>
                                        <p class="card_content-full blogSDG">{{ $sdg->name }}</p>
                                    @endforeach
                                </div>
                                <div class="blog_container">
                                    <p class="card_title">Activity:</p>
                                    <p class="card_content-half activity">{{ $blog->activity->name }}</p>
                                </div>
                                <div class="blog_container">
                                    <p class="card_title">Research Group:</p>
                                    <p class="card_content-half researchGroup">{{ $blog->research_group->name ?? 'empty' }}</p>
                                </div>
                                <br>
                                <div class="blog_container">
                                    <p class="card_title">Program:</p>
                                    <p class="card_content-half program">{{ $blog->program->name ?? 'empty' }}</p>
                                </div>
                                <div class="blog_container">
                                    <p class="card_title">Business Operation:</p>
                                    <p class="card_content-half businessOperation">{{ $blog->business_operation->name ?? 'empty' }}</p>
                                </div>
                                <div class="blog_container">
                                    @foreach($blog->sub_sdgs as $sub_sdg)
                                        <p class="card_title">SDG:</p>
                                        <p>{{ $sub_sdg->name }}</p>
                                    @endforeach
                                </div>
                                <div class="blog_container-bottom">
                                    <p class="blog_footer"><b>Publisher:</b> {{ $blog->contact_name }} </p>
                                    <p class="blog_footer"><b>Updated at:</b> {{ $blog->updated_at }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No blogs to show at the moment.</p>
        @endforelse
    </div>
@endsection
