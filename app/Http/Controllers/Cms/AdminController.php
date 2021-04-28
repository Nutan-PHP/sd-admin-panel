<?php

namespace SneakerDistrict\Http\Controllers\Cms;

use SneakerDistrict\Http\Controllers\Controller;
use Illuminate\Http\Request;
use SneakerDistrict\Models\Admin;
use Auth, Session, Hash, Image;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo '<pre>'; print_r($data); echo '</pre>';exit;
            $rules = [
                'email' => 'required|email',
                'password' => 'required'
            ];
            $customMessages = [
                'email.required' => 'Email is required',
                'email.email' => 'Please enter valid email',
                'password.required' => 'Password is required'
            ];
            $this->validate($request, $rules, $customMessages);

            if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('admin/dashboard');
            } else {
                Session::flash('error_msg', 'Invalid Email or Password');
                return redirect()->back();
            }
        }
        return view('admin.login');
    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
    public function settings()
    {
        $adminData = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        // print_r($adminData);exit;
        return view('admin.admin-settings', compact('adminData'));
    }
    public function checkCurrentPwd(Request $request)
    {
        $data = $request->all();

        if (Hash::check($data['currentPwd'], Auth::guard('admin')->user()->password)) {
            echo 'true';
        } else {
            echo 'false';
        }
    }
    public function updateAdmin(Request $request)
    {
        $data = $request->all();
        // echo '<pre>';print_r($data);exit;
        if (Hash::check($data['currentPwd'], Auth::guard('admin')->user()->password)) {
            //Check newpwd and confirmedpwd is same
            // if($data['newPwd'] == $data['confirmPwd']){
            //     Admin::where('id',Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['newPwd'])]);
            //     Session::flash('success_msg','Password updated successfully');
            // } else{
            //     Session::flash('error_msg','New Password & Confirmed Password not matching');
            // }
            if ($request->hasFile('adminImg')) {
                $newName = "";
                $imageTemp = $request->file('adminImg');
                if ($imageTemp->isValid()) {
                    //Get Image Extention
                    $newName = time() . "_" . preg_replace('/\s+/', '_', $imageTemp->getClientOriginalName());
                    $path = 'images/admin/admin_images/' . Auth::guard('admin')->user()->id;
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $imagePath = $path . '/' . $newName;
                    //Upload the image
                    Image::make($imageTemp->getRealPath())->resize(150, 150)->save($imagePath);
                }
                Admin::where('id', Auth::guard('admin')->user()->id)->update(['name' => $data['name'], 'image' => $newName]);
                Session::flash('success_msg', 'Admin Details Updated Successfully');
                return redirect()->back();
            }
        } else {
            Session::flash('error_msg', 'Current Password Is Incorrect');
        }
        return redirect()->back();
    }
}
