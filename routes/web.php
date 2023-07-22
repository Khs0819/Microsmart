<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CoursesUsersController;
use App\Http\Controllers\EfficiencyController;
use App\Http\Controllers\ItController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
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

Route::prefix('cms/')->middleware('guest:admin,author')->group(function () {
    Route::get('{guard}/login', [UserAuthController::class, 'showLogin'])->name('view.login');
    Route::post('{guard}/login', [UserAuthController::class, 'login']);
});

Route::prefix('cms/admin/')->middleware('auth:admin,author')->group(function () {
    Route::get('logout', [UserAuthController::class, 'logout'])->name('view.test');
});
Route::view('/login', 'cms.button_users')->name('button_users');

Route::prefix('/')->group(function () {
    Route::view('', 'website.arabic.homeArabic')->name('website.homeArabic');
    Route::view('businessSolutions-serv', 'website.arabic.businessSolutions-servArabic')->name('website.businessSolutions-servArabic');
    Route::view('businessSolutions', 'website.arabic.businessSolutionsArabic')->name('website.businessSolutionsArabic');
    Route::view('businessSolutionsIT', 'website.arabic.businessSolutionsITArabic')->name('website.businessSolutionsITArabic');
    Route::view('contact', 'website.arabic.contactAR')->name('website.contactAR');
    Route::view('design-serv', 'website.arabic.design-servArabic')->name('website.design-servArabic');
    Route::view('digitalTransformation-serv', 'website.arabic.digitalTransformation-servArabic')->name('website.digitalTransformation-servArabic');
    Route::view('form', 'website.arabic.formAr')->name('website.formAr');
    Route::view('graphicDesign', 'website.arabic.graphicDesignArabic')->name('website.graphicDesignArabic');
    Route::view('individuals', 'website.arabic.individualsArabic')->name('website.individualsArabic');
    Route::view('microsmart', 'website.arabic.microsmartArabic')->name('website.microsmartArabic');
    Route::view('MotionGraphic', 'website.arabic.MotionGraphicArabic')->name('website.MotionGraphicArabic');
    Route::view('networks-serv', 'website.arabic.networks-servArabic')->name('website.networks-servArabic');
    Route::view('networks', 'website.arabic.networksArabic')->name('website.networksArabic');
    Route::view('organizations', 'website.arabic.organizationsArabic')->name('website.organizationsArabic');
    Route::view('OrganizationTraining-serv', 'website.arabic.OrganizationTraining-servArabic')->name('website.OrganizationTraining-servArabic');
    Route::view('personnelTraining-serv', 'website.arabic.personnelTraining-servArabic')->name('website.personnelTraining-servArabic');
    Route::view('PhoneApplications', 'website.arabic.PhoneApplicationsArabic')->name('website.PhoneApplicationsArabic');
    Route::view('privacy', 'website.arabic.privacyAr')->name('website.privacyAr');
    Route::view('ProgrammingWebsites', 'website.arabic.ProgrammingWebsitesArabic')->name('website.ProgrammingWebsitesArabic');
    Route::view('Strategy', 'website.arabic.StrategyArabic')->name('website.StrategyArabic');
    Route::view('use', 'website.arabic.useAr')->name('website.useAr');
    Route::view('complete', 'website.arabic.complete')->name('website.complete');
});

Route::prefix('en/')->group(function () {
    Route::view('', 'website.english.homeEng')->name('website.homeEng');
    Route::view('businessSolutions-serv', 'website.english.businessSolutions-servEng')->name('website.businessSolutions-serv');
    Route::view('businessSolutions', 'website.english.businessSolutionsEng')->name('website.businessSolutions');
    Route::view('businessSolutionsIT', 'website.english.businessSolutionsITEng')->name('website.businessSolutionsIT');
    Route::view('contact', 'website.english.contact')->name('website.contact');
    Route::view('design-serv', 'website.english.design-servEng')->name('website.design-serv');
    Route::view('digitalTransformation-serv', 'website.english.digitalTransformation-servEng')->name('website.digitalTransformation-serv');
    Route::view('graphicDesign', 'website.english.graphicDesignEng')->name('website.graphicDesign');
    Route::view('individuals', 'website.english.individualsEng')->name('website.individuals');
    Route::view('microsmart', 'website.english.microsmartEng')->name('website.microsmart');
    Route::view('MotionGraphic', 'website.english.MotionGraphicEng')->name('website.MotionGraphic');
    Route::view('networks-serv', 'website.english.networks-servEng')->name('website.networks-serv');
    Route::view('networks', 'website.english.networksEng')->name('website.networks');
    Route::view('organizations', 'website.english.organizationsEng')->name('website.organizations');
    Route::view('OrganizationTraining-serv', 'website.english.OrganizationTraining-servEng')->name('website.OrganizationTraining-serv');
    Route::view('personnelTraining-serv', 'website.english.personnelTraining-servEng')->name('website.personnelTraining-serv');
    Route::view('PhoneApplications', 'website.english.PhoneApplicationsEng')->name('website.PhoneApplications');
    Route::view('privacy', 'website.english.privacyEng')->name('website.privacy');
    Route::view('ProgrammingWebsites', 'website.english.ProgrammingWebsitesEng')->name('website.ProgrammingWebsites');
    Route::view('Strategy', 'website.english.StrategyEng')->name('website.Strategy');
    Route::view('use', 'website.english.useEng')->name('website.use');
});

Route::prefix('dashboard/')->middleware('auth:admin,author')->group(function () {
    Route::view('', 'cms.parent')->name('cms.parent');
    Route::resource('programs', ProgramController::class);
    Route::post('update-programs/{id}', [ProgramController::class, 'update'])->name('update-programs');
    Route::resource('courses', CourseController::class);
    Route::post('update-courses/{id}', [CourseController::class, 'update'])->name('update-courses');
    Route::post('update-roles/{id}', [ProgramController::class, 'updates'])->name('update-roles');
    Route::resource('admins', AdminController::class);
    Route::post('update-admins/{id}', [AdminController::class, 'update'])->name('update-admins');
    Route::resource('authors', AuthorController::class);
    Route::post('update-authors/{id}', [AuthorController::class, 'update'])->name('update-authors');
    Route::resource('coursesUsers', CoursesUsersController::class);

    Route::resource('roles', RoleController::class);
    Route::post('update-roles/{id}', [RoleController::class, 'update'])->name('update-roles');
    Route::resource('permissions', PermissionController::class);
    Route::post('update-permissions/{id}', [PermissionController::class, 'update'])->name('update-permissions');
    Route::resource('roles.permissions', RolePermissionController::class);


    Route::post('update-coursesUsers/{id}', [CoursesUsersController::class, 'update'])->name('update-coursesUsers');
    Route::post('update-efficiency-coursesUsers/{id}', [CoursesUsersController::class, 'updateEfficiency'])->name('update-efficiency-coursesUsers');
    Route::post('update-management-coursesUsers/{id}', [CoursesUsersController::class, 'updateManagement'])->name('update-management-coursesUsers');
    Route::post('update-it-coursesUsers/{id}', [CoursesUsersController::class, 'updateIt'])->name('update-it-coursesUsers');

    Route::get('edit-efficiency-coursesUsers/{id}', [CoursesUsersController::class, 'editEfficiency'])->name('edit-efficiency-coursesUsers');
    Route::get('edit-management-coursesUsers/{id}', [CoursesUsersController::class, 'editManagement'])->name('edit-management-coursesUsers');
    Route::get('edit-it-coursesUsers/{id}', [CoursesUsersController::class, 'editIt'])->name('edit-it-coursesUsers');


    Route::resource('users', UserController::class);
    Route::get('/show/preferences/{id}', [UserController::class, 'indexPreference'])->name('indexPreference');
    Route::get('/show/courses/{id}', [UserController::class, 'indexCourses'])->name('indexCourses');
    Route::get('/show/student/{id}', [UserController::class, 'indexStudent'])->name('indexStudent');

    Route::resource('efficiency', EfficiencyController::class);
    Route::get('/efficiency/preferences/{id}', [EfficiencyController::class, 'indexPreference'])->name('efficiencyPreference');
    Route::get('/efficiency/courses/{id}', [EfficiencyController::class, 'indexCourses'])->name('efficiencyCourses');
    Route::get('/efficiency/student/{id}', [EfficiencyController::class, 'indexStudent'])->name('efficiencyStudent');

    Route::resource('management', ManagementController::class);
    Route::get('/management/preferences/{id}', [ManagementController::class, 'indexPreference'])->name('managementPreference');
    Route::get('/management/courses/{id}', [ManagementController::class, 'indexCourses'])->name('managementCourses');
    Route::get('/management/student/{id}', [ManagementController::class, 'indexStudent'])->name('managementStudent');

    Route::resource('it', ItController::class);
    Route::get('/it/preferences/{id}', [ItController::class, 'indexPreference'])->name('itPreference');
    Route::get('/it/courses/{id}', [ItController::class, 'indexCourses'])->name('itCourses');
    Route::get('/it/student/{id}', [ItController::class, 'indexStudent'])->name('itStudent');
});
