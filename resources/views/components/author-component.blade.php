<div class="px-8">
    <h1 class="mb-4 text-xl font-bold text-gray-700">Authors</h1>
    <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md">
        <ul class="-mx-4">
        @forelse ($authors as $author)
        
            <li class="flex items-center"><img
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                    alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                <p><a href="{{route('posts.author',['id'=>$author->id])}}" class="mx-1 font-bold text-gray-700 hover:underline">{{$author->name}}</a><span
                        class="text-sm font-light text-gray-700">Created 23 Posts</span></p>
            </li>  
        @empty
            <h5>no authors</h5>
        @endforelse
        
            
        </ul>
    </div>
</div>