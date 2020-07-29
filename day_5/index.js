const items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

let cartItems = [];

function renderItems(filter = "") {
    console.log(filter);
    let listItems = ""

    items.forEach(item => {
        if (item[1].toLowerCase().includes(filter) || item[3].includes(filter)) {
            listItems += `<div class="card col-3 ml-4 mr-4 mb-3" style="width: 18rem;">
            <img src="./src/images/${item[4]}" class="card-img-top" alt="${item[1]}">
            <div class="card-body">
                <h5 class="card-title" id="itemName">${item[1]}</h5>
                <p class="card-text" id="itemDesc">${item[3]}</p>
                <p class="card-text">Rp ${item[2]}</p>
                <a data-item-id=${item[0]} href="#" class="btn btn-primary addcart" >Tambahkan ke keranjang</a>
            </div>
        </div>`
        }
    })
    document.querySelector("#listBarang").innerHTML = listItems ? listItems : "Barang tidak ada";

    document.querySelectorAll(".card-body a").forEach(el => {
        el.addEventListener("click", function(e) {
            e.preventDefault();
            cartItems.push(this.dataset.itemId);

            document.querySelector("#cart-count").innerHTML = `(${cartItems.length})`;
        })
    })
}

document.addEventListener("DOMContentLoaded", () => {
    renderItems();

    document.querySelector("#formItem").addEventListener('submit', e => {
        e.preventDefault();
        let keyword = document.querySelector("#keyword").value;

        renderItems(keyword);
    })




})