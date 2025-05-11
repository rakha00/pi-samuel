import Alpine from "alpinejs";

Alpine.store("cart", {
    items: [],

    get totalItems() {
        return this.items.reduce((total, item) => total + item.quantity, 0);
    },

    get totalAmount() {
        return this.items.reduce(
            (total, item) => total + item.price * item.quantity,
            0
        );
    },

    addItem(product, quantity = 1) {
        const existingItem = this.items.find((item) => item.id === product.id);

        if (existingItem) {
            existingItem.quantity += quantity;
        } else {
            this.items.push({
                ...product,
                quantity,
            });
        }
    },

    removeItem(productId) {
        this.items = this.items.filter((item) => item.id !== productId);
    },

    updateQuantity(productId, quantity) {
        const item = this.items.find((item) => item.id === productId);
        if (item) {
            item.quantity = Math.max(1, quantity);
        }
    },

    clearCart() {
        this.items = [];
    },
});

Alpine.store("products", {
    items: [
        {
            id: 1,
            name: "Madu Hutan",
            description:
                "Madu hutan murni dari pedalaman Indonesia dengan kualitas premium.",
            price: 85000,
            image: "https://images.pexels.com/photos/9464231/pexels-photo-9464231.jpeg?auto=compress&cs=tinysrgb&w=600",
            isNew: true,
            isBestseller: true,
        },
        {
            id: 2,
            name: "Madu Kelengkeng",
            description:
                "Madu dengan aroma kelengkeng yang khas, manis dan sangat lezat.",
            price: 95000,
            image: "https://images.pexels.com/photos/6412511/pexels-photo-6412511.jpeg?auto=compress&cs=tinysrgb&w=600",
            isNew: false,
            isBestseller: true,
        },
        {
            id: 3,
            name: "Madu Randu",
            description:
                "Madu dari bunga randu dengan tekstur lembut dan rasa yang unik.",
            price: 75000,
            image: "https://images.pexels.com/photos/11170284/pexels-photo-11170284.jpeg?auto=compress&cs=tinysrgb&w=600",
            isNew: false,
            isBestseller: false,
        },
        {
            id: 4,
            name: "Madu Premium",
            description:
                "Madu kualitas premium dengan kandungan enzim terbaik, tidak dipanaskan.",
            price: 125000,
            image: "https://images.pexels.com/photos/7659726/pexels-photo-7659726.jpeg?auto=compress&cs=tinysrgb&w=600",
            isNew: true,
            isBestseller: false,
        },
        {
            id: 5,
            name: "Madu Kalimantan",
            description:
                "Madu dari hutan Kalimantan yang kaya akan manfaat dan nutrisi.",
            price: 110000,
            image: "https://images.pexels.com/photos/14931657/pexels-photo-14931657.jpeg?auto=compress&cs=tinysrgb&w=600",
            isNew: false,
            isBestseller: true,
        },
        {
            id: 6,
            name: "Madu Manuka",
            description:
                "Madu Manuka dengan kualitas terbaik dan sertifikasi internasional.",
            price: 250000,
            image: "https://images.pexels.com/photos/5413121/pexels-photo-5413121.jpeg?auto=compress&cs=tinysrgb&w=600",
            isNew: true,
            isBestseller: false,
        },
    ],
});

Alpine.store("auth", {
    user: null,
    isLoggedIn: false,

    login(email, password) {
        // Simulate login
        if (email && password) {
            this.user = {
                id: 1,
                name: "Samuel",
                email: email,
            };
            this.isLoggedIn = true;
            return true;
        }
        return false;
    },

    logout() {
        this.user = null;
        this.isLoggedIn = false;
    },

    register(name, email, password) {
        // Simulate registration
        if (name && email && password) {
            this.user = {
                id: 1,
                name: name,
                email: email,
            };
            this.isLoggedIn = true;
            return true;
        }
        return false;
    },
});
