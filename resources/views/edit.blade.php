@extends('app')

@section('content')
<div>
    <form class="wraper" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="side-info">
            <div class="for-photo">
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                <input type="file" id="ld_photo" placeholder="File input here" name="inpPhoto" value="">
            </div>
            <h3 class="lblCont">Contact</h3>
            <input type="text" class="inp-edit" placeholder="Phone" name="inpPhone" value="">
            <input type="email" class="inp-edit" placeholder="E-Mail" name="inpMail" value="">
            <input type="text" class="inp-edit" placeholder="Address" name="inpAddr" value="">
            <input type="text" class="inp-edit" placeholder="LinkedIn" name="inpLd" value="">
            <h3 class="lblCont">Education</h3>
            <input  class="inp-edit"
                    placeholder="Degree name"
                    name="inpDegree"
                    value=""
            >
            <input  class="inp-edit"
                    placeholder="University name"
                    name="inpUniversity"
                    value=""
            >
            <input  class="inp-edit"
                    placeholder="Period"
                    name="inpPeriod"
                    value=""
            >
            <h3 class="lblCont">Skills</h3>
            <input type="text"
                   class="inp-edit"
                   placeholder="php, html, css, javascript"
                   name="inpSkill"
                   value=""
            >
        </div>

        <div class="mmain-info">
            <div class="heading">
                <input type="text"
                       class="inp-edit-name"
                       placeholder="Your name"
                       name="inpName"
                       value=""
                >
                <h2>web developer</h2>
            </div>
            <div class="remain-info">
                <h3>Profile</h3>
                <textarea  class="inp-edit-main"
                           placeholder="Personal information"
                           cols="20"
                           name="inpProfile"
                ></textarea>

                <h3>Professional experiance</h3>
                <textarea  class="inp-edit-main"
                           placeholder="Professional experience"
                           cols="20"
                           name="inpExper"
                ></textarea>
                <input type="submit" value="Save">
            </div>
        </div>
    </form>
</div>
@endsection
