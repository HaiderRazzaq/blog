
    <x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6">Blog Posts</h1>
        <a href="create_post.html" class="bg-blue-500 text-white py-2 px-4 rounded">Create New
            Post</a>
        <div class="mt-6">
            <!-- Loop through posts from your backend and render them here -->
            <!-- Example post -->
            <div class="bg-white p-4 rounded shadow mb-4 flex">
                <img src="path_to_your_photo.jpg" alt="Post Photo" class="w-20 h-20 object-cover rounded mr-4">
                <div>
                    <h2 class="text-2xl font-semibold">Post Title</h2>
                    <p>Post content...</p>
                    <div class="mt-2">
                        <a href="edit_post.html?id=1" class="text-yellow-500"><i class="fas fa-edit"></i> Edit</a>
                        <a href="delete_post.html?id=1" class="text-red-500 ml-2"><i class="fas fa-trash-alt"></i>
                            Delete</a>
                        <a href="view_post.html?id=1" class="text-blue-500 ml-2"><i class="fas fa-eye"></i> View</a>
                    </div>
                    <hr>
                    <p class='text-sm text-gray-500'>Commented by User on 2023-01-01</p>

                </div>
            </div>
            <!-- End of post example -->
        </div>
    </div>
</x-app-layout>
