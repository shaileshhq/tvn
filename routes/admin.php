<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin as AdminRoot;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('login');

// Authenticated Routes
Route::group(['middleware' => 'auth:admin'], function () {

    // Admin Dashboard
    Route::get('dashboard', AdminRoot\Dashboard::class)->name('dashboard');
    //Websetup
    Route::get('web_setup', AdminRoot\WebsiteSetup\Index::class)->name('web_setup');

    // Academic Year Routes
    Route::get('academic-year', AdminRoot\AcademicYear\Index::class)->name('academic-year.index');
    Route::get('academic-year/create', AdminRoot\AcademicYear\Create::class)->name('academic-year.create');
    Route::get('academic-year/edit/{id}', AdminRoot\AcademicYear\Edit::class)->name('academic-year.edit');

    //Class
    Route::get('class', AdminRoot\Class\Index::class)->name('class.index');
    Route::get('class/create', AdminRoot\Class\Create::class)->name('class.create');
    Route::get('class/edit/{id}', AdminRoot\Class\Edit::class)->name('class.edit');

    //Student Register
    Route::get('student-register', AdminRoot\StudentRegister\Index::class)->name('student-register.index');
    Route::get('student-register/create', AdminRoot\StudentRegister\Create::class)->name('student-register.create');
    Route::get('student-register/edit/{id}', AdminRoot\StudentRegister\Edit::class)->name('student-register.edit');

    //slider
    Route::get('slider', AdminRoot\Slider\Index::class)->name('slider.index');
    Route::get('slider/create', AdminRoot\Slider\Create::class)->name('slider.create');
    Route::get('slider/edit/{id}', AdminRoot\Slider\Edit::class)->name('slider.edit');

    //Document
    Route::get('document', AdminRoot\Document\Index::class)->name('document.index');
    Route::get('document/create', AdminRoot\Document\Create::class)->name('document.create');
    Route::get('document/edit/{id}', AdminRoot\Document\Edit::class)->name('document.edit');

     //PDF
     Route::get('pdf-upload', AdminRoot\PdfUpload\Index::class)->name('pdf.index');
     Route::get('pdf-upload/create', AdminRoot\PdfUpload\Create::class)->name('pdf.create');
     Route::get('pdf-upload/edit/{id}', AdminRoot\PdfUpload\Edit::class)->name('pdf.edit');

    //School Time
    Route::get('school-time', AdminRoot\SchoolTime\Index::class)->name('school-time.index');
    Route::get('school-time/create', AdminRoot\SchoolTime\Create::class)->name('school-time.create');
    Route::get('school-time/edit/{id}', AdminRoot\SchoolTime\Edit::class)->name('school-time.edit');

    //Transport Rules
    Route::get('transport-rules', AdminRoot\TransportRules\Index::class)->name('transport-rules.index');
    Route::get('transport-rules/create', AdminRoot\TransportRules\Create::class)->name('transport-rules.create');
    Route::get('transport-rules/edit/{id}', AdminRoot\TransportRules\Edit::class)->name('transport-rules.edit');

    //CBSE Affiliate
    Route::get('cbse-affiliate', AdminRoot\CbseAffiliate\Index::class)->name('cbse-affiliate.index');
    Route::get('cbse-affiliate/create', AdminRoot\CbseAffiliate\Create::class)->name('cbse-affiliate.create');
    Route::get('cbse-affiliate/edit/{id}', AdminRoot\CbseAffiliate\Edit::class)->name('cbse-affiliate.edit');

    //Teacher
    Route::get('teacher', AdminRoot\Teacher\Index::class)->name('teacher.index');
    Route::get('teacher/create', AdminRoot\Teacher\Create::class)->name('teacher.create');
    Route::get('teacher/edit/{id}', AdminRoot\Teacher\Edit::class)->name('teacher.edit');

    //Committee
    Route::get('committee', AdminRoot\Committee\Index::class)->name('committee.index');
    Route::get('committee/create', AdminRoot\Committee\Create::class)->name('committee.create');
    Route::get('committee/edit/{id}', AdminRoot\Committee\Edit::class)->name('committee.edit');

    //TC Form
    Route::get('tc-form', AdminRoot\TcForm\Index::class)->name('tc-form.index');
    Route::get('tc-form/create', AdminRoot\TcForm\Create::class)->name('tc-form.create');
    Route::get('tc-form/edit/{id}', AdminRoot\TcForm\Edit::class)->name('tc-form.edit');

    //TC Upload
    Route::get('tc-upload', AdminRoot\TcUpload\Index::class)->name('tc-upload.index');
    Route::get('tc-upload/create', AdminRoot\TcUpload\Create::class)->name('tc-upload.create');
    Route::get('tc-upload/edit/{id}', AdminRoot\TcUpload\Edit::class)->name('tc-upload.edit');

    //Merit List
    Route::get('merit-list', AdminRoot\MeritList\Index::class)->name('merit-list.index');
    Route::get('merit-list/create', AdminRoot\MeritList\Create::class)->name('merit-list.create');
    Route::get('merit-list/edit/{id}', AdminRoot\MeritList\Edit::class)->name('merit-list.edit');

    //Student Admission
    Route::get('student-admission', AdminRoot\StudentAdmission\Index::class)->name('student-admission.index');
    Route::get('student-admission/create', AdminRoot\StudentAdmission\Create::class)->name('student-admission.create');
    Route::get('student-admission/edit/{id}', AdminRoot\StudentAdmission\Edit::class)->name('student-admission.edit');

    //student Promotion
    Route::get('student-promotion', AdminRoot\StudentPromotion\Index::class)->name('student-promotion.index');

    //add achievement
    Route::get('achievement', AdminRoot\StudentAchievement\Index::class)->name('achievement.index');
    Route::get('achievement/create', AdminRoot\StudentAchievement\Create::class)->name('achievement.create');
    Route::get('achievement/edit/{id}', AdminRoot\StudentAchievement\Edit::class)->name('achievement.edit');

    //fees
    Route::get('fees', AdminRoot\Fees\Index::class)->name('fees.index');
    Route::get('fees/create', AdminRoot\Fees\Create::class)->name('fees.create');
    Route::get('fees/edit/{id}', AdminRoot\Fees\Edit::class)->name('fees.edit');

    Route::get('concession', AdminRoot\Concession\Index::class)->name('concession.index');
    Route::get('concession/create', AdminRoot\Concession\Create::class)->name('concession.create');
    Route::get('concession/edit/{id}', AdminRoot\Concession\Edit::class)->name('concession.edit');

    Route::get('assign-fee', AdminRoot\AssignFee\Index::class)->name('assign-fee.index');
    Route::get('assign-fee/create', AdminRoot\AssignFee\Create::class)->name('assign-fee.create');
    Route::get('assign-fee/edit/{id}', AdminRoot\AssignFee\Edit::class)->name('assign-fee.edit');

    Route::get('fee-deposit', AdminRoot\FeeDeposit\Index::class)->name('fee-deposit.index');

    //Admission Form
    Route::get('nursery-to-nine', AdminRoot\NurseryNine\Index::class)->name('nursery-to-nine.index');
    Route::get('nursery-to-nine/create', AdminRoot\NurseryNine\Create::class)->name('nursery-to-nine.create');
    Route::get('nursery-to-nine/edit/{id}', AdminRoot\NurseryNine\Edit::class)->name('nursery-to-nine.edit');
    Route::get('admission-eleven', AdminRoot\Admissioneleven\Index::class)->name('admission-eleven.index');
    Route::get('admission-eleven/create', AdminRoot\Admissioneleven\Create::class)->name('admission-eleven.create');
    Route::get('admission-eleven/edit/{id}', AdminRoot\Admissioneleven\Edit::class)->name('admission-eleven.edit');

    //News
    Route::get('news', AdminRoot\News\Index::class)->name('news.index');
    Route::get('news/create', AdminRoot\News\Create::class)->name('news.create');
    Route::get('news/edit/{id}', AdminRoot\News\Edit::class)->name('news.edit');

    //Testimonials
    Route::get('testimonial', AdminRoot\Testimonial\Index::class)->name('testimonial.index');
    Route::get('testimonial/create', AdminRoot\Testimonial\Create::class)->name('testimonial.create');
    Route::get('testimonial/edit/{id}', AdminRoot\Testimonial\Edit::class)->name('testimonial.edit');

    //Events
    Route::get('events', AdminRoot\Events\Index::class)->name('events.index');
    Route::get('events/create', AdminRoot\Events\Create::class)->name('events.create');
    Route::get('events/edit/{id}', AdminRoot\Events\Edit::class)->name('events.edit');

    //Gallery
    Route::get('gallery', AdminRoot\Gallery\Index::class)->name('gallery.index');
    Route::get('gallery/create', AdminRoot\Gallery\Create::class)->name('gallery.create');
    Route::get('gallery/edit/{id}', AdminRoot\Gallery\Edit::class)->name('gallery.edit');

    //Enquiry
    Route::get('enquiry', AdminRoot\Enquiry\Index::class)->name('enquiry.index');
    Route::get('enquiry/view/{id}', AdminRoot\Enquiry\View::class)->name('enquiry.view');

    //Logout
    Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('logout');
});
