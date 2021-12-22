@extends('app')


@section('content')
<div class="wraper">
    <div class="side-info">
        <img class="pr-photo" src="Photo/profile.png" alt="Profile">
        <h3 class="lblCont">Contact</h3>
        <p class="p-info">555-55-55<br>
            email@mail.com<br>
            Broadway 5<br>
        </p>
        @foreach(array('facebook/koshlivan', 'linkedin/koshlivan', 'instagram/koshlivan') as $social)
            <p class="p-info">{{$social}}</p>
        @endforeach
        <h3 class="lblCont">Education</h3>

        <p class="p-info">Painter<br>
            Cambrige<br>
            2000-2003
        </p>

        <h3 class="lblCont">Skills</h3>
        <ul class="ul-info">
          @foreach(array('php', 'js', 'html', 'css') as $skill)
              <li>{{$skill}}</li>
            @endforeach
        </ul>
    </div>

    <div class="mmain-info">
        <div class="heading">
            <h1>Name Surname</h1>
            <h2>Web Developer</h2>
        </div>
        <div class="remain-info">
            <h3>Profile</h3>
            <p>create mode 100755 storage/framework/cache/data/.gitignore
                create mode 100755 storage/framework/sessions/.gitignore
                create mode 100755 storage/framework/testing/.gitignore
                create mode 100755 storage/framework/views/.gitignore
                create mode 100755 storage/logs/.gitignore
                create mode 100755 tests/CreatesApplication.php
                create mode 100755 tests/Feature/ExampleTest.php
                create mode 100755 tests/TestCase.php
                create mode 100755 tests/Unit/ExampleTest.php
            </p>
            <h3>Professional experience</h3>
            <p>create mode 100755 storage/framework/cache/data/.gitignore
                create mode 100755 storage/framework/sessions/.gitignore
                create mode 100755 storage/framework/testing/.gitignore
                create mode 100755 storage/framework/views/.gitignore
                create mode 100755 storage/logs/.gitignore
                create mode 100755 tests/CreatesApplication.php
                create mode 100755 tests/Feature/ExampleTest.php
                create mode 100755 tests/TestCase.php
                create mode 100755 tests/Unit/ExampleTest.php
            </p>
        </div>
    </div>

</div>
@endsection
