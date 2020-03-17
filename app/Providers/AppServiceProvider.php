<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\loaisanpham;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp = loaisanpham::all();
          

           
                       
            $view->with('loai_sp',$loai_sp);

        });

    

          view()->composer(['header','page.dathang'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'), 'sanpham_cart'=>$cart->sanpham,'TongTien'=>$cart->TongTien,'TongSL'=>$cart->TongSL]);
            }
        });


        
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
