<?php
function testMenuPage(){
    //管理者と編集者のみこのページを表示する
    if ( ! current_user_can( 'moderate_comments' ) ) {
        return;
    }
    // グローバル変数
    global $wpdb;
?>
<div class = "wrap">
    <h2>問題管理画面</h2>
    <a href='admin.php?page=edit'>試験作成</a>
    <table class = "a" border = "1">
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>shortcode</th>
            <th colspan="2">アクション</th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="">編集</a></td>
            <td><a href ="">削除</a></td>
        </tr>
    </table>

</div>
<style>
    .a th,td
    {
        border: solid 1px;
        padding: 0.5em;
        width:150px;
        text-align: center;
    }

</style>
<?php
}
?>
