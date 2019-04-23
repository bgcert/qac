@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-center my-4 py-4">
    <div class="alert alert-success col-6" role="alert">
        <h4 class="alert-heading">Вашето запитване е изпратено успешно.</h4>
        Ще се свържем с Вас възможно най-скоро.
        <hr>
        <p>Ще бъдете пренасочени към главната страница след <span id="countdown"></span> секунди</p>
        <p><a href="/" class="btn btn-secondary">Към главната страница</a></p>
        <div id="redirect"></div>
    </div>
</div>

<script type="text/javascript">

    var seconds = 7;
    
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            window.location.href = "/";
        } else {
            document.getElementById("countdown").innerHTML = seconds;
            window.setTimeout("countdown()", 1000);
        }
    }
    countdown();
    
</script>
@endsection