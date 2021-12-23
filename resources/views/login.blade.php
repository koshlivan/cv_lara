@extends('app')

@section('content')
<div class="wraper">
    <div class="reg-wind">
        <form id="log_form" action="" method="post">
            @csrf
            <input type="hidden" name="frmLogin" >
            <div class="field-set">
                <div class="row align-items-center field">
                    <label for="inpLog" class="col-3">Login</label>
                    <input type="text" name="inpLog" class="col-7" required>
                </div>
            </div>
            <div class="row align-items-center field">
                <label for="inpPass" class="col-3">Pass</label>
                <input type="password" name="inpPass" class="col-7" required>
            </div>

            <div>
                <div class="row align-items-center field">

                    <input type="submit" name="btnSubmit" id="btnSubm" value="Submit">
                </div>
            </div>
        </form>
    </div>
    @if($message??null)
    <div class="error">
        {{$message??''}}
    </div>
    @endif
    @if($mess_ok??null)
        <div class="message">
            {{$mess_ok??''}}
        </div>
    @endif
</div>
@endsection
