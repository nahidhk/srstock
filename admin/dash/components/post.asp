



<form id="uploadForm" enctype="multipart/form-data" method="post">

    <div class="elementx">
        <strong>Upload a Product image </strong>
        <hr>
        <div class="flex setfill" id="uploadContainer">
            <div id="addMoreBtn" class="upbox" style="cursor:pointer; margin-top:10px; width:120px;">
                <i class="upicon fa-solid fa-plus"></i>
                <span class="uptxt">Add More img</span>
            </div>
        </div>

        <label class="json-label" for="photos">Uploaded Photos (JSON)</label>
        <input readonly class="input" name="photos" id="photos" type="text" />
    </div>

    <div class="size-selector-box">
        <strong>Product information</strong>
        <hr>
        <div>
            <input class="input" type="text" name="product_name" placeholder="Product Name" required><br>
            <input class="input" type="text" name="product_description" placeholder="Product Description" required><br>
        </div>
    </div>

    <div class="size-selector-box">
        <p class="title">Select Product Sizes</p>
        <div class="sizes">
            <label><input type="checkbox" class="size-option" value="XXL" onclick="updatesize()"> XXL</label>
            <label><input type="checkbox" class="size-option" value="XL" onclick="updatesize()"> XL</label>
            <label><input type="checkbox" class="size-option" value="L" onclick="updatesize()"> L</label>
            <label><input type="checkbox" class="size-option" value="M" onclick="updatesize()"> M</label>
            <label><input type="checkbox" class="size-option" value="S" onclick="updatesize()"> S</label>
            <label><input type="checkbox" class="size-option" value="XS" onclick="updatesize()"> XS</label>
        </div>

        <label for="size" class="json-label">Selected Sizes (JSON)</label>
        <input readonly type="text" id="size" class="input" name="sizes" placeholder='' />
    </div>

    <div class="size-selector-box">
        <strong>Product Price and Discount</strong>
        <hr>
        <label for="productprice">Product Price Amount</label><br>
        <input oninput="calculateDiscount()" class="input" type="number" name="product_price" id="productprice" placeholder="Product Price" required><br>

        <label for="productdiscount">Product Discount %</label><br>
        <input oninput="calculateDiscount()" class="input" type="number" name="product_discount" id="productdiscount" placeholder="Product Discount" required><br>

        <label for="productdiscountamount">Product Discount Amount</label><br>
        <input readonly class="input" type="number" id="productdiscountamount" name="product_discount_amount" placeholder="Discount Amount" required><br>
    </div>

    <button class="subbtn" type="button" onclick="uploadToPHP()"> <i class="fa-solid fa-globe"></i> Post</button>
</form>

