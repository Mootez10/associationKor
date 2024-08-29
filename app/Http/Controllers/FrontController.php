<?php

namespace App\Http\Controllers;


use App\Models\Administration;
use App\Models\Calender;
use App\Models\ConfigHome;
use App\Models\Evenement;
use App\Models\SetContact;
use App\Models\SetEvent;
use App\Models\SetHeader;
use App\Models\SetFooter;
use App\Models\ContactMessage;
use App\Models\Teacher;
use App\Models\TeacherLevel1;
use App\Models\TeacherLevel2;
use App\Models\TeacherLevel3;
use App\Models\TeacherLevel4;
use App\Models\TeacherLevel5;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;



class FrontController extends Controller
{
    public function index(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $evenements = Evenement::all();
        $administrations = Administration::all();
        $teachers = Teacher::all();
        $teacher_level1s = TeacherLevel1::all();
        $set_contact = SetContact::all();
        $teacher_level2s = TeacherLevel2::all();
        $teacher_level3s = TeacherLevel3::all();
        $set_events = SetEvent::all();
        return view('Frontend.master', compact('config_home','set_header','set_footer','evenements','administrations','teachers','teacher_level1s','set_contact','teacher_level2s','teacher_level3s','set_events'));
    }

    public function Header(){
        
        return view('Frontend.header', compact('set_header'));
    }

    public function eventfunction(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $set_events = SetEvent::all();
        return view('Frontend.event', compact('config_home','set_header','set_footer','set_events'));
    }

    public function teamfunction(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $teachers = Teacher::all();
        $teacher_level1s = TeacherLevel1::all();
        $set_contact = SetContact::all();
        return view('Frontend.team', compact('config_home','set_header','set_footer','teachers','teacher_level1s','set_contact'));
    }

    public function team2function(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $teacher_level2s = TeacherLevel2::all();
        return view('Frontend.team2', compact('config_home','set_header','set_footer','teacher_level2s'));
    }

    public function team3function(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $teacher_level3s = TeacherLevel3::all();
        return view('Frontend.team3', compact('config_home','set_header','set_footer','teacher_level3s'));
    }

    public function team4function(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $teacher_level4s = TeacherLevel4::all();
        return view('Frontend.team4', compact('config_home','set_header','set_footer','teacher_level4s'));
    }

    public function team5function(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $teacher_level5s = TeacherLevel5::all();
        return view('Frontend.team5', compact('config_home','set_header','set_footer','teacher_level5s'));
    }

    public function contact(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        $set_contact = SetContact::all();
        return view('Frontend.contact', compact('config_home','set_header','set_footer','set_contact'));
    }

    public function about(){
        $config_home = ConfigHome::first();
        $set_header = SetHeader::first();
        $set_footer = SetFooter::first();
        return view('Frontend.about', compact('config_home','set_header','set_footer'));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:20',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    

    ContactMessage::create($validatedData);

    // Send the email with the validated data

    Mail::to('mootezaouinti1@gmail.com')->send(new ContactMail($validatedData));
    

    return redirect()->back()->with('success', 'Your message has been sent successfully.');
}


    public function send(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Debugging: Log validated data to check if it's coming through
        \Log::info('Validated data:', $validatedData);

        ContactMessage::create($validatedData);

        Mail::to('mootezaouinti1@gmail.com')->send(new ContactMail($validatedData));
        
        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }
    
    public function indexCalender()
    {
        return view('Frontend.indexCalender');
    }
    public function getEvents()
    {
        $calenders=Calender::all();
        return response()->json($calenders);
    }

    public function deleteEvent($id)
    {
        $calender = Calender::findOrFail($id);
        $calender->delete();

        return response()->json(['message' => 'Event deleted successfully']);
    }
    
}
