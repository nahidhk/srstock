<section id="dataContainer" class="flex wrap center">

</section>



<script>
    fetch('/tools/data/api_ts_sr.json')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('dataContainer');

            data.forEach(item => {
                const card = document.createElement('div');
                card.classList.add('card');
                card.innerHTML = `
                          
        <!-- card -->
      
            <div class="card-img">
                <img loading="lazy" src="/${item.image}" alt="${item.name}">
            </div>
            <div class="padding-left">
                <b>${item.name}</b> <br>
                <span>${item.description}</span> <br>
                <span>${item.price} &nbsp;&nbsp;<s class="otc">${item.originalPrice}</s></span><br>

            </div>
            <div onclick="addToCart('${item.id}')" class="cart-btn">
                 Order Now
            </div>
            
       
                    `;
                container.appendChild(card);
            });
        })
        .catch(error => console.error('Error loading JSON:', error));
</script>