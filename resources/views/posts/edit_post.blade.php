<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6">Edit Post</h1>
        <form action="update_post" method="POST" class="bg-white p-6 rounded shadow">
            <input type="hidden" name="id" value="1">
            <div class="mb-4">
                <label class="block text-gray-700">Title</label>
                <input type="text" name="title" class="w-full px-4 py-2 border rounded" value="Existing Post Title"
                    required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Content</label>
                <textarea name="content" class="w-full px-4 py-2 border rounded" required>Existing Post Content</textarea>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Photo</label>
                <input type="file" class="w-full px-4 py-2 border rounded" name="" id="">
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
