<?php

use App\Http\Controllers\{AboutController, VolumeController, SliderController, ProfileController, AdminController, ManuscriptController, HomeController, ArticleController, ArticleTemplateController, DesignationController, EditorController, GuidelineController, PaperCallController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [AboutController::class, 'contact'])->name('contact');
Route::get('/call-for-paper', [PaperCallController::class, 'index'])->name('paper');
Route::get('/article-template', [ArticleTemplateController::class, 'index'])->name('article.template');
Route::get('/guideline', [GuidelineController::class, 'index'])->name('guideline');
Route::get('/editor-board', [EditorController::class, 'index'])->name('editor');
Route::get('articles', [ArticleController::class, 'articles'])->name('articles');
Route::get('/like/{like}', [ArticleController::class, 'like'])->name('like');


Route::group(['middleware' => ['auth']], function () {
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::prefix('manuscript')->group(function () {
        Route::get('/', [ManuscriptController::class, 'manuscript'])->name('manuscript');
        Route::post('/store', [ManuscriptController::class, 'store'])->name('store.manuscript');
        Route::get('/edit/{manuscript}', [ManuscriptController::class, 'edit'])->name('edit.manuscript');
        Route::get('/update/{manuscript}', [ManuscriptController::class, 'update'])->name('update.manuscript');
        Route::get('/delete/{manuscript}', [ManuscriptController::class, 'delete'])->name('delete.manuscript');
    });

    Route::group(['middleware' => ['is_admin']], function () {

        Route::prefix('admin')->group(function () {

            Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

            Route::prefix('slider')->group(function () {
                Route::get('/', [SliderController::class, 'slider'])->name('admin.slider');
                Route::post('/store', [SliderController::class, 'store'])->name('admin.store.slider');
                Route::get('/delete/{slider}', [SliderController::class, 'delete'])->name('admin.delete.slider');
                Route::get('/edit/{slider}', [SliderController::class, 'edit'])->name('admin.edit.slider');
                Route::post('/update/slider-image/{slider}', [SliderController::class, 'updateSliderImage'])->name('admin.update.slider.image');
                Route::post('/update/{slider}', [SliderController::class, 'update'])->name('admin.update.slider');
            });

            Route::prefix('about')->group(function () {
                Route::get('/', [AboutController::class, 'about'])->name('admin.about');
                Route::post('/store', [AboutController::class, 'store'])->name('admin.store.about');
                Route::post('/update/image', [AboutController::class, 'updateAboutImage'])->name('admin.update.about.image');
                Route::post('/update', [AboutController::class, 'update'])->name('admin.update.about');
            });

            Route::prefix('paper')->group(function () {
                Route::get('/', [PaperCallController::class, 'paper'])->name('admin.paper');
                Route::post('/update', [PaperCallController::class, 'update'])->name('admin.update.paper');
            });

            Route::prefix('guideline')->group(function () {
                Route::get('/', [GuidelineController::class, 'create'])->name('admin.guideline');
                Route::post('/update', [GuidelineController::class, 'update'])->name('admin.update.guideline');
            });


            Route::prefix('volume')->group(function () {
                Route::get('/', [VolumeController::class, 'volume'])->name('admin.volume');
                Route::post('/store', [VolumeController::class, 'store'])->name('admin.store.volume');
                Route::post('/update/image/{volume}', [VolumeController::class, 'updateImage'])->name('admin.update.volume.image');
                Route::post('/update/{volume}', [VolumeController::class, 'update'])->name('admin.update.volume');
                Route::get('/edit/{volume}', [VolumeController::class, 'edit'])->name('admin.edit.volume');
                Route::get('/status/{volume}', [VolumeController::class, 'status'])->name('admin.status.volume');
            });

            Route::prefix('article-template')->group(function () {
                Route::get('/', [ArticleTemplateController::class, 'create'])->name('admin.article.template');
                Route::post('/store', [ArticleTemplateController::class, 'update'])->name('admin.update.article.template');
            });

            Route::prefix('designation')->group(function () {
                Route::get('/', [DesignationController::class, 'designation'])->name('admin.designation');
                Route::post('/store', [DesignationController::class, 'store'])->name('admin.store.designation');
                Route::get('/edit/{designation}', [DesignationController::class, 'edit'])->name('admin.edit.designation');
                Route::post('/update/{designation}', [DesignationController::class, 'update'])->name('admin.update.designation');
                Route::get('/delete/{designation}', [DesignationController::class, 'delete'])->name('admin.delete.designation');
            });

            Route::prefix('editor')->group(function () {
                Route::get('/', [EditorController::class, 'editor'])->name('admin.editor');
                Route::post('/store', [EditorController::class, 'store'])->name('admin.store.editor');
                Route::get('/edit/{editor}', [EditorController::class, 'edit'])->name('admin.edit.editor');
                Route::get('/publish/{editor}', [EditorController::class, 'publish'])->name('admin.publish.editor');
                Route::post('/update/image/{editor}', [EditorController::class, 'updateImage'])->name('admin.update.editor.image');
                Route::post('/update/{editor}', [EditorController::class, 'update'])->name('admin.update.editor');
                Route::get('/delete/{editor}', [EditorController::class, 'delete'])->name('admin.delete.editor');
            });

            Route::prefix('article')->group(function () {
                Route::get('/', [ArticleController::class, 'article'])->name('admin.article');
                Route::post('/store', [ArticleController::class, 'store'])->name('admin.store.article');
                Route::get('/edit/{article}', [ArticleController::class, 'edit'])->name('admin.edit.article');
                Route::get('/publish/{article}', [ArticleController::class, 'publish'])->name('admin.publish.article');
                Route::post('/update/file/{article}', [ArticleController::class, 'updateFile'])->name('admin.update.article.file');
                Route::post('/update/{article}', [ArticleController::class, 'update'])->name('admin.update.article');
                Route::get('/delete/{article}', [ArticleController::class, 'delete'])->name('admin.delete.article');
                Route::post('/s-as-article/{article}', [ArticleController::class, 'saveArticle'])->name('admin.save.as.article');
            });

            Route::prefix('manuscript')->group(function () {
                Route::get('/', [ManuscriptController::class, 'create'])->name('admin.create.manuscript');
                Route::get('/show', [ManuscriptController::class, 'show'])->name('admin.show.manuscript');
                Route::post('/store', [ManuscriptController::class, 'store'])->name('admin.store.manuscript');
                Route::get('/details/{manuscript}', [ManuscriptController::class, 'details'])->name('admin.details.manuscript');
                Route::post('/publish/{manuscript}', [ManuscriptController::class, 'publish'])->name('admin.publish.manuscript');
                Route::get('/edit/{manuscript}', [ManuscriptController::class, 'edit'])->name('admin.edit.manuscript');
                Route::post('/update/{manuscript}', [ManuscriptController::class, 'update'])->name('admin.update.manuscript');
                Route::get('/delete/{manuscript}', [ManuscriptController::class, 'delete'])->name('admin.delete.manuscript');
            });
        });
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
