<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

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
Route::group(['middleware' => ['service', 'link']], function() {
    Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index']);
    Route::get('under-construction', [\App\Http\Controllers\Frontend\HomeController::class, 'under_construction']);
    Route::get('notice-single/{id}', [\App\Http\Controllers\Frontend\HomeController::class, 'single_notice']);
    Route::get('notice-all', [\App\Http\Controllers\Frontend\HomeController::class, 'all_notice']);
    Route::get('history-institute', [\App\Http\Controllers\Frontend\AboutUsController::class, 'institute_history']);
    Route::get('head-speech-institute', [\App\Http\Controllers\Frontend\AboutUsController::class, 'head_speech_institute']);
    Route::get('committee-institute', [\App\Http\Controllers\Frontend\AboutUsController::class, 'committee_institute']);
    Route::get('treasure-institute', [\App\Http\Controllers\Frontend\AboutUsController::class, 'treasure_institute']);
    Route::get('institute-staff', [\App\Http\Controllers\Frontend\AboutUsController::class, 'institute_staff']);
    Route::get('institute-gallery', [\App\Http\Controllers\Frontend\GalleryController::class, 'gallery']);
    Route::get('exam-routines', [\App\Http\Controllers\Admin\ExamRoutineController::class, 'exam_routine']);
});

Route::group(['middleware' => ['necessary']], function() {
    Route::get('cp-masud', [LoginController::class, 'cpv']);
    Route::post('cp-masud', [LoginController::class, 'cp']);
    Route::get('contact', [\App\Http\Controllers\Frontend\ContactUsController::class, 'contact_form']);
    Route::post('contact-form', [\App\Http\Controllers\Frontend\ContactUsController::class, 'store']);
});

Route::group(['middleware' => ['guest']], function() {
    Route::get('register', [RegisterController::class, 'create']);
    Route::post('register', [RegisterController::class, 'store']);
    Route::get('login', [LoginController::class, 'login_form'])->name('login');
    Route::post('login', [LoginController::class, 'login']);
});

Route::group(['middleware' => ['auth', 'necessary']], function() {
    Route::get('logout', [\App\Http\Controllers\Auth\LogoutController::class, 'perform']);
    Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboard']);

//    institute_name
    Route::get('institute', [\App\Http\Controllers\Admin\InstituteNameController::class, 'list'])->name('institute');
    Route::get('institute-create', [\App\Http\Controllers\Admin\InstituteNameController::class, 'create'])->name('institute-create');
    Route::post('institute-create', [\App\Http\Controllers\Admin\InstituteNameController::class, 'store'])->name('institute-save');
    Route::get('institute-edit/{id}', [\App\Http\Controllers\Admin\InstituteNameController::class, 'edit'])->name('institute-edit/{id}');
    Route::patch('institute-edit/{id}', [\App\Http\Controllers\Admin\InstituteNameController::class, 'update'])->name('institute-edit/{id}');
    Route::get('institute-delete/{id}', [\App\Http\Controllers\Admin\InstituteNameController::class, 'destroy'])->name('institute-delete/{id}');

//    institute-history
    Route::get('institute-history', [\App\Http\Controllers\Admin\InstituteHistoryController::class, 'index'])->name('institute-history');
    Route::get('institute-history-create', [\App\Http\Controllers\Admin\InstituteHistoryController::class, 'create'])->name('institute-history-create');
    Route::post('institute-history-create', [\App\Http\Controllers\Admin\InstituteHistoryController::class, 'store'])->name('institute-history-save');
    Route::get('institute-history-edit/{id}', [\App\Http\Controllers\Admin\InstituteHistoryController::class, 'edit'])->name('institute-history-edit/{id}');
    Route::patch('institute-history-edit/{id}', [\App\Http\Controllers\Admin\InstituteHistoryController::class, 'update'])->name('institute-history-edit/{id}');
    Route::get('institute-history-delete/{id}', [\App\Http\Controllers\Admin\InstituteHistoryController::class, 'destroy'])->name('institute-history-delete/{id}');
//    institute-head-speech
    Route::get('institute-head-speech', [\App\Http\Controllers\Admin\InstituteHeadSpeechController::class, 'index'])->name('institute-head-speech');
    Route::get('institute-head-speech-create', [\App\Http\Controllers\Admin\InstituteHeadSpeechController::class, 'create'])->name('institute-head-speech-create');
    Route::post('institute-head-speech-create', [\App\Http\Controllers\Admin\InstituteHeadSpeechController::class, 'store'])->name('institute-head-speech-save');
    Route::get('institute-head-speech-edit/{id}', [\App\Http\Controllers\Admin\InstituteHeadSpeechController::class, 'edit'])->name('institute-head-speech-edit/{id}');
    Route::patch('institute-head-speech-edit/{id}', [\App\Http\Controllers\Admin\InstituteHeadSpeechController::class, 'update'])->name('institute-head-speech-edit/{id}');
    Route::get('institute-head-speech-delete/{id}', [\App\Http\Controllers\Admin\InstituteHeadSpeechController::class, 'destroy'])->name('institute-head-speech-delete/{id}');

    //    institute-committee
    Route::get('institute-committee', [\App\Http\Controllers\Admin\InstituteCommitteeController::class, 'index'])->name('institute-committee');
    Route::get('institute-committee-create', [\App\Http\Controllers\Admin\InstituteCommitteeController::class, 'create'])->name('institute-committee-create');
    Route::post('institute-committee-create', [\App\Http\Controllers\Admin\InstituteCommitteeController::class, 'store'])->name('institute-committee-save');
    Route::get('institute-committee-edit/{id}', [\App\Http\Controllers\Admin\InstituteCommitteeController::class, 'edit'])->name('institute-committee-edit/{id}');
    Route::patch('institute-committee-edit/{id}', [\App\Http\Controllers\Admin\InstituteCommitteeController::class, 'update'])->name('institute-committee-edit/{id}');
    Route::get('institute-committee-delete/{id}', [\App\Http\Controllers\Admin\InstituteCommitteeController::class, 'destroy'])->name('institute-committee-delete/{id}');

    //    institute-treasure
    Route::get('institute-treasure', [\App\Http\Controllers\Admin\InstituteTreasureController::class, 'index'])->name('institute-treasure');
    Route::get('institute-treasure-create', [\App\Http\Controllers\Admin\InstituteTreasureController::class, 'create'])->name('institute-treasure-create');
    Route::post('institute-treasure-create', [\App\Http\Controllers\Admin\InstituteTreasureController::class, 'store'])->name('institute-treasure-save');
    Route::get('institute-treasure-edit/{id}', [\App\Http\Controllers\Admin\InstituteTreasureController::class, 'edit'])->name('institute-treasure-edit/{id}');
    Route::patch('institute-treasure-edit/{id}', [\App\Http\Controllers\Admin\InstituteTreasureController::class, 'update'])->name('institute-treasure-edit/{id}');
    Route::get('institute-treasure-delete/{id}', [\App\Http\Controllers\Admin\InstituteTreasureController::class, 'destroy'])->name('institute-treasure-delete/{id}');

    //    home-slider
    Route::get('home-slider', [\App\Http\Controllers\Admin\HomeSliderController::class, 'index'])->name('home-slider');
    Route::get('home-slider-create', [\App\Http\Controllers\Admin\HomeSliderController::class, 'create'])->name('home-slider-create');
    Route::post('home-slider-create', [\App\Http\Controllers\Admin\HomeSliderController::class, 'store'])->name('home-slider-save');
    Route::get('home-slider-edit/{id}', [\App\Http\Controllers\Admin\HomeSliderController::class, 'edit'])->name('home-slider-edit/{id}');
    Route::patch('home-slider-edit/{id}', [\App\Http\Controllers\Admin\HomeSliderController::class, 'update'])->name('home-slider-edit/{id}');
    Route::get('home-slider-delete/{id}', [\App\Http\Controllers\Admin\HomeSliderController::class, 'destroy'])->name('home-slider-delete/{id}');
//    notice
    Route::get('notice', [\App\Http\Controllers\Admin\NoticeController::class, 'index'])->name('notice');
    Route::get('notice-create', [\App\Http\Controllers\Admin\NoticeController::class, 'create'])->name('notice-create');
    Route::post('notice-create', [\App\Http\Controllers\Admin\NoticeController::class, 'store'])->name('notice-save');
    Route::get('notice-edit/{id}', [\App\Http\Controllers\Admin\NoticeController::class, 'edit'])->name('notice-edit/{id}');
    Route::patch('notice-edit/{id}', [\App\Http\Controllers\Admin\NoticeController::class, 'update'])->name('notice-edit/{id}');
    Route::get('notice-delete/{id}', [\App\Http\Controllers\Admin\NoticeController::class, 'destroy'])->name('notice-delete/{id}');
//    gallery
    Route::get('gallery', [\App\Http\Controllers\Admin\GalleryController::class, 'index'])->name('gallery');
    Route::get('gallery-create', [\App\Http\Controllers\Admin\GalleryController::class, 'create'])->name('gallery-create');
    Route::post('gallery-create', [\App\Http\Controllers\Admin\GalleryController::class, 'store'])->name('gallery-save');
    Route::get('gallery-edit/{id}', [\App\Http\Controllers\Admin\GalleryController::class, 'edit'])->name('gallery-edit/{id}');
    Route::patch('gallery-edit/{id}', [\App\Http\Controllers\Admin\GalleryController::class, 'update'])->name('gallery-edit/{id}');
    Route::get('gallery-delete/{id}', [\App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('gallery-delete/{id}');

    //    teacher
    Route::get('teacher', [\App\Http\Controllers\Admin\TeacherController::class, 'index'])->name('teacher');
    Route::get('teacher-create', [\App\Http\Controllers\Admin\TeacherController::class, 'create'])->name('teacher-create');
    Route::post('teacher-create', [\App\Http\Controllers\Admin\TeacherController::class, 'store'])->name('teacher-save');
    Route::get('teacher-edit/{id}', [\App\Http\Controllers\Admin\TeacherController::class, 'edit'])->name('teacher-edit/{id}');
    Route::patch('teacher-edit/{id}', [\App\Http\Controllers\Admin\TeacherController::class, 'update'])->name('teacher-edit/{id}');
    Route::get('teacher-delete/{id}', [\App\Http\Controllers\Admin\TeacherController::class, 'destroy'])->name('teacher-delete/{id}');
    Route::get('teacher-upload', [\App\Http\Controllers\Admin\TeacherController::class, 'upload_view'])->name('teacher-upload');
    Route::post('teacher-upload', [\App\Http\Controllers\Admin\TeacherController::class, 'upload'])->name('teacher-upload');

    //    imporant_link
    Route::get('important-link', [\App\Http\Controllers\Admin\ImportantLinkController::class, 'index'])->name('important-link');
    Route::get('important-link-create', [\App\Http\Controllers\Admin\ImportantLinkController::class, 'create'])->name('important-link-create');
    Route::post('important-link-create', [\App\Http\Controllers\Admin\ImportantLinkController::class, 'store'])->name('important-link-save');
    Route::get('important-link-edit/{id}', [\App\Http\Controllers\Admin\ImportantLinkController::class, 'edit'])->name('important-link-edit/{id}');
    Route::patch('important-link-edit/{id}', [\App\Http\Controllers\Admin\ImportantLinkController::class, 'update'])->name('important-link-edit/{id}');
    Route::get('important-link-delete/{id}', [\App\Http\Controllers\Admin\ImportantLinkController::class, 'destroy'])->name('important-link-delete/{id}');

    //    internal_service
    Route::get('internal-service', [\App\Http\Controllers\Admin\InternalServiceController::class, 'index'])->name('internal-service');
    Route::get('internal-service-create', [\App\Http\Controllers\Admin\InternalServiceController::class, 'create'])->name('internal-service-create');
    Route::post('internal-service-create', [\App\Http\Controllers\Admin\InternalServiceController::class, 'store'])->name('internal-service-save');
    Route::get('internal-service-edit/{id}', [\App\Http\Controllers\Admin\InternalServiceController::class, 'edit'])->name('internal-service-edit/{id}');
    Route::patch('internal-service-edit/{id}', [\App\Http\Controllers\Admin\InternalServiceController::class, 'update'])->name('internal-service-edit/{id}');
    Route::get('internal-service-delete/{id}', [\App\Http\Controllers\Admin\InternalServiceController::class, 'destroy'])->name('internal-service-delete/{id}');

    //    homepage_counter
    Route::get('homepage-counter', [\App\Http\Controllers\Admin\HomepageCounterController::class, 'index'])->name('homepage-counter');
    Route::get('homepage-counter-create', [\App\Http\Controllers\Admin\HomepageCounterController::class, 'create'])->name('homepage-counter-create');
    Route::post('homepage-counter-create', [\App\Http\Controllers\Admin\HomepageCounterController::class, 'store'])->name('homepage-counter-save');
    Route::get('homepage-counter-edit/{id}', [\App\Http\Controllers\Admin\HomepageCounterController::class, 'edit'])->name('homepage-counter-edit/{id}');
    Route::patch('homepage-counter-edit/{id}', [\App\Http\Controllers\Admin\HomepageCounterController::class, 'update'])->name('homepage-counter-edit/{id}');
    Route::get('homepage-counter-delete/{id}', [\App\Http\Controllers\Admin\HomepageCounterController::class, 'destroy'])->name('homepage-counter-delete/{id}');

    //  exam-routine
    Route::get('exam-routine', [\App\Http\Controllers\Admin\ExamRoutineController::class, 'index'])->name('exam-routine');
    Route::get('exam-routine-create', [\App\Http\Controllers\Admin\ExamRoutineController::class, 'create'])->name('exam-routine-create');
    Route::post('exam-routine-create', [\App\Http\Controllers\Admin\ExamRoutineController::class, 'store'])->name('exam-routine-save');
    Route::get('exam-routine-edit/{id}', [\App\Http\Controllers\Admin\ExamRoutineController::class, 'edit'])->name('exam-routine-edit/{id}');
    Route::patch('exam-routine-edit/{id}', [\App\Http\Controllers\Admin\ExamRoutineController::class, 'update'])->name('exam-routine-edit/{id}');
    Route::get('exam-routine-delete/{id}', [\App\Http\Controllers\Admin\ExamRoutineController::class, 'destroy'])->name('exam-routine-delete/{id}');

    //contact_list
    Route::get('contact-list', [\App\Http\Controllers\Frontend\ContactUsController::class, 'contact_list'])->name('contact-list');

    Route::get('/linkstorage', function () {
        \Illuminate\Support\Facades\Artisan::call('storage:link');
    });

});
