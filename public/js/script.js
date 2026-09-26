// Theme State & Toggle
document.addEventListener("DOMContentLoaded", () => {
    const savedTheme = localStorage.getItem("theme");
    const html = document.documentElement;
    const themeLabel = document.getElementById("themeLabel");

    if (savedTheme === "light") {
        html.classList.remove("dark");
        if(themeLabel) themeLabel.innerText = "Light Mode";
    } else {
        html.classList.add("dark");
        if(themeLabel) themeLabel.innerText = "Dark Mode";
    }

    // Load saved cart from localStorage if present
    const savedCart = localStorage.getItem("quickbite_cart");
    if (savedCart) {
        try {
            cart = JSON.parse(savedCart);
            updateCartUI(false);
        } catch(e) {
            cart = [];
        }
    }

    // Initialize number counter animations on scroll
    initCounters();
});

function toggleTheme() {
    const html = document.documentElement;
    const themeLabel = document.getElementById("themeLabel");

    if (html.classList.contains("dark")) {
        html.classList.remove("dark");
        localStorage.setItem("theme", "light");
        if(themeLabel) themeLabel.innerText = "Light Mode";
    } else {
        html.classList.add("dark");
        localStorage.setItem("theme", "dark");
        if(themeLabel) themeLabel.innerText = "Dark Mode";
    }
}

// Cart Drawer & State
let cart = [];

function toggleCart() {
    const sidebar = document.getElementById('cartSidebar');
    if (sidebar) {
        sidebar.classList.toggle('translate-x-full');
    }
}

function addToCart(itemName, itemPrice, eventSource = null) {
    const existing = cart.find(i => i.name === itemName);
    if (existing) {
        existing.quantity += 1;
    } else {
        cart.push({ name: itemName, price: parseFloat(itemPrice), quantity: 1 });
    }
    saveCart();
    updateCartUI(true);
    showToast(`Added "${itemName}" to cart!`);

    // Trigger Fly to Cart animation if event source exists
    if (eventSource || window.event) {
        const sourceElement = eventSource || (window.event ? window.event.currentTarget || window.event.target : null);
        if (sourceElement) {
            flyToCartAnimation(sourceElement);
        }
    }
}

function removeFromCart(itemName) {
    cart = cart.filter(i => i.name !== itemName);
    saveCart();
    updateCartUI(false);
}

function saveCart() {
    localStorage.setItem("quickbite_cart", JSON.stringify(cart));
}

function updateCartUI(shouldBump = false) {
    const cartContainer = document.getElementById('cartItems');
    const cartCount = document.getElementById('cartCount');
    const cartTotal = document.getElementById('cartTotal');

    let totalCount = 0;
    let totalPrice = 0;

    if (!cartContainer) return;

    if (cart.length === 0) {
        cartContainer.innerHTML = '<p class="text-gray-400 text-xs text-center py-10">Your cart is empty.</p>';
    } else {
        cartContainer.innerHTML = cart.map(item => {
            totalCount += item.quantity;
            totalPrice += item.price * item.quantity;
            return `
                <div class="flex justify-between items-center bg-white dark:bg-[#181818] p-3 rounded-xl border border-gray-200 dark:border-gray-800 text-xs shadow-sm hover:border-brandOrange/40 transition">
                    <div>
                        <h4 class="font-bold text-gray-900 dark:text-white">${item.name}</h4>
                        <p class="text-gray-500 dark:text-gray-400 text-[10px]">$${item.price.toFixed(2)} x ${item.quantity}</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="font-extrabold text-brandOrange">$${(item.price * item.quantity).toFixed(2)}</span>
                        <button onclick="removeFromCart('${item.name.replace(/'/g, "\\'")}')" class="text-red-500 hover:text-red-400 text-xs transition hover:scale-125 transform p-1" title="Remove"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
            `;
        }).join('');
    }

    if (cartCount) {
        cartCount.innerText = totalCount;
        if (shouldBump) {
            cartCount.classList.remove('animate-cart-bump');
            void cartCount.offsetWidth; // trigger reflow
            cartCount.classList.add('animate-cart-bump');
        }
    }
    if (cartTotal) cartTotal.innerText = `$${totalPrice.toFixed(2)}`;
}

// Fly to Cart Animation
function flyToCartAnimation(buttonEl) {
    const cartIcon = document.getElementById('cartCount');
    if (!buttonEl || !cartIcon) return;

    const btnRect = buttonEl.getBoundingClientRect();
    const cartRect = cartIcon.getBoundingClientRect();

    const flyer = document.createElement('div');
    flyer.className = 'flying-cart-item bg-brandOrange text-black w-8 h-8 flex items-center justify-center text-xs font-black';
    flyer.innerHTML = '<i class="fa-solid fa-pizza-slice"></i>';
    flyer.style.left = `${btnRect.left + (btnRect.width / 2) - 16}px`;
    flyer.style.top = `${btnRect.top + (btnRect.height / 2) - 16}px`;
    flyer.style.opacity = '1';
    flyer.style.transform = 'scale(1.2)';

    document.body.appendChild(flyer);

    requestAnimationFrame(() => {
        flyer.style.transform = 'scale(0.3) rotate(360deg)';
        flyer.style.left = `${cartRect.left}px`;
        flyer.style.top = `${cartRect.top}px`;
        flyer.style.opacity = '0.3';
    });

    setTimeout(() => {
        flyer.remove();
        cartIcon.classList.remove('animate-cart-bump');
        void cartIcon.offsetWidth;
        cartIcon.classList.add('animate-cart-bump');
    }, 750);
}

function checkoutOrder() {
    if (cart.length === 0) {
        alert("Your cart is empty. Please add delicious items to order!");
    } else {
        alert("🎉 Order placed successfully! Your gourmet food will arrive in 30 minutes.");
        cart = [];
        saveCart();
        updateCartUI(true);
        toggleCart();
    }
}

// Live Search Filter with smooth fade
function searchMenuItems() {
    const searchEl = document.getElementById('searchInput');
    if (!searchEl) return;
    const input = searchEl.value.toLowerCase().trim();
    const items = document.querySelectorAll('.menu-item');

    items.forEach(item => {
        const titleEl = item.querySelector('.item-name');
        if (titleEl) {
            const title = titleEl.innerText.toLowerCase();
            if (title.includes(input)) {
                item.style.display = 'flex';
                item.style.animation = 'fadeIn 0.4s ease forwards';
            } else {
                item.style.display = 'none';
            }
        }
    });
}

// Category Filter with smooth transition
function filterMenu(category, event) {
    const items = document.querySelectorAll('.menu-item');
    const buttons = document.querySelectorAll('.category-btn');

    buttons.forEach(btn => {
        btn.classList.remove('bg-brandOrange', 'text-black', 'scale-105');
        btn.classList.add('bg-white', 'dark:bg-[#121212]', 'text-gray-700', 'dark:text-gray-300');
    });

    const activeBtn = event ? (event.currentTarget || event.target) : null;
    if (activeBtn) {
        activeBtn.classList.remove('bg-white', 'dark:bg-[#121212]', 'text-gray-700', 'dark:text-gray-300');
        activeBtn.classList.add('bg-brandOrange', 'text-black', 'scale-105');
    }

    items.forEach(item => {
        if (category === 'all' || item.classList.contains(category)) {
            item.style.display = 'flex';
            item.style.animation = 'fadeIn 0.4s ease forwards';
        } else {
            item.style.display = 'none';
        }
    });
}

// Quick View Modal
function openQuickView(title, price, desc, img, numPrice, category) {
    const titleEl = document.getElementById('modalTitle');
    const priceEl = document.getElementById('modalPrice');
    const descEl = document.getElementById('modalDesc');
    const imgEl = document.getElementById('modalImg');
    const catEl = document.getElementById('modalCategory');
    const modalAddBtn = document.getElementById('modalAddBtn');
    const modal = document.getElementById('quickViewModal');

    if (titleEl) titleEl.innerText = title;
    if (priceEl) priceEl.innerText = price;
    if (descEl) descEl.innerText = desc;
    if (imgEl) imgEl.src = img;
    if (catEl) catEl.innerText = category || 'Featured Item';

    if (modalAddBtn) {
        modalAddBtn.onclick = function(e) {
            addToCart(title, numPrice, e.currentTarget);
            closeQuickView();
        };
    }

    if (modal) modal.classList.remove('hidden');
}

function closeQuickView() {
    const modal = document.getElementById('quickViewModal');
    if (modal) modal.classList.add('hidden');
}

// Animated Toast
function showToast(message) {
    let toast = document.getElementById('quickbite-toast');
    if (!toast) {
        toast = document.createElement('div');
        toast.id = 'quickbite-toast';
        toast.className = 'fixed bottom-6 right-6 z-50 bg-black/95 dark:bg-white text-white dark:text-black font-extrabold text-xs py-3.5 px-5 rounded-2xl shadow-2xl transition-all duration-300 transform translate-y-12 opacity-0 flex items-center gap-3 border border-brandOrange/40 backdrop-blur-md';
        document.body.appendChild(toast);
    }
    toast.innerHTML = `
        <span class="w-6 h-6 rounded-full bg-brandOrange text-black flex items-center justify-center text-[10px]"><i class="fa-solid fa-check"></i></span>
        <span>${message}</span>
    `;
    toast.classList.remove('translate-y-12', 'opacity-0');
    toast.classList.add('translate-y-0', 'opacity-100');

    clearTimeout(toast._timeout);
    toast._timeout = setTimeout(() => {
        toast.classList.add('translate-y-12', 'opacity-0');
        toast.classList.remove('translate-y-0', 'opacity-100');
    }, 2800);
}

// Live Number Counter on Scroll
function initCounters() {
    const counters = document.querySelectorAll('.counter-val');
    if (!counters.length) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const target = entry.target;
                const finalVal = parseFloat(target.getAttribute('data-target'));
                const suffix = target.getAttribute('data-suffix') || '';
                const prefix = target.getAttribute('data-prefix') || '';
                const isDecimal = target.getAttribute('data-decimal') === 'true';
                
                let current = 0;
                const duration = 1800; // ms
                const steps = 60;
                const increment = finalVal / steps;
                const stepTime = duration / steps;

                const timer = setInterval(() => {
                    current += increment;
                    if (current >= finalVal) {
                        current = finalVal;
                        clearInterval(timer);
                    }
                    target.innerText = prefix + (isDecimal ? current.toFixed(1) : Math.floor(current).toLocaleString()) + suffix;
                }, stepTime);

                observer.unobserve(target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
}