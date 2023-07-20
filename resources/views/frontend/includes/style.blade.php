
<!-- favicon icon -->
@php $logo = \App\Models\Logo::latest()->first()@endphp

<link rel="shortcut icon" href="{{asset($logo->favicon??null)}}" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/flaticon.css"/>


<!-- REVOLUTION LAYERS STYLES -->

<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/revolution/css/rs6.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{asset('/')}}frontend/assets/css/responsive.css"/>
