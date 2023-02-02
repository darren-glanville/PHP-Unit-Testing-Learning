<?php

class Article
{
    public $title;

    public function getSlug()
    {
        $slug = preg_replace('/\s+/', "_", trim($this->title));

        return $slug;
    }
}
