<div class="w-1/2 mx-auto py-10 pe-10">
    <h2 class="mt-10 mb-6 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Users List</h2>

    {{-- search input --}}
    <form wire:submit="search" class="my-3 max-w-md mx-auto">
        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            
            {{-- .live untuk live searching --}}
            <input wire:model.live="searchQuery" type="search" id="search"
                class="block w-full p-4 pl-10 pr-28 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Search User(s)..." autocomplete="off" />
            <button type="submit"
                class="absolute right-2.5 bottom-1/2 translate-y-1/2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Search
            </button>
        </div>
    </form>

    <ul role="list" class="divide-y divide-gray-100">
        @foreach ($users as $user)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <img src="{{ $user->avatar ?? asset('img/default-avatar.jpeg') }}" alt="user-avatar"
                        class="size-12 flex-none rounded-full bg-gray-50" />
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm/6 font-semibold text-gray-900">{{ $user->name }}</p>
                        <p class="mt-1 truncate text-xs/5 text-gray-500">{{ $user->email }}</p>
                    </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end self-center">
                    <p class="mt-1 text-xs/5 text-gray-500">Joined {{ $user->created_at->diffForHumans() }}</time>
                    </p>
                </div>
            </li>
        @endforeach
    </ul>

    {{-- pagination --}}
    {{ $users->links() }}
</div>
