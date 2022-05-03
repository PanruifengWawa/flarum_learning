<?php

namespace PRF\ListTags;

use Flarum\Api\Controller\AbstractListController;
use Psr\Http\Message\ServerRequestInterface as Request;
use Tobscure\JsonApi\Document;
use Flarum\Tags\Tag;
use Flarum\Tags\Api\Serializer\TagSerializer;

class ListTagsController extends AbstractListController
{
    public $serializer = TagSerializer::class;

    protected function data(Request $request, Document $document)
    {
        return Tag::all();
    }
}