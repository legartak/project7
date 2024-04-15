<!DOCTYPE html>
<html>
    <body>
        <h1> {{strtoupper($object['name']." ".$object['surname'])}} </h1>
        @foreach($object as $value)
            <p>{{$value}}</p>
        @endforeach
    </body>
</html>
