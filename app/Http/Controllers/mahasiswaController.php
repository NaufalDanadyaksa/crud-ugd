<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if (strlen($katakunci)) {
            $data = user::where('nim', 'like', "%$katakunci%")
                ->orWhere('nama', 'like', "%$katakunci%")
                ->orWhere('jurusan', 'like', "%$katakunci%")
                ->paginate($jumlahbaris);
        } else {
            $data = user::orderBy('nim', 'desc')->paginate($jumlahbaris);
        }
        return view('mahasiswa.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nim', $request->nim);
        Session::flash('name', $request->nama);
        Session::flash('jurusan', $request->jurusan);
        Session::flash('email', $request->email);
        Session::flash('password', $request->password);

        $request->validate([
            'nim' => 'required|numeric|unique:mahasiswa,nim',
            'name' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'type' => 'required',
        ], [
            'nim.required' => 'NIM wajib diisi',
            'nim.numeric' => 'NIM wajib angka',
            'nim.unique' => 'NIM yang diisikan sudah ada',
            'name.required' => 'Nama wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Email tidak valid',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 5 karakter',
            'type.required' => 'Type wajib diisi',
        ]);
        $data = [
            'nim' => $request->nim,
            'name' => $request->name,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'type' => $request->type
        ];
        user::create($data);
        return redirect()->to('mahasiswa')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = user::where('nim', $id)->first();
        return view('mahasiswa.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'jurusan' => 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust file types and size as needed
        ], [
            'nama.required' => 'Nama wajib diisi',
            'jurusan.required' => 'Jurusan wajib diisi',
            'profile_picture.image' => 'File harus berupa gambar',
            'profile_picture.mimes' => 'File harus berupa jpeg, png, jpg, atau gif',
            'profile_picture.max' => 'Maximum file size: 2MB',
        ]);
        $imageName = time() . '.' . $request->profile_picture->extension();
        $request->profile_picture->move(public_path('profilepicture'), $imageName);
        $imagePath = 'profilepicture/' . $imageName;

        $data = [
            'name' => $request->name,
            'profile_picture' => $imagePath,
            'jurusan' => $request->jurusan,
        ];

        // Check if a profile picture is provided
        // if ($request->hasFile('profile_picture')) {
        //     // Handle file upload
        //     $profilePicture = $request->file('profile_picture');
        //     $path = $profilePicture->store('profile_pictures', 'public');

        //     // Save the file path to the database
        //     $data['profile_picture'] = $path;
        // }

        User::where('nim', $id)->update($data);

        return redirect()->to('mahasiswa')->with('success', 'Berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        user::where('nim', $id)->delete();
        return redirect()->to('mahasiswa')->with('success', 'Berhasil melakukan delete data');
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function home()
    {
        return view('mahasiswa.index');
    }

    public function profile()
    {
        return view('mahasiswa.profile');
    }

    public function ResetForm(Request $request, $token = null)
    {
        $data = [
            'pageTitle' => 'Reset Password',
        ];
        return view('mahasiswa.reset', $data)->with(['token' => $token, 'email' => $request->email]);
    }
}
