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
    <!-- Card -->
    <div class="w-full shadow-lg rounded-lg text-white mb-5" style="background: #17B169;">
        <div class="px-6 py-5">
            <div class="flex items-start gap-3">
                <!-- Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8">
                    <path d="M12.378 1.602a.75.75 0 0 0-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03ZM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 0 0 .372-.648V7.93ZM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 0 0 .372.648l8.628 5.033Z" />
                </svg>


                <!-- Card content -->
                <div class="flex-grow truncate">
                    <!-- Card header -->
                    <div class="w-full sm:flex justify-between items-center md:items-start mb-3">
                        <!-- Title -->
                        <h2 class="text-2xl font-extrabold text-gray-50 truncate mb-2 md:mb-1">2024 Amatech LASU SRC Election</h2>
                        <!-- Voters and Candidates Count -->
                        <div class="hidden flex-shrink-0 md:flex items-center space-x-3 sm:ml-2 gap-3">

                            <div class="text-center text-sm font-medium text-indigo-100 hover:text-white group focus:outline-none focus-visible:border-b focus-visible:border-indigo-100">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                    </svg>

                                    <span class="text-xl">500+</span>
                                </div>
                                <span>Accredited Voters</span>
                            </div>

                            <div class="text-center text-sm font-medium text-indigo-100 hover:text-white group focus:outline-none focus-visible:border-b focus-visible:border-indigo-100">
                                <div class="flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 1 1 7.5 0 3.75 3.75 0 0 1-7.5 0ZM15.75 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM2.25 9.75a3 3 0 1 1 6 0 3 3 0 0 1-6 0ZM6.31 15.117A6.745 6.745 0 0 1 12 12a6.745 6.745 0 0 1 6.709 7.498.75.75 0 0 1-.372.568A12.696 12.696 0 0 1 12 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 0 1-.372-.568 6.787 6.787 0 0 1 1.019-4.38Z" clip-rule="evenodd" />
                                        <path d="M5.082 14.254a8.287 8.287 0 0 0-1.308 5.135 9.687 9.687 0 0 1-1.764-.44l-.115-.04a.563.563 0 0 1-.373-.487l-.01-.121a3.75 3.75 0 0 1 3.57-4.047ZM20.226 19.389a8.287 8.287 0 0 0-1.308-5.135 3.75 3.75 0 0 1 3.57 4.047l-.01.121a.563.563 0 0 1-.373.486l-.115.04c-.567.2-1.156.349-1.764.441Z" />
                                    </svg>

                                    <span class="text-xl">{{ $candidates_count}}</span>
                                </div>
                                <span>Candidates</span>
                            </div>
                        </div>
                    </div>
                    <!-- Card body -->
                    <div class="flex items-end justify-between whitespace-normal">
                        <!-- Paragraph -->
                        <div class="max-w-md text-indigo-100">
                            <p class="mb-2">The 2024 Amatech LASU Students Representatives (SRC) Election is your chance to elect leaders who will amplify your concerns and bring positive changeS to our community.</p>
                        </div>

                        <div class="flex flex-col" style=" margin-right: .5em; line-height: 40px;">
                            <!-- <span>Countdown Timer:</span> -->
                            <span class="" style="font-size: 3.5em;">08<span class="text-xl">m</span> : 16<span class="text-lg">s</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- INFO CARD END  -->


    <!-- ELECTION POSITION CARD  -->

    @foreach($positions as $position)
    <div class="rounded-lg" style="padding: 1em; background: #e9e9e9; margin-bottom: 10px;">
        <div class="flex items-center justify-between md:mx-3 mb-4" style="color: #414141;">
            <h2 class="text-3xl font-semibold">{{ $position->name}} Position:</h2>
            <span class="text-right md:text-left">{{ $position->candidate_count}} interested candidates</span>
        </div>

        <div class="grid grid-container gap-3">
            @foreach($candidates->where('position_id', $position->id) as $candidate)
                <!-- Card start -->
                <div class="max-w-smmx-auto bg-white dark:bg-gray-900 rounded-xl overflow-hidden shadow-lg">
                    <div class="border-b px-4 pb-6">
                        <div class="text-center my-4">
                            <img class="h-32 w-32 rounded-full border-4 border-white dark:border-gray-800 mx-auto my-4"
                                src="{{asset('images/avatarmale.webp')}}" alt="">
                            <div class="py-2">
                                <h3 class="font-bold text-2xl text-gray-800 dark:text-white mb-1 capitalize">{{ $candidate->name }}</h3>
                                <div class="inline-flex text-gray-700 dark:text-gray-200 items-center">
                                    <span class="text-sm text-gray-600 dark:text-gray-200">Position vying for: </span>
                                    {{ $candidate->position->name}}
                                </div>
                                <br>
                                <div class="inline-flex text-gray-700 dark:text-gray-200 items-center">
                                    <span class="text-sm text-gray-600 dark:text-gray-200">Level: </span>
                                    {{ $candidate->level}}
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2 px-2">
                            <button
                                class="flex-1 rounded-full bg-blue-600 dark:bg-blue-800 text-white dark:text-white antialiased font-bold hover:bg-green-800 dark:hover:bg-blue-900 px-4 py-2" style="background: #17B169;">
                                Vote Candidate
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            @endforeach
        </div>
    </div>
    @endforeach
</section>
