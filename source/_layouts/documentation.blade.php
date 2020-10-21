@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
<section class="container mx-auto py-4">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.menu', ['items' => $page->navigation])
        </nav>

        <div class="w-full lg:w-3/5 break-words pb-8 md:pb-16 lg:pl-4 prose max-w-none" v-pre>
            @yield('content')
        </div>
    </div>
</section>
@endsection
