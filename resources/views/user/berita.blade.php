<link rel="stylesheet" href="{{ asset('style/store.css') }}">
<link rel="stylesheet" href="{{ asset('/style/berita.css') }}">

<x-layout>
    <div class="container">
        <div class="row">
            <div class="pembatas"></div>
            <div class="col-2"></div>
            <div class="col-8">
                <div class="form-outline" data-mdb-input-init>
                    <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
                </div>
            </div>
            <div class="col-2"></div> 
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card" style="width: 18rem;">
                   <img src="..." class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">Card title</h5>
                     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                   </div>
                 </div> 
            </div>
        </div>

            
            
        
    </div>
</x-layout>