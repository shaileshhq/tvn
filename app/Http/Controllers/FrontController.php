<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\About;
use App\Models\Event;
use App\Models\Slider;
use App\Models\TcForm;
use App\Models\enquiry;
use App\Models\Gallery;
use App\Models\Teacher;
use App\Models\Committee;
use App\Models\PDFUpload;
use App\Models\ClassMaster;
use App\Models\NurseryNine;
use App\Models\Testimonial;
use App\Models\WebsiteSetup;
use Illuminate\Http\Request;
use App\Models\SchoolDocument;
use App\Models\Admissioneleven;
use App\Models\StudentAchievement;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{

    public function index(Request $request)
    {
        $sliders = Slider::where('status', '1')->get();
        $teachers = Teacher::where('status', '1')->get();
        $events = Event::where('status','1')->get();
        $news_list = News::where('status', '1')->get();
        $testimonials = Testimonial::where('status','1')->get();
        $galleries = Gallery::where('status','1')->get();
        $achievement =StudentAchievement::where('status','1')->get();
        return view('frontend.index',compact('sliders','teachers','events', 'news_list', 'testimonials', 'galleries', 'achievement'), ['page_title' => 'Home']);
    }

    public function about(Request $request)
    {
        return view('frontend.about.about', ['page_title' => 'About Us']);
    }
    public function principal(Request $request)
    {
        return view('frontend.about.principal', ['page_title' => 'Principal Message']);
    }
    public function director(Request $request)
    {
        return view('frontend.about.director', ['page_title' => 'Director']);
    }
    public function teacher(Request $request)
    {
        $teacher_list = Teacher::where('status', '1')->get();
        return view('frontend.about.teachers',compact('teacher_list'), ['page_title' => 'Our Teacher']);
    }
    public function committee(Request $request)
    {
        $committee_data = Committee::where('status', '1')->get();
        return view('frontend.about.committee',compact('committee_data'), ['page_title' => 'Our committee']);
    }
    public function infrastructure(Request $request)
    {
        return view('frontend.campus.infrastructure', ['page_title' => 'Infrastructure']);
    }
    public function nurserynine(Request $request)
    {
        $class = ClassMaster::where('status', '1')->get();
        return view('frontend.addmission.nurserynine', compact('class'), ['page_title' => 'Admission nursery-nine']);
    }
    public function nurserynineStore(Request $request){
        request()->validate([
            'class'                 => 'required',
            'session'               => 'required',
            'name'                  => 'required',
            'gender'                => 'required',
            'blood'                 => 'required',
            'date_of_birth'         => 'required',
            'caste'                 => 'required',
            'mother_name'           => 'required',
            'father_name'           => 'required',
            'mother_occupation'     => 'required',
            'father_occupation'     => 'required',
            'mother_office_address' => 'required',
            'father_offic_address'  => 'required',
            'local_address'         => 'required',
            'cbsc_affilated'        => 'required',
            'not_affilated'         => 'required',
            'last_school'           => 'required',
            'result'                => 'required',
            'percentage'            => 'required',
            'subject'               => 'required',
            'certificate'           => 'required',
            'tc_date'               => 'required',
            'mother_tongue'         => 'required',
            'home_town'             => 'required',
            'image'                 => 'required|image|mimes:jpeg,png,jpg,gif',
            'signature'             =>'required|image|mimes:jpeg,png,jpg,gif',

        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('front/images'), $imageName);

        $signatureName = time() . '.' . $request->signature->extension();
        $request->signature->move(public_path('front/sign'), $signatureName);

        $data = new NurseryNine;
        $data->class = $request->class;
        $data->session = $request->session;
        $data->name = $request->name;
        $data->gender = $request->gender;
        $data->blood = $request->blood;
        $data->date_of_birth = $request->date_of_birth;
        $data->caste = $request->caste;
        $data->mother_name = $request->mother_name;
        $data->father_name = $request->father_name;
        $data->mother_occupation = $request->mother_occupation;
        $data->father_occupation = $request->father_occupation;
        $data->mother_office_address = $request->mother_office_address;
        $data->father_offic_address = $request->father_offic_address;
        $data->local_address = $request->local_address;
        $data->cbsc_affilated = $request->cbsc_affilated;
        $data->not_affilated = $request->not_affilated;
        $data->last_school = $request->last_school;
        $data->result = $request->result;
        $data->percentage = $request->percentage;
        $data->subject = $request->subject;
        $data->certificate = $request->certificate;
        $data->tc_date = $request->tc_date;
        $data->mother_tongue = $request->mother_tongue;
        $data->image = $request->image;
        $data->signature = $request->signature;

        $data->save();
        return redirect()->route('front.nursery-nine')->with('success', 'Data submitted succesfully');
    }
    public function eleven(Request $request)
    {
        return view('frontend.addmission.eleven', ['page_title' => ' Admission Eleven']);
    }
    public function elevenStore(Request $request){
        request()->validate([
            'stream'            => 'required',
            'roll_no'           => 'required',
            'date_of_admission' => 'required',
            'class'             => 'required',
            'name'              => 'required',
            'date_of_birth'     => 'required',
            'blood'             => 'required',
            'caste'             => 'required',
            'nationality'       => 'required',
            'mother_tongue'     => 'required',
            'mother_name'       => 'required',
            'father_name'       => 'required',
            'g_name'            => 'required',
            'intro_name'        => 'required',
            'mother_occupation' => 'required',
            'father_occupation' => 'required',
            'g_occupation'      => 'required',
            'intro_occupation'  => 'required',
            'mother_office_address' => 'required',
            'father_office_address' => 'required',
            'g_address'             => 'required',
            'intro_address'         => 'required',
            'mother_permanent_address' => 'required',
            'father_permanent_address' => 'required',
            'g_permanent_address'      => 'required',
            'intro_permanent_address'  => 'required',
            'mother_number'        => 'required',
            'father_number'        => 'required',
            'g_number'             => 'required',
            'intro_number'         => 'required',
            'last_school_attended' => 'required',
            'last_school_studing'  => 'required',
            'instruction'   => 'required',
            'percentage'    => 'required',
            'tc_date'       => 'required',
            'home_town'     => 'required',
            'result'        => 'required',
            'countersigned' => 'required',
            'certificate'   => 'required',
            'image'         => 'required|image|mimes:jpeg,png,jpg,gif',
            'signature'     => 'required|image|mimes:jpeg,png,jpg,gif',

        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('front/images'), $imageName);

        $signatureName = time() . '.' . $request->signature->extension();
        $request->signature->move(public_path('front/sign'), $signatureName);

        $data = new Admissioneleven;
        $data->stream = $request->stream;
        $data->roll_no = $request->roll_no;
        $data->date_of_admission = $request->date_of_admission;
        $data->class = $request->class;
        $data->name = $request->name;
        $data->date_of_birth = $request->date_of_birth;
        $data->blood = $request->blood;
        $data->caste = $request->caste;
        $data->nationality = $request->nationality;
        $data->mother_tongue = $request->mother_tongue;
        $data->mother_name = $request->mother_name;
        $data->father_name = $request->father_name;
        $data->g_name = $request->g_name;
        $data->intro_name = $request->intro_name;
        $data->mother_occupation = $request->mother_occupation;
        $data->father_occupation = $request->father_occupation;
        $data->g_occupation = $request->g_occupation;
        $data->intro_occupation = $request->intro_occupation;
        $data->mother_office_address = $request->mother_office_address;
        $data->father_office_address = $request->father_offic_address;
        $data->g_address = $request->g_address;
        $data->intro_address = $request->intro_address;
        $data->mother_permanent_address = $request->mother_permanent_address;
        $data->father_permanent_address = $request->father_permanent_address;
        $data->g_permanent_address = $request->g_permanent_address;
        $data->intro_permanent_address = $request->intro_permanent_address;
        $data->mother_number = $request->mother_number;
        $data->father_number = $request->father_number;
        $data->g_number = $request->g_number;
        $data->intro_number = $request->intro_number;
        $data->last_school_attended = $request->last_school_attended;
        $data->last_school_studing = $request->last_school_studing;
        $data->instruction = $request->instruction;
        $data->percentage = $request->percentage;
        $data->tc_date = $request->tc_date;
        $data->home_town = $request->home_town;
        $data->result = $request->result;
        $data->countersigned = $request->countersigned;
        $data->certificate = $request->certificate;
        $data->image = $request->image;
        $data->signature = $request->signature;

        $data->save();
        return redirect()->route('front.eleven')->with('success', 'Data submitted succesfully');
    }
    public function guideline(Request $request)
    {
        return view('frontend.addmission.guidelines', ['page_title' => ' Guidelines']);
    }
    public function tcform(Request $request)
    {
        return view('frontend.addmission.tcform', ['page_title' => ' TC Form']);
    }
    public function tcformStore(Request $request){
        request()->validate([
            'name'               => 'required',
            'mother_name'        => 'required',
            'father_name'        => 'required',
            'nationality'        => 'required',
            'caste'              => 'required',
            'date_of_birth'      => 'required',
            'result'             => 'required',
            'subject'            => 'required',
            'last_class_studied' => 'required',
            'school_result'      => 'required',
            'qualified'          => 'required',
            'full_ammount'       => 'required',
            'receipt'            => 'required',
            'ncc'                => 'required',
            'date_name_struck'   => 'required',
            'full_count'         => 'required',
            'full_present'       => 'required',
            'reasion'            => 'required',
            'gen_conduct'        => 'required',
            'remark'             => 'required',
            'issue_date'         => 'required'
        ]);
        $data = new TcForm;
        $data->name = $request->name;
        $data->mother_name = $request->mother_name;
         $data->father_name = $request->father_name;
         $data->nationality = $request->name;
         $data->caste = $request->caste;
         $data->date_of_birth = $request->date_of_birth;
         $data->result = $request->result;
         $data->subject = $request->subject;
         $data->last_class_studied = $request->last_class_studied;
         $data->school_result = $request->school_result;
         $data->qualified = $request->qualified;
         $data->full_ammount = $request->full_ammount;
         $data->receipt = $request->receipt;
         $data->ncc = $request->ncc;
         $data->date_name_struck = $request->date_name_struck;
         $data->full_count = $request->full_count;
         $data->full_present = $request->full_present;
         $data->reasion = $request->reasion;
         $data->gen_conduct = $request->gen_conduct;
         $data->remark = $request->remark;
         $data->issue_date = $request->issue_date;

        $data->save();
        return redirect()->route('front.tc-form')->with('success', 'Data submitted succesfully');
    }
    public function timing(Request $request)
    {
        return view('frontend.info-corner.timing', ['page_title' => 'Timing']);
    }
    public function transport(Request $request)
    {
        return view('frontend.info-corner.transport', ['page_title' => 'Transport']);
    }
    public function affiliated(Request $request)
    {
        return view('frontend.info-corner.affiliated', ['page_title' => 'CBSC Affiliated']);
    }
    public function gallery(Request $request)
    {
        $gallery_data =Gallery::where('status', '1')->get();
        return view('frontend.gallery',compact('gallery_data'), ['page_title' => 'Photo Gallery']);
    }
    public function news(Request $request)
    {
        $news_list = News::where('status', '1')->get();
        return view('frontend.news',compact('news_list'), ['page_title' => 'News']);
    }

    public function all_news(){
        $news = News::where('status', '1')->paginate(10);
        return view('frontend.all_news',compact('news'), ['page_title' => 'All News']);
    }

    public function newsdetail($slug)
    {
        $news_data = News::where('slug', $slug)->first();
        return view('frontend.newsdetail',compact('news_data'), ['page_title' => 'News Detail']);
    }

    public function eventdetail($slug)
    {
        $event_data = Event::where('slug', $slug)->first();
        return view('frontend.eventdetail', compact('event_data'), ['page_title' => 'Event Detail']);
    }
    public function contact(Request $request)
    {
        return view('frontend.contact', ['page_title' => 'Contact']);
    }

    public function registration(Request $request)
    {
        return view('frontend.auth.registration', ['page_title' => 'Registraion']);
    }
    public function login(Request $request)
    {
        return view('frontend.auth.login', ['page_title' => 'Login']);
    }
    public function privacy(Request $request)
    {
        return view('frontend.privacy', ['page_title' => 'privacy & policy']);
    }
    public function terms(Request $request)
    {
        return view('frontend.terms', ['page_title' => 'Terms & Condition']);
    }
    public function refund(Request $request)
    {
        return view('frontend.refund', ['page_title' => 'Refund Policy']);
    }

    public function document(Request $request)
    {
        $documents = SchoolDocument::where('status', '1')->orderBy('id', 'desc')->get();
        $grouped_documents = $documents->groupBy('category');
        return view('frontend.document',compact('grouped_documents'), ['page_title' => 'School Document']);
    }

    public function ImportantNotice(Request $request)
    {
        $pdf_list = PDFUpload::where('status', 1)->paginate(getPaginate());
        return view('frontend.important_notice',compact('pdf_list'), ['page_title' => 'Important Notice']);
    }

}
