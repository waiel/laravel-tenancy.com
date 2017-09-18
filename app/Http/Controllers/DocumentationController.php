<?php

namespace App\Http\Controllers;

use Exception;
use Storage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Spatie\YamlFrontMatter\YamlFrontMatter as Parser;
use App\Markdown\Converter;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('documentation.index');
    }

    public function page(string $slug)
    {
        return view('layouts.documentation')
            ->with($this->properties($slug));
    }

    /**
     * @param string $slug
     * @return array
     */
    private function properties(string $slug) : array
    {
        try {
            $content = Storage::disk('documentation')->get("$slug.md");
        } catch (Exception $e) {
            throw new NotFoundHttpException($slug);
        }

        $document = (new Parser())->parse($content);
        $properties = $document->matter();

        if (!$document->title) {
            $properties['title'] = $this->title($slug);
        }

        $properties['slug'] = $slug;
        $properties['path'] = request()->path();
        $properties['content'] = Converter::convert($document->body());
        return $properties;
    }

    private function title(string $slug): string
    {
        return ucfirst(collect(explode('/', $slug))->last());
    }
}