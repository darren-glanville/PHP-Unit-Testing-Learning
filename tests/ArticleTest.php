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

    /*
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

    public function testSlugHasNotExtraStuff()
    {
        $this->article->title = " Title with!";

        $this->assertEquals($this->article->getSlug(), "Title_with");
    }*/

    public function titleProvider()
    {
        return [
            'Slug Has Spaces Replaced By Underscores'
            => ["An example article", "An_example_article"],
            'Slug Has Whitespace Replaced By Single Underscore'
            => ["An    example    \n    article", "An_example_article"],
            'Slug Does Not Start Or End With An Underscore'
            => [" An example article ", "An_example_article"],
            'Slug Does Not Have Any Non Word Characters'
            => ["Read! This! Now!", "Read_This_Now"]
        ];
    }

    /**
     * @dataProvider titleProvider
     */
    public function testSlug(string $title, string $slug)
    {
        $this->article->title = $title;

        $this->assertEquals($this->article->getSlug(), $slug);
    }
}
