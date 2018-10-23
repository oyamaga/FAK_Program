<?php
function testCreatePage()
{
?>
<div class="wrap">
    <h3>クイズ新規作成</h3>
    <form action="" method="post">
        <div class="post_box">
            <h3 class="box_string">問題名</h3>
            <input type="text" id ="exam_name" name="name">
        </div>
        <div class="post_box">
            <h3 class="box_string">問題文</h3>
            <input type="textarea" id="exam_description" name="description">
        </div>
            <h3 class="box_answer">回答</h3>
            <!-- <input type="button" value="問題を追加" name="answer" onclick="add();"> -->
            <input type="button" value="追加" onclick="add();">
            <div id="test1"></div>
            <div class="post_box">
                <h3 class="box_string">問題に対しての解説</h3>
                <div class="test">
                    <?php wp_editor("","content"); ?>
                </div>
            </div>
        <input type = "submit" value =送信>
    </form>
</div>
<style>
    .post_box
    {
    border: 1px solid #e5e5e5;
    background: #fff;
    /* width: 100%; */
    }

    #wp-content-editor-tools{
        margin:0px 10px;
    }
    #wp-content-editor-container{
        margin:0px 10px 10px 10px;
    }
    h3.box_string{
        margin-left:10px;
    }
    #exam_name{
        margin:0px 10px 10px 10px;
        width: 1000px;
        position: relative;
    }
    #exam_description{
        margin:0px 10px 10px 10px;
        width: 1000px;
        position: relative;
    }
</style>
<script type="text/javascript">
function add(){
    var e = document.createElement("div");
    e.innerHTML = '<br><input type="text" name="title"></input>';
    var d1 = document.getElementById('test1');
    var p1  = document.createElement("input");
    p1.text = "text";
    d1.appendChild(p1);
}
</script>
<?php
}
?>