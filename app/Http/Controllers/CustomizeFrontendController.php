<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use App\Models\PrivacyPolicy;
use App\Models\SiteGuideline;
use App\Models\Terms;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CustomizeFrontendController extends Controller
{

    public function editMainPage()
    {
        try {
            $mainPage = MainPage::firstOrFail(); // Assuming there's only one main page record
            return view('customize.mainPage', compact('mainPage'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('customize.createMainPage');
        }
    }

    public function storeMainPage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            's1_bg_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            's1_heading_1' => 'nullable|string|max:255',
            's1_heading_2' => 'nullable|string|max:255',
            's1_link_text_1' => 'nullable|string|max:255',
            's2_heading_1' => 'nullable|string|max:255',
            's2_heading_2' => 'nullable|string|max:255',
            'placeholder_img_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_1' => 'nullable|string|max:255',
            'placeholder_img_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_2' => 'nullable|string|max:255',
            'placeholder_img_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_3' => 'nullable|string|max:255',
            's2_link_text_1' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $mainPage = new MainPage();

        $fields = [
            's1_heading_1',
            's1_heading_2',
            's1_link_text_1',
            's2_heading_1',
            's2_heading_2',
            'placeholder_text_1',
            'placeholder_text_2',
            'placeholder_text_3',
            's2_link_text_1'
        ];

        foreach ($fields as $field) {
            if ($request->filled($field)) {
                $mainPage->$field = $request->input($field);
            }
        }

        $imageFields = [
            's1_bg_img' => 's1_bg_img',
            'placeholder_img_1' => 'placeholder_img_1',
            'placeholder_img_2' => 'placeholder_img_2',
            'placeholder_img_3' => 'placeholder_img_3'
        ];

        foreach ($imageFields as $requestField => $modelField) {
            if ($request->hasFile($requestField)) {
                $imageName = Str::random(20) . '.' . $request->file($requestField)->getClientOriginalExtension();
                $request->file($requestField)->move(public_path('mainpage_images'), $imageName);
                $mainPage->$modelField = 'mainpage_images/' . $imageName;
            }
        }

        $mainPage->save();

        return redirect()->route('mainpage.edit')->with('success', 'Main page created successfully');
    }

public function updateMainPage(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            's1_bg_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            's1_heading_1' => 'nullable|string|max:255',
            's1_heading_2' => 'nullable|string|max:255',
            's1_link_text_1' => 'nullable|string|max:255',
            's2_heading_1' => 'nullable|string|max:255',
            's2_heading_2' => 'nullable|string|max:255',
            'placeholder_img_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_1' => 'nullable|string|max:255',
            'placeholder_img_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_2' => 'nullable|string|max:255',
            'placeholder_img_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'placeholder_text_3' => 'nullable|string|max:255',
            's2_link_text_1' => 'nullable|string|max:255',
        ]);
    
        // Fetch the first MainPage record or fail
        $mainPage = MainPage::firstOrFail();
    
        // Update text fields if present in the request
        if ($request->has('s1_heading_1')) {
            $mainPage->s1_heading_1 = $request->s1_heading_1;
        }
        if ($request->has('s1_heading_2')) {
            $mainPage->s1_heading_2 = $request->s1_heading_2;
        }
        if ($request->has('s1_link_text_1')) {
            $mainPage->s1_link_text_1 = $request->s1_link_text_1;
        }
        if ($request->has('s2_heading_1')) {
            $mainPage->s2_heading_1 = $request->s2_heading_1;
        }
        if ($request->has('s2_heading_2')) {
            $mainPage->s2_heading_2 = $request->s2_heading_2;
        }
        if ($request->has('placeholder_text_1')) {
            $mainPage->placeholder_text_1 = $request->placeholder_text_1;
        }
        if ($request->has('placeholder_text_2')) {
            $mainPage->placeholder_text_2 = $request->placeholder_text_2;
        }
        if ($request->has('placeholder_text_3')) {
            $mainPage->placeholder_text_3 = $request->placeholder_text_3;
        }
        if ($request->has('s2_link_text_1')) {
            $mainPage->s2_link_text_1 = $request->s2_link_text_1;
        }
    
        // Handle file uploads
        $imageFields = ['s1_bg_img', 'placeholder_img_1', 'placeholder_img_2', 'placeholder_img_3'];
        foreach ($imageFields as $imageField) {
            if ($request->hasFile($imageField)) {
                $file = $request->file($imageField);
                $originalName = $file->getClientOriginalName();
                $imageName = Str::random(20) . '_' . $originalName;
                $folderPath = 'mainpage_images';
                $file->move(public_path('mainpage_images'), $imageName);
                $mainPage->$imageField = $folderPath . '/' . $imageName;
            }
        }
    
        // Save the updated mainPage record
        $mainPage->save();
    
        // Redirect to the edit page with a success message
        return redirect()->route('mainpage.edit')->with('success', 'Main page updated successfully');
    }


    public function editTermsPage()
    {
        try {
            $terms = Terms::firstOrFail(); // Assuming there's only one main page record
            return view('customize.terms.edit', compact('terms'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('customize.terms.create');
        }
    }

    public function storeTermsPage(Request $request)
    {
        // Validate the form input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new Terms instance
        $terms = new Terms();
        $terms->title = $request->title;
        $terms->content = $request->content;

        // Save the new terms and conditions to the database
        $terms->save();

        return redirect()->back()->with('success', 'Terms and conditions created successfully.');
    }


    public function updateTermsPage(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        // Get the first Terms record
        $terms = Terms::first();

        // Check if the title field is present in the request
        if ($request->has('title')) {
            $terms->title = $request->title;
        }

        // Check if the content field is present in the request
        if ($request->has('content')) {
            $terms->content = $request->content;
        }

        // Save the updated terms and conditions to the database
        $terms->save();

        return redirect()->back()->with('success', 'Terms and conditions updated successfully.');
    }


    public function editPrivacyPage()
    {
        try {
            $privacyPolicy = PrivacyPolicy::firstOrFail(); // Assuming there's only one main page record
            return view('customize.privacy.edit', compact('privacyPolicy'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('customize.privacy.create');
        }
    }

    public function storePrivacyPage(Request $request)
    {
        // Validate the form input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new Terms instance
        $terms = new PrivacyPolicy();
        $terms->title = $request->title;
        $terms->content = $request->content;

        // Save the new terms and conditions to the database
        $terms->save();

        return redirect()->back()->with('success', 'Privacy Policy created successfully.');
    }


    public function updatePrivacyPage(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        // Get the first Terms record
        $terms = PrivacyPolicy::first();

        // Check if the title field is present in the request
        if ($request->has('title')) {
            $terms->title = $request->title;
        }

        // Check if the content field is present in the request
        if ($request->has('content')) {
            $terms->content = $request->content;
        }

        // Save the updated terms and conditions to the database
        $terms->save();

        return redirect()->back()->with('success', 'Privacy Policy updated successfully.');
    }

    public function editSiteGuidelines()
    {
        try {
            $guide = SiteGuideline::firstOrFail(); // Assuming there's only one main page record
            return view('customize.guidelines.edit', compact('guide'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return view('customize.guidelines.create');
        }
    }

    public function storeSiteGuidelines(Request $request)
    {
        // Validate the form input
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Create a new Terms instance
        $terms = new SiteGuideline();
        $terms->title = $request->title;
        $terms->content = $request->content;

        // Save the new terms and conditions to the database
        $terms->save();

        return redirect()->back()->with('success', 'Site Guidelines created successfully.');
    }


    public function updateSiteGuidelines(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'content' => 'nullable|string',
        ]);

        // Get the first Terms record
        $terms = SiteGuideline::first();

        // Check if the title field is present in the request
        if ($request->has('title')) {
            $terms->title = $request->title;
        }

        // Check if the content field is present in the request
        if ($request->has('content')) {
            $terms->content = $request->content;
        }

        // Save the updated terms and conditions to the database
        $terms->save();

        return redirect()->back()->with('success', 'Site Guidelines updated successfully.');
    }



    // Add methods for other pages if necessary
}
