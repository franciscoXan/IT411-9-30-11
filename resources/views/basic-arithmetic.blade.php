<html>
<head>
   <title>Basic Arithmetic</title>
</head>
<body>
<center>
<br>

@if($operation=="add")
<h1>Operation: Addition</h1>
<h3>Num 1: {{$num1}}</h3>
<h3>Num 2: {{$num2}}</h3>
<h3>Sum: {{$sum}}</h3>

@elseif($operation=="sub")
<h1>Operation: Subtraction</h1>
<h3>Num 1: {{$num1}}</h3>
<h3>Num 2: {{$num2}}</h3>
<h3>Difference: {{$diff}}</h3>

@elseif($operation=="mul")
<h1>Operation: Multiplication</h1>
<h3>Num 1: {{$num1}}</h3>
<h3>Num 2: {{$num2}}</h3>
<h3>Product: {{$mul}}</h3>

@elseif($operation=="div")
<h1>Operation: Division</h1>
<h3>Num 1: {{$num1}}</h3>
<h3>Num 2: {{$num2}}</h3>
<h3>Quotient: {{$div}}</h3>

@endif

</center>
</body>
</html>