<?php

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

function encodeData($json_data)
{
    $token = base64_encode($json_data);
    for ($i = 0; $i < 5; $i++) {
        $token = base64_encode($token);
    }

    return $token;
}

function decodeData($encodedData)
{
    $decoded = base64_decode($encodedData);
    for ($i = 0; $i < 5; $i++) {
        $decoded = base64_decode($decoded);
    }

    return $decoded;
}

function verifyLogin($token)
{
    $json_data = decodeData($token);
    $data = json_decode($json_data, true);
    $user_id = $data['user_id'];
    $email = $data['email'];
    $role = $data['role'];

    $check = DB::table('logins')->where([
        ['user_id', '=', $user_id],
        ['email', '=', $email],
        ['role', '=', $role],
    ])->count();

    if ($check != 0) {
        return ['status' => true, 'data' => $data];
    } else {
        return ['status' => false, 'data' => $data];
    }
}


// verification for user login 
function verifyUserLogin($token)
{
    $json_data = decodeData($token);
    $data = json_decode($json_data, true);
    $user_id = $data['user_id'];
    $email = $data['email'];
    $role = $data['role'];

    $check = DB::table('users')->where([
        ['user_id', '=', $user_id],
        ['email', '=', $email],
        ['role', '=', $role],
    ])->count();

    if ($check != 0) {
        return ['status' => true, 'data' => $data];
    } else {
        return ['status' => false, 'data' => $data];
    }
}

function loginData($token)
{
    $verification = verifyLogin($token);
    $data = $verification['data'];
    return $data;
}


function companyEmail()
{
    
    return "adabkarionline@gmail.com";
}

function print_pre($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function uid_generator()
{
    $gen_uid = strtoupper(substr(md5(mt_rand(10000, 10000000000)), 22));
    return $gen_uid;
}

function showDate($date)
{
    if (!is_null($date) || $date != '') {
        return date_format(date_create($date), 'd-M-Y');
    } else {
        return '';
    }
}
function showTime($time)
{
    if (!is_null($time) || $time != '') {
        return date_format(date_create($time), 'g:i A');
    } else {
        return '';
    }
}
function showDateTime($datetime)
{
    if (!is_null($datetime) || $datetime != '') {
        return date_format(date_create($datetime), 'd-M-Y, g:i A');
    } else {
        return '';
    }
}

function seo_friendly_url($string)
{
    $string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string);
    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/'), '-', $string);
    return strtolower(trim($string, '-'));
}


function verify_captcha($gcaptcha)
{
    $secrect = '6LfoZGskAAAAAOr9QpOjc9VCtUHIFxR_uyMIZG5T';
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secrect) .  '&response=' . urlencode($gcaptcha) . '&remoteip=' . $ip;

    $api_content = file_get_contents($url);
    $api_response = json_decode($api_content);


    if ($api_response->success === true) {
        return true;
    } else {
        return false;
    }
}


function getAllState()
{
    $data = DB::table('states')->orderBy('name', 'asc')->get();
    $states  = '';
    foreach ($data as $single_state) {
        $states .= "<option value='$single_state->id'>$single_state->name</option>";
    }

    return $states;
}
function new_fileName($file_name)
{
    $new_file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $new_name = substr(md5($file_name) . mt_rand(1000, 10000), 22) . '.' . $new_file_ext;
    return $new_name;
}


function removeFileExtension($path, $file_name)
{
    $get_extension = pathinfo($path, PATHINFO_EXTENSION);
    $length =   strlen($get_extension);
    if ($length == 3) {
        $extension_from_string =  substr($file_name, -4);
    } elseif ($length == 4) {
        $extension_from_string = substr($file_name, -5);
    }
    return  str_replace($extension_from_string, '', $file_name);
}

function IND_num_format($number)
{
    $decimal = (string)($number - floor($number));
    $money = floor($number);
    $length = strlen($money);
    $delimiter = '';
    $money = strrev($money);

    for ($i = 0; $i < $length; $i++) {
        if (($i == 3 || ($i > 3 && ($i - 1) % 2 == 0)) && $i != $length) {
            $delimiter .= ',';
        }
        $delimiter .= $money[$i];
    }

    $result = strrev($delimiter);
    $decimal = preg_replace("/0\./i", ".", $decimal);
    $decimal = substr($decimal, 0, 3);

    if ($decimal != '0') {
        $result = $result . $decimal;
    }

    return $result;
}


function showMonth()
{
    $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];
    $options = '';
    foreach ($months as $month) {
        $options .= "<option value='$month'>$month</option>";
    }

    return $options;
}


function dateDifference($to, $from)
{
    $date1 = date_create($to);
    $date2 = date_create($from);
    // substract date1 from date2
    $diff = date_diff($date1, $date2);
    return $diff->format('%R%a');
}


function yearOption($table)
{
    $data = DB::table($table)->select('year')->distinct()->get();
    $str = "<option value='All'>All</option>";
    foreach ($data as $singleData) {
        $str .= "<option value='$singleData->year'>$singleData->year</option>";
    }
    return $str;
}



function sanitizeInput($input)
{
    return trim(strip_tags($input));
}

function generateId($table, $col, $three_digit_prefix)
{
    $getData  = DB::table("$table")->limit(1)->orderBy('id', 'desc')->get();
    $nextId = 0;
    if (count($getData) != 0) {
        $lastId = $getData[0]->$col;
        $lastNumber = substr($lastId, 7);
        $newNumber = (int) $lastNumber + 1;
        $nextId = $three_digit_prefix . date('Y') .  $newNumber;
    } else {
        $nextId = $three_digit_prefix . date('Y') .  '1';
    }

    return $nextId;
}


function removeExtension($img_name)
{
    $get_extension = pathinfo('mystorage/media/' . $img_name, PATHINFO_EXTENSION);
    $length = strlen($get_extension);
    if ($length == 3) {
        $extension_from_string = substr($img_name, -4);
    } elseif ($length == 4) {
        $extension_from_string = substr($img_name, -5);
    } elseif ($length == 5) {
        $extension_from_string = substr($img_name, -6);
    }
    return  $file_name = str_replace($extension_from_string, '', $img_name);
}




function getMediaFile($id)
{
    $getMedia = DB::table('media')->where('id', '=', $id)->get();
    if (count($getMedia) != 0) {
        $url = $getMedia[0]->img_name;
        $alt = $getMedia[0]->alt;
        $title = $getMedia[0]->title;
        $caption = $getMedia[0]->caption;
        $description = $getMedia[0]->description;
    } else {
        $url = '';
        $alt = '';
        $title = '';
        $caption = '';
        $description = '';
    }
    $src = asset('mystorage/media') . '/' . $url;
    return "<img decoding='async' src='$src' alt='$alt' title='$title' caption='$caption' description='$description' >";
}
function getMediaUrl($id)
{
    $getMedia = DB::table('media')->where('id', '=', $id)->get();
    if (count($getMedia) != 0) {
        $url = $getMedia[0]->img_name;
        $alt = $getMedia[0]->alt;
        $title = $getMedia[0]->title;
        $caption = $getMedia[0]->caption;
        $description = $getMedia[0]->description;
    } else {
        $url = '';
        $alt = '';
        $title = '';
        $caption = '';
        $description = '';
    }
    $src = asset('mystorage/media') . '/' . $url;
    return  [
        'src' => $src,
        'alt' => $alt,
        'title' => $title,
        'caption' => $caption,
        'des' => $description,
    ];
}

function getPortfolioCategoryName($cat_id)
{
    $data = DB::table('portfolio_category')->where('cat_id', '=', "$cat_id")->get();
    if (count($data) != 0) {
        return $data[0]->cat_name;
    } else {
        return "Not Found";
    }
}


function getBlogCategoryName($cat_id)
{
    $data = DB::table('blog_category')->where('cat_id', '=', "$cat_id")->get();
    if (count($data) != 0) {
        return $data[0]->cat_name;
    } else {
        return "Not Found";
    }
}


function showComments($blogId)
{
    $comments = DB::table('comments')->where([
        ['blog_id', '=', $blogId],
        ['status', '=', 1],
    ])
        ->orderBy('id', 'desc')
        ->get();
    if (count($comments) != 0) {
        $comment_str  = "";
        foreach ($comments as $single_comment) {
            $full_name = $single_comment->full_name;
            $date_time = showDateTime($single_comment->created_at);
            $comment = $single_comment->comment;
            $comment_str .= "
            <div class='col-sm position-relative mb-3 pb-3 border-bottom'>
               <h6 class='font-w-6'>$full_name</h6>
               <div class='comment-date'>$date_time</div>
               <p class='mb-0 mt-3'> $comment</p>
            </div>";
        }

        return $comment_str;
    } else {
        return "<h6> 0 Comments </h6>";
    }
}


function getNexPrevBlogUrl($id)
{
    $next_data = DB::table('blogs')->where([
        ['id', '>', $id],
        ['status', '=', 'published'],
    ])
        ->limit('1')
        ->get();

    $prev_data = DB::table('blogs')->where([
        ['id', '<', $id],
        ['status', '=', 'published']
    ])
        ->limit('1')
        ->get();

    if (count($next_data) > 0) {
        $next_url = route('frontend.blogDetails',  $next_data[0]->route_name);
    } else {
        $next_url = 0;
    }
    if (count($prev_data) > 0) {
        $prev_url = route('frontend.blogDetails',  $prev_data[0]->route_name);
    } else {
        $prev_url = 0;
    }

    return ['next' => $next_url, 'prev' => $prev_url];
}

function getCategoryOption($table, $col, $to_be_value)
{
    $data = DB::table($table)->get();
    $str = '';
    foreach ($data as $singleData) {
        $value = $singleData->$to_be_value;
        $show_value = $singleData->$col;
        $str .= "<option value='$value'>$show_value</option>";
    }
    return $str;
}

function getProductVariation($product_id)
{
    $price = DB::table('product_variation')->where('product_id', '=', $product_id)->orderBy('id', 'asc')->get();
    return $price;
}

function getProductSize($product_id)
{
    $size = DB::table('product_variation')->select('size')->distinct()->where('product_id', '=', $product_id)->orderBy('id', 'asc')->get();
    $option = '';
    if (count($size) > 0) {
        foreach ($size as $single_size) {
            $option .= "<option value='$single_size->size'>$single_size->size</option>";
        }
    }
    return $option;
}


function getProductUsingProductId($pro_id)
{
    $data = DB::table('products')->where('product_id', '=', $pro_id)->get();
    return $data;
}


function getCartTotal($for)
{
    $sub_total = 0;
    $grandTotal = 0;
    $coupon_discount = 0;
    $coupon_msg = '';

    if ($for == 'addtocart') {
        if (session()->has('cart')) {
            $cart = session()->get('cart');
            foreach ($cart as $single_cart) {
                $cart_variant = $single_cart['variant'];
                $cart_qty = $single_cart['quantity'];
                $getData =  DB::table('product_variation')->where('id', '=', $cart_variant)->get();
                if (count($getData) > 0) {
                    $price = $cart_qty * $getData[0]->price;
                    $sub_total += $price;
                }
            }
        }
    } elseif ($for == 'buynow') {
        if (session()->has('buynow')) {
            $buynow = session()->get('buynow');
            foreach ($buynow as $single_buynow) {
                $buynow_variant = $single_buynow['variant'];
                $buynow_qty = $single_buynow['quantity'];
                $getData =  DB::table('product_variation')->where('id', '=', $buynow_variant)->get();
                if (count($getData) > 0) {
                    $price = $buynow_qty * $getData[0]->price;
                    $sub_total += $price;
                }
            }
        }
    }



    // coupon code amount 
    // if (session()->has('coupon')) {
    //     $coupon_code = session()->get('coupon');
    //     $couponValidity = couponValidity($coupon_code);
    //     if ($couponValidity['status'] === true) {
    //         $couponData = $couponValidity['couponData'];
    //         $min_amount = $couponData->min_amount;

    //         if ($sub_total >= $min_amount) {
    //             $discount = $couponData->discount;
    //             $calculateDiscount = ($sub_total * $discount) / 100;
    //             $coupon_discount = $calculateDiscount;
    //         } else {
    //             $coupon_msg = "Coupon code valid on shopping upto Rs. $min_amount";
    //         }
    //     }
    // }

    // grand total 

    $grandTotal = $sub_total - $coupon_discount;
    // return ['subTotal' => $sub_total, 'grandTotal' => $grandTotal, 'couponDiscount' => $coupon_discount, 'couponMsg' => $coupon_msg];
    return ['subTotal' => $sub_total, 'grandTotal' => $grandTotal];
}


function couponValidity($code)
{
    $coupon_data = DB::table('coupons')->where('code', '=', $code)->get();

    $str_valid_till = strtotime($coupon_data[0]->valid_till);
    // Create a new instance of Carbon with the current date and time
    $dateTime = Carbon::now();
    // Format the date and time to match Laravel's created_at format
    $formattedDateTime = strtotime($dateTime->toDateTimeString());

    $valid_till = showDateTime($coupon_data[0]->valid_till);
    if ($formattedDateTime < $str_valid_till) {
        return  ['status' => true, 'couponData' => $coupon_data[0]];
    } else {
        return  ['status' => false,];
    }
}


function checkUserLogin()
{
    if (session()->has('abcdefgh')) {
        $token = session()->get('abcdefgh');
        $verification = verifyUserLogin($token);
        $status = $verification['status'];
        $data = $verification['data'];
        if ($status == 1 || $status === true) {
            $role = $data['role'];
            if ($role == 'user') {
                return ['status' => true, 'data' => $data];
            } else {
                return ['status' => false,];
            }
        } else {
            return ['status' => false,];
        }
    } else {
        return ['status' => false,];
    }
}



function stringCutter($string, $start, $end, $addString)
{
    $cutstring = substr($string, $start, $end);
    $newString = $cutstring . '...' . $addString;
    return $newString;
}


function review_calculation($pro_id)
{
    $count_review = DB::table('product_review')->where([['product_id', '=', $pro_id], ['status', '=', 1]])->count();
    if ($count_review > 0) {

        $total_review = DB::table('product_review')->where('product_id', '=', $pro_id)->count();
        $five_star = DB::table('product_review')->where([['product_id', '=', $pro_id], ['star', '=', 5], ['status', '=', 1]])->count();
        $four_star = DB::table('product_review')->where([['product_id', '=', $pro_id], ['star', '=', 4], ['status', '=', 1]])->count();
        $three_star = DB::table('product_review')->where([['product_id', '=', $pro_id], ['star', '=', 3], ['status', '=', 1]])->count();
        $two_star = DB::table('product_review')->where([['product_id', '=', $pro_id], ['star', '=', 2], ['status', '=', 1]])->count();
        $one_star = DB::table('product_review')->where([['product_id', '=', $pro_id], ['star', '=', 1], ['status', '=', 1]])->count();

        $five_star_per = round((($five_star * 100) / $total_review), 2);
        $four_star_per = round((($four_star * 100) / $total_review), 2);
        $three_star_per = round((($three_star * 100) / $total_review), 2);
        $two_star_per = round((($two_star * 100) / $total_review), 2);
        $one_star_per = round((($one_star * 100) / $total_review), 2);


        $overall_rating = round((((1 * $one_star) + (2 * $two_star) + (3 * $three_star) + (4 * $four_star) + (5 * $five_star)) / $total_review), 1);

        $overall_rating_per = round((($overall_rating * 100) / 5), 1);

        $reviews = array();

        $reviews['total_review'] = $total_review;
        $reviews['five_star'] = $five_star;
        $reviews['four_star'] = $four_star;
        $reviews['three_star'] = $three_star;
        $reviews['two_star'] = $two_star;
        $reviews['one_star'] = $one_star;
        $reviews['five_star_per'] = $five_star_per;
        $reviews['four_star_per'] = $four_star_per;
        $reviews['three_star_per'] = $three_star_per;
        $reviews['two_star_per'] = $two_star_per;
        $reviews['one_star_per'] = $one_star_per;
        $reviews['overall_rating'] = $overall_rating;
        $reviews['overall_rating_per'] = $overall_rating_per;

        return $reviews;
    } else {
        $total_review = 0;
        $five_star = 0;
        $four_star = 0;
        $three_star = 0;
        $two_star = 0;
        $one_star = 0;
        $five_star_per = 0;
        $four_star_per = 0;
        $three_star_per = 0;
        $two_star_per = 0;
        $one_star_per = 0;
        $overall_rating  = 0;
        $overall_rating_per = 0;
        $reviews = array();

        $reviews['total_review'] = $total_review;
        $reviews['five_star'] = $five_star;
        $reviews['four_star'] = $four_star;
        $reviews['three_star'] = $three_star;
        $reviews['two_star'] = $two_star;
        $reviews['one_star'] = $one_star;
        $reviews['five_star_per'] = $five_star_per;
        $reviews['four_star_per'] = $four_star_per;
        $reviews['three_star_per'] = $three_star_per;
        $reviews['two_star_per'] = $two_star_per;
        $reviews['one_star_per'] = $one_star_per;
        $reviews['overall_rating'] = $overall_rating;
        $reviews['overall_rating_per'] = $overall_rating_per;
        return $reviews;
    }
}



function generateOrderId()
{
    $getData = DB::table('orders')->orderBy('id', 'desc')->limit(1)->get();
    $nextId = 0;

    if (count($getData) != 0) {
        $lastId = $getData[0]->order_id;

        if (strpos($lastId, "AB") >= 0) {
            $lastNumber = substr($lastId, 2);
            $newNumber = (int) $lastNumber + 1;
            $nextId = 'AB' .   $newNumber;
        } else {
            $nextId = 'AB1001';
        }
    } else {
        $nextId = 'AB1001';
    }


    return $nextId;
}
