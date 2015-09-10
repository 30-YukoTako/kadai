<?php include("header.php");?>
    
    <section class="news contents-box">
        <h2 class="section-title text-center">
            <span class="section-title__yellow">News</span>
            <span class="section-title-ja text-center">日付</span>
        </h2>
        <article class="news-detail">
            <dl class="clearfix">
<?php
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
//var_dump($_GET);
$news_id=$_GET["news_id"];
//ゲットで一つの記事を取得するためにnews_id(key)が必要になる.keyがあれば特定の人のその他の情報を取得できる。
//echo $news_id;
$sql = "SELECT * FROM news_list where news_id = " .$news_id;
//echo $sql;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
foreach($results as $row) {
//var_dump($row);
	echo '<dt class="news-date">'. $row["create_date"] . '</dt>';
    //''でくくって文字列にする。phpはhtmlを出力できないから文字列にして出力しないといけないよ.は文字列をつなげるもの
    
	echo '<dd class="news-title">' .$row["news_title"] . '</dd>';
    echo '<dd>' .$row["news_detail"] . '</dd>';
}
$pdo = null;
?>
            </dl>
            
        </article>
    </section>

<?php include("footer.php"); ?>