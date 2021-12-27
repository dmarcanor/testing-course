<?php

declare(strict_types=1);

namespace Tests\Daniel\Library\Infrastructure\Persistence;

use Medine\Daniel\Library\Domain\Book;
use Medine\Daniel\Library\Infrastructure\InMemoryBookRepository;
use PHPUnit\Framework\TestCase;

final class BookRepositoryTest extends TestCase
{
    private $repository;
    
    protected function setUp(): void
    {
        $this->repository = new InMemoryBookRepository();
        parent::setUp(); // TODO: Change the autogenerated stub
    }

    /**
     * @test
     */
    public function itShouldCreateAValidBook(): void
    {
        $book = new Book(
            'db4799af-3712-4235-853c-967a451bd7b9',
            'El principito',
            'Antoine de Saint-Exupéry',
            1943
        );

        $this->assertNull($this->repository->create($book));
    }

    /**
     * @test
     */
    public function itShouldFindAnExistingBook(): void
    {
        $id = 'db4799af-3712-4235-853c-967a451bd7b9';

        $book = new Book(
            $id,
            'El principito',
            'Antoine de Saint-Exupéry',
            1943
        );

        $this->repository->create($book);

        $this->assertEquals($book, $this->repository->find($id));
    }
}
