<x-app-layout title="Home Page">
    @section('hero')
        <div class="w-full py-40 text-center flex flex-col items-center">
            <h1 class="text-2xl font-bold text-center text-gray-700 md:text-3xl lg:text-5xl">
                {{ __('home.hero.title') }} <span class="text-blue-500">MedBlog</span> <span class="text-gray-900">
                </span>
            </h1>
            <p class="mt-1 text-lg text-gray-500">A Comprehensive Healthcare Information Platform</p>
            <a class="inline-block px-3 py-2 mt-5 text-lg text-white bg-gray-800 rounded" href="{{ route('posts.index') }}">
                {{ __('home.hero.cta') }}</a>
        </div>
    @endsection
</x-app-layout>
