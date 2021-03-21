<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hello</title>
</head>

<body>
   <ul>
      @foreach($arr as $key=> $value)
      <li> {{$key}}:{{$value}}</li>
      @endforeach
   </ul>
   <ul>
      @foreach($migTable as $mig)
      <li> {{$mig->migration}}</li>
      @endforeach
   </ul>
</body>

</html>