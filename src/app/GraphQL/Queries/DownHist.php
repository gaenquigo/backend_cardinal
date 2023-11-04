<?php

namespace App\GraphQL\Queries;
use Illuminate\Support\Facades\Storage;
use GraphQL\Type\Definition\ResolveInfo;

class DownHist
{
    /**
     * Upload a file, store it on the server and return the path.
     *
     * @param  mixed  $root
     * @param  array<string, mixed>  $args
     * @return string|null
     */
    public function resolve($rootValue, array $args, $context, ResolveInfo $resolveInfo): string
    {
        //var_dump($args);
        /** @var \Illuminate\Http\UploadedFile $file */
        return Storage::disk('s3')->temporaryUrl(
            $args['file'],
            now()->addMinutes(5),
            ['ResponseContentDisposition' => 'attachment']
        );

    }
}