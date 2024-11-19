<footer class="fixed bottom-0 left-0 w-full flex justify-center py-2 bg-white border-t border-gray-100">
    <div class="flex space-x-4">
        @foreach (config('app.supported_locales') as $locale => $data)
            <a href="{{ route('locale', $locale) }}">
                <x-dynamic-component :component="'flag-country-' . $data['icon']" class="w-6 h-6" />
            </a>
        @endforeach
    </div>
</footer>
 