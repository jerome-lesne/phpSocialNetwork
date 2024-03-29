<?php

abstract class PostRipository extends Db
{
    private static function request($request)
    {
        $result = self::getInstance()->query($request);
        return $result;
    }
    public static function insertIntoDb($post)
    {
        return self::request("INSERT INTO posts(title, message, user_id) VALUES('". $post->getTitle() ."', '". $post->getContent() ."', '". $post->getAuthor() ."')");
    }
    public static function getAllPosts()
    {
        return self::request("SELECT p.*, u.firstName, u.name FROM posts p LEFT JOIN users u ON p.user_id = u.id")->fetchAll(PDO::FETCH_ASSOC);

    }
    public static function deletePost($id)
    {
        return self::request("DELETE FROM posts WHERE id='$id'");
    }
    public static function updatePost($id, $title, $content)
    {
        return self::request("UPDATE posts SET title = '$title', message = '$content' WHERE id = '$id'");
    }

}
