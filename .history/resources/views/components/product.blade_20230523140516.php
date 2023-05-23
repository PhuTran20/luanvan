 <!-- Products Start -->
 <div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Trandy Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
                @foreach ($Product   as $data)
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <img class="img-fluid w-100" src="frontend/img/{{ $data['image'] }}   " alt="">
                </div>  
                <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                    <h6 class="text-truncate mb-3">{{ $data['name_product'] }} </h6>
                    <div class="d-flex justify-content-center">
                        <h6> {{number_format($data->price).' '.'VNĐ' }}</h6>
                        <h6 class="text-muted ml-2"><del>{{ $data['price'] }}</del></h6>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-between bg-light border">
                    <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View
                        Detail</a>
                    <a href="" class="btn btn-sm text-dark p-0"><i
                            class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                </div>
                @endforeach
            </div>
        </div>
     
    </div>
</div>
<!-- Products End -->