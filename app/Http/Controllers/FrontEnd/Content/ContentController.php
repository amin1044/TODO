<?php

namespace App\Http\Controllers\FrontEnd\Content;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Modules\Contents\Entities\Category;
use Modules\Contents\Entities\Tag;
use Modules\Contents\Entities\Content;


class ContentController extends Controller
{
    public function index()
    {

        $last_news = Content::where('status', 1)->where('published_at', '<', Carbon::now()->addMinute(210)->format('Y-m-d H:i:s'))->orderby('id', 'DESC')->take(5)->get();
        $contents = Content::where('status', 1)->where('published_at', '<', Carbon::now()->addMinute(210)->format('Y-m-d H:i:s'))->orderby('id', 'DESC')->paginate(3);
        return view('FrontEnd.Content.list', compact('contents',  'last_news'));
    }

    public function show($id)
    {
        $content = Content::findOrFail($id);
        if (url()->previous() != url()->current()) {
            $content->update([
                'visit' => ($content->visit + 1)
            ]);
        }
        $cat = $content->Concategories()->first();
        $related = $cat->Contents()->where('status', 1)->orderby('id', 'DESC')->take(3)->get();
        $last_news = Content::where('status', 1)->orderby('id', 'DESC')->take(5)->get();
        return view('FrontEnd.Content.show', compact('content', 'related', 'last_news'));
    }

    public function tag_list($id, $slug)
    {
        $last_news = Content::where('status', 1)->where('published_at', '<', Carbon::now()->addMinute(210)->format('Y-m-d H:i:s'))->orderby('id', 'DESC')->take(5)->get();
        $tag = Contag::where('id', $id)->first();
        $contents = $tag->Contents()->where('status', 1)->where('published_at', '<', Carbon::now()->addMinute(210)->format('Y-m-d H:i:s'))->orderby('id', 'DESC')->paginate(3);
        return view('FrontEnd.Content.tag-list', compact('tag', 'contents', 'last_news'));
    }
}
