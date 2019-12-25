@extends('emails.layouts.base') @section('content')
<tr>
    <td>
        <h2 style="text-align:center; color:#00033C">Notification</h2></td>
</tr>
<tr>
    <td>
        <p>
            User {{ $user->name }} change setting
        </p>
    </td>
</tr>
<tr>
    <td>
        <p>Hello {{ $email->name }}</p>
        <p>we noticed that {{ $user->name }} made change. please check on app for the details</p>
    </td>
</tr>

<tr style="justify-content:center; display:flex">
    <td style="padding-top:20px; display:flex; justify-content:center;">
        <a href="{{ route('admin.user.detail', $user->id) }}" target="_blank" style="text-decoration:none; margin-left:auto; margin-right:auto; background:#007bff; border-radius:100px; padding:10px 30px; color:#fff">View</a>
    </td>
</tr>
@endsection