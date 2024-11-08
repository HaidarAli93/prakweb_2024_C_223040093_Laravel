<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\SearchService;

class SearchTest extends TestCase
{
    private $searchService;

    protected function setUp(): void {
        $this->searchService = new SearchService();
    }

    public function testSearch() {
        $results = $this->searchService->search('an');
        $this->assertCount(2, $results);
        $this->assertContains('Haidar Ali', $results);
    }
}
