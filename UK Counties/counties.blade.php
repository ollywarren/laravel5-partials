<?php

    //Configure our Counties Array.
    $counties = array(

        'England' => array(
            'Avon', 'Bedfordshire', 'Berkshire', 'Buckinghamshire', 'Cambridgeshire', 'Cheshire', 'Cleveland', 'Cornwall', 'Cumbria', 'Derbyshire', 'Devon', 'Dorset', 'Durham', 'East Sussex',
            'Essex', 'Gloucestershire', 'Hampshire', 'Herefordshire', 'Hertfordshire', 'Isle of Wight', 'Kent', 'Lancashire', 'Leicestershire', 'Lincolnshire', 'London', 'Merseyside', 'Middlesex', 'Norfolk',
            'Northamptonshire', 'Northumberland', 'North Humberside', 'North Yorkshire', 'Nottinghamshire', 'Oxfordshire', 'Rutland', 'Shropshire', 'Somerset', 'South Humberside', 'South Yorkshire',
            'Staffordshire', 'Suffolk', 'Surrey', 'Tyne and Wear', 'Warwickshire', 'West Midlands', 'West Sussex', 'West Yorkshire', 'Wiltshire', 'Worcestershire'
        ),


        'Wales' => array('Clwyd', 'Dyfed', 'Gwent', 'Gwynedd', 'Mid Glamorgan', 'Powys', 'South Glamorgan', 'West Glamorgan'),


        'Scotland' => array(
            'Aberdeenshire', 'Angus', 'Argyll', 'Ayrshire', 'Banffshire', 'Berwickshire', 'Bute', 'Caithness', 'Clackmannanshire', 'Dumfriesshire', 'Dunbartonshire', 'East Lothian', 'Fife',
            'Inverness-shire', 'Kincardineshire', 'Kinross-shire', 'Kirkcudbrightshire', 'Lanarkshire', 'Midlothian', 'Moray', 'Nairnshire', 'Orkney', 'Peeblesshire', 'Perthshire', 'Renfrewshire',
            'Ross-shire', 'Roxburghshire', 'Selkirkshire', 'Shetland', 'Stirlingshire', 'Sutherland', 'West Lothian', 'Wigtownshire'
        ),


        'Northern_Ireland' => array('Antrim', 'Armagh', 'Down', 'Fermanagh', 'Londonderry', 'Tyrone')
    );



?>


<select name="county" id="county" class="form-control" required autofocus>
    <optgroup label="England">
        @foreach($counties['England'] as $county)
            <option value="{{ $county }}" {{ $default == $county ? 'selected' : '' }}>{{ $county }}</option>
        @endforeach
    </optgroup>
    <optgroup label="Scotland">
        @foreach($counties['Scotland'] as $county)
            <option value="{{ $county }}" {{ $default == $county ? 'selected' : '' }}>{{ $county }}</option>
        @endforeach
    </optgroup>
    <optgroup label="Wales">
        @foreach($counties['Wales'] as $county)
            <option value="{{ $county }}" {{ $default == $county ? 'selected' : '' }}>{{ $county }}</option>
        @endforeach
    </optgroup>
    <optgroup label="Northern Ireland">
        @foreach($counties['Northern_Ireland'] as $county)
            <option value="{{ $county }}" {{ $default == $county ? 'selected' : '' }}>{{ $county }}</option>
        @endforeach
    </optgroup>
</select>