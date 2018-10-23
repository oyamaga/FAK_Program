<?php
/**
 * クラスファイル
 */
class FreeAndKindProgram{
    /**
     * コンストラクタ
     * 管理画面のメニューの追加、サブメニューの非表示の関数を読み込む
     */
    public function __construct(){
        $this->loadFiles();
        // if(is_admin()){
            add_action('admin_menu', array($this,"add_admin_menu"));
            add_action('admin_menu',array($this,'removeMenu'));
        // }
    }
    /**
     * 必要なファイルの読み込み
     * 
     * @since 1.0
     * @return void
     */
    private function loadFiles()
    {
        if(is_admin() )
        {
            // インストール時実行ファイル
            // include 'elements/views/class-fak-install.php'
            // プラグインのビューの読み込み
            include 'elements/views/testMenuPage.php';
            include 'elements/views/testCreatePage.php';
            
        }
    }
    /**
     * 管理画面へメニュー・サブメニューの追加
     */
    function add_admin_menu() {
        add_menu_page('fak_program', '試験作成', 'administrator', "fak_program",array($this,''));
        add_submenu_page("fak_program",'問題管理','問題管理ページ','administrator',"manage",'testMenuPage');
        add_submenu_page("fak_program",'問題編集','問題編集ページ','administrator',"edit",'testCreatePage');
    }
    /**
     * サブメニューの非表示
     */
    function removeMenu()
    {
        global $submenu;
        unset($submenu["fak_program"][0]);
    }
    /**
     * サブメニューのフォーム作成
     */
    function testMenuSub()
    {
        require_once 'elements/views/testMenuPage.php';
    }
    function testCreateSub()
    {
        require_once 'elements/views/testCreatePage.php';
    }
}
?>