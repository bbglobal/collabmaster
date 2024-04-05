<x-mail::message>

<h1 style="font-size: 2rem; font-family: Nunito, sans-serif; font-weight: 700; line-height: 1.1; text-align: center; color: #364a63;">{{ $emailTemplate->heading }}</h1>

@if ($user->role == "creator")
<p style="font-size: 16px; font-family: Nunito, sans-serif; color: #222; line-height: 25px; display: block;">
{{ $emailTemplate->body }}

<x-mail::table>
|               |                         |
| ------------- |:-----------------------:|
| Customer Name | {{ $user->full_name }}  |
| Email         | {{ $user->email }}      |
| Contact       | {{ $user->contact }}    |
| Role          | {{ $user->role }}       |
</x-mail::table>
@else
<p style="font-size: 16px; font-family: Nunito, sans-serif; color: #222; line-height: 25px; display: block;">
Hello Admin,

A new {{ $user->role }},  just signed up to Collabmaster.</p>

<x-mail::table>
|               |                         |
| ------------- |:-----------------------:|
| Customer Name | {{ $user->full_name }}  |
| Brand Name    | {{ $user->brand_name }} |
| Email         | {{ $user->email }}      |
| Contact       | {{ $user->contact }}    |
| Role          | {{ $user->role }}       |
</x-mail::table>    
@endif


<br />
Thanks,<br />
{{ config('app.name') }}
</x-mail::message>
