<br>
<div>
    <form action="#" method="post">

        <!-- element for image upload -->

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


        <!-- element for image upload End-->

        <div class="size-selector-box">
            <strong>
                Product information
            </strong>
            <hr>
            <div>
                <input class="input" type="text" name="productname" placeholder="Product Name" required><br>
                <input class="input" type="text" name="productdescription" placeholder="Product Description" required>
                <br>
            </div>
        </div>
        <div class="size-selector-box">
            <p class="title">Select Product Sizes</p>
            <div class="sizes">
                <label><input type="checkbox" class="size-option" value="XXL" onclick="updatesize()">
                    XXL</label>
                <label><input type="checkbox" class="size-option" value="XL" onclick="updatesize()">
                    XL</label>
                <label><input type="checkbox" class="size-option" value="L" onclick="updatesize()">
                    L</label>
                <label><input type="checkbox" class="size-option" value="M" onclick="updatesize()">
                    M</label>
                <label><input type="checkbox" class="size-option" value="S" onclick="updatesize()">
                    S</label>
                <label><input type="checkbox" class="size-option" value="XS" onclick="updatesize()">
                    XS</label>
            </div>

            <label for="size" class="json-label">Selected Sizes (JSON)</label>
            <input readonly type="text" id="size" class="input" placeholder='' />
        </div>

        <!-- The price listing -->
        <div class="size-selector-box">
            <strong>
                Product Price and Discount
            </strong>
            <hr>
            <div>
                <label class="json-label" for="productprice">Product Price Ammount</label>
                <input oninput="calculateDiscount()" class="input" type="number" name="productprice" id="productprice" placeholder="Product Price"
                    required>
                <br>
                <label class="json-label" for="pricediscount">Product Discount %</label>
                <input oninput="calculateDiscount()" class="input" type="number" name="productdiscount" id="productdiscount"
                    placeholder="Product Discount" required>
                <br>
                <label class="json-label"   for="productdiscountamount">Product Discount Ammount</label>
                <input readonly class="input" type="number" id="productdiscountamount" required>
            </div>

        </div>

    </form>
</div>