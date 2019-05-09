<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1923">
    <div class="container">
        <div class="row">
            <div class="product-view">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="detail_left">
                        <div class="product-img-box">
                            <div class="image">
                                <img src="<?php echo $url_path ?>/images/2_12.jpg" alt="a">
                            </div>
                            <div class="frameswiper">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/2_12.jpg" width="100" height="105" alt="a" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/21_1_2.jpg" width="100" height="105" alt="a" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/6_1_14.jpg" width="100" height="105" alt="a" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/10.jpg" width="100" height="105" alt="a" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/11.jpg" width="100" height="105" alt="a" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/15.jpg" width="100" height="105" alt="a" class="click">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure>
                                                <img src="<?php echo $url_path ?>/images/17.jpg" width="100" height="105" alt="a" class="click">
                                            </figure>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                                    <div class="swiper-button-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="detail_right">
                        <div class="product-name">
                            <h2>Polo shirt</h2>
                        </div>
                        <div class="star-rating">
                            <span class="fa fa-star-o" data-rating="1"></span>
                            <span class="fa fa-star-o" data-rating="2"></span>
                            <span class="fa fa-star-o" data-rating="3"></span>
                            <span class="fa fa-star-o" data-rating="4"></span>
                            <span class="fa fa-star-o" data-rating="5"></span>
                            <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                        </div>
                        <div class="product-order">
                            <span>5 Orders</span>
                        </div>
                        <div class="product-code">
                            <label>Item Code: </label> <span>#a10088</span>
                        </div>
                        <div class="product-stock">
                            <label>Availability: </label> <span>In stock</span>
                        </div>
                        <div class="info-price">
                            <label>Price:</label>
                            <span>$256.00</span>
                            <span>–</span>
                            <span>$321.00</span>
                        </div>
                        <div class="attr-info">
                            <form>
                                <div class="default">
                                    <div class="variations">
                                        <div class="attr-product">
                                            <label>color</label>
                                            <div class="attr-color">
                                                <select>
                                                    <option value="">Choose an option</option>
                                                    <option value="black" class="enabled">Black</option>
                                                    <option value="blue" class="enabled">Blue</option>
                                                    <option value="blue-sky" class="enabled">Blue Sky</option>
                                                    <option value="brown" class="enabled">Brown</option>
                                                    <option value="gray" class="enabled">Gray</option>
                                                    <option value="green" class="enabled">Green</option>
                                                    <option value="orange" class="enabled">Orange</option>
                                                    <option value="pink" class="enabled">Pink</option>
                                                    <option value="red" class="enabled">Red</option>
                                                    <option value="red-blood" class="enabled">Red Blood</option>
                                                    <option value="violet" class="enabled">Violet</option>
                                                    <option value="white" class="enabled">White</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="attr-product">
                                            <label>size</label>
                                            <div class="attr-color">
                                                <select>
                                                    <option value="">Choose an option</option>
                                                    <option value="l" class="enabled">L</option>
                                                    <option value="m" class="enabled">M</option>
                                                    <option value="s" class="enabled">S</option>
                                                    <option value="xl" class="enabled">XL</option>
                                                    <option value="xxl" class="enabled">XXL</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="quantity">
                                            <label>Qty:</label>
                                            <button type="button" id="sub" class="sub">-</button>
                                            <input type="number" id="1" value="1" min="1" max="3" />
                                            <button type="button" id="add" class="add">+</button>

                                        </div>
                                        <button class="alt" type="submit">Add to cart</button>
                                        <div class="clearfix"></div>
                                    </div>		
                                </div>
                            </form>
                            <div class="product-social-extra">
                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                <a href="#"><i class="fa fa-toggle-on"></i></a>
                                <a href="#"><i class="fa fa-envelope"></i></a>
                                <a href="#"><i class="fa fa-print"></i></a>
                                <div class="single-product-share">
                                    <a><i class="fa fa-facebook"></i></a>
                                    <a><i class="fa fa-twitter"></i></a>
                                    <a><i class="fa fa-linkedin"></i></a>
                                    <a><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>
        <div class="product-collateral">
            <ul class="tabbernav_product2 nav-pills  ">
                <li class="active"><a  class="descr" data-toggle="tab" title="tab_product" href="#home"  data-text="Latest"><span>Description</span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts5"  data-text="Best Seller"><span>Reviews (0)</span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts6"  data-text="Special"><span>TAGS</span></a></li>
                <li><a  data-toggle="tab"  title="tab_product" href="#newproducts7"  data-text="Special"><span>Additional information</span></a></li>
            </ul>
            <div class="tabs">
                <div class="tab-content" >
                    <div id="home" class="tab-pane fade in active ">
                        <p><strong>Sample Lorem Ipsum Text</strong></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo,
                            eget vulputate orci purus ut lorem. In fringilla mi in ligula.
                            Pellentesque aliquam quam vel dolor. Nunc adipiscing. Sed quam odio, tempus ac,
                            aliquam molestie, varius ac, tellus. Vestibulum ut nulla aliquam risus rutrum interdum.
                            Pellentesque lorem. Curabitur sit amet erat quis risus feugiat viverra. Pellentesque augue justo,
                            sagittis et, lacinia at, venenatis non, arcu. Nunc nec libero. In cursus dictum risus. Etiam tristique nisl a</p>
                        <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which has since evolved into a full ready-to-wear collection in which every item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                    </div>
                    <div id="newproducts5" class="tab-pane fade  ">
                        <div class="review">
                            <h2>Write Your Own Review</h2>
                            <form action="#" method="post" id="review-form">
                                <input name="form_key" type="hidden" value="uOYN1YASBd0l6TPz">
                                <fieldset class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h3>You're reviewing: <span>Arcu vitae imperdiet simply</span></h3>
                                            <h4>How do you rate this product? <em>*</em></h4>
                                            <table class="data-table" id="product-review-table">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><span>1 star</span></th>
                                                        <th><span>2 stars</span></th>
                                                        <th><span>3 stars</span></th>
                                                        <th><span>4 stars</span></th>
                                                        <th><span>5 stars</span></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Price</td>
                                                        <td><input type="radio" name="ratings[3]" id="Price_1" value="11" class="radio"></td>
                                                        <td><input type="radio" name="ratings[3]" id="Price_2" value="12" class="radio"></td>
                                                        <td><input type="radio" name="ratings[3]" id="Price_3" value="13" class="radio"></td>
                                                        <td><input type="radio" name="ratings[3]" id="Price_4" value="14" class="radio"></td>
                                                        <td><input type="radio" name="ratings[3]" id="Price_5" value="15" class="radio"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Value</td>
                                                        <td><input type="radio" name="ratings[2]" id="Value_1" value="6" class="radio"></td>
                                                        <td><input type="radio" name="ratings[2]" id="Value_2" value="7" class="radio"></td>
                                                        <td><input type="radio" name="ratings[2]" id="Value_3" value="8" class="radio"></td>
                                                        <td><input type="radio" name="ratings[2]" id="Value_4" value="9" class="radio"></td>
                                                        <td><input type="radio" name="ratings[2]" id="Value_5" value="10" class="radio"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Quality</td>
                                                        <td><input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio"></td>
                                                        <td><input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio"></td>
                                                        <td><input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio"></td>
                                                        <td><input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio"></td>
                                                        <td><input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio"></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                        <div class="col-md-6">
                                            <ul class="form-list">
                                                <li>
                                                    <label for="nickname_field">Nickname<em>*</em></label>
                                                    <div class="input-box">
                                                        <input type="text" name="nickname" id="nickname_field" class="input-text" value="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="summary_field">Summary of Your Review<em>*</em></label>
                                                    <div class="input-box">
                                                        <input type="text" name="title" id="summary_field" class="input-text" value="">
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="review_field">Review<em>*</em></label>
                                                    <div class="input-box">
                                                        <textarea name="detail" id="review_field" cols="5" rows="3"></textarea>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </fieldset>
                                <div class="buttons-set">
                                    <button type="submit" title="Submit Review" class="button1"><span>Submit Review</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="newproducts6" class="tab-pane fade  ">
                        <div class="form-add">
                            <label for="productTagName">Add Your Tags:</label>
                            <div class="input-box">
                                <input type="text" class="input-text" name="productTagName" id="productTagName">
                            </div>
                            <button type="button" title="Add Tags" class="button2" onclick="submitTagForm()"><span>Add Tags</span></button>
                        </div>
                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                    </div>
                    <div id="newproducts7" class="tab-pane fade  ">
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed at ante. Mauris eleifend, quam a vulputate dictum, massa quam dapibus leo, eget vulputate orci purus ut lorem. In fringilla mi in ligula. Pellentesque aliquam quam vel dolor. every item is a vital part of a woman's wardrobe.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




