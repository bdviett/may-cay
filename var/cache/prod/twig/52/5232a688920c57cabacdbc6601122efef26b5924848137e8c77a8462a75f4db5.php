<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__71f2b2e7278e09184c6ffe429364be4470c79a1dd0810756dfa8440375938d8b */
class __TwigTemplate_e50fd3bcac8cf9b34b59c63c255e39b388584ed05393abe1ece5525ccc3ab0cd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"vn\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/may-cay/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/may-cay/img/app_icon.png\" />

<title>Order settings • Cửa hàng phụ tùng máy công nghiệp</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrderPreferences';
    var iso_user = 'vn';
    var lang_is_rtl = '0';
    var full_language_code = 'vi-vn';
    var full_cldr_language_code = 'vi-VN';
    var country_iso_code = 'VN';
    var _PS_VERSION_ = '1.7.6.3';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Một đơn hàng mới đã được đặt trên cửa hàng của bạn.';
    var order_number_msg = 'Số đơn hàng: ';
    var total_msg = 'Tổng cộng: ';
    var from_msg = 'Từ: ';
    var see_order_msg = 'Xem đơn hàng này';
    var new_customer_msg = 'Một khách hàng mới đăng ký vào cửa hàng của bạn.';
    var customer_name_msg = 'Tên khách hàng: ';
    var new_msg = 'Một tin nhắn mới đã được đăng trên cửa hàng của bạn.';
    var see_msg = 'Đọc tin nhắn này';
    var token = 'fdb01a44ba843d7909d9303aca04da24';
    var token_admin_orders = 'd228aa222dafefe8d2b5ef440883b99a';
    var token_admin_customers = 'be19505447a1b14ae39c6d9d513448c9';
    var token_admin_customer_threads = '88846d8f3e82c4847b89176bb53295a5';
    var currentIndex = 'index.php?controller=AdminOrderPreferences';
    var employee_token = '6d22419afbb6a02a402456ba8f99a03b';
    var choose_language_translate = 'Chọn ngôn ngữ';
    var default_language = '1';
    var admin_modules_link = '/may-cay/admin_sc/index.php/improve/modules/catalog/recommended?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs';
    var admin_notification_get_link = '/may-cay/admin_sc/index.php/common/notifications?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs';
    var admin_notification_push_link = '/may-cay/admin_sc/index.php/common/notifications/ack?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs';
    var tab_modules_list = 'mailalerts,apiway';
    var update_success_msg = 'Cập nhật thành công';
    var errorLogin = 'PrestaShop đã không thể đăng nhập vào Addons. Vui lòng kiểm tra thông tin của bạn và kết nối Internet của bạn.';
    var search_product_msg = 'Tìm kiếm một sản phẩm';
  </script>

      <link href=\"/may-cay/modules/welcome/public/module.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/admin_sc/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/admin_sc/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/may-cay/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/may-cay\\/admin_sc\\/\";
var baseDir = \"\\/may-cay\\/\";
var changeFormLanguageUrl = \"\\/may-cay\\/admin_sc\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\";
var currency = {\"iso_code\":\"VND\",\"sign\":\"\\u20ab\",\"name\":\"\\u0110\\u1ed3ng Vi\\u1ec7t Nam\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"VND\",\"currencySymbol\":\"\\u20ab\",\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var show_new_customers = \"1\";
var show_new_messages = false;
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/may-cay/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/modules/welcome/public/module.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/admin.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/tools.js?v=1.7.6.3\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/admin_sc/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/may-cay/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>

  <script type=\"text/javascript\">
/*
 * Return total of notification per checkbox checked
 * @param  int nbNewCustomer
 * @param  int nbNewOrder
 * @param  int nbNewMessage
 * @return int result        Total of Notification
 */
function getNotification(nbNewCustomer, nbNewOrder, nbNewMessage) {
    let result = 0;
    //if radiobutton is checked
     result += nbNewOrder;      result += nbNewCustomer;      result += nbNewMessage; 
    return result;
}

function loadAjax(adminController) {
    \$.ajax({
        type: 'POST',
        dataType: 'JSON',
        url: adminController,
        data: {
            ajax: true,
            action: \"GetNotifications\",
        },

        success: function(data) {

            let nbNewCustomers = parseInt(data.customer.total);
            let nbNewOrders = parseInt(data.order.total);
            let nbNewCustomerMessages = parseInt(data.customer_message.total);

            let nbTotalNotification = getNotification(nbNewCustomers, nbNewOrders, nbNewCustomerMessages);

            favicon.badge(nbTotalNotification);
        },
        error: function(err) {
            console.log(err);
            console.log(adminController);
        },
    });
}

function updateNotifications(type) {
  \$.post(
    baseAdminDir + \"ajax.php\",
    {
      \"updateElementEmployee\": \"1\",
      \"updateElementEmployeeType\": type
    }
  );
}

\$(document).ready(function() {
    adminController = adminController.replace(/\\amp;/g, '');
    //set the configuration of the favicon
    window.favicon = new Favico({
        animation: 'popFade',
        bgColor: BgColor,
        textColor: TxtColor,
    });
    loadAjax(adminController)
    setInterval(function() {
        loadAjax(adminController);
    }, 60000); //refresh notification every 60 seconds

    //update favicon when you click on the customer tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomers', function (e) {
        updateNotifications('customer');
    });
    //update favicon when you click on the customer service tab into your backoffice
    \$(document).on('click', '#subtab-AdminCustomerThreads', function (e) {
        updateNotifications('customer_message');
    });
    //update favicon when you click on the order tab into your backoffice
    \$(document).on('click', '#subtab-AdminOrders', function (e) {
        updateNotifications('order');
    });
});
</script>

<script type=\"text/javascript\">
    let BgColor = \"#DF0067\";
    let TxtColor = \"#ffffff\";
    let CheckBoxOrder = \"1\";
    let CheckBoxCustomer = \"1\";
    let CheckBoxMessage = \"1\";
    let adminController = \"http://localhost/may-cay/admin_sc/index.php?controller=AdminAjaxFaviconBO&amp;token=4730c3d16e18de42080feed21c5a80f6\";
</script>

<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/may-cay\\/admin_sc\\/index.php?controller=AdminGamification&token=ae7e90a7155b5bdca3ef526d68b7fc58\";
            var current_id_tab = 86;
        </script>

";
        // line 176
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>

<body class=\"lang-vn adminorderpreferences\">

  <header id=\"header\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminDashboard&amp;token=dadb1e6014d1cfb94417157014634ea3\"></a>
      <span id=\"shop_version\">1.7.6.3</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Truy cập nhanh
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php/improve/modules/manage?token=dca01e411b4a4878da3c386a5d140976\"
                 data-item=\"Các mô-đun đã cài đặt\"
      >Các mô-đun đã cài đặt</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php/sell/catalog/categories/new?token=dca01e411b4a4878da3c386a5d140976\"
                 data-item=\"Danh mục mới\"
      >Danh mục mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=708be9bc49f1625c85844ba00fffb2c2\"
                 data-item=\"Phiếu giảm giá mới\"
      >Phiếu giảm giá mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php/sell/catalog/products/new?token=dca01e411b4a4878da3c386a5d140976\"
                 data-item=\"Sản phẩm mới\"
      >Sản phẩm mới</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=933156e50dead80b374ac0ac5b0c6d29\"
                 data-item=\"Định giá danh mục\"
      >Định giá danh mục</a>
          <a class=\"dropdown-item\"
         href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrders&amp;token=d228aa222dafefe8d2b5ef440883b99a\"
                 data-item=\"Đơn hàng\"
      >Đơn hàng</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"195\"
        data-icon=\"icon-AdminParentOrderPreferences\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/order-preferences\"
        data-post-link=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminQuickAccesses&token=bd158dea5009a7fcf667950c435241f8\"
        data-prompt-text=\"Vui lòng đặt tên phím tắt này:\"
        data-link=\"C&agrave;i đặt Đơn...\"
      >
        <i class=\"material-icons\">add_circle</i>
        Thêm trang hiện tại vào truy cập nhanh QuickAccess
      </a>
        <a class=\"dropdown-item\" href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminQuickAccesses&token=bd158dea5009a7fcf667950c435241f8\">
      <i class=\"material-icons\">settings</i>
      Quản lý các thao tác truy cập nhanh
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/may-cay/admin_sc/index.php?controller=AdminSearch&amp;token=b8a418830a48ccbaf130a56754423a22\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Tìm kiếm (ví dụ: tham chiếu sản phẩm, tên khách hàng...)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Mọi nơi
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Mọi nơi\" href=\"#\" data-value=\"0\" data-placeholder=\"Bạn đang tìm kiếm thứ gì?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Mọi nơi</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Danh mục\" href=\"#\" data-value=\"1\" data-placeholder=\"Tên, mã, tham chiếu sản phẩm...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Danh mục</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng tên\" href=\"#\" data-value=\"2\" data-placeholder=\"Email, tên...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Khách hàng bằng tên</a>
        <a class=\"dropdown-item\" data-item=\"Khách hàng bằng địa chỉ Ip\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Khách hàng theo địa chỉ IP</a>
        <a class=\"dropdown-item\" data-item=\"Đơn hàng\" href=\"#\" data-value=\"3\" data-placeholder=\"ID đơn đặt hàng\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Đơn hàng</a>
        <a class=\"dropdown-item\" data-item=\"Biên nhận\" href=\"#\" data-value=\"4\" data-placeholder=\"Số hóa đơn\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Biên nhận</a>
        <a class=\"dropdown-item\" data-item=\"Giỏ hàng\" href=\"#\" data-value=\"5\" data-placeholder=\"Mã ID thẻ\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Giỏ hàng</a>
        <a class=\"dropdown-item\" data-item=\"Các mô-đun\" href=\"#\" data-value=\"7\" data-placeholder=\"Tên module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Các mô-đun</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">TÌM KIẾM</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

      
      
      <div class=\"component\" id=\"header-shop-list-container\">
          <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/may-cay/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Xem cửa hàng của tôi
    </a>
  </div>
      </div>

              <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Đơn hàng<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Khách hàng<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Tin nhắn<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có đơn hàng mới vào lúc này :(<br>
              Còn một số giảm giá theo mùa thì sao?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có khách hàng mới vào lúc này :(<br>
              Gần đây bạn đã gửi email mua lại chưa?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Không có tin nhắn mới vào lúc này.<br>
              Không có tin gì tức là tin tốt, đúng không?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      từ <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - đã đăng ký <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      
      <span class=\"employee_avatar\"><img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/admin%40admin.com.jpg\" /></span>
      <span class=\"employee_profile\">Welcome back Admin</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/may-cay/admin_sc/index.php/configure/advanced/employees/1/edit?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\">
      <i class=\"material-icons\">settings</i>
      Hồ sơ của bạn
    </a>
    </div>
    
    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">book</i> Resources</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">school</i> Đào tạo</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">person_pin_circle</i> Find an Expert</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">extension</i> PrestaShop Marketplace</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\"><i class=\"material-icons\">help</i> Help Center</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminLogin&amp;logout=1&amp;token=7159ec75f35297c25100c478dab572e1\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Đăng xuất</span>
    </a>
  </div>
</div>
      </div>
    </nav>

      </header>

  <nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/may-cay/admin_sc/index.php/configure/advanced/employees/toggle-navigation?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminDashboard&amp;token=dadb1e6014d1cfb94417157014634ea3\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Bảng điều khiển</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Bán hàng</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrders&amp;token=d228aa222dafefe8d2b5ef440883b99a\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Đơn hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrders&amp;token=d228aa222dafefe8d2b5ef440883b99a\" class=\"link\"> Đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/orders/invoices/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Biên nhận
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminSlip&amp;token=c1815ac623a8b72e4a4d491b465ee6f4\" class=\"link\"> Phiếu tín dụng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/orders/delivery-slips/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Phiếu giao hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCarts&amp;token=08211d42ee50523ea6aaa260dcf4aaf7\" class=\"link\"> Giỏ hàng
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/may-cay/admin_sc/index.php/sell/catalog/products?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Danh mục
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/catalog/products?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Sản phẩm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/catalog/categories?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Danh mục
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminTracking&amp;token=2930e5a476b7394045423a3328281dee\" class=\"link\"> Giám sát
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminAttributesGroups&amp;token=088d3f0296d779a926667d38ae88107a\" class=\"link\"> Thuộc tính &amp; Tính năng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/catalog/brands/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Thương hiệu &amp; Nhà cung cấp
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminAttachments&amp;token=8ec2216355b67d9dbeacefca0a2db910\" class=\"link\"> Tập tin
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCartRules&amp;token=708be9bc49f1625c85844ba00fffb2c2\" class=\"link\"> Giảm giá
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/stocks/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"/may-cay/admin_sc/index.php/sell/customers/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Khách hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"/may-cay/admin_sc/index.php/sell/customers/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminAddresses&amp;token=2e41b200a9fcd44d37427a9b124ebdfe\" class=\"link\"> Địa chỉ
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCustomerThreads&amp;token=88846d8f3e82c4847b89176bb53295a5\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    Dịch vụ Khách hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCustomerThreads&amp;token=88846d8f3e82c4847b89176bb53295a5\" class=\"link\"> Dịch vụ Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminOrderMessage&amp;token=00e7a6f0c4a71a7a61c1805635849d7e\" class=\"link\"> Tin nhắn đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminReturn&amp;token=d4a192b75ec0b163539c773af789f6b8\" class=\"link\"> Hàng hóa trả lại
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminStats&amp;token=933156e50dead80b374ac0ac5b0c6d29\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Cải thiện</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/modules/manage?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Các mô-đun
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/modules/manage?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Module Manager
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminPsMboModule&amp;token=853f89dd73cd5d830018e8a2a826c35b\" class=\"link\"> Module Catalog
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/design/themes/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Thiết kế
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/themes/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Chủ đề &amp; Logo
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"134\" id=\"subtab-AdminPsMboTheme\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminPsMboTheme&amp;token=da39d73db248f950af1b6c924b6afff9\" class=\"link\"> Danh mục Chủ đề
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/mail_theme/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Email Theme
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/cms-pages/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Các trang
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/design/modules/positions/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Vị trí
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"59\" id=\"subtab-AdminImages\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminImages&amp;token=f454faf68a17939e2c192bfc1c7139ae\" class=\"link\"> Cài đặt hình ảnh
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"/may-cay/admin_sc/index.php/modules/link-widget/list?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCarriers&amp;token=b0cd06f6b235676a9ffd2ee62afdc22e\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Vận chuyển
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminCarriers&amp;token=b0cd06f6b235676a9ffd2ee62afdc22e\" class=\"link\"> Cty vận chuyển
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/shipping/preferences?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Tùy chọn
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/payment/payment_methods?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Thanh toán
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/payment/payment_methods?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Phương thức thanh toán
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/payment/preferences?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Tùy chọn
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                  <a href=\"/may-cay/admin_sc/index.php/improve/international/localization/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    Quốc tế
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/international/localization/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Địa phương hóa
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminZones&amp;token=4b2619e7a3faf34bc2b3661ebf6a5e7f\" class=\"link\"> Địa phương
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/international/taxes/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Thuế
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                              <a href=\"/may-cay/admin_sc/index.php/improve/international/translations/settings?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Dịch
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Cấu hình</span>
          </li>

                          
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                  <a href=\"/may-cay/admin_sc/index.php/configure/shop/preferences/preferences?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Thông số cửa hàng
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/preferences/preferences?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Chung
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/order-preferences/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Cài đặt Đơn hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/product-preferences/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Cài đặt Sản phẩm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/customer-preferences/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Cài đặt Khách hàng
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/contacts/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Liên hệ
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/shop/seo-urls/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Truy cập &amp; SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminSearchConf&amp;token=206b5d6dc454924958a152817d6db622\" class=\"link\"> Tìm kiếm
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-AdminGamification\">
                              <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminGamification&amp;token=ae7e90a7155b5bdca3ef526d68b7fc58\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/may-cay/admin_sc/index.php/configure/advanced/system-information/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Thông số chi tiết
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/system-information/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Thông tin
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/performance/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/administration/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Quản trị
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/emails/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Hộp thư
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"108\" id=\"subtab-AdminImport\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/import/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Nhập vào
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/employees/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Quản trị viên
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/sql-requests/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Cơ sở dữ liệu
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/logs/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Nhật ký
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                              <a href=\"/may-cay/admin_sc/index.php/configure/advanced/webservice-keys/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
            </ul>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      Mở cửa hàng của bạn!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">36%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:35.714285714286%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Tiếp tục lại</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Dừng OnBoarding</a>
  </div>
</div>

</nav>

<div id=\"main-div\">
          
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Cài đặt Đơn hàng</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Order settings          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
             

<script>
    
    var isSymfonyContext = true;
    var admin_module_ajax_url_psmbo = 'http://localhost/may-cay/admin_sc/index.php?controller=AdminPsMboModule&token=853f89dd73cd5d830018e8a2a826c35b';
    var controller = 'AdminOrderPreferences';
    
    if (isSymfonyContext === false) {
        
        \$(document).ready(function() {
            
            \$('.process-icon-modules-list').parent('a').prop('href', admin_module_ajax_url_psmbo);
            
            \$('.fancybox-quick-view').fancybox({
                type: 'ajax',
                autoDimensions: false,
                autoSize: false,
                width: 600,
                height: 'auto',
                helpers: {
                    overlay: {
                        locked: false
                    }
                }
            });
        });
    }
\t
\t\$(document).on('click', '#page-header-desc-configuration-modules-list', function(event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
\t
\t\$('.process-icon-modules-list').parent('a').unbind().bind('click', function (event) {
\t\tevent.preventDefault();
\t\topenModalOrRedirect(isSymfonyContext);
\t});
    
    function openModalOrRedirect(isSymfonyContext) {
        if (isSymfonyContext === false) {
            \$('#modules_list_container').modal('show');
            openModulesList();
        } else {
            window.location.href = admin_module_ajax_url_psmbo;
        }
    }
\t
    function openModulesList() {
        \$.ajax({
            type: 'POST',
            url: admin_module_ajax_url_psmbo,
            data: {
                ajax : true,
                action : 'GetTabModulesList',
                controllerName: controller
            },
            success : function(data) {
                \$('#modules_list_container_tab_modal').html(data).slideDown();
                \$('#modules_list_loader').hide();
            },
        });
    }
\t
\t
</script>

                                                                              <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/may-cay/admin_sc/index.php/improve/modules/catalog?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\"                title=\"Recommended Modules\"
                              >
                Recommended Modules
              </a>
            
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Giúp đỡ\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/may-cay/admin_sc/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fvn%252Fdoc%252FAdminOrderPreferences%253Fversion%253D1.7.6.3%2526country%253Dvn/Gi%C3%BAp%20%C4%91%E1%BB%A1?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\"
                   id=\"product_form_open_help\"
                >
                  Giúp đỡ
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class=\"nav-item\">
                    <a href=\"/may-cay/admin_sc/index.php/configure/shop/order-preferences/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\" id=\"subtab-AdminOrderPreferences\" class=\"nav-link tab active current\" data-submenu=\"86\">
                      Cài đặt Đơn hàng
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminStatuses&token=dd03bd9611cf3d2663dabe5ea483ac2d\" id=\"subtab-AdminStatuses\" class=\"nav-link tab \" data-submenu=\"87\">
                      Trạng thái
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </ul>
    </div>
    
</div>
      
      <div class=\"content-div  with-tabs\">

        
<div class=\"onboarding-advancement\" style=\"display: none\">
  <div class=\"advancement-groups\">
          <div class=\"group group-0\" style=\"width: 7.1428571428571%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">1</div>
      </div>
          <div class=\"group group-1\" style=\"width: 35.714285714286%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">2</div>
      </div>
          <div class=\"group group-2\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">3</div>
      </div>
          <div class=\"group group-3\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">4</div>
      </div>
          <div class=\"group group-4\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">5</div>
      </div>
          <div class=\"group group-5\" style=\"width: 14.285714285714%;\">
        <div class=\"advancement\" style=\"width: 35.714285714286%;\"></div>
        <div class=\"id\">6</div>
      </div>
      </div>
  <div class=\"col-md-8\">
    <h4 class=\"group-title\"></h4>
    <div class=\"step-title step-title-1\"></div>
    <div class=\"step-title step-title-2\"></div>
  </div>
  <button class=\"btn btn-primary onboarding-button-next\">Tiếp tục</button>
  <a class=\"onboarding-button-shut-down\">Bỏ qua hướng dẫn này</a>
</div>

<script type=\"text/javascript\">

  var onBoarding;

  \$(function(){
    onBoarding = new OnBoarding(5, {\"groups\":[{\"steps\":[{\"type\":\"popup\",\"text\":\"<div class=\\\"onboarding-welcome\\\">\\n  <i class=\\\"material-icons onboarding-button-shut-down\\\">close<\\/i>\\n  <p class=\\\"welcome\\\">Ch\\u00e0o m\\u1eebng b\\u1ea1n \\u0111\\u1ebfn v\\u1edbi c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n!<\\/p>\\n  <div class=\\\"content\\\">\\n    <p>Xin ch\\u00e0o! T\\u00f4i l\\u00e0 Preston v\\u00e0 t\\u00f4i xin h\\u01b0\\u1edbng d\\u1eabn cho b\\u1ea1n.<\\/p>\\n    <p>B\\u1ea1n s\\u1ebd t\\u00ecm hi\\u1ec3u m\\u1ed9t v\\u00e0i b\\u01b0\\u1edbc thi\\u1ebft y\\u1ebfu tr\\u01b0\\u1edbc khi b\\u1ea1n c\\u00f3 th\\u1ec3 m\\u1edf c\\u1eeda h\\u00e0ng c\\u1ee7a m\\u00ecnh:\\n    T\\u1ea1o s\\u1ea3n ph\\u1ea9m \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a b\\u1ea1n, t\\u00f9y ch\\u1ec9nh c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n, c\\u1ea5u h\\u00ecnh v\\u1eadn chuy\\u1ec3n v\\u00e0 thanh to\\u00e1n...<\\/p>\\n  <\\/div>\\n  <div class=\\\"started\\\">\\n    <p>Ch\\u00fang ta h\\u00e3y b\\u1eaft \\u0111\\u1ea7u!<\\/p>\\n  <\\/div>\\n  <div class=\\\"buttons\\\">\\n    <button class=\\\"btn btn-tertiary-outline btn-lg onboarding-button-shut-down\\\">\\u0110\\u1ec3 sau<\\/button>\\n    <button class=\\\"blue-balloon btn btn-primary btn-lg with-spinner onboarding-button-next\\\">B\\u1eaft \\u0111\\u1ea7u<\\/button>\\n  <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"http:\\/\\/localhost\\/may-cay\\/admin_sc\\/index.php?controller=AdminDashboard&token=dadb1e6014d1cfb94417157014634ea3\"}]},{\"title\":\"H\\u00e3y t\\u1ea1o s\\u1ea3n ph\\u1ea9m \\u0111\\u1ea7u ti\\u00ean c\\u1ee7a b\\u1ea1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n n\\u00f3i g\\u00ec v\\u1ec1 n\\u00f3? H\\u00e3y ngh\\u0129 v\\u1ec1 nh\\u1eefng g\\u00ec kh\\u00e1ch h\\u00e0ng c\\u1ee7a b\\u1ea1n mu\\u1ed1n bi\\u1ebfn.\",\"2\":\"Th\\u00eam th\\u00f4ng tin r\\u00f5 r\\u00e0ng v\\u00e0 h\\u1ea5p d\\u1eabn. \\u0110\\u1eebng lo, b\\u1ea1n c\\u00f3 th\\u1ec3 s\\u1eeda sau :)\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0110\\u1eb7t t\\u00ean h\\u1ea5p d\\u1eabn cho s\\u1ea3n ph\\u1ea9m c\\u1ee7a b\\u1ea1n.\",\"options\":[\"savepoint\"],\"page\":[\"\\/may-cay\\/admin_sc\\/index.php\\/sell\\/catalog\\/products\\/new?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\",\"index.php\\/sell\\/catalog\\/products\\/.+\"],\"selector\":\"#form_step1_name_1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"\\u0110i\\u1ec1n c\\u00e1c chi ti\\u1ebft thi\\u1ebft y\\u1ebfu v\\u00e0o tab n\\u00e0y. C\\u00e1c tab kh\\u00e1c d\\u00e0nh cho th\\u00f4ng tin n\\u00e2ng cao h\\u01a1n.\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#tab_step1\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"Th\\u00eam m\\u1ed9t ho\\u1eb7c nhi\\u1ec1u h\\u00ecnh \\u1ea3nh \\u0111\\u1ec3 s\\u1ea3n ph\\u1ea9m c\\u1ee7a b\\u1ea1n c\\u00f3 v\\u1ebb h\\u1ea5p d\\u1eabn!\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\"#product-images-dropzone\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"B\\u1ea1n mu\\u1ed1n b\\u00e1n s\\u1ea3n ph\\u1ea9m v\\u1edbi gi\\u00e1 bao nhi\\u00eau?\",\"page\":\"index.php\\/sell\\/catalog\\/products\\/.+\",\"selector\":\".right-column > .row > .col-md-12 > .form-group:nth-child(4) > .row > .col-md-6:first-child > .input-group\",\"position\":\"left\",\"action\":{\"selector\":\"#product_form_save_go_to_catalog_btn\",\"action\":\"click\"}},{\"type\":\"tooltip\",\"text\":\"V\\u00e2ng! B\\u1ea1n v\\u1eeba t\\u1ea1o s\\u1ea3n ph\\u1ea9m \\u0111\\u1ea7u ti\\u00ean. T\\u1ed1t \\u0111\\u00fang kh\\u00f4ng?\",\"page\":\"index.php\\/sell\\/catalog\\/products\",\"selector\":\"#product_catalog_list table tr:first-child td:nth-child(3)\",\"position\":\"left\"}]},{\"title\":\"T\\u1ea1o h\\u00ecnh \\u1ea3nh ri\\u00eang cho c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n c\\u1eeda h\\u00e0ng c\\u1ee7a m\\u00ecnh tr\\u00f4ng nh\\u01b0 th\\u1ebf n\\u00e0o? \\u0110i\\u1ec1u g\\u00ec l\\u00e0m cho n\\u00f3 \\u0111\\u1eb7c bi\\u1ec7t?\",\"2\":\"T\\u00f9y ch\\u1ec9nh ch\\u1ee7 \\u0111\\u1ec1 c\\u1ee7a b\\u1ea1n ho\\u1eb7c ch\\u1ecdn thi\\u1ebft k\\u1ebf \\u0111\\u1eb9p nh\\u1ea5t t\\u1eeb danh m\\u1ee5c ch\\u1ee7 \\u0111\\u1ec1 c\\u1ee7a ch\\u00fang t\\u00f4i.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"M\\u1ed9t c\\u00e1ch hi\\u1ec7u qu\\u1ea3 \\u0111\\u1ec3 b\\u1eaft \\u0111\\u1ea7u l\\u00e0 th\\u00eam logo c\\u1ee7a b\\u1ea1n \\u1edf \\u0111\\u00e2y!\",\"options\":[\"savepoint\"],\"page\":\"\\/may-cay\\/admin_sc\\/index.php\\/improve\\/design\\/themes\\/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\",\"selector\":\"#form_shop_logos_header_logo\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"N\\u1ebfu b\\u1ea1n mu\\u1ed1n m\\u1ed9t th\\u1ee9 g\\u00ec \\u0111\\u00f3 th\\u1ef1c s\\u1ef1 \\u0111\\u1eb7c bi\\u1ec7t, h\\u00e3y xem danh m\\u1ee5c ch\\u1ee7 \\u0111\\u1ec1!\",\"page\":\"\\/may-cay\\/admin_sc\\/index.php\\/improve\\/design\\/themes-catalog\\/?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\",\"selector\":\".addons-theme-one:first-child\",\"position\":\"right\"}]},{\"title\":\"C\\u00f3 \\u0111\\u01b0\\u1ee3c c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n \\u0111\\u00e3 s\\u1eb5n s\\u00e0ng cho c\\u00e1c kho\\u1ea3n thanh to\\u00e1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n kh\\u00e1ch h\\u00e0ng thanh to\\u00e1n cho b\\u1ea1n b\\u1eb1ng c\\u00e1ch n\\u00e0o?\",\"2\":\"\\u0110i\\u1ec1u ch\\u1ec9nh ch\\u00e0o h\\u00e0ng c\\u1ee7a b\\u1ea1n theo th\\u1ecb tr\\u01b0\\u1eddng: th\\u00eam nh\\u1eefng ph\\u01b0\\u01a1ng th\\u1ee9c thanh to\\u00e1n ph\\u1ed5 bi\\u1ebfn nh\\u1ea5t cho kh\\u00e1ch h\\u00e0ng c\\u1ee7a b\\u1ea1n!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"C\\u00e1c ph\\u01b0\\u01a1ng th\\u1ee9c thanh to\\u00e1n \\u0111\\u00e3 kh\\u1ea3 d\\u1ee5ng cho kh\\u00e1ch h\\u00e0ng c\\u1ee7a b\\u1ea1n.\",\"options\":[\"savepoint\"],\"page\":\"\\/may-cay\\/admin_sc\\/index.php\\/improve\\/payment\\/payment_methods?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\",\"selector\":\".modules_list_container_tab:first tr:first-child .text-muted, .card:eq(0) .text-muted:eq(0)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"V\\u00e0 b\\u1ea1n c\\u00f3 th\\u1ec3 ch\\u1ecdn th\\u00eam c\\u00e1c ph\\u01b0\\u01a1ng th\\u1ee9c thanh to\\u00e1n kh\\u00e1c t\\u1eeb \\u0111\\u00e2y!\",\"page\":\"\\/may-cay\\/admin_sc\\/index.php\\/improve\\/payment\\/payment_methods?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\",\"selector\":\".panel:eq(1) table tr:eq(0) td:eq(1), .card:eq(1) .module-item-list div:eq(0) div:eq(1)\",\"position\":\"top\"}]},{\"title\":\"Ch\\u1ecdn c\\u00e1c gi\\u1ea3i ph\\u00e1p v\\u1eadn chuy\\u1ec3n c\\u1ee7a b\\u1ea1n\",\"subtitle\":{\"1\":\"B\\u1ea1n mu\\u1ed1n giao s\\u1ea3n ph\\u1ea9m b\\u1eb1ng c\\u00e1ch n\\u00e0o?\",\"2\":\"Ch\\u1ecdn c\\u00e1c gi\\u1ea3i ph\\u00e1p v\\u1eadn chuy\\u1ec3n c\\u00f3 kh\\u1ea3 n\\u0103ng ph\\u00f9 h\\u1ee3p cao nh\\u1ea5t v\\u1edbi kh\\u00e1ch h\\u00e0ng c\\u1ee7a b\\u1ea1n! T\\u1ea1o h\\u00e3ng v\\u1eadn chuy\\u1ec3n c\\u1ee7a b\\u1ea1n ho\\u1eb7c th\\u00eam m\\u1ed9t m\\u00f4-\\u0111un c\\u00f3 s\\u1eb5n.\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"\\u0110\\u00e2y l\\u00e0 c\\u00e1c ph\\u01b0\\u01a1ng th\\u1ee9c v\\u1eadn chuy\\u1ec3n kh\\u1ea3 d\\u1ee5ng trong c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n h\\u00f4m nay.\",\"options\":[\"savepoint\"],\"page\":\"http:\\/\\/localhost\\/may-cay\\/admin_sc\\/index.php?controller=AdminCarriers&token=b0cd06f6b235676a9ffd2ee62afdc22e\",\"selector\":\"#table-carrier tr:eq(2) td:eq(3)\",\"position\":\"right\"},{\"type\":\"tooltip\",\"text\":\"B\\u1ea1n c\\u00f3 th\\u1ec3 \\u0111\\u1ec1 ngh\\u1ecb c\\u00e1c l\\u1ef1a ch\\u1ecdn giao h\\u00e0ng kh\\u00e1c b\\u1eb1ng c\\u00e1ch c\\u00e0i \\u0111\\u1eb7t th\\u00eam h\\u00e3ng v\\u1eadn chuy\\u1ec3n\",\"page\":\"http:\\/\\/localhost\\/may-cay\\/admin_sc\\/index.php?controller=AdminCarriers&token=b0cd06f6b235676a9ffd2ee62afdc22e\",\"selector\":\".modules_list_container_tab tr:eq(0) .text-muted\",\"position\":\"right\"}]},{\"title\":\"C\\u1ea3i thi\\u1ec7n c\\u1eeda h\\u00e0ng c\\u1ee7a b\\u1ea1n b\\u1eb1ng c\\u00e1c m\\u00f4-\\u0111un\",\"subtitle\":{\"1\":\"Th\\u00eam c\\u00e1c t\\u00ednh n\\u0103ng m\\u1edbi v\\u00e0 qu\\u1ea3n l\\u00fd c\\u00e1c t\\u00ednh n\\u0103ng hi\\u1ec7n h\\u1eefu nh\\u1edd v\\u00e0o c\\u00e1c m\\u00f4-\\u0111un.\",\"2\":\"M\\u1ed9t s\\u1ed1 m\\u00f4 \\u0111un \\u0111\\u00e3 \\u0111\\u01b0\\u1ee3c c\\u00e0i \\u0111\\u1eb7t s\\u1eb5n, nh\\u1eefng m\\u00f4-\\u0111un kh\\u00e1c c\\u00f3 th\\u1ec3 mi\\u1ec5n ph\\u00ed ho\\u1eb7c tr\\u1ea3 ph\\u00ed - h\\u00e3y duy\\u1ec7t qua l\\u1ef1a ch\\u1ecdn c\\u1ee7a ch\\u00fang t\\u00f4i v\\u00e0 xem nh\\u1eefng g\\u00ec c\\u00f3 s\\u1eb5n!\"},\"steps\":[{\"type\":\"tooltip\",\"text\":\"Kh\\u00e1m ph\\u00e1 b\\u1ed9 s\\u01b0u t\\u1eadp m\\u00f4-\\u0111un c\\u1ee7a ch\\u00fang t\\u00f4i trong tab \\u0111\\u1ea7u ti\\u00ean. Qu\\u1ea3n l\\u00fd c\\u00e1c m\\u00f4-\\u0111un c\\u1ee7a b\\u1ea1n \\u1edf tab th\\u1ee9 hai v\\u00e0 \\u0111\\u1ec3 \\u00fd c\\u00e1c th\\u00f4ng b\\u00e1o \\u1edf tab th\\u1ee9 ba.\",\"options\":[\"savepoint\"],\"page\":\"\\/may-cay\\/admin_sc\\/index.php\\/improve\\/modules\\/catalog?_token=cVU6j95z7uyjy4pC89JvHDrG3DC3977JwoeeTTZgCbs\",\"selector\":\".page-head-tabs .tab:eq(0)\",\"position\":\"right\"},{\"type\":\"popup\",\"text\":\"<div id=\\\"onboarding-welcome\\\" class=\\\"modal-body\\\">\\n    <div class=\\\"col-12\\\">\\n        <button class=\\\"onboarding-button-next pull-right close\\\" type=\\\"button\\\">&times;<\\/button>\\n        <h2 class=\\\"text-center text-md-center\\\">T\\u00f9y b\\u1ea1n!<\\/h2>\\n    <\\/div>\\n    <div class=\\\"col-12\\\">\\n        <p class=\\\"text-center text-md-center\\\">\\n          B\\u1ea1n \\u0111\\u00e3 th\\u1ea5y th\\u00f4ng tin thi\\u1ebft y\\u1ebfu, nh\\u01b0ng c\\u00f2n nhi\\u1ec1u th\\u1ee9 \\u0111\\u1ec3 kh\\u00e1m ph\\u00e1.<br \\/>\\n          M\\u1ed9t s\\u1ed1 t\\u00e0i nguy\\u00ean c\\u00f3 th\\u1ec3 gi\\u00fap b\\u1ea1n th\\u00eam:\\n        <\\/p>\\n        <div class=\\\"container-fluid\\\">\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6  justify-content-center text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"http:\\/\\/doc.prestashop.com\\/display\\/PS17\\/Getting+Started\\\" target=\\\"_blank\\\">\\n                <div class=\\\"starter-guide\\\"><\\/div>\\n                <span class=\\\"link\\\">H\\u01b0\\u1edbng D\\u1eabn D\\u00e0nh Cho Ng\\u01b0\\u1eddi M\\u1edbi<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/forums\\/\\\" target=\\\"_blank\\\">\\n                <div class=\\\"forum\\\"><\\/div>\\n                <span class=\\\"link\\\">Di\\u1ec5n \\u0111\\u00e0n<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n          <div class=\\\"row\\\">\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.prestashop.com\\/en\\/training-prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"training\\\"><\\/div>\\n                <span class=\\\"link\\\">\\u0110\\u00e0o t\\u1ea1o<\\/span>\\n              <\\/a>\\n            <\\/div>\\n            <div class=\\\"col-md-6 text-center text-md-center link-container\\\">\\n              <a class=\\\"final-link\\\" href=\\\"https:\\/\\/www.youtube.com\\/user\\/prestashop\\\" target=\\\"_blank\\\">\\n                <div class=\\\"video-tutorial\\\"><\\/div>\\n                <span class=\\\"link\\\">H\\u01b0\\u1edbng d\\u1eabn video<\\/span>\\n              <\\/a>\\n            <\\/div>\\n          <\\/div>\\n        <\\/div>\\n    <\\/div>\\n    <div class=\\\"modal-footer\\\">\\n        <div class=\\\"col-12\\\">\\n            <div class=\\\"text-center text-md-center\\\">\\n                <button class=\\\"btn btn-primary onboarding-button-next\\\">T\\u00f4i \\u0111\\u00e3 s\\u1eb5n s\\u00e0ng<\\/button>\\n            <\\/div>\\n        <\\/div>\\n    <\\/div>\\n<\\/div>\\n\",\"options\":[\"savepoint\",\"hideFooter\"],\"page\":\"index.php\\/improve\\/modules\\/catalog\"}]}]}, 1, \"http://localhost/may-cay/admin_sc/index.php?controller=AdminWelcome&token=dc4a8894b71a88a0214201c2a6df3130\", baseAdminDir);

          onBoarding.addTemplate('lost', '<div class=\"onboarding onboarding-popup bootstrap\">  <div class=\"content\">    <p>Xin chào! Bạn bị lạc à?</p>    <p>Để tiếp tục, nhấp vào đây:</p>    <div class=\"text-center\">      <button class=\"btn btn-primary onboarding-button-goto-current\">Tiếp tục</button>    </div>    <p>Nếu bạn muốn dừng nội dung hướng dẫn, hãy nhấp vào đây:</p>    <div class=\"text-center\">      <button class=\"btn btn-alert onboarding-button-stop\">Thoát khỏi hướng dẫn Chào Mừng</button>    </div>  </div></div>');
          onBoarding.addTemplate('popup', '<div class=\"onboarding-popup bootstrap\">  <div class=\"content\"></div></div>');
          onBoarding.addTemplate('tooltip', '<div class=\"onboarding-tooltip\">  <div class=\"content\"></div>  <div class=\"onboarding-tooltipsteps\">    <div class=\"total\">Bước <span class=\"count\">1/5</span></div>    <div class=\"bulls\">    </div>  </div>  <button class=\"btn btn-primary btn-xs onboarding-button-next\">Tiếp</button></div>');
    
    onBoarding.showCurrentStep();

    var body = \$(\"body\");

    body.delegate(\".onboarding-button-next\", \"click\", function(){
      if (\$(this).is('.with-spinner')) {
        if (!\$(this).is('.animated')) {
          \$(this).addClass('animated');
          onBoarding.gotoNextStep();
        }
      } else {
        onBoarding.gotoNextStep();
      }
    }).delegate(\".onboarding-button-shut-down\", \"click\", function(){
      onBoarding.setShutDown(true);
    }).delegate(\".onboarding-button-resume\", \"click\", function(){
      onBoarding.setShutDown(false);
    }).delegate(\".onboarding-button-goto-current\", \"click\", function(){
      onBoarding.gotoLastSavePoint();
    }).delegate(\".onboarding-button-stop\", \"click\", function(){
      onBoarding.stop();
    });

  });

</script>


                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1333
        $this->displayBlock('content_header', $context, $blocks);
        // line 1334
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1335
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1336
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1337
        echo "
             
<div class=\"modal fade\" id=\"modules_list_container\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h3 class=\"modal-title\">Các module và các dịch vụ được đề xuất</h3>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div id=\"modules_list_container_tab_modal\" style=\"display:none;\"></div>
\t\t\t\t<div id=\"modules_list_loader\"><i class=\"icon-refresh icon-spin\"></i></div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, Không!</h1>
  <p class=\"mt-3\">
    Phiên bản dành cho điện thoại di động của trang này chưa có.
  </p>
  <p class=\"mt-2\">
    Vui lòng sử dụng một máy tính để bàn để truy cập vào trang này, cho đến khi được điều chỉnh cho điện thoại di động.
  </p>
  <p class=\"mt-2\">
    Cảm ơn.
  </p>
  <a href=\"http://localhost/may-cay/admin_sc/index.php?controller=AdminDashboard&amp;token=dadb1e6014d1cfb94417157014634ea3\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Quay lại
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-VN&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/vn/login?email=admin%40admin.com&amp;firstname=Admin&amp;lastname=LTE&amp;website=http%3A%2F%2Flocalhost%2Fmay-cay%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/may-cay/admin_sc/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Kết nối cửa hàng của bạn với chợ PrestaShop để tự động nhập tất cả các mua bán Addons của bạn.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Không có tài khoản?</h4>
\t\t\t\t\t\t<p class='text-justify'>Khám phá sức mạnh của PrestaShop Addons! Khám phá Official Marketplace PrestaShop và tìm thấy hơn 3 500 mô-đun sáng tạo và chủ đề mà tối ưu hóa tỷ lệ chuyển đổi, tăng lưu lượng truy cập, xây dựng lòng trung thành của khách hàng và tối đa hóa năng suất của bạn</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Kết nối đến PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/vn/forgot-your-password\">Tôi quên mật khẩu của tôi</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/vn/login?email=admin%40admin.com&amp;firstname=Admin&amp;lastname=LTE&amp;website=http%3A%2F%2Flocalhost%2Fmay-cay%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-VN&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tTạo Tài khoản
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Đăng nhập
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1458
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
    }

    // line 176
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1333
    public function block_content_header($context, array $blocks = [])
    {
    }

    // line 1334
    public function block_content($context, array $blocks = [])
    {
    }

    // line 1335
    public function block_content_footer($context, array $blocks = [])
    {
    }

    // line 1336
    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1458
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__71f2b2e7278e09184c6ffe429364be4470c79a1dd0810756dfa8440375938d8b";
    }

    public function getDebugInfo()
    {
        return array (  1548 => 1458,  1543 => 1336,  1538 => 1335,  1533 => 1334,  1528 => 1333,  1519 => 176,  1511 => 1458,  1388 => 1337,  1385 => 1336,  1382 => 1335,  1379 => 1334,  1377 => 1333,  216 => 176,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__71f2b2e7278e09184c6ffe429364be4470c79a1dd0810756dfa8440375938d8b", "");
    }
}
