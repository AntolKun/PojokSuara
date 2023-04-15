<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminCreatePostController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminTagController;
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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/dashboard", function () {
    return view("dashboard");
})
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::get("/post", function () {
    return view("post");
})
    ->middleware(["auth", "verified"])
    ->name("post");
Route::post("/admin/postsStore", [AdminCreatePostController::class, "store"]);
Route::delete("/admin/postsDelete/{id}", [
    AdminPostController::class,
    "destroy",
]);
Route::get("/create-posts", [AdminCreatePostController::class, "index"]);

Route::get("/kategori", [AdminKategoriController::class, "index"]);
Route::delete("kategoriDelete/{id}", [
    AdminKategoriController::class,
    "destroy",
]);
Route::post("/postsKategori", [AdminKategoriController::class, "store"]);

Route::get("/tag", [AdminTagController::class, "index"]);
Route::delete("/tagDelete/{id}", [AdminTagController::class, "destroy"]);
Route::post("/postsTag", [AdminTagController::class, "store"]);

Route::get('/carousel', [AdminCarouselController::class, 'index']);
Route::delete('/carouselDelete/{id}', [AdminCarouselController::class, 'destroy']);
Route::post('/postsCarousel', [AdminCarouselController::class, 'store']);

Route::get("/manage-user", [AdminUserController::class, "index"])->name(
    "manageUser"
);
Route::post("/postsUser", [AdminUserController::class, "store"]);
Route::delete("/userDelete/{id}", [AdminUserController::class, "destroy"]);

Route::get("actionLogout", [ProfileController::class, "actionLogout"])
    ->name("actionLogout")
    ->middleware("auth");

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );
});

require __DIR__ . "/auth.php";
