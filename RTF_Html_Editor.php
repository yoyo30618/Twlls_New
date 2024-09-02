<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTF to HTML Editor</title>
    <!-- 引入 CKEditor -->
    
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

</head>
<body>

<h2>RTF to HTML Editor</h2>

<!-- 文本編輯區域 -->
<textarea id="rtfEditor"></textarea>

<!-- 顯示轉換後的 HTML 代碼 -->
<div id="htmlOutput"></div>

<!-- 按鈕用於觸發轉換操作 -->
<button onclick="convertToHTML()">轉換為HTML</button>

<script>
    // 初始化 CKEditor
    CKEDITOR.replace('rtfEditor');

    // 轉換函數
    function convertToHTML() {
        // 獲取編輯器的數據
        var htmlContent = CKEDITOR.instances.rtfEditor.getData();

        // 將獲取的HTML顯示在指定的div中
        document.getElementById('htmlOutput').innerHTML = htmlContent;
    }
</script>

</body>
</html>
