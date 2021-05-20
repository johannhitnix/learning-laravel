<!-- INTERPOLACION D VARIABLES EN BLADE -->
@include('includes.header')
<!-- printing -->
<h2>{{$title}}</h2>

<!-- foreach -->
<h3>foreach</h3>
<ul>
@foreach($list as $item)
    <li>{{$item}}</li>
@endforeach
</ul>
<hr>

<!-- forelse -->
<h3>forelse</h3>
<ul>
@forelse($list as $item)
    <li>{{$item}}</li>
@empty
    no problem
@endforelse
</ul>
<hr>

<!-- comments -->
{{--COMENTARIO BLADE--}}
{{-- date('Y') --}}

<!-- if exists -->
{{ $director ?? 'No existe director' }}

<!-- if else -->
@if($title && count($list) >= 5)
    <h3>el titulo existe y es este: {{ $title }} y el listado es mayor a 5</h3>
@elseif($title)
    <h3>el titulo existe y es este: {{ $title }} y el listado es menor a 5</h3>
@else
    <h3>La condicion no se cumple</h3>
@endif

<!-- for -->
@for($i = 0; $i < 22; $i++)
    {{$i}}
@endfor

<br>
<!-- while if nested -->
<?php $counter = 1; // vars must be in php tags ;) ?>
@while($counter < 50)
    @if($counter % 2 == 0)
        even number: {{$counter}} <br>
    @endif
    <?php $counter++; // counter must be in a counter tag ?>
@endwhile

@include('includes.footer')