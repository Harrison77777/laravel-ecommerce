<?php

namespace App\Providers;
use App\Category;
use App\Brand;
use App\Cart;
use App\Logo;
use App\Seo;
use App\Product;
use App\Order;
use App\SocialMediaLink;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $carts = Cart::where('ip_address', request()->ip())->where('order_id', NULL)->get();
        $seo = Seo::first();
        $logo= Logo::first();
        $totalQuantity = 0;

        foreach ($carts as $cart ) {
           $quantity = $cart->product_quantity;
            $totalQuantity = $totalQuantity + $quantity;
        }
        $socialMediaLinks = SocialMediaLink::select('link','logo')->get();
        $categories = Category::with('child_categories')->where('category_id', null)
        ->orderBy('id', 'desc')->get();
        $countProduct = Product::count();
        $countCategory = Category::count();
        $countUnpaidOrder = Order::where('is_paid', 0)->count();
        $countActivatedUser = User::where('status', 1)->count();
        $brands = Brand::select(['brand', 'id'])->orderBy('id', 'desc')->get();
        view()->share('brands', $brands);
        view()->share('categories', $categories);
        view()->share('totalQuantity', $totalQuantity);
        view()->share('logo', $logo);
        view()->share('seo', $seo);
        view()->share('socialMediaLinks', $socialMediaLinks);
        view()->share('countProduct', $countProduct);
        view()->share('countCategory', $countCategory);
        view()->share('countUnpaidOrder', $countUnpaidOrder);
        view()->share('countActivatedUser', $countActivatedUser);
    }
}
