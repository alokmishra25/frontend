<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Blog Post</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }
        section {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2, p {
            color: #333;
        }
        .comments {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
        .related-posts {
            margin-top: 30px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <section id="blog-post">
        <h2>First Blog Post</h2>
        <p>This is the content of the first blog post.</p>
    </section>

    <section class="comments">
        <h2>Comments</h2>
        <p>No comments yet. Be the first to comment!</p>
    </section>

    <section class="related-posts">
        <h2>Related Posts</h2>
        <p>No related posts found.</p>
    </section>

    <script>
        // Sample blog post data
        var post = { title: 'First Blog Post', content: 'This is the content of the first blog post.' };

        // Display the single blog post
        var blogPost = document.getElementById('blog-post');
        var heading = document.createElement('h2');
        var paragraph = document.createElement('p');

        heading.textContent = post.title;
        paragraph.textContent = post.content;

        blogPost.appendChild(heading);
        blogPost.appendChild(paragraph);
    </script>
</body>
</html>
