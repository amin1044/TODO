<?php

namespace App\Http\Controllers\FrontEnd\Pages;

use App\Http\Controllers\Controller;
use App\Http\Traits\Dashboard\uploadFiles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Modules\AboutUs\Entities\AboutUs;
use Modules\ContactUs\Entities\ContactUs;
use Modules\ContactUs\Entities\FormContactUs;
use Modules\ContactUs\Http\Requests\Form\FormContactUsStoreRequest;
use Modules\Faq\Entities\Faq;
use Modules\Notices\Entities\Notice;
use Modules\Notices\Http\Requests\NoticesStoreRequest;


class PagesController extends Controller
{
    use uploadFiles;

    public function about_us()
    {
        $about = AboutUs::orderby('id', 'DESC')->first();

        //testimonial -- DESC

        return view('FrontEnd.Pages.about-us', compact('about'));
    }

    public function contact_us()
    {

        return view('FrontEnd.Pages.contact-us');
    }

    public function form_contact(FormContactUsStoreRequest $request)
    {
        $model = new FormContactUs();
        $model->fill($request->only($model->getFillable()));
        $model->saveOrFail();
        return response('پیام شما با موفقیت ارسال شد!', Response::HTTP_OK);
    }

    public function faq()
    {
        $faqs = Faq::where('status', 1)->get();
        return view('FrontEnd.Pages.contact-us', compact('faqs'));
    }


    public function email_notice(NoticesStoreRequest $request)
    {
        $model = new Notice();
        $model->fill($request->only($model->getFillable()));
        $model->saveOrFail();
        return view('FrontEnd.Home.index');
    }
}
