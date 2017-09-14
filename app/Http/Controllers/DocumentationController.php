<?php

namespace App\Http\Controllers;

use App\Models\DocumentationPage;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DocumentationController extends Controller
{
    public function index()
    {
        return view('documentation.index');
    }

    public function page(string $segments)
    {
        $page = DocumentationPage::find($segments);

        if (!$page) {
            throw new NotFoundHttpException($segments);
        }

        if (empty($page->title)) {
            $page->title = last(explode('/', $segments));
        }

        return view('layouts.documentation', compact('page'));
    }
}