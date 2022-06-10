@extends('layouts.main')

@section('content')

<h1 class="px-2 text-xl lg:text-4xl font-serif font-thin tracking-wider text-center mt-24">
    Working on it!
</h1>
<section class="container py-12 lg:py-24 p-6 md:p-12 lg:p-24 space-y-6">
    <p class="lg:text-xl font-mono">
        This part of the website is still baking in the computer oven!
    </p>
    <p class="lg:text-xl font-mono">
        Check back again in a few days, or send me an email at
        <a class="border-b" href="mailto:claudekirke@gmail.com">claudekirke@gmail.com</a>.
    </p>
    <div class="flex justify-around mx-12 lg:mx-24 xl:mx-48 2xl:mx-96 py-16">
        <img
            src="/img/undraw_working_on_it.svg"
            alt="working on it"
            title="Working on it! Check back again in a few days.">
    </div>
</section>

@endsection
