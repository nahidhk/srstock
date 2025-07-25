<center>
    <div id="dataContainer">
    </div>
</center>

<script>
    fetch('/tools/data/api_ts_sr.php')
        .then(response => response.json())
        .then(data => {
            const container = document.getElementById('dataContainer');

            data.reverse().forEach(item => {
                const card = document.createElement('div');
                card.classList.add('card');
                card.innerHTML = `
  <div class="m-box">
        <img class="square" src="/admin/dash/upload/uploads/${item.photos_json[0].photo}" alt="${item.name}">
    </div>
    <div class="m-box w100">
        
        <p style="text-align:left;">
            Poduct Id: <b>${item.id}</b><br>
            Product Name: ${item.name}<br>
            poduct price <br>(price -% discount = Price):   <b> ${item.price} - ${item.discount}% = ${item.discount_amount}/-<b> 

        </p>
    </div>
    <div class=" l-border">
        <button onclick="window.open('view/?id=${item.id}')" title="Preview" class="iconBtn f view">
            <i class="fa-solid fa-eye"></i>
        </button>
        <button onclick="window.open('edit/?id=${item.id}')" title="Edit" class="iconBtn edit">
            <i class="fa-solid fa-pen-to-square"></i>
        </button>
        <button onclick="window.open('delete/?id=${item.id}')" title="Delete" class="iconBtn e tash">
            <i class="fa-solid fa-trash"></i>
        </button>
       
    </div>               
                    `;
                console.log("loded the mySQL server data");
                container.appendChild(card);
            });
        })
        .catch(error => console.error('Error loading JSON:', error));
</script>