@php
    $data = $mailData['data'];
    $product = json_decode($data[0]->product_details, true);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>

    <title>New order received</title>
    <style>
        table tr td,
        table tr th {
            padding: 5px
        }

        .product-details {
            background-color: #eee
        }
    </style>
</head>

<body>
    <h2>Order From Adabkari.com</h2>
    <p>A new order received from adabkari.com. Login into admin panel to see order details. <a
            href="https://adabkari.com/ad-min" target="_blank">Login Now</a></p>

    <table>
        <tr>
            <td>
                <div>
                    <h3>Order Details</h3>
                    <strong>Order Id : </strong> {{ $data[0]->order_id }} <br>
                    <strong>Order Date : </strong> {{ showDateTime($data[0]->created_at) }} <br>
                    <strong>Order Amount : </strong>Rs. {{ IND_num_format($data[0]->total_amount) }} <br>
                </div>
            </td>

        </tr>
    </table>
    <div>
        <h3>Product Details</h3>
    </div>
    <table>
        <thead class="product-details">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $key => $single_product)
                @php
                    $product_id = $single_product['product_id'];
                    $quantity = $single_product['quantity'];
                    $variant = $single_product['variant'];
                    // get product details
                    $productData = getProductUsingProductId($product_id);
                    
                    // get variant details
                    $productVariant = DB::table('product_variation')
                        ->where('id', '=', $variant)
                        ->get();
                @endphp

                <tr>
                    <td>
                        <strong>{{ $productData[0]->name }}</strong> <br>
                        Color: <strong>
                            {{ $productVariant[0]->color }}
                        </strong><br>Size:
                        <strong>
                            {{ $productVariant[0]->size }}
                        </strong><br>

                    </td>

                    <td>
                        {{ $quantity }}
                    </td>
                    <td>
                        @php
                            $single_pro_total = $quantity * $productVariant[0]->price;
                        @endphp
                        Rs. {{ IND_num_format($single_pro_total) }}
                    </td>

                </tr>
            @endforeach

        </tbody>
    </table>


    <div>
        <h3>Payment Details</h3>
    </div>
    <table>
        <tr>
            <td><b>Total Amount</b></td>
            <td>Rs. {{ IND_num_format($data[0]->total_amount) }}</td>
        </tr>
        @if (!is_null($data[0]->coupon) && $data[0]->coupon != '')
            @php
                $getCouponData = DB::table('coupons')
                    ->where('code', '=', $data[0]->coupon)
                    ->get();
                $coupon_validity = couponValidity($getCouponData[0]->code);
                $couponData = $coupon_validity['couponData'];
                $min_amount = $couponData->min_amount;
                $discount = $couponData->discount;
                $couponDiscount = ($subTotal * $discount) / 100;
                
            @endphp
            <tr>
                <td><b>Coupon Discount</b></td>
                <td>Rs. {{ IND_num_format($couponDiscount) }}</td>
            </tr>
            <tr>
                <td><b>Grand Total</b></td>
                <td>Rs. {{ IND_num_format($data[0]->total_amount - $couponDiscount) }}
                </td>
            </tr>
        @else
            <tr>
                <td><b>Grand Total</b></td>
                <td>Rs. {{ IND_num_format($data[0]->total_amount) }}
                </td>
            </tr>
        @endif

        <tr>
            <td><b>Payment Type</b></td>
            <td>{{ $data[0]->payment_type }}</td>
        </tr>

    </table>

    <table>

        <tr>
            <td>
                <div>
                    <h3>Shipping Details</h3>
                    @if (!is_null($data[0]->ship_id))
                        {{-- user  --}}
                        @php
                            $shipData = DB::table('shipping_address')
                                ->where('id', '=', $data[0]->ship_id)
                                ->get();
                        @endphp
                        @if (count($shipData) > 0)
                            @php
                                $stateData = DB::table('states')
                                    ->where('id', '=', $shipData[0]->state)
                                    ->get();
                                
                                $cityData = DB::table('cities')
                                    ->where('id', '=', $shipData[0]->city)
                                    ->get();
                                $name = $shipData[0]->name;
                                $email = $shipData[0]->email;
                                $phone = $shipData[0]->phone;
                                $country = $shipData[0]->country;
                                $state = $stateData[0]->name;
                                $city = $cityData[0]->city;
                                $pincode = $shipData[0]->pincode;
                                $address = $shipData[0]->address;
                            @endphp
                        @else
                            @php
                                $name = '';
                                $email = '';
                                $phone = '';
                                $country = '';
                                $state = '';
                                $city = '';
                                $pincode = '';
                                $address = '';
                            @endphp
                        @endif
                    @else
                        {{-- guest user  --}}
                        @php
                            
                            $name = $data[0]->guest_name;
                            $email = $data[0]->guest_email;
                            $phone = $data[0]->guest_phone;
                            $country = $data[0]->guest_country;
                            $state = $data[0]->guest_state;
                            $city = $data[0]->guest_city;
                            $pincode = $data[0]->guest_pin_code;
                            $address = $data[0]->guest_address;
                        @endphp
                    @endif
                    <strong>Name : </strong>{{ $name }}
                    <br>
                    <strong>Email :</strong> {{ $email }}
                    <br>
                    <strong>Phone : </strong>
                    {{ $phone }}
                    <br>
                    <strong>Address : </strong>
                    {{ $address }}
                </div>
            </td>
        </tr>
    </table>

</body>

</html>
