<div class="justify-content-center space-y-4 text-center py-10">
    <h1 class="text-gray-800 font-bold text-4xl">{{ $pageTitle }}</h1>
    <p class="text-gray-600">User Count: {{ count($users) }}</p>
    <button wire:click="addNewUser" type="button" class="px-4 py-3 text-sm text-white bg-blue-500 rounded-lg cursor-pointer ring-0 ring-offset-2 hover:bg-blue-600 hover:ring-2 hover:ring-blue-400 active:bg-blue-700">Add New User</button>

    <div class="mt-6 grid grid-cols-4 gap-5 px-20">
        @foreach($users as $user)
            <div class="px-2 py-2.5 bg-gray-100 rounded-lg">
                <p class="text-gray-800 line-clamp-1 pe-3   ">{{ $user->name }}</p>
            </div>
        @endforeach
    </div>
</div>
