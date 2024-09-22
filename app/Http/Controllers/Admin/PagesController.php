<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Models\Service;

class PagesController extends Controller
{
    public function showMessages(){
        return view('admin.pages.show-messages');
    }

    public function replyMessages($id){
        $message = ContactMessage::findOrFail($id); 
        return view('admin.pages.reply-message', compact('message'));
    }

    public function service(){
        return view('admin.pages.service.list');
    }

    public function addService(){
        return view('admin.pages.service.add');
    }

    public function editService($id){
        $service = Service::find($id);
        return view('admin.pages.service.edit', compact('service'));
    }

    public function employee(){
        return view('admin.pages.employee.list');
    }

    public function addEmployee(){
        return view('admin.pages.employee.add');
    }

    public function editEmployee($id){
        $service = Service::find($id);
        return view('admin.pages.service.edit', compact('service'));
    }

}
