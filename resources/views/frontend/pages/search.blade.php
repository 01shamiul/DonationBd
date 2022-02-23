@extends('frontend.master')


@section('homeContent')

<h3>({{count($search)}}) item found</h3>
@if(count($search) > 0)


@foreach($search as $search)


						<div class="col-sm-4">
							<div class="project-image-wrapper">
								<div class="single-products">
									<div class="projectinfo text-center">
										<img src="{{asset('/upload/'.$search->thum_img)}}" alt="" />
										<h2>$ {{$search->price}}</h2>
										<p>{{$search->name}}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="project-overlay">
										<div class="overlay-content">
											<h2>${{$search->price}}</h2>
											<p>{{$search->name}}</p>
											<a href="{{url('/addcart/'.$search->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
									
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="{{url('/details')}}"><i class="fa fa-plus-square"></i>Add to details</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>

@endforeach

@else
<h3>Search item not found !</h3>


@endif



@endsection