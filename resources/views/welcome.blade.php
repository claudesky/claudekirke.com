@extends('layouts.main')

@section('content')

    <h1 class="text-8xl font-serif font-thin tracking-wider text-center mt-24">
        Claude Kirke
    </h1>
    <section class="container p-24 space-y-6">
        <p class="text-xl font-mono">
            Hi there! It's great to have you as a visitor here.
        </p>
        <p class="text-xl font-mono">
            I'm excited for you to see it, but this website is still under construction. Please check back again in a few days, or send me an email at
            <a class="border-b" href="mailto:claudekirke@gmail.com">claudekirke@gmail.com</a>.
        </p>
        <p class="text-xl font-mono">
            Thank you!
        </p>
        <div class="flex justify-around mx-96 py-16">
            <img
                src="/img/undraw_under_construction_46pa.svg"
                alt="under construction"
                title="Under construction! Check back again in a few days.">
        </div>
    </section>

@endsection
