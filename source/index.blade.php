@extends('_layouts.master')

@section('body')
<section class="container max-w-2xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8 w-1/3">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <div class="flex my-10">
                <a href="/docs/introduction" title="{{ $page->siteName }} getting started" class="bg-blue hover:bg-blue-dark font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="https://github.com/laravel-zero/laravel-zero" title="Source Code" class="bg-grey-light hover:bg-grey-dark text-blue-darkest font-normal hover:text-white rounded py-2 px-6">Source Code</a>
            </div>
        </div>

        <div class="mx-auto mb-6 lg:mb-0 w-2/3">
            <img src="/assets/img/logo-large.png" alt="{{ $page->siteName }} large logo">
        </div>
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="flex flex-col -mx-2 items-center justify-center md:items-start md:flex-row md:-mx-4 md:justify-between">
        <div class="flex flex-col w-full mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-stack.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-darkest mb-0">Highly modular <br>Framework design</h3>

            <p>Laravel Zero is a lightweight and modular micro-framework for developing fast and powerful console applications. Built on top of the Laravel components.</p>
        </div>

        <div class="flex flex-col w-full mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-terminal.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-darkest mb-0">Write powerful<br>Console applications</h3>

            <p>Laravel Zero has a simple and powerful syntax that enables developers to build very complex applications far more quickly than with any previous framework.</p>
        </div>

        <div class="flex flex-col w-full mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-window.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-mix" class="text-2xl text-blue-darkest mb-0">For Artisans<br>100% Open Source</h3>

            <p>You’re free to dig through the source to see exactly how it works. See something that needs to be improved? Just send us a pull request on GitHub.</p>
        </div>
    </div>
</section>
@endsection
