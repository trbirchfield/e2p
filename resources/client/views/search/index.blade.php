@extends('client::layouts.default')

@section('content')
    <section class="page-content">
        <div class="row">
            <div class="column small-8 small-centered">
                @if (!empty($list))
                    <p class="search-results-lead">Showing {{ count($list) }} results for <span>"{{ $_GET['search'] }}"</span></p>
                    @foreach($list as $item)
                        <article class="content-box small search-result">
                            <span class="search-result-section-num">Section {{ $item['section'] }}</span>
                            <h3 class="search-result-title"><a href="#">{{ $item['title'] }}</a></h3>
                            <p class="search-result-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In enim metus, cursus eleifend <span class="search-highlight">test</span> magna eget, ultricies consectetur augue. Pellentesque interdum sem augue, at faucibus nibh accumsan ac. In hac habitasse <span class="search-highlight">test</span> platea dictumst. Ut sit amet arcu ac urna accumsan <span class="search-highlight">test</span> finibus. Cras ac vulputate lectus&hellip;</p>
                        </article>
                    @endforeach
                @else
                    <article class="content-box text-center search-no-results">
                        @if (!empty($_GET['search']))
                            <h3 class="text-center">No results for <span>"{{ $_GET['search'] }}"</span></h3>
                            <p class="lead">Oops! It looks like your search returned no results.<br />Please try a different search term.</p>
                        @else
                            <h3 class="text-center">Please enter a search term</h3>
                            <p class="lead">Oops! It looks like you didn't enter a search query.<br />Please enter some keywords to search for.</p>
                        @endif
                        <div class="row">
                            <div class="columns small-12 small-centered">
                                <form id="search-form" name="search_form" class="search-form" method="get" action="{{ route('search') }}">
                                    <input type="search" name="search" class="search-input" placeholder="Search the Site" />
                                    <button class="search-submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </article>
                @endif
            </div>
        </div>
    </section>
@endsection
