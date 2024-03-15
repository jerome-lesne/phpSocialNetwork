<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>The Social Network</h1>
        <section>
            <h2>Posts time line</h2>
            <?php foreach (Post::getAllPosts() as $post) { ?>
            <div class="postContainer">
                <h3><?= $post["title"]?></h3>
                <p><?= $post["message"]?></p>
                <p>Author : <?= $post["firstName"]?> <?= $post["name"]?></p>
            </div>
            <?php } ?>
        </section>
        <section>
            <h2>Post a Message</h2>
            <form method="post">
                <div>
                    <div>
                        <label for="title">Post Title</label>
                        <input type="textarea" name="title" id="title" value="" />
                    </div>
                    <div>
                        <label for="content">Post</label>
                        <textarea id="content" name="content" rows="5" cols="33"></textarea>
                    </div>
                </div>
                <div>
                    <input type="submit" name="submit" value="submit" />
                </div>
            </form>
        </section>

    </body>
</html>
