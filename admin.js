//Target to add new product to html kauppa.html


if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', newShopItem)
} else {
    newShopItem();
}

function newShopItem(otsikko, hinta, kuva) {


    /*var givenTitle = prompt("Otsikko?");
    var givenPrice = prompt("Hinta?")
    var givenImageSrc = prompt("Kuvatiedoston nimi");
*/
    var newItem = document.createElement('div');
    var shopItems = document.getElementsByClassName('shop-items')[0];
    var newContent = `
        <span class="shop-item-title">${otsikko}</span>
        <img class="shop-item-image" src="Images/${kuva}" alt="kuva tiedosto">
    <div class="shop-item-details">
        <span class="shop-item-price">€ ${hinta}</span>
        <button class="btn btn-primary shop-item-button" type="button">OSTA</button>
    </div>
`
    newItem.innerHTML = newContent
    shopItems.appendChild(newItem);
}
/*
src="${imageSrc}" width="100" height="100"
<span class="cart-item-title">${title}</span>

    <div class="shop-item">
                <span class="shop-item-title">Indian Scout Bobber</span>
                <img class="shop-item-image"
                     src="Images/scout-bobber.jpg"
                     alt="Indian Scout 2018">
                <div class="shop-item-details">
                    <span class="shop-item-price">€ 21900</span>
                    <button class="btn btn-primary shop-item-button"
                            type="button">OSTA</button>
                </div>
            </div>


*/
