<?php

namespace RecipeScraperTests\Scrapers;

use RecipeScraperTests\ScraperTestCase;
use RecipeScraper\Scrapers\GeneralMills;

/**
 * @group gm
 * @group scraper
 */
class WwwPillsburyComTest extends ScraperTestCase
{
    protected function getHost()
    {
        return 'www.pillsbury.com';
    }

    protected function makeScraper()
    {
        return new GeneralMills;
    }
}
