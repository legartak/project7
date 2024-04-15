<!DOCTYPE html>
<html>
<head>
    <style>
        html {
            background-color: yellow;
        }
        .number {
            color: firebrick;
            font-weight: bold;
            font-size: 20px;
        }
        .result {
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body>
@empty($operation)
    @php
        $sum = $a + $b
    @endphp
    <h1>Result is: {{$sum}}</h1>
@endempty
@isset($operation)
    <p class="number">{{$a}}</p>
    <p class="operation">
        @switch ($operation)
            @case ("add")
                @php
                    $res = $a + $b
                @endphp
                {{"+"}}
                @break
            @case ("subtract")
                @php
                    $res = $a - $b
                @endphp
                {{"-"}}
                @break
            @case ("multiply")
                @php
                    $res = $a * $b
                @endphp
                {{"*"}}
                @break
            @case ("divide")
                @php
                    $res = $a / $b
                @endphp
                {{"/"}}
                @break
        @endswitch
    </p>
    <p class="number">{{$b}}</p>
    <p>___________</p>
    <p class="result">{{$res}}</p>
@endisset
</body>
</html>
