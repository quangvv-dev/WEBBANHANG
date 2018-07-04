@extends('masterpage')
@section('content')
<link href="{{url('css/custom.css')}}" rel="stylesheet">
    <div class="page-index">
        <div class="container">
            <p>
                Home - Shopping Cart
            </p>
        </div>
    </div>
    </div>
    <div class="clearfix">
    </div>
    <div class="container_fullwidth">
        <div class="container shopping-cart">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title">
                        Shopping Cart
                    </h3>
                    <div class="clearfix">
                    </div>
                    <table class="shop-table">
                        <thead>
                        <tr>
                            <th>
                                Image
                            </th>
                            <th>
                                Details
                            </th>
                            <th>
                                Price
                            </th>
                            <th>
                                Quantity
                            </th>
                            <th>
                                Tổng tiền
                            </th>
                            <th>
                                Delete
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>@foreach($content as $add)  
                           
                                <img src="images/{{$add->image}}" alt="">
                            </td>
                            <td>
                                <div class="shop-details">
                                
                                    <div class="productname">
                                        {{$add->name}}
                                    </div>
                                    <p>
                                        <img alt="" src="images/star.png">
                                        <a class="review_num" href="#">
                                            Lượt xem(02)
                                        </a>
                                    </p>
                                    <p>
                                       {{$add->id}}
                                       
                                    </p>
                                    
                                </div>
                            </td>
                            <td>
                                <h5 class="red">
                                {{$add->price}} 
                                </h5>
                            </td>
                            <td>

                                <input type="text" width="50px" value="{{$add->qty}}" >  </input>
                            </td>
                            <td>
                                <h5>
                                    <strong class="red">
                                    {{$add->total}}
                                    </strong>
                                </h5>
                            </td>
                            <td>
                                <a href="#">
                                    <img src="images/remove.png" alt="">
                                </a>
                            </td>
                        </tr>
                        </tbody>@endforeach
                        <tfoot>
                        <tr>
                            <td colspan="6">
                                <button class="pull-left">
                                    Continue Shopping
                                </button>
                                <button class=" pull-right">
                                    Update Shopping Cart
                                </button>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                    <div class="clearfix">
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="shippingbox">
                                <h5>
                                    Địa chỉ chuyển hàng
                                </h5>
                                <form>
                                    <label>
                                        Vui lòng nhập đầy đủ địa chỉ chuyển hàng
                                    </label>
                                    <input type="text" name="">
                                    <div class="clearfix">
                                    </div>
                                    <button>
                                        Get A Qoute
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="shippingbox">
                                <div class="subtotal">
                                    <h5>
                                        Sub Total
                                    </h5>
                      <span>
                        $1.000.00
                      </span>
                                </div>
                                <div class="grandtotal">
                                    <h5>
                                        GRAND TOTAL
                                    </h5>
                      <span>
                        $1.000.00
                      </span>
                                </div>
                                <button>
                                    Process To Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            </div>
@endsection
