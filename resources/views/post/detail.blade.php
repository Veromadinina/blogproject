<div class="mt-6">
    <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
        <div class="flex items-center justify-between"><span class="font-light text-gray-600">{{ $description->created_at->format('d M Y') }}</span><a href="#"
                class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">{{ $description->category->name }}</a>
        </div>
        <div class="mt-2"><a href="#" class="text-2xl font-bold text-gray-700 hover:underline">{{ $description->title }}</a>
            <p class="mt-2 text-gray-600">{{ $description->content }}</p>
        </div>
         <div class="flex items-center justify-between mt-4">
            <div><a href="#" class="flex items-center"><img
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                    <h1 class="font-bold text-gray-700 hover:underline">{{ $description->user->name }}</h1>
                </a></div>
        </div> 
    </div>
</div> 