<?php
	defined("_AST") or die("Access denied");
	$CP=Base::getData("products");
	
	$pageDetails=Base::getPageDetails();
?>
<!-- محتوای اصلی صفحه -->
<main class="py-4">
<div class="container">
<!-- عنوان صفحه و مسیر -->
<div class="row mb-4">
    <div class="breadcrumb">
        <div class="col-lg-12">
            <h2 class="titr"><?= $pageDetails['title']; ?></h2>
            <ol class="breadcrumb">
                <li>
                    <a href="index.php">خانه</a>
                </li>
                <li class="active">پروژه ها</li>
            </ol>
        </div>
    </div>
</div>
    <div class="row">
        <div class=" row">
			<?php
				foreach($CP['Items'] as $item){
					?>
                    <div class="items col-md-4">
                        <a href="products/<?= $item['id'].text2url($item['title']); ?>"><img src="<?= $item['ImageURL']; ?>" alt="<?= $item['title']; ?>"></a>
                        <h4><a href="products/<?= $item['id'].text2url($item['title']); ?>"><?= $item['title']; ?></a></h4>
						<?= $item['text']; ?>
                    </div>
					<?php
				}
			?>
        </div>
    </div>
<!-- فیلترهای موبایل (قابل باز و بسته شدن) -->
<div class="collapse d-md-none mb-4" id="filterCollapse">
<div class="card p-3">
    <h5 class="mb-3">فیلترها</h5>
    <!-- فیلترهای مشابه با سایدبار -->
    <div class="mb-3">
        <label class="form-label fw-bold">دسته‌بندی</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="category1-mobile">
            <label class="form-check-label" for="category1-mobile">مانتو اسپرت</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="category2-mobile">
            <label class="form-check-label" for="category2-mobile">مانتو مجلسی</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="category3-mobile">
            <label class="form-check-label" for="category3-mobile">مانتو تابستانی</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="category4-mobile">
            <label class="form-check-label" for="category4-mobile">مانتو بلند</label>
        </div>
    </div>
    
    <!-- فیلتر سایز -->
    <div class="mb-3">
        <label class="form-label fw-bold">سایز</label>
        <div class="d-flex flex-wrap">
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" id="size-xs-mobile">
                <label class="form-check-label" for="size-xs-mobile">XS</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" id="size-s-mobile">
                <label class="form-check-label" for="size-s-mobile">S</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" id="size-m-mobile">
                <label class="form-check-label" for="size-m-mobile">M</label>
            </div>
            <div class="form-check me-3">
                <input class="form-check-input" type="checkbox" id="size-l-mobile">
                <label class="form-check-label" for="size-l-mobile">L</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="size-xl-mobile">
                <label class="form-check-label" for="size-xl-mobile">XL</label>
            </div>
        </div>
    </div>
    
    <!-- فیلتر رنگ -->
    <div class="mb-3">
        <label class="form-label fw-bold">رنگ</label>
        <div>
            <span class="color-option" style="background-color: #000000;" title="مشکی"></span>
            <span class="color-option" style="background-color: #FFFFFF;" title="سفید"></span>
            <span class="color-option" style="background-color: #0074D9;" title="آبی"></span>
            <span class="color-option" style="background-color: #FF4136;" title="قرمز"></span>
            <span class="color-option" style="background-color: #2ECC40;" title="سبز"></span>
            <span class="color-option" style="background-color: #FFDC00;" title="زرد"></span>
            <span class="color-option" style="background-color: #AAAAAA;" title="خاکستری"></span>
            <span class="color-option" style="background-color: #F08080;" title="صورتی"></span>
        </div>
    </div>
    
    <!-- فیلتر محدوده قیمت -->
    <div class="mb-3">
        <label class="form-label fw-bold">محدوده قیمت</label>
        <div id="priceSliderMobile" class="mt-2 mb-2"></div>
        <div class="d-flex justify-content-between">
            <span class="price-min">100,000 تومان</span>
            <span class="price-max">2,000,000 تومان</span>
        </div>
    </div>
    
    <button class="btn btn-dark mt-2">اعمال فیلترها</button>
</div>
</div>

<div class="row">
<!-- سایدبار فیلترها (دسکتاپ و تبلت) -->
<div class="col-md-3 d-none d-md-block">
    <div class="filter-sidebar">
        <div class="card filter-card mb-4">
            <div class="card-header">مرتب‌سازی</div>
            <div class="card-body">
                <select class="form-select">
                    <option selected>پیش‌فرض</option>
                    <option>جدیدترین</option>
                    <option>پرفروش‌ترین</option>
                    <option>ارزان‌ترین</option>
                    <option>گران‌ترین</option>
                    <option>بیشترین تخفیف</option>
                </select>
            </div>
        </div>
        
        <div class="card filter-card">
            <div class="card-header">دسته‌بندی</div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="category1">
                    <label class="form-check-label" for="category1">مانتو اسپرت</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="category2">
                    <label class="form-check-label" for="category2">مانتو مجلسی</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="category3">
                    <label class="form-check-label" for="category3">مانتو تابستانی</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="category4">
                    <label class="form-check-label" for="category4">مانتو بلند</label>
                </div>
            </div>
        </div>
        
        <div class="card filter-card mt-4">
            <div class="card-header">سایز</div>
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="size-xs">
                        <label class="form-check-label" for="size-xs">XS</label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="size-s">
                        <label class="form-check-label" for="size-s">S</label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="size-m">
                        <label class="form-check-label" for="size-m">M</label>
                    </div>
                    <div class="form-check me-3">
                        <input class="form-check-input" type="checkbox" id="size-l">
                        <label class="form-check-label" for="size-l">L</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-xl">
                        <label class="form-check-label" for="size-xl">XL</label>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card filter-card mt-4">
            <div class="card-header">رنگ</div>
            <div class="card-body">
                <div>
                    <span class="color-option" style="background-color: #000000;" title="مشکی"></span>
                    <span class="color-option" style="background-color: #FFFFFF;" title="سفید"></span>
                    <span class="color-option" style="background-color: #0074D9;" title="آبی"></span>
                    <span class="color-option" style="background-color: #FF4136;" title="قرمز"></span>
                    <span class="color-option" style="background-color: #2ECC40;" title="سبز"></span>
                    <span class="color-option" style="background-color: #FFDC00;" title="زرد"></span>
                    <span class="color-option" style="background-color: #AAAAAA;" title="خاکستری"></span>
                    <span class="color-option" style="background-color: #F08080;" title="صورتی"></span>
                </div>
            </div>
        </div>
        
        <div class="card filter-card mt-4">
            <div class="card-header">برند</div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand1">
                    <label class="form-check-label" for="brand1">فیروزه</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand2">
                    <label class="form-check-label" for="brand2">ماهور</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand3">
                    <label class="form-check-label" for="brand3">نارین</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="brand4">
                    <label class="form-check-label" for="brand4">آیلار</label>
                </div>
            </div>
        </div>
        
        <div class="card filter-card mt-4">
            <div class="card-header">محدوده قیمت</div>
            <div class="card-body">
                <div id="priceSlider" class="mt-2 mb-2"></div>
                <div class="d-flex justify-content-between">
                    <span class="price-min">100,000 تومان</span>
                    <span class="price-max">2,000,000 تومان</span>
                </div>
            </div>
        </div>
        
        <div class="card filter-card mt-4">
            <div class="card-header">سایر فیلترها</div>
            <div class="card-body">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="discount">
                    <label class="form-check-label" for="discount">فقط کالاهای تخفیف‌دار</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="available">
                    <label class="form-check-label" for="available">فقط کالاهای موجود</label>
                </div>
            </div>
        </div>
        
        <div class="mt-4">
            <button class="btn btn-dark w-100">اعمال فیلترها</button>
        </div>
    </div>
</div>

<!-- بخش اصلی نمایش محصولات -->
<div class="col-md-9">
    <!-- نوار مرتب‌سازی (موبایل) -->
    <div class="d-flex d-md-none mb-3 align-items-center justify-content-between">
        <button class="btn btn-sm btn-outline-dark d-flex align-items-center" type="button" data-bs-toggle="collapse" data-bs-target="#filterCollapse" aria-expanded="false">
            <i class="bi bi-funnel me-1"></i>
            فیلترها
        </button>
        <select class="form-select form-select-sm w-auto">
            <option selected>مرتب‌سازی</option>
            <option>جدیدترین</option>
            <option>پرفروش‌ترین</option>
            <option>ارزان‌ترین</option>
            <option>گران‌ترین</option>
            <option>بیشترین تخفیف</option>
        </select>
    </div>
    
    <!-- نمایش محصولات -->
    <div class="row g-3 product-grid-view" id="productContainer">
        <!-- محصول 1 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <span class="product-badge badge bg-success">جدید</span>
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو بلند طرح‌دار</h5>
                    <p class="text-muted small">برند فیروزه</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>620,000 تومان</strong>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.2</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
        
        <!-- محصول 2 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <span class="product-badge badge bg-danger">20٪ تخفیف</span>
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1551803091-e20673f15770?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو اسپرت کژوال</h5>
                    <p class="text-muted small">برند ماهور</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>480,000 تومان</strong>
                            <small class="text-decoration-line-through text-muted me-2">600,000</small>
                        </div>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.5</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
        
        <!-- محصول 3 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1548624313-0fb13cd313ee?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو تابستانی خنک</h5>
                    <p class="text-muted small">برند نارین</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>420,000 تومان</strong>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.0</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
        
        <!-- محصول 4 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <span class="product-badge badge bg-secondary">پرفروش</span>
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1590159983013-d4ff5fc71c1d?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو مجلسی طرح گل</h5>
                    <p class="text-muted small">برند آیلار</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>750,000 تومان</strong>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.8</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
        
        <!-- محصول 5 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <span class="product-badge badge bg-warning text-dark">محدود</span>
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1509182469511-7f0b50bfa39e?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو بهاره ساده</h5>
                    <p class="text-muted small">برند فیروزه</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>530,000 تومان</strong>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.3</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
        
        <!-- محصول 6 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <span class="product-badge badge bg-danger">30٪ تخفیف</span>
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1525450824786-227cbef70703?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو زمستانی گرم</h5>
                    <p class="text-muted small">برند ماهور</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <strong>630,000 تومان</strong>
                            <small class="text-decoration-line-through text-muted me-2">900,000</small>
                        </div>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.1</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- بنر تبلیغاتی بین محصولات -->
    <div class="row my-4">
        <div class="col-12">
            <div class="card bg-light border-0">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4>ارسال رایگان برای خرید بالای 500 هزار تومان</h4>
                            <p class="text-muted mb-0">با خرید بیشتر از هزینه‌های ارسال صرفه‌جویی کنید</p>
                        </div>
                        <div class="col-md-4 text-center text-md-end mt-3 mt-md-0">
                            <a href="#" class="btn btn-dark">مشاهده پیشنهادها</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- ادامه محصولات -->
    <div class="row g-3 product-grid-view">
        <!-- محصول 7 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1507274153689-990bd2c05614?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو جلوباز راحتی</h5>
                    <p class="text-muted small">برند نارین</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>420,000 تومان</strong>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>3.9</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
        
        <!-- محصول 8 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1485462537746-965f33f7f6a7?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو کالج شیک</h5>
                    <p class="text-muted small">برند آیلار</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>490,000 تومان</strong>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.6</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
        
        <!-- محصول 9 -->
        <div class="col-6 col-lg-4">
            <div class="card product-card">
                <div class="position-relative">
                    <span class="product-badge badge bg-info">پیشنهاد ویژه</span>
                    <button class="wishlist-btn">
                        <i class="bi bi-heart"></i>
                    </button>
                    <a href="product-details.html">
                        <img src="https://images.unsplash.com/photo-1539533113208-f6df8cc8b543?auto=format&fit=crop&w=600&q=80" class="card-img-top product-img" alt="مانتو زنانه">
                    </a>
                    <button class="quickview-btn">
                        <i class="bi bi-eye me-1"></i>
                        مشاهده سریع
                    </button>
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-1">مانتو آستین‌کیمونو</h5>
                    <p class="text-muted small">برند فیروزه</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <strong>580,000 تومان</strong>
                        <div>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span>4.4</span>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="#" class="btn btn-outline-dark w-100">
                        <i class="bi bi-bag-plus me-1"></i>
                        افزودن به سبد
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- پجینیشن -->
    <div class="row mt-4">
        <div class="col-12">
            <nav aria-label="صفحه‌بندی محصولات">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">قبلی</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#">بعدی</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
</div>

    