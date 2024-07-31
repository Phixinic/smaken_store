$(document).ready(function (){

    //mengambil segment slug dari url
    const url = window.location.href;
    let arr = url.split('/');
    let slug = arr[arr.length-1];


    // console.log(slug);
    $.ajax({
        url: '/getDetailProduct/'+ slug,
        type: 'GET',
        headers:{
            'X-CSRF-Token': '{{ csrf_token() }}',
        },
        dataType: 'json',
        success: function(data) {
             console.log(data);

            //  overwrite elemen 
             let gambar = `
             <img src="/storage/${data.image}" alt="" class="img-fluid" width="450px" height="450px">
             `;
            //  let judul =``;

            $('#detail-gambar').html(gambar);
            $('#product-name').text(data.name);
            $('#category').text(data.category.name);
            $('#product-price').text('Rp. '+data.price);
            $('#product-desc').text(data.description);
            
        }
    });

})