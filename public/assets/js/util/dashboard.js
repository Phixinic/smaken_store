$(document).ready(function (){
    
    $.ajax({
        url: '/getDataProduct',
        type: 'GET',
        headers:{
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
        dataType: 'json',
        success: function(data) {
             console.log(data.data);
             let item = data.data;
             let newDOM = "";

             $.each(item, function(i, key) {
                newDOM +=`
                    <div class="col-md-3 mb-3">
                        <div class="card m-1 border-0 shadow-lg">
                                <img src="storage/${key.image}" class=" card-img-top" alt="...">
                            <div class="card-body">
                                <small class="card-category text-secondary">${key.category.name}</small>
                                <p class="card-title fs-4 mt-2">${key.name}</p>
                                <p class="card-text"></p>
                                <p class="card-price fw-bold fs-5 text-primary">${key.price}</p>
                                <div class="d-flex">
                                    <a href="/product/${key.slug}" type="button" class="btn btn-warning flex-fill">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div> 
             
                `
              });
              $("#product-list").html(newDOM);
            // $('#user-email').text(data.email);
        }
    });

})