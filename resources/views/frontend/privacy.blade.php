@include('frontend.layouts.headertwo')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="container mt-3">
<div  class="title"><h1>{{$privacy->title}}</h1></div>
<div class="content">
        {!! $privacy->content !!}
</div>
</div>

@include('frontend.layouts.footertwo')
