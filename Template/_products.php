
<!--   product  -->
<?php
$item_id = $_GET['item_id'] ?? 1;
foreach ($product->getData() as $item) :
    if ($item['item_id'] == $item_id) :
?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="d-flex justify-content-center">
                    <a href="#" style="display: inline-block; margin: 10px;">
                        <img src="<?php echo $item['item_image']?>" alt="product1" class="img-fluid" style="max-width: 100%; max-height: 100%; object-fit: cover;">
                    </a>
                </div>
                <div class="form-row pt-4 font-size-16 font-baloo justify-content-center">
                    <div class="col" style="padding-bottom: 10px;">
                        <button type="submit" class="btn btn-danger form-control"><a href='cart.php' style="color: white;">Proceed to Buy</a></button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control"><a href='cart.php' style="color: white;">Add to Cart</a></button>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 py-5">
                <h4 class="font-baloo font-size-20"><?php echo $item['item_name']?></h4>
                <small><?php echo $item['item_type']?></small>
                <div class="d-flex">
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                </div>
                <hr class="m-0">

                <!---    product price       -->
                <table class="my-3">
                    <tr class="font-rale font-size-14">
                        <td>M.R.P:</td>
                        <td><strike>Rs. 700</strike></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger"><span><?php echo $item['item_price']?></span><small
                                class="text-dark font-size-12">&nbsp;&nbsp;Inclusive of all taxes</small></td>
                    </tr>
                    <tr class="font-rale font-size-14">
                        <td>You Save:</td>
                        <td><span class="font-size-16 text-danger">Rs. 300</span></td>
                    </tr>
                </table>
                <!---    !product price       -->

                <hr>

                <!-- order-details -->
                <div id="order-details" class="font-rale d-flex flex-column text-dark">
                    <small>Delivery by : Apr 22 - Apr 27</small>
                    <small>Sold by <a href="#">Yumeiro Candy</a></small>
                    <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer -
                        424201</small>
                </div>
                <!-- !order-details -->

                <div class="row">
                    <div class="col-6">
                        <!-- color -->
                        <div class="color my-3">
                            <div class="d-flex justify-content-between">
                                <h6 class="font-baloo">Color:</h6>
                                <div class="p-2 color-yellow-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                                <div class="p-2 color-primary-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                                <div class="p-2 color-second-bg rounded-circle"><button
                                        class="btn font-size-14"></button></div>
                            </div>
                        </div>
                        <!-- !color -->
                    </div>
                    <div class="col-6">
                        <!-- product qty section -->
                        <div class="qty d-flex">
                            <h6 class="font-baloo">Qty</h6>
                            <div class="px-4 d-flex font-rale">
                                <button class="qty-up border bg-light" data-id="pro1"><i
                                        class="fas fa-angle-up"></i></button>
                                <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light"
                                    disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"><i
                                        class="fas fa-angle-down"></i></button>
                            </div>
                        </div>
                        <!-- !product qty section -->
                    </div>
                </div>

                <!--

 size -->
                <div class="size my-3">
                    <h6 class="font-baloo">Size :</h6>
                    <div class="d-flex justify-content-between w-75">
                        <div class="font-rubik border p-3">
                            <button class="btn p-0 font-size-14">Small</button>
                        </div>
                        <div class="font-rubik border p-3">
                            <button class="btn p-0 font-size-14">Medium</button>
                        </div>
                        <div class="font-rubik border p-3">
                            <button class="btn p-0 font-size-14">Large</button>
                        </div>
                    </div>
                </div>
                <!-- !size -->

            </div>

            <div class="col-12" style="padding-top: 30px;">
                <h6 class="font-rubik">Product Description</h6>
                <hr>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat
                    inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia
                    ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis
                    animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a
                    aliquam vitae vel?</p>
                <p class="font-rale font-size-14">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat
                    inventore vero numquam error est ipsa, consequuntur temporibus debitis nobis sit, delectus officia
                    ducimus dolorum sed corrupti. Sapiente optio sunt provident, accusantium eligendi eius reiciendis
                    animi? Laboriosam, optio qui? Numquam, quo fuga. Maiores minus, accusantium velit numquam a
                    aliquam vitae vel?</p>
            </div>
        </div>
    </div>
</section>
<!--   !product  -->
<?php
    endif;
endforeach;
?>
