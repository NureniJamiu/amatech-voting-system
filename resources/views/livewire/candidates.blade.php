<section>
    <div wire:ignore>
        <style>
            @media (min-width: 768px) {
                .grid-container {
                    display: grid;
                    grid-template-columns: repeat(2, minmax(0, 1fr));
                    gap: 1rem;
                }
            }
        </style>
    </div>

    <div class="grid grid-container gap-3">
        @foreach($candidates as $candidate)
        <!-- Card start -->
            <div class="max-w-sm bg-white dark:bg-gray-900 rounded-xl overflow-hidden shadow-lg">
                <div class="border-b px-4 pb-6">
                    <div class="text-center my-4">
                        <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                            src="{{asset('images/avatarmale.webp')}}" alt="">
                        <div class="py-2">
                            <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1 capitalize">{{ $candidate->name}}</h3>
                            <div class="inline-flex text-gray-700 dark:text-gray-200 items-center">
                                <span class="text-sm text-gray-600 dark:text-gray-200">Position vying for: </span>
                                {{ $candidate->position->name}}
                            </div>
                            <br>
                            <div class="inline-flex text-gray-700 dark:text-gray-200 items-center">
                                <span class="text-sm text-gray-600 dark:text-gray-200">Level: </span>
                                {{ $candidate->level }}
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-2 px-2">
                        <button
                            class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-green-800 dark:hover:bg-blue-900 px-4 py-2" style="background: #17B169;">
                            View full profile
                        </button>
                    </div>
                </div>
            </div>
        <!-- Card end -->
        @endforeach
    </div>
</section>
