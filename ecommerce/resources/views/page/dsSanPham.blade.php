 @extends('master')
 @section('content')  
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <ul>
            <li class="home">
              <a href="index.html" title="Go to Home Page">Home</a><span>» </span></li>
            <li class="">
              <a href="grid.html" title="Go to Home Page">Women</a><span>» </span></li>
            <li class="category13"><strong>Tops &amp; Tees</strong></li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End breadcrumbs -->
    <!-- Two columns content -->
    <div class="main-container col2-left-layout">
      <div class="main container">
        <div class="row">
          <section class="col-main col-sm-9 col-sm-push-3">
            <div class="category-title">
              <h1>Tops &amp; Tees</h1>
            </div>
            <div class="category-description std">
              <div class="slider-items-products">
                <div id="category-desc-slider" class="product-flexslider hidden-buttons">
                  <div class="slider-items slider-width-col1">
                    <!-- Item -->
                    <div class="item">
                      <a href="#x">
                        <img alt="" src="images/women_banner.png">
                      </a>
                      <div class="cat-img-title cat-bg cat-box">
                        <h2 class="cat-heading">Category Banner</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      </div>
                    </div>
                    <!-- End Item -->
                    <!-- Item -->
                    <div class="item">
                      <a href="#x">
                        <img alt="" src="images/women_banner1.png">
                      </a>
                    </div>
                    <!-- End Item -->
                  </div>
                </div>
              </div>
            </div>
            <div class="category-products">
              <div class="toolbar">
                <div class="sorter">
                  <div class="view-mode"> <span class="button button-active button-grid" title="Grid">Grid</span>
                    <a class="button button-list" title="List" href="list.html">List</a>
                  </div>
                </div>
                <div id="sort-by"> <label class="left">Sort By: </label>
                  <ul>
                    <li>
                      <a href="#">Position<span class="right-arrow"></span></a>
                      <ul>
                        <li>
                          <a href="#">Name</a>
                        </li>
                        <li>
                          <a href="#">Price</a>
                        </li>
                        <li>
                          <a href="#">Position</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  <a title="Set Descending Direction" href="#" class="button-asc left"><span class="glyphicon glyphicon-arrow-up" style="color:#999;font-size:11px;"></span></a>
                </div>
                <div class="pager">
                  <div class="pages"> <label>Page:</label>
                    <ul class="pagination">
                      <li>
                        <a href="#">«</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li>
                        <a href="#">2</a>
                      </li>
                      <li>
                        <a href="#">3</a>
                      </li>
                      <li>
                        <a href="#">4</a>
                      </li>
                      <li>
                        <a href="#">5</a>
                      </li>
                      <li>
                        <a href="#">»</a>
                      </li>
                    </ul>
                  </div>
                  <div id="limiter"> <label>View: </label>
                    <ul>
                      <li>
                        <a href="#">15<span class="right-arrow"></span></a>
                        <ul>
                          <li>
                            <a href="#">20</a>
                          </li>
                          <li>
                            <a href="#">30</a>
                          </li>
                          <li>
                            <a href="#">35</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <ul class="products-grid">
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product1.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product2.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span id="old-price-2" class="price"> $367.00 </span> </p>
                                <p class="special-price"> <span class="price-label">Special Price</span> <span id="product-price-2" class="price"> $256.00 </span> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product3.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product4.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product5.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $367.00 </span> </p>
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $256.00 </span> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product8.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product10.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product11.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $367.00 </span> </p>
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $256.00 </span> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product5.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product9.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="new-label new-top-right">New</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product10.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box">
                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $367.00 </span> </p>
                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $256.00 </span> </p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="col-item">
                    <div class="sale-label sale-top-right">Sale</div>
                    <div class="item-inner">
                      <div class="item-img">
                        <div class="item-img-info">
                          <a href="product_detail.html" title="Sample Product" class="product-image">
                            <img src="products-images/product13.jpg" alt="Ut tincidunt tortor">
                          </a>
                          <div class="item-box-hover">
                            <div class="box-inner">
                              <div class="product-detail-bnt">
                                <a href="quick_view.html" class="button detail-bnt"><span>Quick View</span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail.html" title="Sample Product"> Sample Product </a>
                          </div>
                          <div class="item-content">
                            <div class="rating">
                              <div class="ratings">
                                <div class="rating-box">
                                  <div class="rating" style="width:60%"></div>
                                </div>
                                <p class="rating-links">
                                  <a href="#">1 Review(s)</a> <span class="separator">|</span>
                                  <a href="#">Add Review</a>
                                </p>
                              </div>
                            </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price">$131.00</span> </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="actions"><span class="add-to-links"> <a href="wishlist.html" class="link-wishlist" title="Add to Wishlist"><span>Add to Wishlist</span></a>
                          <button type="button" title="Add to Cart" class="button btn-cart"><span>Add to Cart</span></button>
                          <a href="compare.html" class="link-compare" title="Add to Compare"><span>Add to Compare</span></a>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </section>
          <aside class="col-right sidebar col-sm-3 col-xs-12 col-sm-pull-9">
            <div class="side-nav-categories">
              <div class="block-title"> Categories </div>
              <!--block-title-->
              <!-- BEGIN BOX-CATEGORY -->
              <div class="box-content box-category">
                <ul>
                  <li>
                    <a class="active" href="#/women.html">Women</a> <span class="subDropdown minus"></span>
                    <ul class="level0_415" style="display:block">
                      <li>
                        <a href="grid.html"> Tops </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Evening Tops </a>
                          </li>
                          <li>
                            <a href="grid.html"> Shirts &amp; Blouses </a>
                          </li>
                          <li>
                            <a href="grid.html"> Tunics </a>
                          </li>
                          <li>
                            <a href="grid.html"> Vests </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Bags </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Bags </a>
                          </li>
                          <li>
                            <a href="grid.html"> Designer Handbags </a>
                          </li>
                          <li>
                            <a href="grid.html"> Purses </a>
                          </li>
                          <li>
                            <a href="grid.html"> Shoulder Bags </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Shoes </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Flat Shoes </a>
                          </li>
                          <li>
                            <a href="grid.html"> Flat Sandals </a>
                          </li>
                          <li>
                            <a href="grid.html"> Boots </a>
                          </li>
                          <li>
                            <a href="grid.html"> Heels </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Jewellery </a>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Bracelets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Necklaces &amp; Pendants </a>
                          </li>
                          <li>
                            <a href="grid.html"> Pins &amp; Brooches </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Dresses </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Casual Dresses </a>
                          </li>
                          <li>
                            <a href="grid.html"> Evening </a>
                          </li>
                          <li>
                            <a href="grid.html"> Designer </a>
                          </li>
                          <li>
                            <a href="grid.html"> Party </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Lingerie </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Bras </a>
                          </li>
                          <li>
                            <a href="grid.html"> Bodies </a>
                          </li>
                          <li>
                            <a href="grid.html"> Lingerie Sets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Shapewear </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Coats </a>
                          </li>
                          <li>
                            <a href="grid.html"> Jackets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Leather Jackets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Blazers </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Swimsuits </a>
                          </li>
                          <li>
                            <a href="grid.html"> Beach Clothing </a>
                          </li>
                          <li>
                            <a href="grid.html"> Bikinis </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                    </ul>
                    <!--level0-->
                  </li>
                  <!--level 0-->
                  <li>
                    <a href="grid.html">Men</a> <span class="subDropdown plus"></span>
                    <ul class="level0_455" style="display:none">
                      <li>
                        <a href="#/men/shoes.html"> Shoes </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Flat Shoes </a>
                          </li>
                          <li>
                            <a href="grid.html"> Boots </a>
                          </li>
                          <li>
                            <a href="grid.html"> Heels </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Jewellery </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Bracelets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Necklaces &amp; Pendants </a>
                          </li>
                          <li>
                            <a href="grid.html"> Pins &amp; Brooches </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Dresses </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Casual Dresses </a>
                          </li>
                          <li>
                            <a href="grid.html"> Evening </a>
                          </li>
                          <li>
                            <a href="grid.html"> Designer </a>
                          </li>
                          <li>
                            <a href="grid.html"> Party </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Jackets </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Coats </a>
                          </li>
                          <li>
                            <a href="grid.html"> Jackets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Leather Jackets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Blazers </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Swimwear </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Swimsuits </a>
                          </li>
                          <li>
                            <a href="grid.html"> Beach Clothing </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                    </ul>
                    <!--level0-->
                  </li>
                  <!--level 0-->
                  <li>
                    <a href="grid.html">Electronics</a> <span class="subDropdown plus"></span>
                    <ul class="level0_482" style="display:none">
                      <li>
                        <a href="grid.html"> Smartphones </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Samsung </a>
                          </li>
                          <li>
                            <a href="grid.html"> Apple </a>
                          </li>
                          <li>
                            <a href="grid.html"> Blackberry </a>
                          </li>
                          <li>
                            <a href="grid.html"> Nokia </a>
                          </li>
                          <li>
                            <a href="grid.html"> HTC </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Cameras </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> Digital Cameras </a>
                          </li>
                          <li>
                            <a href="grid.html"> Camcorders </a>
                          </li>
                          <li>
                            <a href="grid.html"> Lenses </a>
                          </li>
                          <li>
                            <a href="grid.html"> Filters </a>
                          </li>
                          <li>
                            <a href="grid.html"> Tripod </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                      <li>
                        <a href="grid.html"> Accesories </a> <span class="subDropdown plus"></span>
                        <ul class="level1" style="display:none">
                          <li>
                            <a href="grid.html"> HeadSets </a>
                          </li>
                          <li>
                            <a href="grid.html"> Batteries </a>
                          </li>
                          <li>
                            <a href="grid.html"> Screen Protectors </a>
                          </li>
                          <li>
                            <a href="grid.html"> Memory Cards </a>
                          </li>
                          <li>
                            <a href="grid.html"> Cases </a>
                          </li>
                          <!--end for-each -->
                        </ul>
                        <!--level1-->
                      </li>
                      <!--level1-->
                    </ul>
                    <!--level0-->
                  </li>
                  <!--level 0-->
                  <li>
                    <a href="grid.html">Digital</a>
                  </li>
                  <!--level 0-->
                  <li class="last">
                    <a href="grid.html">Fashion</a>
                  </li>
                  <!--level 0-->
                </ul>
              </div>
              <!--box-content box-category-->
            </div>
            <div class="block block-layered-nav">
              <div class="block-title">Shop By</div>
              <div class="block-content">
                <p class="block-subtitle">Shopping Options</p>
                <dl id="narrow-by-list"> <dt class="odd">Price</dt>
                  <dd class="odd">
                    <ol>
                      <li>
                        <a href="#"><span class="price">$0.00</span> - <span class="price">$99.99</span></a> (6) </li>
                      <li>
                        <a href="#"><span class="price">$100.00</span> and above</a> (6) </li>
                    </ol>
                  </dd> <dt class="even">Manufacturer</dt>
                  <dd class="even">
                    <ol>
                      <li>
                        <a href="#">TheBrand</a> (9) </li>
                      <li>
                        <a href="#">Company</a> (4) </li>
                      <li>
                        <a href="#">LogoFashion</a> (1) </li>
                    </ol>
                  </dd> <dt class="odd">Color</dt>
                  <dd class="odd">
                    <ol>
                      <li>
                        <a href="#">Green</a> (1) </li>
                      <li>
                        <a href="#">White</a> (5) </li>
                      <li>
                        <a href="#">Black</a> (5) </li>
                      <li>
                        <a href="#">Gray</a> (4) </li>
                      <li>
                        <a href="#">Dark Gray</a> (3) </li>
                      <li>
                        <a href="#">Blue</a> (1) </li>
                    </ol>
                  </dd> <dt class="last even">Size</dt>
                  <dd class="last even">
                    <ol>
                      <li>
                        <a href="#">S</a> (6) </li>
                      <li>
                        <a href="#">M</a> (6) </li>
                      <li>
                        <a href="#">L</a> (4) </li>
                      <li>
                        <a href="#">XL</a> (4) </li>
                    </ol>
                  </dd>
                </dl>
              </div>
            </div>
            <div class="block block-subscribe">
              <div class="block-title">Newsletter Sign Up</div>
              <form action="http://www.magikcommerce.com//newsletter/subscriber/new/" method="post" id="newsletter-validate-detail">
                <div class="block-content">
                  <div class="form-subscribe-header"> Sign up for our newsletter:</div>
                  <input type="text" name="email" id="newsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Enter your email address">
                  <div class="actions">
                    <button class="button button-subscribe" title="Submit" type="submit"><span>Subscribe</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="block block-cart">
              <div class="block-title ">My Cart</div>
              <div class="block-content">
                <div class="summary">
                  <p class="amount">There are
                    <a href="#">2 items</a> in your cart.</p>
                  <p class="subtotal"> <span class="label">Cart Subtotal:</span> <span class="price">$27.99</span> </p>
                </div>
                <div class="ajax-checkout">
                  <button type="submit" title="Submit" class="button button-checkout"><span>Checkout</span></button>
                </div>
                <p class="block-subtitle">Recently added item(s) </p>
                <ul>
                  <li class="item">
                    <a class="product-image" title="Fisher-Price Bubble Mower" href="product_detail.html">
                      <img width="60" alt="Fisher-Price Bubble Mower" src="products-images/product1.jpg">
                    </a>
                    <div class="product-details">
                      <div class="access">
                        <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a>
                      </div>
                      <p class="product-name">
                        <a href="product_detail.html">Sample Product</a>
                      </p> <strong>1</strong> x <span class="price">$19.99</span> </div>
                  </li>
                  <li class="item last">
                    <a class="product-image" title="Prince Lionheart Jumbo Toy Hammock" href="product_detail.html">
                      <img width="60" alt="Prince Lionheart Jumbo Toy Hammock" src="products-images/product2.jpg">
                    </a>
                    <div class="product-details">
                      <div class="access">
                        <a class="btn-remove1" title="Remove This Item" href="#"> <span class="icon"></span> Remove </a>
                      </div>
                      <p class="product-name">
                        <a href="product_detail.html"> Sample Product </a>
                      </p> <strong>1</strong> x <span class="price">$8.00</span>
                      <!--access clearfix-->
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="block block-compare">
              <div class="block-title ">Compare Products (2)</div>
              <div class="block-content">
                <ol id="compare-items">
                  <li class="item odd">
                    <input type="hidden" class="compare-item-id" value="2173">
                    <a href="#" title="Remove This Item" class="btn-remove1"></a>
                    <a class="product-name" href="#"> Sofa with Box-Edge Polyester Wrapped Cushions</a>
                  </li>
                  <li class="item last even">
                    <input type="hidden" class="compare-item-id" value="2174">
                    <a href="#" title="Remove This Item" class="btn-remove1"></a>
                    <a class="product-name" href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a>
                  </li>
                </ol>
                <div class="ajax-checkout">
                  <button class="button button-compare" title="Submit" type="submit"><span>Compare</span></button>
                  <button class="button button-clear" title="Submit" type="submit"><span>Clear</span></button>
                </div>
              </div>
            </div>
            <div class="block block-list block-viewed">
              <div class="block-title"> Recently Viewed </div>
              <div class="block-content">
                <ol id="recently-viewed-items">
                  <li class="item odd">
                    <p class="product-name">
                      <a href="#"> Armchair with Box-Edge Upholstered Arm</a>
                    </p>
                  </li>
                  <li class="item even">
                    <p class="product-name">
                      <a href="#"> Pearce Upholstered Slee pere</a>
                    </p>
                  </li>
                  <li class="item last odd">
                    <p class="product-name">
                      <a href="#"> Sofa with Box-Edge Down-Blend Wrapped Cushions</a>
                    </p>
                  </li>
                </ol>
              </div>
            </div>
            <div class="block block-poll">
              <div class="block-title">Community Poll </div>
              <form onsubmit="return validatePollAnswerIsSelected();" method="post" action="#" id="pollForm">
                <div class="block-content">
                  <p class="block-subtitle">What is your favorite Magento feature?</p>
                  <ul id="poll-answers">
                    <li class="odd">
                      <input type="radio" value="5" id="vote_5" class="radio poll_vote" name="vote"> <span class="label">
                    <label for="vote_5">Layered Navigation</label>
                    </span> </li>
                    <li class="even">
                      <input type="radio" value="6" id="vote_6" class="radio poll_vote" name="vote"> <span class="label">
                    <label for="vote_6">Price Rules</label>
                    </span> </li>
                    <li class="odd">
                      <input type="radio" value="7" id="vote_7" class="radio poll_vote" name="vote"> <span class="label">
                    <label for="vote_7">Category Management</label>
                    </span> </li>
                    <li class="last even">
                      <input type="radio" value="8" id="vote_8" class="radio poll_vote" name="vote"> <span class="label">
                    <label for="vote_8">Compare Products</label>
                    </span> </li>
                  </ul>
                  <div class="actions">
                    <button class="button button-vote" title="Vote" type="submit"><span>Vote</span></button>
                  </div>
                </div>
              </form>
            </div>
            <div class="block block-tags">
              <div class="block-title"> Popular Tags</div>
              <div class="block-content">
                <ul class="tags-list">
                  <li>
                    <a style="font-size:98.3333333333%;" href="#tagId/23/">Camera</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/109/">Hohoho</a>
                  </li>
                  <li>
                    <a style="font-size:145%;" href="#tagId/27/">SEXY</a>
                  </li>
                  <li>
                    <a style="font-size:75%;" href="#tagId/61/">Tag</a>
                  </li>
                  <li>
                    <a style="font-size:110%;" href="#tagId/29/">Test</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/17/">bones</a>
                  </li>
                  <li>
                    <a style="font-size:110%;" href="#tagId/12/">cool</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/184/">cool t-shirt</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/173/">crap</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/41/">good</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/16/">green</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/5/">hip</a>
                  </li>
                  <li>
                    <a style="font-size:75%;" href="#tagId/51/">laptop</a>
                  </li>
                  <li>
                    <a style="font-size:75%;" href="#tagId/20/">mobile</a>
                  </li>
                  <li>
                    <a style="font-size:75%;" href="#tagId/70/">nice</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/42/">phone</a>
                  </li>
                  <li>
                    <a style="font-size:98.3333333333%;" href="#tagId/30/">red</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/28/">tight</a>
                  </li>
                  <li>
                    <a style="font-size:75%;" href="#tagId/2/">trendy</a>
                  </li>
                  <li>
                    <a style="font-size:86.6666666667%;" href="#tagId/4/">young</a>
                  </li>
                </ul>
                <div class="actions">
                  <a class="view-all" href="#">View All Tags</a>
                </div>
              </div>
            </div>
            <div class="block block-banner">
              <a href="#">
                <img src="images/block-banner.png" alt="">
              </a>
            </div>
          </aside>
        </div>
      </div>
    </div>
    <!-- End Two columns content -->
    
    </div>
@endsection