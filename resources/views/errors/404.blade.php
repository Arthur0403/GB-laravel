@extends('../templates/main')

@section('title', 'AZ News | 404')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="trending-tittle">
                <strong>Page not found</strong>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                <div class="trending-animated">
                    <ul id="js-news" class="js-hidden">
                        <li class="news-item">Please, return to <a href="/">home page</a>...</li>
                        <li class="news-item">Or <a href="/categories">categories</a></li>
                        <li class="news-item">Or doing something else</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
