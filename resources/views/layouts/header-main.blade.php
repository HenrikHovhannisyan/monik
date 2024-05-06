<div class="header-main">
    <div class="container">
        <a href="{{ route('home') }}" class="header-logo">
            <img
                src="./images/logo1.png"
                alt="Anon's logo"
                width="120"
                height="36"
            />
        </a>

        <div class="header-search-container">
            <input
                type="search"
                name="search"
                class="search-field"
                placeholder="Enter your product name..."
            />

            <button class="search-btn">
                <ion-icon name="search-outline"></ion-icon>
            </button>
        </div>

        <div class="header-user-actions">
            <button class="action-btn">
                <ion-icon name="person-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="bag-handle-outline"></ion-icon>
                <span class="count">0</span>
            </button>
        </div>
    </div>
</div>
