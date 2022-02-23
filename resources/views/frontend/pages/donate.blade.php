@extends('frontend.master')


@section('homeContent')

  <section id="cart_items">
    <div class="container">
      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li><a href="#">Home</a></li>
          <li class="active">Donate Now</li>
        </ol>
      </div>
      <div class="table-responsive cart_info">
        <table class="table table-condensed">
          <thead>
            <tr class="cart_menu">
              <td class="image">Image</td>
              <td class="name">Name</td>
              <td class="code">Project Code</td>
              <td class="cname">County Name</td>
              <td class="donate">Donate</td>
              <td class="total">Sub Total</td>
              <td></td>
            </tr>
          </thead>
          <tbody>



@foreach($projectitem as $item)

            <tr>
              <td class="cart_project">
                <a href=""><img src="{{asset('upload/'.$item->options->image)}}" width="50px" alt=""></a>
              </td>
              <td class="cart_description">
                <h4><a href="">{{$item->name}}</a></h4>
                
              </td>
              <td class="cart_cname">
                <p>${{$item->cname}}</p>
              </td>
              <td class="cart_donate">
                <div class="cart_donate_button">
                  <form action="{{url('/cartupdate')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$item->rowId}}">
                    <input class="cart_donate_input" type="number" min="0" name="donate"  value="{{$item->donate}}" autocomplete="off" size="2">
                    <button type="submit" class="">Update</button>
                  </form>
                  
                  


                </div>
              </td>
              <td class="cart_total">
                <p class="cart_total_price">${{$item->subtotal()}}</p>
              </td>
              <td class="cart_delete">
                <a class="cart_quantity_delete" href="{{url('/cartremove/'.$item->rowId )}}"><i class="fa fa-times"></i></a>
              </td>
            </tr>

@endforeach



          </tbody>
        </table>
      </div>
    </div>
  </section> <!--/#cart_items-->

  <section id="do_action">
    <div class="container">
      <div class="heading">
        <h3>What would you like to do next?</h3>
        <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
      </div>
      <div class="row">
  
        <div class="col-sm-12">
          <div class="total_area">
            <ul>
              <li>Cart Sub Total <span>${{Cart::subtotal()}}</span></li>
              <li>Total <span>${{Cart::subtotal()}}</span></li>
            </ul>
              <a class="btn btn-default update" href="{{url('/')}}">Buy More</a>
              <a class="btn btn-default check_out" href="{{url('/checkout')}}">Check Out</a>

          </div>
        </div>
      </div>
    </div>
  </section><!--/#do_action-->



@endsection