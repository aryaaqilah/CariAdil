<link rel="stylesheet" href="{{ asset('style/store.css') }}">

<x-layout :auth="$auth">
    <div class="store container">
        <div class="header">
            <div class="header-blank">

            </div>
            <div class="header-title">
                <p>CariAdil Store</p>
            </div>
            <div class="header-search">
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div class="content">
            @foreach ($kategori as $per_kategori)
                <div class="product-section">
                    <p>{{ $per_kategori->nama }}</p>
                    <div class="product-list row gap-3">
                        @foreach ($per_kategori->produk as $per_produk)
                            <div class="product-card col-3" onclick="onClickProduct()">
                                <span class="product-category">{{ $per_produk->kategori->nama }}</span>
                                <strong class="product-title">{{ $per_produk->nama }}</strong>
                                <br>
                                <img src="{{ asset('assets/images/store/' . $per_produk->image_url) }}" alt="">
                                <br>
                                <strong class="product-price">{{ $per_produk->harga }},00</strong>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

<script src="{{ asset('script/store.js') }}"></script>
