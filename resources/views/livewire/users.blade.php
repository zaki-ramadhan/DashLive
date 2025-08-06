<div class="container max-w-5xl justify-content-center space-y-4 text-center py-10">
    <div class="px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create new user</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- menambahkan .prevenet agar mencegah submit / fungsi submit bawaan, agar yang bekerja hanya livewire --}}
            <form wire:submit.prevent="createNewUser" action="#" method="POST" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900 text-left">Name</label>
                    <div class="mt-2">
                        <input wire:model="name" id="name" type="text" name="name" autocomplete="name"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Email Address</label>
                    </div>
                    <div class="mt-2">
                        <input wire:model="email" id="email" type="email" name="email" autocomplete="email"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input wire:model="password" id="password" type="password" name="password" autocomplete="current-password"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                    </div>
                </div>

                <div>
                    <button
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs cursor-pointer hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create
                        user</button>
                </div>
            </form>

        </div>
    </div>


    <div class="mt-20 grid grid-cols-5 grid-rows-2 gap-x-4 gap-y-6">
        @foreach ($users as $user)
            <div
                class="px-4 py-3 bg-gradient-to-br from-slate-100 to-blue-50 rounded-lg flex items-center gap-2 transition-all duration-100 cursor-default group hover:ring-2 hover:ring-blue-400 hover:bg-blue-100">
                <span
                    class="w-1.5 h-1.5 rounded-full bg-gray-500 transition-all duration-150 group-hover:bg-blue-500"></span>
                <p class="text-sm text-gray-800 line-clamp-1 pe-3 text-left">{{ $user->name }}</p>
            </div>
        @endforeach
    </div>
</div>
