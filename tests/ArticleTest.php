<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new Article();
    }

    public function testTitleIsEmptyByDefault()
    {

        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {

        $this->assertSame($this->article->getSlug(), "");
    }

    public function testSlugHasSpacesReplacedByUnderscores()
    {
        $this->article->title = "Title with spaces";

        $this->assertEquals($this->article->getSlug(), "Title_with_spaces");
    }

    public function testSlugHasWhitespaceReplacedBySingleUnderscores()
    {
        $this->article->title = "      Title with    \n spaces ";

        $this->assertEquals($this->article->getSlug(), "Title_with_spaces");
    }
}
