if(document.readyState == "loading"){
    document.addEventListener('DOMContentLoaded',start);
}else{
    start();
}
function start(){
    addEvents();
}
function addEvents(){
    let cartRemove_btns=document.querySelectorAll('.carticon');
    console.log(cartRemove_btns);
    cartRemove_btns.forEach(btn => {
        btn.addEventListener("click",handle_removeCartItem);
    });
    let cartQuantity_inputs = document.querySelectorAll('.cart-quantity');
    cartQuantity_inputs.forEach(input=>{
        input.addEventListener.remove();
    } )
}
function handle_removeCartItem(){
    this.parentElement.remove();
}
  
let addCart_btns = document.querySelectorAll(".cart-shopping");
addCart_btns.forEach((btn) =>{
    btn.addEventListener("click",handle_addCartItem);

});
function handle_addCartItem(){
    let product = this.parentElement;
    let title = product.querySelector(".content").innerHTML;
    let price = product.querySelector(".price").innerHTML;
    let imgSrc = product.querySelector(".img").src;
    console.log(title,price,imgSrc);

    let newToAdd = {
        title,
        price,
        imgSrc,
    };
    let cartBoxElement = CartBoxComponent(title,price,imgSrc);
    let newNode=document.createElement("div");
    newNode.innerHTML=cartBoxElement;
    const cartContent=cart.querySelector(".cart-content");
    cartContent.appendChild(newNode);
}
function CartBoxComponent(title, price, imgSrc){
return(
                <div class="cart-box">
                <img id="cart-img" src="${imgSrc}">
                <div class="detail-box">
                    <div class="cart-product-title">${title}</div>
                    <div class="cart-price">${price}</div>
                    <input type="number" value="1" class="cart-quantity">
                </div>
                <!--Remove cart-->
                <div class=carticon><i class="fa-solid fa-trash"></i></div>
                </div>`
);
}