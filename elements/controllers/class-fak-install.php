<?php
/**
 * Wordpressがインストールされてなければ終了
 */
if (! defined('ABSPATH') ) {
    exit;
}
/**
 * インストール時の処理
 * 
 */
class FAK_Install
{
    /**
     * コンストラクタ
     */
    function __construct()
    {
        $this->install();
    }
    
    /**
     * テーブル作成
     */
    function install()
    {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        $table_name = $wpdb->prefix . "FAK_Program";
        $sql = "CREATE TABLE $table_name (
            question_id mediumint(10) NOT NULL AUTO_INCREMENT,
            question_name TEXT NOT NULL,
            question_statement TEXT NOT NULL,
            question_answer TEXT NOT NULL,
            question_comment TEXT,
            PRIMARY KEY (question_id)
        ) $charset_collate;";
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }

}
?>