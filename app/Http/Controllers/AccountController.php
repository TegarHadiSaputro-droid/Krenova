<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfileController extends Controller
{
    // Tampilkan halaman account
    public function edit()
    {
        return view('account');
    }

    // Update profile (nama & email)
    public function update(Request $request)
{
    /** @var User $user */ //
    $user = Auth::user();

    $validated = $request->validate([
        'first_name' => ['required', 'string', 'max:255'],
        'last_name' => ['nullable', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users,email,' . $user->id],
    ]);

    // Update name gabungan juga
    $validated['name'] = trim($validated['first_name'] . ' ' . ($validated['last_name'] ?? ''));

    $user->update($validated);

    return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
}

    // Update password
    public function updatePassword(Request $request)
    {
        $validated = $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);
        
        /** @var User $user */ //
        $user = Auth::user();

        // Cek password lama
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai.']);
        }

        // Update password
        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('profile.edit')->with('success', 'Password berhasil diubah!');
    }

    // Hapus akun
    public function destroy(Request $request)
    {
        /** @var User $user */ //
        $user = Auth::user();

        // Logout user
        Auth::logout();

        // Hapus user
        $user->delete();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Akun berhasil dihapus.');
    }
}