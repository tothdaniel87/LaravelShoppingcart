## LaravelShoppingcart
Fork of 

    Crinsane/LaravelShoppingcart

Some extra features are added.

## Installation

Install the package through [Composer](http://getcomposer.org/). 

Run the Composer require command from the Terminal:

    composer require onweb/shoppingcart
    
If you're using Laravel 5.5, this is all there is to do. 

Should you still be on version 5.4 of Laravel, the final steps for you are to add the service provider of the package and alias the package. To do this open your `config/app.php` file.

Add a new line to the `providers` array:

	Onweb\Shoppingcart\ShoppingcartServiceProvider::class

And optionally add a new line to the `aliases` array:

	'Cart' => Onweb\Shoppingcart\Facades\Cart::class,

Now you're ready to start using the shoppingcart in your application.
