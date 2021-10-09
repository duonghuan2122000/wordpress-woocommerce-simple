<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'D:\xampp\htdocs\shopping\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'shop_wp' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'admin' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=`~$PM%hV^{f*EH6HArPOx<cX&jX|l,*uc*k(C}GM~kD;eAI<9f&CTi4lm%8etAo' );
define( 'SECURE_AUTH_KEY',  'Aid9)u^3}klA9oplfAFSf:%V];x@0[bC:9cn-g0]IssbdevA. -^*x&/6|4]z1Gi' );
define( 'LOGGED_IN_KEY',    '@*IOB Z{m}h`2Na}DParw&;ucS:)<@AAjL/?C#K]10;Gr@WBt:ZrK?STl9!?d}SM' );
define( 'NONCE_KEY',        'P^9e~5u{hCY5+js]%CImg@Uw[ fgE2dJ?D19h(vHMDM-6QgrpDnB2r::>0#FD1q-' );
define( 'AUTH_SALT',        'TE>lha>sMs3QV[W1qDxZ[W;:Sj(.;,)L}3(1oTy+$=49J?>!*e-v/,buMfWBsfB7' );
define( 'SECURE_AUTH_SALT', 't*N%eWmL-jgOB9^bJ}wP9Q:Oh;=4/|LWx&QvFX]G&Nt/4SZ/c07RgDPm9@Pr<+(0' );
define( 'LOGGED_IN_SALT',   '*Bc7-GmD]Nnqm<du~4@{xTIpFH$M.YoDYKhDrUCgsN:A?7B<}3]^|+aQm7jVw2||' );
define( 'NONCE_SALT',       'xQQ}/BMZF@Ld,:Mp)we}<ai#Bx#N*4!|pK(RW.46{;JdC=Jh <F+E*QvrO8pk8F&' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
