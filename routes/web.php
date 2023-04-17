<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminCreatePostController;
use App\Http\Controllers\AdminKategoriController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminCarouselController;
use App\Http\Controllers\HomeController;
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

Route::get("/", [HomeController::class, "index"])->name("home");

// Route::get("/dashboard", function () {
//     return view("dashboard");
// })
//     ->middleware(["auth", "verified"])
//     ->name("dashboard");

Route::get("/dashboard", [AdminDashboardController::class, "index"])
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::get("/post", [AdminPostController::class, "index"])
    ->middleware(["auth"])
    ->name("post");

Route::delete("/admin/postsDelete/{id}", [
    AdminPostController::class,
    "destroy",
])
    ->middleware(["auth"])
    ->name("postDelete");

Route::get("/create-posts", [AdminCreatePostController::class, "index"])
    ->middleware(["auth"])
    ->name("create-post");

Route::post("/admin/postsStore", [AdminCreatePostController::class, "store"])
    ->middleware(["auth"])
    ->name("postStore");

Route::get("/kategori", [AdminKategoriController::class, "index"])
    ->middleware(["auth"])
    ->name("kategori");

Route::delete("kategoriDelete/{id}", [
    AdminKategoriController::class,
    "destroy",
])
    ->middleware(["auth"])
    ->name("kategoriDelete");

Route::post("/postsKategori", [AdminKategoriController::class, "store"])
    ->middleware(["auth"])
    ->name("postKategori");

Route::get("/tag", [AdminTagController::class, "index"])
    ->middleware(["auth"])
    ->name("tag");

Route::delete("/tagDelete/{id}", [AdminTagController::class, "destroy"])
    ->middleware(["auth"])
    ->name("tagDelete");

Route::post("/postsTag", [AdminTagController::class, "store"])
    ->middleware(["auth"])
    ->name("postTag");

Route::get("/carousel", [AdminCarouselController::class, "index"])
    ->middleware(["auth"])
    ->name("carousel");

Route::delete("/carouselDelete/{id}", [
    AdminCarouselController::class,
    "destroy",
])
    ->middleware(["auth"])
    ->name("carouselDelete");

Route::post("/postsCarousel", [AdminCarouselController::class, "store"])
    ->middleware(["auth"])
    ->name("postCarousel");

Route::get("/manage-user", [AdminUserController::class, "index"])
    ->middleware(["auth"])
    ->name("manage-user");

Route::post("/postsUser", [AdminUserController::class, "store"])
    ->middleware(["auth"])
    ->name("postUser");

Route::delete("/userDelete/{id}", [AdminUserController::class, "destroy"])
    ->middleware(["auth"])
    ->name("UserDelete");

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
