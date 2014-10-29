<?php
/**
 * WordPress基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL设置、数据库表名前缀、密钥、
 * WordPress语言设定以及ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑wp-config.php}Codex页面。MySQL设置具体信息请咨询您的空间提供商。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后填入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'hfx');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ze2FP|nwE.TOBxzCDN|6299KMAn6QQi7+&n5w?Nlpez,EoHVDd ?+HZAm_{W6Hmu');
define('SECURE_AUTH_KEY', 'yMfq9^g|lW$St|(5!=5.)pJ_CM5e-4d=7nvvM_*g$C[NtBS-Y+K5{km);U0|?RXX');
define('LOGGED_IN_KEY', '/aDNmuH+A.n-5 t=s>^KI7C0YYfqguZDH*(2:CWTVCcH LMR?9K2IY!gi%UK-0~v');
define('NONCE_KEY', 'oF@R7,O{#D.4Z~H=8rNO7X}IZek$L|;i$x)]asI+?F+w^-KwcRk#ZRT-e/FWz~lJ');
define('AUTH_SALT', '(FeSM-|#9z){HaR$,o$,-;4K-F0O#bu!m,q]z-qZoP1^hL.K2{]t(lJ`A9Id{^Da');
define('SECURE_AUTH_SALT', 'T[NeeyZg3]-Vkv{dUpMrTER&PF|)[7$5OFQ)/ 0S9SXK|-j XJwP-kQq$K[-l5T+');
define('LOGGED_IN_SALT', 'smQzXDVQOvA4 5b,ym0|h|?o}:2L^q$HKFY-0:OFAxILa~[tEN#37VSCVEaUZ*I`');
define('NONCE_SALT', '(9pzVS+0%_S5xA?Y5H2>ms#2((L+,0-)|ySf)ixrB|W,y;H`V&}zGI9@#Qy,-21i');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 */
define('WP_DEBUG', true);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

/** 设置WordPress变量和包含文件。 */
require_once (ABSPATH . 'wp-settings.php');
