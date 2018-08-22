@extends('layouts.freelance')

@section('title', 'Home')
@section('content')
    <!-- Portfolio Grid Section -->
    @include('freelance.portfolio')

    <!-- About Section -->
    @include('freelance.about')
    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
    <!-- Contact Section -->
    @include('freelance.contact')
@endsection
