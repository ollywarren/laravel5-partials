<?php

    //Configure our Counties Array.
    $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

?>


<select name="{{$name}}" id="{{$name}}" class="form-control" required autofocus>
    @foreach($months as $month)
        <option value="{{ $month }}" {{ $default == $month ? 'selected' : '' }}>{{ $month }}</option>
    @endforeach
</select>