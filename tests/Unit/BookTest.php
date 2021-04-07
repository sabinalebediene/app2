<?php

namespace Tests\Unit;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class BookTest extends TestCase
{
    use RefreshDatabase;
    
    /**
     * A basic unit test example.
     * @return void
     */
    public function test_book_can_be_created_with_isbn_and_title_only() {

        // given
        $bookData = ['isbn' => 9780840700551, 'title' => 'Holy Bible' ];

        // when
        // firstOrCreate eis i duomenu baze, prades ieskoti objekto, kuris turi isbn, title. Jei ras - grazins.
        Book::firstOrCreate($bookData);

        // then
        $books = Book::all();
        $this->assertEquals(1, $books->count());
        $this->assertInstanceOf('\Illuminate\Database\Eloquent\Collection', $books);

    }
}
