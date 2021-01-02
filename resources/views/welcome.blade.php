@extends('layouts.main')

@section('content')

    <h1 class="px-2 text-4xl md:text-6xl lg:text-8xl font-serif font-thin tracking-wider text-center mt-24">
        Claude Kirke
    </h1>
    <section class="container py-24 p-6 md:p-12 lg:p-24 space-y-6">
        <p class="lg:text-xl font-mono">
            Hi there! It's great to have you as a visitor here.
        </p>
        <p class="lg:text-xl font-mono">
            I'm excited for you to see it, but this website is still under construction. Please check back again in a few days, or send me an email at
            <a class="border-b" href="mailto:claudekirke@gmail.com">claudekirke@gmail.com</a>.
        </p>
        <p class="lg:text-xl font-mono">
            Thank you!
        </p>
        <div class="flex justify-around mx-12 lg:mx-24 xl:mx-48 2xl:mx-96 py-16">
            <img
                src="/img/undraw_under_construction_46pa.svg"
                alt="under construction"
                title="Under construction! Check back again in a few days.">
        </div>
    </section>

@endsection
