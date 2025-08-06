<div class="container max-w-5xl justify-content-center space-y-4 text-center py-10">


    <div class="px-6 lg:px-8 flex-col items-center justify-center">

        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create new user</h2>
        </div>

        {{-- notifikasi berhasil by flyonui --}}
        {{-- ! tidak digunakan dulu, sekarang menggunakan notif dari package notyf --}}
        {{-- @if (session()->has('status'))
            <div class="alert alert-success flex justify-content-center items-center gap-2 w-fit text-sm" role="alert">
                <span class="icon-[tabler--circle-check] shrink-0 size-5"></span>
                console.warn("🚀 ~ role:", role)
                <p>
                    <span class="font-semibold">Success alert:</span> {{ session('status') }}
                </p>
            </div>
        @endif --}}

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- menambahkan .prevenet agar mencegah submit / fungsi submit bawaan, agar yang bekerja hanya livewire --}}
            <form wire:submit.prevent="createNewUser" action="#" method="POST" id="createUserForm" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900 text-left">Name</label>
                    <div class="mt-2">
                        <input wire:model="name" id="name" type="text" name="name" autocomplete="name"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('name')
                            <p class="mt-2 text-red-600 dark:text-red-500 text-xs text-left">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Email Address</label>
                    </div>
                    <div class="mt-2">
                        <input wire:model="email" id="email" type="email" name="email" autocomplete="email"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('email')
                            <p class="mt-2 text-red-600 dark:text-red-500 text-xs text-left">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input wire:model="password" id="password" type="password" name="password" value=""
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('password')
                            <p class="mt-2 text-red-600 dark:text-red-500 text-xs text-left">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <button
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm/6 font-semibold text-white shadow-xs cursor-pointer hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        wire:loading.attr="disabled" wire:loading.class="opacity-50 cursor-loading"
                        wire:loading.remove.class="opacity-100 cursor-pointer">
                        <span wire:loading.remove>Create user</span>
                        <span wire:loading>Saving...</span>
                    </button>
                </div>
            </form>

        </div>
    </div>


    <div class="mt-20 grid grid-cols-5 grid-rows-2 gap-x-4 gap-y-6">
        @foreach ($users as $user)
            <div
                class="px-4 py-3 bg-gradient-to-br from-slate-100 to-blue-50 rounded-lg flex items-center gap-2 transition-all duration-100 cursor-default group hover:ring-2 hover:ring-blue-400 hover:from-blue-100/80 hover:to-blue-100/80">
                <span
                    class="w-1.5 h-1.5 rounded-full bg-gray-500 transition-all duration-150 group-hover:bg-blue-500"></span>
                <p class="text-sm text-gray-800 group-hover:text-blue-600 line-clamp-1 hyphens-auto text-left">{{ $user->name }}</p>
            </div>
        @endforeach
    </div>
</div>
