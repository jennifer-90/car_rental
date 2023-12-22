<!-- menu-->

@if (Route::has('login'))

    <div class="menu">

        <a href="{{ route('welcome') }}" class="font-semibold text-gray-600 hover:text-gray-900
            dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm
            focus:outline-red-500">Accueil</a>


        <a href="{{ route('cars.index') }}" class="font-semibold text-gray-600 hover:text-gray-900
            dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cars</a>

        @auth
            <a href="{{ url('/dashboard') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>

        @else
            <a href="{{ route('login') }}"
               class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                                                                                                                                                                     in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    </div>
@endif
