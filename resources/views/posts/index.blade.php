<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog System</title>
        <link
            href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
    <body class="bg-gray-100">
        <div class="container mx-auto p-6">
            <h1 class="text-4xl font-bold mb-6">Blog Posts</h1>
            <a href="create_post.html"
                class="bg-blue-500 text-white py-2 px-4 rounded">Create New
                Post</a>
            <div class="mt-6">
                <!-- Loop through posts from your backend and render them here -->
                <!-- Example post -->
                <div class="bg-white p-4 rounded shadow mb-4 flex">
                    <img src="path_to_your_photo.jpg" alt="Post Photo"
                        class="w-20 h-20 object-cover rounded mr-4">
                    <div>
                        <h2 class="text-2xl font-semibold">Post Title</h2>
                        <p>Post content...</p>
                        <div class="mt-2">
                            <a href="edit_post.html?id=1"
                                class="text-yellow-500"><i
                                    class="fas fa-edit"></i> Edit</a>
                            <a href="delete_post.html?id=1"
                                class="text-red-500 ml-2"><i
                                    class="fas fa-trash-alt"></i> Delete</a>
                            <a href="view_post.html?id=1"
                                class="text-blue-500 ml-2"><i
                                    class="fas fa-eye"></i> View</a>
                        </div>
                    </div>
                </div>
                <!-- End of post example -->
            </div>
        </div>
    </body>
</html>
