
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{Voyager::setting('title')}} | {{$title}}</title>

@include('partials._styles')
  </head>


<body>

@include('partials._nav')


@include('partials._slider')




<div class="container margin-top-15">

@include('partials._categorys_side')

    <div class="col col-sm-9 padding-left-0 main-content">

       <div class="col-xs-12">

@yield('content')
        </div>

  	</div>

</div>




@include('partials._item_slider')



@include('partials._footer')

    <section class="text-center"><p>&copy; <a href="/">vanillAffiliate</a></p></section>

@include('partials._scripts')



</body>
</html>
