<?php

namespace App\Livewire\Admin;

use App\Models\News;
use App\Models\Event;
use App\Models\Slider;
use App\Models\TcForm;
use App\Models\enquiry;
use App\Models\Teacher;
use Livewire\Component;
use App\Models\Committee;
use App\Models\MeritList;
use App\Models\ClassMaster;
use App\Models\AcademicYear;
use App\Models\StudentRegister;

class Dashboard extends Component
{
    public $page_title = 'Dashboard';

    public function render()
    {
        $academic_year_count = AcademicYear::count();
        $class_list = ClassMaster::count();
        $student_list = StudentRegister::count();
        $slider_data = Slider::count();
        $committee_data = Committee::count();
        $merit_list = MeritList::count();
        $teacher_data = Teacher::count();
        $tc_form = TcForm::count();
        $news_list = News::count();
        $event_list = Event::count();
        $equiry_data = enquiry::count();
        return view('livewire.admin.dashboard', compact('academic_year_count','class_list','student_list','slider_data','committee_data','merit_list','teacher_data','tc_form','news_list','event_list','equiry_data'))->layout('admin.layouts.app');
    }
}
