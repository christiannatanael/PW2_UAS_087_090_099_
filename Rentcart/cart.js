const product = [
    {
        id: 1,
        image: '/UAS/Mainpage/img/xpander.png',
        title: 'Mitsubishi Xpander',
        price: 500,
    },
    {
        id: 2,
        image: '/UAS/Mainpage/img/calya.png',
        title: 'Toyota Calya',
        price: 450,
    },
    {
        id: 3,
        image: '/UAS/Mainpage/img/fortuner.png',
        title: 'Toyota Fortuner',
        price: 800,
    },
    {
        id: 4,
        image: '/UAS/Mainpage/img/terios.png',
        title: 'Daihatsu Terios',
        price: 500,
    },
    {
        id: 5,
        image: '/UAS/Mainpage/img/raize.png',
        title: 'Toyota Raize',
        price: 500,
    },
    {
        id: 6,
        image: '/UAS/Mainpage/img/hiace.png',
        title: 'Toyota Hiace',
        price: 1450,
    },
    {
        id: 7,
        image: '/UAS/Mainpage/img/dfsk.png',
        title: 'DFSK Gelora Electric',
        price: 1200,
    },
    {
        id: 8,
        image: '/UAS/Mainpage/img/merced.png',
        title: 'Mercedes Benz V-Class',
        price: 2000,
    },
    {
        id: 9,
        image: '/UAS/Mainpage/img/xl7.png',
        title: 'Suzuki XL7',
        price: 900,
    }

];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>Rp.${price}</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "Rp "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "Rp " + total.toLocaleString("id-ID") + ",00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }
    
}



    
