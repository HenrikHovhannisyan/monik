<section id="sidebar">
    <ul class="list-unstyled components">
        <li class="{{isActiveRoute('dashboard')}}">
            <a href="{{route('dashboard')}}">
                <i class="fa-solid fa-desktop me-1"></i>
                Dashboard
            </a>
        </li>
        <li class="{{isActiveRoute('users')}}">
            <a href="{{route('users')}}">
                <i class="fa-solid fa-users me-1"></i>
                Users
            </a>
        </li>
        <li class="{{isActiveRoute('categories.index')}}">
            <a href="{{route('categories.index')}}">
                <i class="fa-solid fa-layer-group me-1"></i>
                Category
            </a>
        </li>
        <li class="{{isActiveRoute('products.index')}}">
            <a href="{{route('products.index')}}">
                <i class="fa-solid fa-shirt me-1"></i>
                Products
            </a>
        </li>
    </ul>
</section>
