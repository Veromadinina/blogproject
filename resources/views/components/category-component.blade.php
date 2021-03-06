<div class="px-8 mt-10">
    <h1 class="mb-4 text-xl font-bold text-gray-700">Categories</h1>
    <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md">
            @forelse ($categories as $category)
            <ul>
                <li><a href="{{route('posts.category',['id'=>$category->id])}}" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline">-
                       {{ $category->name }}</a></li>
            
            </ul> 
            @empty
                
            @endforelse
        
    </div>
</div>