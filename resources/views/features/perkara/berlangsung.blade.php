<link rel="stylesheet" href="{{ asset('style/perkara.css') }}">
<link rel="stylesheet" href="{{ asset('style/store.css') }}">

<x-layout>
    <div class="perkara-berlangsung container">
        <div class="header d-flex flex-column">
            <div class="header-title row">
                <span>Perkara Berlangsung</span>
            </div>
            <div class="header-filter row justify-content-end">
                <div class="filter-button">
                    <div class="filter-button-item">
                        <span>Pidana</span>
                    </div>
                    <div class="filter-button-item">
                        <span>Perdata</span>
                    </div>
                </div>
                <div class="filter-search">
                    <label for="search-bar">
                        <i class="fa fa-search"></i>
                    </label>
                    <input type="text" name="search-bar">
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content-title">
                <span>Sedang Diproses</span>
            </div>
            <div class="content-list">
                <div class="content-card">

                </div>
            </div>
        </div>
    </div>
</x-layout>
