<section id="dataContainer" class="flex wrap center">

</section>



<script>
    fetch('/tools/data/api_ts_sr.php')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('dataContainer');

            data.forEach(item => {
                const card = document.createElement('div');
                card.classList.add('card');
                card.innerHTML = `
                          
        <!-- card -->
      
            <div class="card-img">
                <img loading="lazy" src="/admin/dash/upload/uploads/${item.photos_json[0].photo}" alt="${item.name}">
            </div>
            <div class="padding-left">
                <b>${item.name}</b> <br>
                <span>${item.description}</span> <br>
                <span>৳&nbsp;${item.discount_amount} &nbsp;&nbsp;<s class="otc">৳&nbsp;${item.price}</s></span><br>

            </div>
            <div onclick="addToCart('${item.id}')" class="cart-btn">
                 Order Now
            </div>
            
       
                    `;
                   console.log("loded the mySQL server data");
                container.appendChild(card);
            });
        })
        .catch(error => console.error('Error loading JSON:', error));
</script>