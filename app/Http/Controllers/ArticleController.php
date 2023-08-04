<?php

namespace App\Http\Controllers;

use App\Enums\ManuscriptStatus;
use App\Enums\PublishStatus;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use App\Models\ArticleLike;
use App\Models\Manuscript;
use App\Models\Volume;
use App\Traits\FileTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\type;

class ArticleController extends Controller
{
    use FileTrait;
    public function __construct(protected Article $article, protected Volume $volume)
    {
        //
    }
    public function article()
    {
        $articles =  $this->article->orderBy('id', 'desc')->get();
        return view('administration.pages.article', compact('articles'));
    }

    public function articles()
    {
        $volumes = Volume::get();
        $articles =  $this->article->get();
        return view('user.pages.articles', compact('volumes', 'articles'));
    }

    public function showArticle()
    {
        // show all article saved by users in admin table
        $article = $this->article->get();
        return view('administration.pages.article', compact('article'));
    }

    public function store(StoreArticleRequest $request)
    {
        $volume = $this->volume->latest('id')->first();
        // auth user store article
        if (auth()->user()) {
            $fileNameToStore = $this->fileUpload('file', 'storage/article/');
            $data = $this->article->create([
                'volume_id' => $volume->id,
                'title' => $request->title,
                'abstract' => $request->abstract,
                'file' => $fileNameToStore,
                'pages' => $request->pages,
                'author' => $request->author,
                'user_id' => auth()->user()->id
            ]);
            return redirect()->back()->with('message', 'Article added successfully');
        } else {
            abort('402');
        }
    }

    public function edit($article)
    {
        $articles =  $this->article->orderBy('id', 'desc')->get();

        $article = $this->article->find($article);
        return view('administration.pages.edit-article', compact('article', 'articles'));
    }

    public function update(UpdateArticleRequest $request, $article)
    {
        $this->article->find($article)->update($request->validated());
        return redirect()->back()->with('message', 'Successful');
    }

    public function updateFile($article)
    {
        $article = $this->article->find($article);
        $fileNameToStore = $this->fileUpload('file', 'storage/article/');
        Storage::delete('storage/article/' . $article->file);
        $article->file = $fileNameToStore;
        $article->save();
        return redirect()->back()->with('message', 'Successful');
    }

    public function like($articleId)
    {
        DB::transaction(function () use ($articleId) {
            $article = $this->article->find($articleId);
            if (!Session::get('guest_user')) {
                Session::put('guest_user', uniqid());
            }
            $userSession = Session::get('guest_user');

            $articleLike = ArticleLike::where('article_id', $articleId)->where('quest_user', $userSession)->first();

            if (!$articleLike) {
                Session::put('guest_user', uniqid());
                $userSession = Session::get('guest_user');
                ArticleLike::create(
                    [
                        'quest_user' => $userSession,
                        'article_id' => $articleId
                    ]
                );
                $article->popularity += 1;
                $article->save();
            }
        });
        return redirect()->back()->with('message', 'Successful');
    }

    public function publish($article)
    {
        $article = $this->article->find($article);
        if ($article->publish_status == 'pending') {
            $article->publish_status = PublishStatus::PUBLISHED;
            $article->publish_date = now();
            $article->save();
        } else {
            $article->publish_status = PublishStatus::PENDING;
            $article->save();
        }

        return redirect()->back()->with('message', 'Successful');
    }

    public function saveArticle(StoreArticleRequest $request, $article)
    {
        DB::transaction(function () use ($request, $article) {
            $manuscript = Manuscript::find($article);
            $manuscript->status = ManuscriptStatus::INACTIVE;
            $manuscript->save();

            $this->store($request);
        });
        return redirect()->back()->with('message', 'Successful');
    }


    public function adminCreateArticle()
    {
        return view('administration.pages.article', compact('article'));
    }

    public function delete($article)
    {
        $this->article->find($article)->delete();
        return redirect()->back()->with('message', 'Successful');
    }
}
