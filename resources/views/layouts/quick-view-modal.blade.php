<!-- Quick View Modal -->
<div id="quickViewModal" class="fixed inset-0 bg-black/80 z-50 hidden flex items-center justify-center p-4 backdrop-blur-sm">
    <div class="bg-white dark:bg-[#141414] border border-gray-200 dark:border-gray-800 max-w-md w-full rounded-3xl p-6 relative shadow-2xl space-y-4 animate-in fade-in zoom-in-95 duration-200">
        <button onclick="closeQuickView()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 dark:hover:text-white text-2xl transition p-1" aria-label="Close modal">&times;</button>
        <img id="modalImg" class="w-full h-52 object-cover rounded-2xl shadow-inner" src="" alt="Product Detail">
        <div>
            <span id="modalCategory" class="text-[10px] font-extrabold text-brandOrange uppercase tracking-wider bg-brandOrange/10 px-2 py-0.5 rounded"></span>
            <h3 id="modalTitle" class="text-xl font-black text-gray-900 dark:text-white mt-1"></h3>
        </div>
        <p id="modalDesc" class="text-xs text-gray-600 dark:text-gray-400 leading-relaxed"></p>
        <div class="flex justify-between items-center pt-3 border-t border-gray-200 dark:border-gray-800">
            <span id="modalPrice" class="text-2xl font-black text-brandOrange"></span>
            <button id="modalAddBtn" class="bg-brandRed hover:bg-red-700 text-white font-extrabold text-xs px-6 py-3 rounded-xl transition shadow-md flex items-center gap-2">
                <i class="fa-solid fa-basket-shopping"></i> ADD TO CART
            </button>
        </div>
    </div>
</div>
