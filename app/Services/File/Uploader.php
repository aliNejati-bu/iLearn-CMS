<?php

namespace App\Services\File;

use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class Uploader
{
    private $mimetypes = [
        'image' => ['image/jpeg', 'image/png'],
        'video' => ['video/mp4', 'video/mkv'],
        'archive' => ['application/zip'],
    ];

    public function __construct(private $file = null) {}

    public function upload(User $user, string $name, bool $isPrivate)
    {
        $path = $this->store($isPrivate);
        $file = $this->save($user, $path, $name, $isPrivate);

        return $file;
    }

    public function remove(File $file)
    {
        if ($file->is_private) {
            return Storage::disk('local')->delete($file->path);
        }

        return Storage::disk('public')->delete($file->path);
    }

    private function getType()
    {
        $fileMimetype = $this->file->getMimeType();

        foreach ($this->mimetypes as $type => $mimetypes) {
            foreach ($mimetypes as $mimetype) {
                if ($mimetype == $fileMimetype) {
                    return $type;
                }
            }
        }
    }

    private function store(bool $isPrivate)
    {
        $type = $this->getType();

        if ($isPrivate) {
            return Storage::disk('local')->putFile($type, $this->file);
        }

        return Storage::disk('public')->putFile($type, $this->file);
    }

    private function save(User $user, string $path, string $name, bool $isPrivate)
    {
        return $user->files()->create([
            'name' => $name,
            'path' => $path,
            'size' => $this->file->getSize(),
            'type' => $this->getType(),
            'is_private' => $isPrivate,
        ]);
    }
}
