$(document).ready(function (){
    
    console.log("news/" + segment(2));
    // $.ajax({
    //     url: '/getReccomendation',
    //     type: 'GET',
    //     headers:{
    //         'X-CSRF-Token': '{{ csrf_token() }}',
    //     },
    //     dataType: 'json',
    //     success: function(data) {
    //          console.log(data.data);
    //          let item = data.data;
    //          let newDOM = "";

            //  $.each(item, function(i, key) {
            //     newDOM +=`
            //     <div class="col-md-3 mb-3">
            //     <div class="card m-1 border-0 shadow-lg">
            //     <img src="{{ ('assets/img/baju.jpeg') }}" class="card-img-top" height="220px" width="241px" alt="...">
            //     <div class="card-body">
            //         <small class="card-category text-secondary">Produk</small>
            //         <p class="card-title fs-4 mt-2">Jaket</p>
            //       <p class="card-text">XL</p>
            //       <p class="card-price fw-bold fs-5 text-primary">Rp 90.000 &nbsp;</p>
            //       <div class="d-flex">
            //         <a href="https://wa.me/089515793188" type="button" class="btn btn-warning flex-fill">Beli</a>
            //     </div>
            //     </div>
            //     </div>
            // </div>
            //     `
            //   });
            //   $("#product-list").html(newDOM);
        // }
    // });

})