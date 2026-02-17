<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
/*
    <div class="relative ml-3">
        <a href="/apply" :active="request()->is('apply')">
            <button>
                    <img
                    src="https://static.vecteezy.com/system/resources/thumbnails/016/331/152/small/apply-now-button-web-banner-templates-illustration-vector.jpg"
                    alt="Profile"
                    class="size-20"
                    />
            </button>
        </a>
    </div>
*/
</x-layout>