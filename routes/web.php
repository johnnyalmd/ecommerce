<?php

use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\ExportandImportController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoUserController;
use App\Http\Controllers\ManageContentController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PricesAndSizesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\ShoppingCartController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function () {
    Route::get('billing', function () {
        return view('billing');
    })->name('billing');
    Route::get('rtl', function () {
        return view('rtl');
    })->name('rtl');

    Route::get('user-management', function () {
        return view('laravel-examples/user-management');
    })->name('user-management');

    Route::get('tables', function () {
        return view('tables');
    })->name('tables');

    Route::get('virtual-reality', function () {
        return view('virtual-reality');
    })->name('virtual-reality');

    Route::get('static-sign-in', function () {
        return view('static-sign-in');
    })->name('sign-in');

    Route::get('static-sign-up', function () {
        return view('static-sign-up');
    })->name('sign-up');

    Route::get('/logout', [SessionsController::class, 'destroy']);

    Route::post('/user-profile', [InfoUserController::class, 'store']);
    Route::get('/usuarios', [InfoUserController::class, 'show'])->name('users');
    Route::post('/criarUsuario', [InfoUserController::class, 'criarUsuario']);
    Route::get('/adicionarUsuario', [InfoUserController::class, 'viewCreateUser'])->name('create.users');
    Route::get('/login', function () {
        return view('dashboard');
    })->name('sign-up');
    //adm products
    Route::get('/todosProdutos', [ProductController::class, 'index'])->name('todosProdutos');
    Route::get('/dashboard', [ProductController::class, 'dashboard'])->name('dashboard');
    Route::post('/criarProduto/cadastro', [ProductController::class, 'store'])->name('storeProduct');
    Route::get('/administrarProduto/{id}', [ProductController::class, 'show'])->name('administrarProduto');
    Route::put('/atualizarProduto/{id}', [ProductController::class, 'update'])->name('atualizarProduto');
    Route::get('/cadastrar-produto', [ProductController::class, 'create'])->name('cadastrar-produto');
    Route::get('/todos-cupons', [ProductController::class, 'allCupomView'])->name('todos-cupons');
    Route::get('/cadastrar-cupom', [ProductController::class, 'createCupomView'])->name('cadastrar-cupom');
    Route::post('/cadastrar-cupons', [ProductController::class, 'createCupom'])->name('cadastrar-cupons');
    //Newsletter
    Route::get('/todas-newsletter', [NewsletterController::class, 'allNewsletter'])->name('todas-newsletter');
    Route::post('/store-newsletter', [NewsletterController::class, 'storeNewsletter'])->name('store-newsletter');
    Route::get('/criar-newsletter', [NewsletterController::class, 'createNewsletter'])->name('criar-newsletter');
    Route::post('/enviar-newsletter/{id}', [NewsletterController::class, 'sendNewsLetter'])->name('enviar-newsletter');
    Route::post('/adicionar-cliente-newsletter', [NewsletterController::class, 'addMailClient'])->name('adicionar-cliente-newsletter');
    Route::delete('/deletar-newsletter/{id}', [NewsletterController::class, 'destroy'])->name('newsletter-destroy');

    Route::put('/atualizar-preco-e-tamanho-produto/{id}', [PricesAndSizesController::class, 'update'])->name('atualizar-preco-e-tamanho-produto');
    Route::get('/atualizar-preco-e-tamanho/{id}', [PricesAndSizesController::class, 'getUpdate'])->name('atualizar-preco-e-tamanho');
    Route::delete('/deletar-produto/{id}', [PricesAndSizesController::class, 'destroy'])->name('produtos.destroy');
    Route::get('/precos-e-tamanhos', [PricesAndSizesController::class, 'index'])->name('precos-e-tamanhos');
    Route::get('/criar-precos-e-tamanhos', [PricesAndSizesController::class, 'getStore'])->name('criar-precos-e-tamanhos');
    Route::post('/store-preco-e-tamanhos', [PricesAndSizesController::class, 'store'])->name('store-preco-e-tamanhos');
    //administrar conteudos do site
    Route::get('/alterar-imagens-do-carousel', [ManageContentController::class, 'imagesCarousel'])->name('alterar-imagens-do-carousel');
    Route::post('/alterar-carousel', [ManageContentController::class, 'updateImagesCarousel'])->name('alterar-carousel');
    Route::get('/alterar-imagens-do-carousel-colecoes', [ManageContentController::class, 'imagesCarouselCollection'])->name('alterar-imagens-do-carousel-colecoes');
    Route::post('/alterar-carousel-colecoes', [ManageContentController::class, 'updateImagesCarouselCollections'])->name('alterar-carousel-colecoes');
    Route::get('/administrar-conteudo', [ManageContentController::class, 'index'])->name('administrar-conteudo');
    //export e import
    Route::get('export',  [ExportandImportController::class, 'export'])->name('export');
    Route::post('import',  [ExportandImportController::class, 'import'])->name('import');

    //Carrinho de compras
    Route::put('/atualizarEndereco', [ShoppingCartController::class, 'updateAddress'])->name('atualizarEndereco');
    Route::post('/adicionar-ao-carrinho',  [ShoppingCartController::class, 'createProductInCart'])->name('adicionar-ao-carrinho');
    Route::get('/carrinho',  [ShoppingCartController::class, 'cartView'])->name('carrinho');
    Route::delete('/excluir-item-do-carrinho',  [ShoppingCartController::class, 'destroy'])->name('excluir-item-do-carrinho');
    Route::post('/aplicar-cupom', [ShoppingCartController::class, 'applyCupon'])->name('aplicar-cupom');
    Route::get('/carrinho',  [ShoppingCartController::class, 'cartView'])->name('carrinho');
    //Favoritos
    Route::delete('/excluir-item-do-favorito',  [FavoriteController::class, 'destroy'])->name('excluir-item-do-favorito');
    Route::get('/favoritos',  [FavoriteController::class, 'favoriteView'])->name('favoritos');
    Route::post('/adicionar-aos-favoritos',  [FavoriteController::class, 'createFavoriteProduct'])->name('adicionar-aos-favoritos');
    Route::get('/search-products', [ProductController::class, 'search'])->name('searchProducts');
    //informações do usuario
    Route::get('/informacoes-do-usuario',  [InfoUserController::class, 'viewAuthUser'])->name('informacoes-do-usuario');
});
//pagina do cliente
Route::get('/home',  [ProductController::class, 'homePage'])->name('homePage');
Route::get('/categoria/mais-vendidos',  [ProductController::class, 'categoryBestSeller'])->name('categoryBestSeller');
Route::get('/categoria/lancamentos',  [ProductController::class, 'categoryLaunch'])->name('categoryLaunch');
Route::get('/categoria/destaques',  [ProductController::class, 'categoryHighlight'])->name('categoryHighlight');
Route::get('/calcular-frete',  [ShoppingCartController::class, 'calculateFrete'])->name('calcular-frete');
Route::get('/calcular-frete-produto', [ProductController::class, 'calculateFrete']);
Route::get('/produto/{id}',  [ProductController::class, 'showProductClient'])->name('showProductClient');
Route::get('/categoria/luminaria',  [ProductController::class, 'categoryLighting'])->name('categoryLighting');
Route::get('/categoria/mosaico',  [ProductController::class, 'categoryMosaic'])->name('categoryMosaic');
Route::get('/categoria/quadro',  [ProductController::class, 'categoryFrame'])->name('categoryFrame');
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register-user', [RegisterController::class, 'store'])->name('register-user');
Route::get('/login', [SessionsController::class, 'create']);
Route::post('/session', [SessionsController::class, 'store'])->name('login.store');

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login/forgot-password', [ResetController::class, 'create']);
    Route::post('/forgot-password', [ResetController::class, 'sendEmail']);
    Route::get('/reset-password/{token}', [ResetController::class, 'resetPass'])->name('password.reset');
    Route::post('/reset-password', [ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/login', function () {
    return view('clientViews/login-session');
})->name('login');

Route::get('/', function () {
    return view('clientViews/login-session');
});
