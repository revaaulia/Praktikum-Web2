@include('frontend.layout.top')
<main>
    <div class="container px-5 pb-5">
        <div class="row gx-5 align-items-center">
            @yield('content')
        </div>
    </div>
<main>
@yield('about')
@include('frontend.layout.bottom')
