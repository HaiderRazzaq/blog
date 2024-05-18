<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Post</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto p-6">
    <div class='bg-white p-6 rounded shadow mb-6'>
      <!-- Post Photo -->
      <img src="path_to_your_photo.jpg" alt="Post Photo" class="w-full h-64 object-cover rounded-t mb-6">
      <h1 class='text-4xl font-bold'>Post Title</h1>
      <p class='mt-4'>Post content...</p>
      <a href='index.html' class='text-blue-500 mt-4 block'><i class='fas fa-arrow-left'></i> Back to Posts</a>
    </div>
    <div class="bg-white p-6 rounded shadow">
      <h2 class="text-2xl font-semibold mb-4">Comments</h2>
      <form action="store_comment" method="POST" class="mb-6">
        <input type="hidden" name="post_id" value="1">
        <div class="mb-4">
          <label class="block text-gray-700">Comment</label>
          <textarea name="content" class="w-full px-4 py-2 border rounded" required></textarea>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Add Comment</button>
      </form>
      <!-- Loop through comments from your backend and render them here -->
      <!-- Example comment -->
      <div class='border-t pt-4'>
        <div class="bg-gray-50 p-4 rounded mb-4">
          <p>Comment content...</p>
          <p class='text-sm text-gray-500'>Commented by User on 2023-01-01</p>
          <div class="mt-2">
            <a href='edit_comment.html?id=1' class='text-yellow-500'><i class='fas fa-edit'></i> Edit</a>
            <a href='delete_comment.html?id=1' class='text-red-500 ml-2'><i class='fas fa-trash-alt'></i> Delete</a>
          </div>
        </div>
      </div>
      <!-- End of comment example -->
    </div>
  </div>
</body>
</html>
