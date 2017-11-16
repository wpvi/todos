<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được
 * tạo dựa trên nội dung mẫu của file này.
 * Bạn không bắt buộc phải sử dụng giao diện web
 * để cài đặt, chỉ cần lưu file này lại với tên "wp-config.php"
 * và điền các thông tin cần thiết.
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
/** Tên database MySQL*/
define('DB_NAME', 'database_name_here');

/** username của database */
define('DB_USER', 'username_here');

/** Mật khẩu của database */
define('DB_PASSWORD', 'password_here');

/** hostname của database*/
define('DB_HOST', 'localhost');

/** database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salts.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi nó bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookies hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập tại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'khóa không trùng nhau');
define('SECURE_AUTH_KEY',  'khóa không trùng nhau');
define('LOGGED_IN_KEY',    'khóa không trùng nhau');
define('NONCE_KEY',        'khóa không trùng nhau');
define('AUTH_SALT',        'khóa không trùng nhau');
define('SECURE_AUTH_SALT', 'khóa không trùng nhau');
define('LOGGED_IN_SALT',   'khóa không trùng nhau');
define('NONCE_SALT',       'khóa không trùng nhau');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tốt cho bảng giúp bạn có thể cài nhiều site WordPress lên một database.
 * Chỉ sử dụng số, kỹ tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi mạnh mẽ đề nghị các nhà developer sử dụng WP_DEBUG trong quá trình phát triển các plugin, theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống, Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
