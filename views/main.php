<!DOCTYPE html>
<html lang="en">
    <head>
        <title>The Social Network</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./assets/css/mainStyle.css" rel="stylesheet">
    </head>
    <body>
        <h1>The Social Network</h1>
        <form method="POST" id="userInfo">
            <p>Hello <span><?php
                echo User::getUserById($_SESSION["currentUser"])["firstName"]. " " .
            User::getUserById($_SESSION["currentUser"])["name"];
            ?></span></p>
            <button type="submit" name="disconnect">Disconnect</button>
        </form>
        <section id="postsfeed">
            <h2>Posts time line</h2>
            <form action="/" method="post">
                <?php
            foreach (Post::getAllPosts() as $post) {
                if (isset($_POST["update"])) {
                    if($_POST["update"] == $post["id"]) {
                        ?>
                            <div class="updatePost">
                    <h3>UPDATE POST : <span><?=$post["title"]?></span></h3>
                                <div>
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" id="title" value="" />
                                </div>
                                <div>
                                    <label for="content">Post</label>
                                    <textarea id="content" name="content" rows="5" cols="33"></textarea>
                                </div>
                                <div>
                                    <button type="submit" name="submitUpdate" value="<?= $post['id']?>" >Apply</button>
                                    <button type="submit" name="cancel">Cancel</button>
                                </div>
                            </div>
                    <?php
                        continue;
                    }
                }
                ?>
                <div class="postContainer">
                    <h3><?= $post["title"]?></h3>
                    <p><?= $post["message"]?></p>
                    <p>Author : <?= $post["firstName"]?> <?= $post["name"]?></p>
                    <div>
                <?php
                    if ($_SESSION["currentUser"] == $post["user_id"]) {
                        ?>
                        <button type="submit" name="update" value="<?= $post['id']?>">Update</button>
                        <button type="submit" name="delete" value="<?= $post['id']?>">Delete</button>
                <?php } ?>
                    </div>
                </div>
                <?php

            }
            ?>
            </form>
        </section>
        <section id="messagePost">
            <h2>Post a Message</h2>
            <form method="post">
                <div id="postInputs">
                    <div id="postTitleInput">
                        <label for="title">Post Title</label>
                        <input type="text" name="title" id="title" value="" />
                    </div>
                    <div id="contentInput">
                        <label for="content">Post</label>
                        <textarea id="content" name="content" rows="5" cols="33"></textarea>
                    </div>
                </div>
                <div id="subBtnContainer">
                    <input type="submit" name="submit" value="submit" />
                </div>
            </form>
        </section>

    </body>
</html>
