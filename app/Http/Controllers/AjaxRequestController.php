<?php

namespace App\Http\Controllers;

use App\Models\MediaModel;
use App\Models\BlogComments;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\WishListModel;
use App\Models\ProductReviewModel;
use Illuminate\Support\Facades\DB;
use App\Models\ShippingAddressModel;
use App\Models\ProductVariationModel;


class AjaxRequestController extends Controller
{
    public function ajaxRequest(Request $request)
    {

        if ($request->has('isset_get_modal_media')) {
            $page = $request->page;
            // Define the number of posts to load per page
            $perPage = 18;

            // Calculate the offset based on the page number
            $offset = ($page - 1) * $perPage;

            $mediaData =  MediaModel::orderBy('id', 'desc')
                ->offset($offset)
                ->limit($perPage)
                ->get();
            $data = [];

            if (count($mediaData) != 0) {
                foreach ($mediaData as $single_media) {
                    $url =  asset('mystorage/media/' . $single_media->img_name);
                    $id = $single_media->id;
                    array_push($data, ['id' => $id, 'url' => $url]);
                }
                return response()->json([
                    'status' => true,
                    'media' => $data
                ]);
            } else {
                return response()->json([
                    'status' => false,
                    'media' => $data
                ]);
            }
        }

        if ($request->has('isset_blog_comment_status')) {
            $comment_id = $request->comment_id;
            $commentData = BlogComments::where('id', '=', $comment_id)->get();
            if (count($commentData) != 0) {
                $status = $commentData[0]->status;
                if ($status == 0) {
                    $commentData[0]->status = 1;
                    $saveStatus = $commentData[0]->save();
                } else {
                    $commentData[0]->status = 0;
                    $saveStatus = $commentData[0]->save();
                }
                if ($saveStatus === true) {
                    return response()->json([
                        'status' => true,
                        'message' => 'Status Updated Successfully',
                        'redirect' => ''
                    ]);
                } else {
                    return response()->json([
                        'status' => false,
                        'message' => 'Failed to updated status',
                        'redirect' => ''
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to updated status',
                    'redirect' => ''
                ]);
            }
        }

        //  validate product sku
        if ($request->has('isset_validate_sku')) {
            $sku = $request->sku;

            $count = ProductVariationModel::where('sku', '=', $sku)->count();
            if ($count > 0) {
                return response()->json([
                    'status' => false,

                ]);
            } else {
                return response()->json([
                    'status' => true,

                ]);
            }
        }


        if ($request->has('isset_verify_product_review')) {
            $review_id = $request->review_id;
            $status = $request->status;

            $data  = ProductReviewModel::find($review_id);
            $data->status = $status;
            $data->save();
        }
    }

    // frontend ajax started 

    public function frontAjaxRequest(Request $request)
    {
        // get product color 
        if ($request->has('isset_get_product_color')) {
            $size = sanitizeInput($request->size);
            $product_id = sanitizeInput($request->product_id);

            $getProductVariant = ProductVariationModel::where([
                ['product_id', '=', $product_id],
                ['size', '=', $size],

            ])->get();
            $product_variant = [];
            if (count($getProductVariant) > 0) {
                foreach ($getProductVariant as $single_variant) {
                    $color = $single_variant->color;
                    $variant_id = $single_variant->id;

                    $color_img_json = json_decode($single_variant->img, true);
                    $color_img = getMediaUrl($color_img_json[0]['file_id']);

                    array_push($product_variant, [
                        'color' => $color,
                        'color_img' => $color_img['src'],
                        'variant_id' => $variant_id,
                    ]);
                }

                if (count($product_variant) > 0) {
                    return response()->json([
                        'status' => true,
                        'data' => $product_variant
                    ]);
                } else {
                    return response()->json([
                        'status' => false
                    ]);
                }
            } else {
                return response()->json([
                    'status' => false
                ]);
            }
        }
        // get product details 

        if ($request->has('isset_get_product_details')) {
            $product_id = sanitizeInput($request->product_id);
            $size = sanitizeInput($request->size);
            $color = sanitizeInput($request->color);

            $getProductDetails = ProductVariationModel::where([
                ['product_id', '=', $product_id],
                ['size', '=', $size],
                ['color', '=', $color],
            ])->get();
            if (count($getProductDetails) > 0) {


                // get pictures
                $pictures = [];
                $getColor_img_json = json_decode($getProductDetails[0]->img, true);
                foreach ($getColor_img_json as $single_color_img) {
                    $getImg = getMediaUrl($single_color_img['file_id']);
                    array_push($pictures, $getImg);
                }

                if (session()->has('cart')) {
                    $cart = session()->get('cart');
                    $has_in_cart = false;
                    foreach ($cart as $single_cart) {
                        $cart_variant = $single_cart['variant'];
                        if ($getProductDetails[0]->id == $cart_variant) {
                            $has_in_cart = true;
                            break;
                        }
                    }
                } else {
                    $has_in_cart = false;
                }

                return response()->json([
                    'status' => true,
                    'sku' => $getProductDetails[0]->sku,
                    'stock' => $getProductDetails[0]->stock,
                    'price' => $getProductDetails[0]->price,
                    'oldprice' => $getProductDetails[0]->oldprice,
                    'variant_id' => $getProductDetails[0]->id,
                    'pictures' => $pictures,
                    'cart_status' => $has_in_cart,
                ]);
            } else {
                return response()->json([
                    'status' => false
                ]);
            }
        }

        // cart quantity update 

        if ($request->has('isset_update_cart_qty')) {
            $index = sanitizeInput($request->index);
            $type = sanitizeInput($request->type);

            $cart = session()->get('cart');
            $qty = $cart[$index]['quantity'];
            if ($type == 'plus') {
                $qty++;
            } elseif ($type == 'minus') {
                if ($qty > 1) {
                    $qty--;
                }
            }

            $cart[$index]['quantity'] = $qty;

            session()->put('cart', $cart);

            return response()->json([
                'status' => true
            ]);
        }
        // remove product from cart 

        if ($request->has('isset_remove_product')) {
            $index = sanitizeInput($request->index);
            if (session()->has('cart')) {
                $cart = session()->get('cart');
                if (count($cart) > 0) {
                    unset($cart[$index]);
                }
                $newCart = array_values($cart);
                session()->put('cart', $newCart);
                return response()->json([
                    'status' => true,
                ]);
            } else {
                return response()->json([
                    'status' => false,
                ]);
            }
        }

        // clear shopping cart 

        if ($request->has('isset_clear_cart')) {
            session()->forget('cart');
            return response()->json([
                'status' => true,
            ]);
        }

        // remove coupon 

        if ($request->has('isset_remove_coupon')) {

            $cartTotal = getCartTotal('addtocart');
            return response()->json([
                'status' => true,
                'data' => $cartTotal,
            ]);
        }

        // get city
        if ($request->has('isset_get_city_option')) {
            $state = $request->state;
            $getcity =  DB::table('cities')->where('state_id', '=', $state)->get();

            $options = [];
            if (!is_null($getcity)) {
                foreach ($getcity as $single_city) {
                    array_push($options, ['city' => $single_city->city, 'id' => $single_city->id]);
                }
            }
            return response()->json([
                'options' => $options,
            ]);
        }

        // deleted address 

        if ($request->has('isset_deleted_address')) {
            $id = sanitizeInput($request->id);

            $delete = ShippingAddressModel::where('id', '=', $id)->delete();

            return response()->json([
                'status' => true,
            ]);
        }
        // edit address 

        if ($request->has('isset_edit_address')) {
            $id = sanitizeInput($request->id);

            $data = ShippingAddressModel::find($id);
            $getAllState =  DB::table('states')->orderBy('name', 'asc')->get();

            // get selected state and city 

            $stateData = DB::table('states')->where('id', '=', $data->state)->get();
            $state = $stateData[0]->name;

            $cityData = DB::table('cities')->where('id', '=', $data->city)->get();
            $city = $cityData[0]->city;

            // edit url 

            $edit_url = route('user_account.editShippingAddress', $data->id);
            return response()->json([
                'status' => true,
                'data' => $data,
                'state' => $getAllState,
                'selected_state' => $state,
                'selected_city' => $city,
                'edit_url' => $edit_url,
            ]);
        }

        // get user wishlist 

        if ($request->has('isset_get_user_wishlist')) {
            $user_id = sanitizeInput($request->user_id);
            $getWishlist = WishListModel::where('user_id', '=', $user_id)->count();
            return $getWishlist;
        }

        // delete wishlist 
        if ($request->has('isset_deleted_wishlist')) {
            $id = sanitizeInput($request->id);

            $delete = WishListModel::where('id', '=', $id)->delete();

            return response()->json([
                'status' => true,
            ]);
        }

        // get product image 

        if ($request->has('isset_get_product_front_image')) {
            $product_id  = sanitizeInput($request->product_id);
            $variant_id  = sanitizeInput($request->variant_id);

            $getProductDetails = ProductModel::where([
                ['product_id', '=', $product_id],
                ['status', '=', 'ACTIVE'],
            ])->get();

            $urls = [];
            $temp_all_pic = [];

            if (count($getProductDetails) > 0) {
                $main_pic_json =  json_decode($getProductDetails[0]->main_pic, true);
                $getMainPic = getMediaUrl($main_pic_json[0]['file_id']);
                $urls['main_pic'] = ['src' => $getMainPic['src'], 'alt' => $getMainPic['alt'], 'title' => $getMainPic['title']];
                $all_pic_json = json_decode($getProductDetails[0]->all_pic, true);

                if ($all_pic_json > 0) {
                    foreach ($all_pic_json as $single_all_pic) {
                        $getSingle_all_pic = getMediaUrl($single_all_pic['file_id']);
                        array_push($temp_all_pic, ['src' => $getSingle_all_pic['src'], 'alt' => $getSingle_all_pic['alt'], 'title' => $getSingle_all_pic['title']]);
                    }
                }
                $urls['all_pic'] = $temp_all_pic;
                return response()->json([
                    'status' => true,
                    'data' => $urls
                ]);
            } else {
                return response()->json([
                    'status' => false,

                ]);
            }
        }

        // sort product 

        if ($request->has('isset_sort_product')) {
            $sort_by = sanitizeInput($request->sort_by);
            session()->put('sort_by', $sort_by);
        }
    }
}
