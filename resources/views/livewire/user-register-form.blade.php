<div class="w-1/3 mx-auto space-y-4 text-center py-10">
    <div class="px-6 lg:px-8 flex flex-col items-center justify-center">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create New User</h2>
        </div>

        <div class="mt-4 sm:mx-auto sm:w-full sm:max-w-sm">
            {{-- notifikasi berhasil --}}
            @if (session()->has('message'))
                <div id="success-notification" class="relative w-full items-center max-w-7xl ">
                    <div class="px-3 py-4 border-l-4 border-green-500 rounded-r-lg bg-green-100/60">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <div class="text-sm text-green-600">
                                    <p>{{ session('message') }} 😍</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            {{-- prevent untuk mencegah fungsi submit bawaan, karena akan menggunakan milik livewire --}}
            <form wire:submit.prevent="createNewUser" action="#" method="POST" id="createUserForm"
                class="space-y-6 mt-4">
                <div>
                    <label for="name" class="block text-sm/6 font-medium text-gray-900 text-left">Name</label>
                    <div class="mt-2">
                        <input wire:model="name" id="name" type="text" name="name" autocomplete="name"
                            class="block w-full rounded-md bg-white px-3 py-2.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('name')
                            <p class="mt-2 text-red-600 dark:text-red-500 text-xs text-left">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- email input --}}
                <div>
                    <div class="flex items-center justify-between">
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email
                            Address</label>
                    </div>
                    <div class="mt-2">
                        <input wire:model="email" id="email" type="email" name="email" autocomplete="email"
                            class="block w-full rounded-md bg-white px-3 py-2.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('email')
                            <p class="mt-2 text-red-600 dark:text-red-500 text-xs text-left">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- password input --}}
                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                    </div>
                    <div class="mt-2">
                        <input wire:model="password" id="password" type="password" name="password"
                            class="block w-full rounded-md bg-white px-3 py-2.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
                        @error('password')
                            <p class="mt-2 text-red-600 dark:text-red-500 text-xs text-left">{{ $message }}</p>
                        @enderror
                    </div>
                </div>


                {{-- avatar input --}}
                <div class="col-span-full">
                    <label for="profile-picture" class="block text-sm/6 font-medium text-gray-900 text-left">Profile
                        picture</label>


                    <div class="mt-2 flex justify-center rounded-xl border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                            <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true"
                                class="mx-auto size-12 text-gray-300">
                                <path
                                    d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                    clip-rule="evenodd" fill-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm/6 text-gray-600">
                                <label for="avatar"
                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 hover:underline hover:underline-offset-2 hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input wire:model="avatar" id="avatar" type="file" name="avatar"
                                        class="sr-only" accept="image/png, imaege/jpeg, image/jpg" />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs/5 text-gray-600">PNG, JPG, JPEG up to 5MB</p>
                        </div>
                    </div>
                    @error('avatar')
                        <p class="mt-2 text-red-600 dark:text-red-500 text-xs text-left">{{ $message }}</p>
                    @enderror
                    {{-- preciew avatar --}}
                    @if ($avatar)
                        <p class="block text-sm font-medium text-gray-900 text-left mt-2">Preview</p>
                        {{-- menggunakan temporaryUrl() milik livewire --}}
                        <img src="{{ $avatar->temporaryUrl() }}" alt="Avatar Preview"
                            class="w-24 h-24 rounded-lg object-cover mt-2 border border-gray-900/20">
                    @endif
                </div>

                {{-- tombool submit --}}
                <div>
                    <button
                        class="flex w-full justify-center rounded-lg bg-indigo-600 px-3 py-3 text-sm/6 font-semibold text-white shadow-xs  transition-all duration-150 cursor-pointer hover:shadow-md hover:shadow-indigo-200 hover:bg-indigo-500 hover:border hover:border-white hover:-translate-y-0.5 active:bg-indigo-600 active:translate-y-0.5 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        wire:target="createUserForm" wire:loading.attr="disabled"
                        wire:loading.class="opacity-50 cursor-loading hover:translate-y-0 hover:shadow-none"
                        wire:loading.remove.class="opacity-100 cursor-pointer">
                        <span wire:loading.remove wire:target="createUserForm">Create new user</span>
                        <span wire:loading wire:target="createUserForm">
                            <span class="loading loading-spinner loading-sm mr-1"></span>
                            Saving...
                        </span>
                    </button>
                </div>
            </form>

        </div>
    </div>
</div>
