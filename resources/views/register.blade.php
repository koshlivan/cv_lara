@extends('app')

@section('content')
<div class="wraper">
    @if($message??null)
        <div class="alert alert-danger alert-dismissible fade show">
            {{$message}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="reg-wind">
        <form id="reg_form" action="{{url('/register')}}" method="post">
            @csrf
            <div class="field-set">
                <div class="row align-items-center field">
                    <label for="inpLog" class="col-3">Login</label>
                    <input type="text" name="inpLog" class="col-7 ml-2" required>
                </div>
                <div class="row align-items-center field">
                    <label for="inpEmail" class="col-3">Email</label>
                    <input type="email" name="inpEmail" class="col-7" required>
                </div>
                <div class="row align-items-center field">
                    <label for="inpPass" class="col-3">Pass</label>
                    <input type="password" name="inpPass" class="col-7" required>
                </div>
                <div class="row align-items-center field">
                    <label for="inpRePass" class="col-3">Repeat pass</label>
                    <input type="password" name="inpRePass" class="col-7" required>
                </div>
            </div>
            <div>
                <div class="row align-items-center">
<!--                    --><?php //if($_SESSION['message']){
//                        echo "<p style='font-weight: bold; color: red; text-transform: Capitalize' class='col-7'>".$_SESSION['message']."</p>";
//                        unset($_SESSION['message']);
//                    }?>
                    <input type="submit" name="btnSubmit" id="btnSubm" value="Submit" class="col">
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
