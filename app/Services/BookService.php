<?php

namespace App\Services;

use App\Models\Book;
use App\Repositories\BookRepository;
use App\Traits\CommonServiceElements;
use Illuminate\Support\Facades\Storage;

class BookService
{
    use CommonServiceElements;

    private BookRepository $repo;

    /**
     * @param BookRepository $repo
     */
    public function __construct(BookRepository $repo)
    {
        $this->repo = $repo;
    }

    public function store(array $validated)
    {
        if (isset($validated['cover_image'])) {
            $validated['cover_image'] = $validated['cover_image']->store(BOOK_IMAGE_PATH);
        }

        if (isset($validated['file'])) {
            $validated['file'] = $validated['file']->store(BOOK_IMAGE_PATH);
        }

        if (isset($validated['editor_id'])) {
            $editors = $validated['editor_id'];
            unset($validated['editor_id']);
        }

        /** @var Book $book */
        $book = $this->repo->store($validated);

        if (isset($editors))
            $book->editors()->sync($editors);
    }

    public function update(Book $book, array $validated)
    {
        if (isset($validated['cover_image'])) {
            $validated['cover_image'] = $validated['cover_image']->store(BOOK_IMAGE_PATH);
            if ($book->cover_image) unlink(Storage::path($book->cover_image));
        }

        if (isset($validated['file'])) {
            $validated['file'] = $validated['file']->store(BOOK_IMAGE_PATH);
            if ($book->file) unlink(Storage::path($book->file));
        }

        $editors = $validated['editor_id'];
        unset($validated['editor_id']);

        /** @var Book $book */
        $book = $this->repo->update($book, $validated);

        $book->editors()->sync($editors);
    }

    public function destroy(Book $book)
    {
        if ($book->cover_image) unlink(Storage::path($book->cover_image));
        if ($book->file) unlink(Storage::path($book->file));

        $book->delete();
    }
}
