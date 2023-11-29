<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Home</title>
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
        article {
            margin-bottom: 20px;
        }
        h1, h2 {
            color: #333;
        }
        p {
            color: #555;
        }
    </style>
</head>
<body>
    <header>
        <h1>My Blog</h1>
    </header>
    <section id="blog-list"></section>

    <script>
        // Sample blog data
        var blogData = [
            { title: 'First Blog Post', content: 'This is the content of the first blog post.' },
            { title: 'Second Blog Post', content: 'This is the content of the second blog post.' },
            { title: 'Third Blog Post', content: 'This is the content of the third blog post.' },
            { title: 'Fourth Blog Post', content: 'This is the content of the fourth blog post.' },
            { title: 'Fifth Blog Post', content: 'This is the content of the fifth blog post.' },
            // Add more blog posts as needed
            // ...
            { title: 'Ninety-Sixth Blog Post', content: 'This is the content of the ninety-sixth blog post.' },
            { title: 'Ninety-Seventh Blog Post', content: 'This is the content of the ninety-seventh blog post.' },
            { title: 'Ninety-Eighth Blog Post', content: 'This is the content of the ninety-eighth blog post.' },
            { title: 'Ninety-Ninth Blog Post', content: 'This is the content of the ninety-ninth blog post.' },
            { title: 'Hundredth Blog Post', content: 'This is the content of the hundredth blog post.' }
        ];

        // Display blog posts on the home page
        var blogList = document.getElementById('blog-list');
        blogData.forEach(function(post) {
            var article = document.createElement('article');
            var heading = document.createElement('h2');
            var paragraph = document.createElement('p');

            heading.textContent = post.title;
            paragraph.textContent = post.content;

            article.appendChild(heading);
            article.appendChild(paragraph);
            blogList.appendChild(article);
        });
    </script>
</body>
</html>
