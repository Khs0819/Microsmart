<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CoursesUsers;
use App\Models\Preference;
use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function indexPreference($id)
    {
        //
        $preferences = Preference::where('user_id', $id)->get();
        $users = User::findOrFail($id);
        return response()->view('cms.user.indexPreferences', compact('preferences', 'users', 'id'));
    }

    public function indexCourses($id)
    {
        $users = User::findOrFail($id);
        $CourseUsers = CoursesUsers::where('user_id', $id)->get();
        $courses = Course::all();

        return response()->view('cms.user.indexCourses', compact('courses', 'id', 'CourseUsers', 'users'));
    }

    public function indexStudent($id)
    {
        $users = User::findOrFail($id);
        return response()->view('cms.user.show', compact('users', 'id'));
    }

    public function index()
    {
        $count = 0;
        $users = User::orderBy('id', 'asc')->paginate(5);
        return response()->view('cms.user.index', compact('users', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator($request->all(), [
            'courses' => 'filled',
            'training-technology' => 'string | min:2',
            'training-time' => 'string | min:2',
            'firstName' => 'required|alpha | min:3',
            'lastName' => 'required|alpha |min:2',
            'day' => 'required|numeric |between:1,31',
            'month' => 'required|numeric |between:1,12',
            'year' => 'required|numeric|between:1970,2010',
            'gender' => 'string | min:2',
            'governorate' => 'required|string|min:3',
            'phone' => 'filled|alpha_num|digits_between:10,14|starts_with:05',
            'email' => 'required|email',
            'education_status' => 'required |string | min:2',
            'degree' => 'string | min:2',
            'academic-level' => 'required_if:education_status,AAA',
            'graduation-year' => 'required_if:education_status,BBB',
            'employment_status' => 'required_if:education_status,BBB',
            'work-sector' => 'required_if:employment_status,AAA',
            'major' => 'required_with:academic-level,graduation-year',
            'agree' => 'string | max:2',
            // 'code' => 'required|numeric|digits:3',
        ], [
            'agree.max' => 'الرجاء التحقق من الموافقة على بنود الخصوصية والاستخدام',
            'courses.filled' => ' الرجاء اختيار برنامج تدريبي من (قسم التدريب)',
            'training-technology.min' => 'الرجاء اختيار تقنية التدريب من (قسم التدريب)',
            'training-time.min' => 'الرجاء اختيار التوقيت المناسب لعقد الدورات من (قسم التدريب)',
            'firstName.alpha' => 'لا يحتوي الاسم الأول على رموز أو ارقام',
            'firstName.min' => 'يجب ان يكون الاسم الأول مكون من 3 حروف على الأقل',
            'firstName.required' => 'حقل الاسم الاول مطلوب',
            'lastName.min' => 'يجب ان يكون الاسم الأخير مكون من 3 حروف على الأقل',
            'lastName.alpha' => 'لا يحتوي الاسم الأخير على رموز أو ارقام',
            'lastName.required' => 'حقل الاسم الاخير مطلوب',
            'day.numeric' => 'حقل اليوم يجب ان يكون رقم',
            'day.required' => 'حقل اليوم مطلوب',
            'day.between' => 'يجب ان يكون تاريخ اليوم من 1 الى 31',
            'month.numeric' => 'حقل الشهر يجب ان يكون رقم',
            'month.required' => 'حقل الشهر مطلوب',
            'month.between' => 'يجب ان يكون تاريخ الشهر من 1 الى 12',
            'year.numeric' => 'حقل السنة يجب ان يكون رقم',
            'year.required' => 'حقل السنة مطلوب',
            'year.between' => 'يجب ان يكون تاريخ السنة من 1970 فما فوق',
            'gender.min' => 'الرجاء اختيار نوع الجنس من (المعلومات الشخصية)',
            'governorate.min' => 'الرجاء تحديد اسم المحافظة من (المعلومات الشخصية)',
            'governorate.string' => 'لا يحتوي اسم المحافظة على رموز أو ارقام',
            'governorate.required' => 'الرجاء تحديد اسم المحافظة من (المعلومات الشخصية)',
            'phone.filled' => 'حقل رقم الهاتف مطلوب',
            'phone.alpha_dash' => 'لا يحتوي رقم الهاتف على ارقام',
            'phone.starts_with' => 'يجب ان يبدا رقم الهاتف ب05',
            'phone.digits_between' => 'يجب ان لا يقل رقم الهاتف عن 10 أرقام',
            'email.required' => 'حقل الايميل مطلوب',
            'email.email' => 'الايميل المدخل غير مقبول',
            'education_status.min' => 'الرجاء تحديد حالة الالتحاق بالتعليم من (التعليم)',
            'education_status.required' => 'الرجاء تحديد حالة الالتحاق بالتعليم من (التعليم)',
            'degree.min' => 'الرجاء تحديد الدرجة العلمية التي أنهيت أو ما زلت ملتحق بها',
            'academic-level.required_if' => 'الرجاء تحديد المستوى الدراسي',
            'graduation-year.required_if' => 'الرجاء تحديد سنة التخرج',
            'employment_status.required_if' => 'الرجاء تحديد حالة العمل',
            'work-sector.required_if' => 'الرجاء تحديد قطاع العمل',
            'university.required_with' => 'الرجاء تحديد الجامعة ',
            'major.required_with' => 'الرجاء تحديد التخصص',


        ]);

        $x = (object) array('0');
        if (!$validator->fails()) {

            $check = User::where('phone', $request->get('phone'))->first();
            if (gettype($check) == gettype($x)) {
                $delete = User::destroy($check->id);
            }

            $users = new User();
            $users->firstName = $request->get('firstName');
            $users->midName = $request->get('midName');
            $users->lastName = $request->get('lastName');
            $users->day = $request->get('day');
            $users->month = $request->get('month');
            $users->year = $request->get('year');
            $users->email = $request->get('email');
            $users->graduationYear = $request->get('graduation-year');
            $users->major = $request->get('major');
            $users->phone = $request->get('phone');


            if ($request->get('gender') != '-- اختر') {
                $users->gender = $request->get('gender');
            }
            if ($request->get('governorate') != '-- اختر') {
                $users->governorate = $request->get('governorate');
            }
            if ($request->get('education_status') == 'AAA') {
                $users->educationStatus = 'طالب جامعي';
            } else if ($request->get('education_status') == 'BBB') {
                $users->educationStatus = 'خريج';
            } else {
                $users->educationStatus = $request->get('education_status');
            }
            if ($request->get('academic-level') != '-- اختر') {
                $users->academicLevel = $request->get('academic-level');
            }
            if ($request->get('employment_status') == 'AAA') {
                $users->employmentStatus = 'ملتحق بالعمل';
            } else {
                $users->employmentStatus = $request->get('employment_status');
            }
            if ($request->get('work-sector') != '-- اختر') {
                $users->workSector = $request->get('work-sector');
            }
            if ($request->get('degree') != '-- اختر') {
                $users->degree = $request->get('degree');
            }
            if ($request->get('university') != '-- اختر') {
                $users->university = $request->get('university');
            }
            if ($request->get('country') != 'null') {
                $users->country = $request->get('country');
            }
            $isSaved = $users->save();


            if ($isSaved) {

                $preferences = new Preference();
                $preferences->user_id = $users->id;

                if ($request->get('training-time') != '-- اختر') {
                    $preferences->period =  $request->get('training-time');
                }

                if ($request->get('training-technology') != '-- اختر') {
                    $preferences->technique = $request->get('training-technology');
                }

                if ($request->get('computer-device') != '-- اختر') {
                    $preferences->computer = $request->get('computer-device');
                }
                if ($request->get('preferred-language') != '-- اختر') {
                    $preferences->language = $request->get('preferred-language');
                }
                $Saved = $preferences->save();

                $courses = $request->get('courses');
                $values = explode(",", $courses);
                foreach ($values as $value) {
                    $courses_users = new CoursesUsers();
                    $courses_users->user_id = $users->id;
                    $courses_users->course_id = (int)$value;
                    $Save = $courses_users->save();
                }

                if ($isSaved) {
                    return response(['redirect' => route('website.complete')]);
                    return response()->json(['icon' => 'success', 'title' => 'تم الإرسال بنجاح ', 'text' => 'عزيزي مقدم الطلب، شكراً لك علي ثقتك، سنقوم بدراسة الطلب والرد  بأسرع وقت ممكن'], 200);
                } else {
                    return response()->json(['icon' => 'error', 'title' => 'تم الإرسال بنجاح ', 'text' => 'Faild'], 400);
                }
            }
        } else {
            return response()->json(['icon' => 'error', 'title' => $validator->getMessageBag()->first()], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::findOrFail($id);
        return response()->view('cms.user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::destroy($id);
    }
}
