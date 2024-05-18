
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Comment</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto p-6">
    <h1 class="text-4xl font-bold mb-6">Edit Comment</h1>
    <form action="update_comment" method="POST" class="bg-white p-6 rounded shadow">
      <input type="hidden" name="id" value="1">
      <div class="mb-4">
        <label class="block text-gray-700">Comment</label>
        <textarea name="content" class="w-full px-4 py-2 border rounded" required>Existing Comment Content</textarea>
      </div>
      <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update</button>
    </form>
  </div>
</body>
</html>
