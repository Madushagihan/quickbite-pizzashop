<!-- Slide-out Cart Sidebar -->
<div id="cartSidebar" class="fixed inset-y-0 right-0 w-80 sm:w-96 bg-white dark:bg-[#101010] border-l border-gray-200 dark:border-gray-800 shadow-2xl z-50 transform translate-x-full transition-transform duration-300 flex flex-col">
    <div class="p-4 border-b border-gray-200 dark:border-gray-800 flex justify-between items-center bg-gray-50 dark:bg-[#161616]">
        <h3 class="font-extrabold text-base flex items-center gap-2 text-gray-900 dark:text-white">
            <i class="fa-solid fa-cart-shopping text-brandOrange"></i> Your Order Cart
        </h3>
        <button onclick="toggleCart()" class="text-gray-400 hover:text-gray-600 dark:hover:text-white text-2xl transition p-1" aria-label="Close Cart">&times;</button>
    </div>
    
    <div id="cartItems" class="p-4 flex-1 overflow-y-auto space-y-3">
        <p class="text-gray-400 text-xs text-center py-10">Your cart is empty.</p>
    </div>

    <div class="p-4 border-t border-gray-200 dark:border-gray-800 space-y-3 bg-gray-50 dark:bg-[#161616]">
        <div class="flex justify-between font-extrabold text-sm text-gray-900 dark:text-white">
            <span>Subtotal:</span>
            <span id="cartTotal" class="text-brandOrange">$0.00</span>
        </div>
        <p class="text-[11px] text-gray-500 dark:text-gray-400">Taxes and lightning 30-min delivery calculated at checkout.</p>
        <button onclick="checkoutOrder()" class="w-full bg-brandOrange hover:bg-yellow-500 text-black font-extrabold text-xs py-3.5 rounded-xl transition shadow-lg hover:scale-[1.02] transform">
            PROCEED TO CHECKOUT &rarr;
        </button>
    </div>
</div>
