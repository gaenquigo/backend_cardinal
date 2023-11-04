<?php

namespace App\GraphQL\Mutations;
use Illuminate\Support\Facades\Storage;

class Upload
{
    /**
     * Upload a file, store it on the server and return the path.
     *
     * @param  mixed  $root
     * @param  array<string, mixed>  $args
     * @return string|null
     */
    public function __invoke($root, array $args): ?string
    {
        /** @var \Illuminate\Http\UploadedFile $file */
        return Storage::disk('s3')->put('resolutionsPAIS', $args['file']);

    }
}
