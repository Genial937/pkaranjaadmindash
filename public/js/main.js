$(".table").dataTable();



//submit login form
function auth() {
    event.preventDefault();

    const requestBody = {
        username: $("#username").val(),
        pin: $("#pin").val(),
        device_id: 'YGFYFHG'
    };
    console.log(requestBody);
    axios.post('/api/user/login', requestBody)
        .then((response) => {
            console.log(response.data);
            //    localStorage.setItem('token',response.data.message);
        })
        .catch((error) => {
            console.log(error.response.data);
        })
}

// Hide spinners
$("#cat_spinner, #sub_spinner, #product_spinner").hide();


//Search categories
function getCat(id) {
    //show loading spinner
    $("#cat_spinner").show();
    //helpers
    const org = $("#org option:selected").text();
    document.getElementById("organization").innerHTML = org;
    axios.get('/categories/' + id)
        .then((response) => {
            let category = "";
            if (response.data.length) {
                $("#cat_spinner").hide();
                let cat = response.data;
                category = category + "<option>Select Category</option>"
                $.each(cat, function (key, value) {
                    category = category + "<option value='" + value.id + "'>" + value.name + "</option>"
                });
            } else {
                category = category + "<option>No categories found!</option>"
            }
            $("#cat").html(category);
        })
        .catch((error) => {
            console.log(error);
        })
}

//search sub categories
function getSub(id) {
    //show loading spinners
    $("#sub_spinner").show();
    //helpers
    const cat = $("#cat option:selected").text();
    document.getElementById("category_name").innerHTML = cat;
    axios.get('/sub-categories/' + id)
        .then((response) => {
            let subcat = "";
            let starter = "";
            if (response.data.length) {
                $("#sub_spinner").hide();
                let sub = response.data;
                subcat = subcat + "<option>Select sub category</option>"
                $.each(sub, function (key, value) {
                    subcat = subcat + "<option value='" + value.id + "'>" + value.name + "</option>"
                });
            } else {
                subcat = subcat + "<option>No sub categories found for this category!</option>"
            }
            $("#sub").html(starter);
            $("#sub").html(subcat);
        })
        .catch((error) => {
            console.log(error);
        })
}

//search products
function products(id) {
    //show product spinners
    $("#product_spinner").show();
    //helpers
    const sub = $("#sub option:selected").text();
    document.getElementById("sub_name").innerHTML = sub;
    axios.get('/sub-categories/' + id)
    axios.get('/get-products/' + id)
        .then((response) => {
            let product = "";
            if (response.data.length) {
                $("#product_spinner").hide();
                let products = response.data;
                $.each(products, function (key, value) {
                    product = product + "<div class='col-xl-4 col-sm-6'>"
                    product = product + "<div class='product-box'>"
                    product = product + "<a href='/single-product/" + value.id + "'>"
                    product = product + "<div class='text-center product-content p-4'>"
                    product = product + "<h5 class='mb-1'><a href='/single-product/" + value.id + "' class='text-dark'>" + value.name + "</a></h5>"
                    product = product + "<p class='text-muted font-size-13'>unit: " + value.unit + "</p>"
                    product = product + "<h5 class='mt-3 mb-0'><span class='text-muted me-2'></span> KES. " + value.price + "</h5>"
                    product = product + "<div class='btn-group text-center mt-3'>"
                    product = product + "<input type='hidden' class='name' value='" + value.name + "'/>"
                    product = product + "<input type='hidden' class='price' value='" + value.price + "'/>"
                    product = product + "<a href='single-product/" + value.id + "' class='btn btn-success btn-sm'>Details<a/>"
                    product = product + "<a href='javascript:void(0)' class='btn btn-danger btn-sm add' id='" + value.id + "' onclick='addToCart(this)'>Add to cart<a/>"
                    product = product + "</div>"
                    product = product + "</div>"
                    product = product + "</a>"
                    product = product + "</div>"
                    product = product + "</div>"
                });
            } else {
                product = product + "<p>No products found!</p>"
            }
            $("#products").html(product);
        })
        .catch((error) => {
            console.log(error);
        })
}

// add to cart functionality (Vanilla Javascript)
// var removeCartItemsButtons = document.getElementsByClassName('btn-remove')
// for(i=0; i < removeCartItemsButtons.length; i++){
//     var button = removeCartItemsButtons[i];
//     button.addEventListener('click', function(event){
//        var buttonClicked = event.target
//        buttonClicked.parentElement.parentElement.parentElement.parentElement.parentElement.parentElement.remove();
//     })
// }





function addToCart(elem) {
    var id = $(elem).attr("id");
    var name = $(elem).parent().find('.name').val();
    var price = $(elem).parent().find('.price').val();
    $("#cart-modal").modal('show');
    document.getElementById('p-name').innerHTML = name;
    document.getElementById('p-price').innerHTML = price;
    document.getElementById('product_id').value = id;

}

//remove quantity modal
function removeCart() {
    $("#cart-modal").modal('hide');
}

//submit cart
function submitCart() {

    var data = {
        id: $("#product_id").val(),
        quantity: $("#quantity").val()
    }
    axios.post('/add-to-cart', data)
        .then((response) => {
            if (response.data === 200) {
                $("#cart-modal").modal('hide');
                $("#quantity").val(1);
                countCartItems();
                swal({
                    text: "Your item has been added to the cart!",
                    icon: "success",
                    button: "Ok",
                });
            }
        })
        .catch((error) => {
            console.log(error);
        })
}

function countCartItems() {
    axios.get('/count-cart-items')
        .then((response) => {
            var count = response.data;
            $(".cartCount .cart_count").text(count);
            console.log(response.data);
        })
        .catch((error) => {
            console.log(error);
        })
}


//update quantity
function updateQuantity(id) {
    var prod_id = $(this).attr('id');
    alert(prod_id);
}


$(".qty").on("change", function () {
    var id = $(this).attr('id');
    var quantity = $(this).val();
    var data = {
        id: id,
        quantity: quantity
    };
    axios.post('update-quantity', data)
        .then((response) => {
            if (response.data) {
                location.reload();
            }
        })
        .catch((error) => {
            console.log(error);
        })
});


function deleteItem(id) {
    axios.post('/delete-cart-item/' + id)
        .then((response) => {
            if (response.data) {
                location.reload();
            }
        })
        .catch((error) => {
            console.log(error);
        })
}


function sweetAlert() {
    swal({
        title: "Good job!",
        text: "Your item has been added to the cart!",
        icon: "success",
        button: "Ok",
    });
}


//collections points

function getCollectionPoints(id) {
    $("#collection_spinner").show();
    axios.get('/collection/points/' + id)
        .then((response) => {
            console.log(response.data.message);
            var points = "";
            if (response.data.message) {
                $("#collection_spinner").hide();
                let areas = response.data.message;
                $.each(areas, function (key, value) {
                    points = points + "<option value='" + value.code + "'>" + value.area + "</option>"
                });
            } else {
                points = points + "<option>No collection points found under this area!</option>"
            }
            $("#points").html(points);

        })
        .catch((error) => {
            console.log(error);
        })
}



