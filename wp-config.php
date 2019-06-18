<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'wd2_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FDKo~f?/DpD&JhI<Hm=?Lzos63[bG-&Ee8U|=M2):A=cBeHq@5ZPmQH^r`&u`cC*' );
define( 'SECURE_AUTH_KEY',  '0E6pB$E8o,Ytr99n6OdsdO6!zJp{|^C=Cng1%!n6J#r9)F676_,dHNH:OBmr=iqV' );
define( 'LOGGED_IN_KEY',    'a2a>l!&6~*H`+?c)?0K-X?4SqCe:,i$%HN<QW]-cUY71:;]HNd;OFHJcyx`nK.N^' );
define( 'NONCE_KEY',        '5,0n5]O>{WYu)W[W$^%N P TqcQAj@z}2sX13NxD&N@JYw6^MVXxnKq578KQ-[X~' );
define( 'AUTH_SALT',        'RGV5TgWk!;/2ePE$p>_Hc1t$H`R^j)z|y^H2]+{HWH1<Aa2Zg;1JcwDLH9LN[xtV' );
define( 'SECURE_AUTH_SALT', 'e$8n$aX^r&~zR90J<>xR;nK7>)/{_4lhv`30;mD1D5M6t)-B]zsV~~,GJ]~ObdR@' );
define( 'LOGGED_IN_SALT',   'L1U>>#|5P%w@=eqKd0xZ<H4(/0m1:Fsy*]atWTnEC+23V)s~Bhrr~gI$UTO,O/ZP' );
define( 'NONCE_SALT',       'hvI4y9M+G89&&Xz$}=v{fF8bpL~J0cC(9k*,:<>irW1_qL#|6aL1Q0{z&(1Sn5%b' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', true);

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD','direct');
