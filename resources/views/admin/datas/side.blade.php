<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="{{route('index')}}" class="simple-text logo-normal">
            Tryhard - Books
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{Route::is('adminpanel-index') ? 'active' : ''}}">
                <a class="nav-link" href="{{route('adminpanel-index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Anasayfa</p>
                </a>
            </li>
            <li class="nav-item {{Route::is('adminpanel-slider-index')? 'active' : ''}}">
                <a class="nav-link" href="{{route('adminpanel-slider-index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Slider</p>
                </a>
            </li>
            <li class="nav-item {{Route::is('adminpanel-book-index')? 'active' : ''}}">
                <a class="nav-link" href="{{route('adminpanel-book-index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Kitaplar</p>
                </a>
            </li>
            <li class="nav-item {{Route::is('adminpanel-author-index')? 'active' : ''}}">
                <a class="nav-link" href="{{route('adminpanel-author-index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Yazarlar</p>
                </a>
            </li>
            <li class="nav-item {{Route::is('adminpanel-publisher-index')? 'active' : ''}}">
                <a class="nav-link" href="{{route('adminpanel-publisher-index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Yayinevleri</p>
                </a>
            </li>
            <li class="nav-item {{Route::is('adminpanel-order-index')? 'active' : ''}}">
                <a class="nav-link" href="{{route('adminpanel-order-index')}}">
                    <i class="material-icons">dashboard</i>
                    <p>Siparişler</p>
                </a>
            </li>
        </ul>
    </div>
</div>