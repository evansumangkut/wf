@extends('_layout.default')

@section('content')
	

@include('index.header')


@include('index.navigasi')


<!---------------------------- Kalimat Pembuka ------------------------------------>

@include('index.wellcome')



<!---------------------------- About ------------------------------------>

@include('index.about')

<!---------------------------- Service ------------------------------------>
	
@include('index.service')

<!---------------------------- Tertimonials ------------------------------------>

@include('index.testimonial')

<!---------------------------- Gallery ------------------------------------>

@include('index.gallery')


<!---------------------------- News ------------------------------------>

@include('index.news')


<!---------------------------- Contact ------------------------------------>

@include('index.contact')


<!---------------------------- Footer ------------------------------------>

@include('index.footer')


@stop