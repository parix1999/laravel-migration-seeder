<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trips</title>
</head>
<body>

    <div class="container">
        <!-- tutti i viaggi disponibili -->
        <div class="all">
            <h1>TUTTE LE NOSTRE METE</h1>
            @foreach($allTrip as $trip)
    
                {{ $trip['city'] }}
    
            @endforeach

        </div>

        <!-- United states -->
        <div class="america">
            <h1>America</h1>
            @foreach($americanTrip as $atrip)
    
                {{ $atrip['city'] }}
    
            @endforeach

        </div>

        <!-- England -->
        <div class="inghilterra">
            <h1>Inghilterra</h1>
            @foreach($englandTrip as $atrip)
    
                {{ $atrip['city'] }}
    
            @endforeach

        </div>

        <!-- Ireland-->
        <div class="irlanda">
            <h1>Irlanda</h1>
            @foreach($irelandTrip as $atrip)
    
                {{ $atrip['city'] }}
    
            @endforeach

        </div>

        <!-- Canada-->
        <div class="canada">
            <h1>Canada</h1>
            @foreach($canedianTrip as $atrip)
    
                {{ $atrip['city'] }}
    
            @endforeach

        </div>
    </div>


</body>
</html>