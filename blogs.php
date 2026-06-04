<?php 
    include 'include/head.php';
    include 'include/header.php';


$url = "https://signetra-foresights.ghost.io/ghost/api/content/posts/?key=1fdc1930e2f4d9ec2f56528f78";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Accept-Version: v6.0"
]);

$response = curl_exec($ch);

$posts = [];

if(!curl_errno($ch)){

    $data = json_decode($response, true);

    if(isset($data['posts'])){
        $posts = $data['posts'];
    }

}

curl_close($ch);

?>

<style>

.blog-main{
    padding:80px 0;
    background:#f7f8fc;
}

.blog-card{
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 8px 30px rgba(0,0,0,0.06);
    transition:0.4s;
    height:100%;
    margin-bottom:30px;
}

.blog-card:hover{
    transform:translateY(-8px);
}

.blog-img{
    height:260px;
    overflow:hidden;
}

.blog-img img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:0.5s;
}

.blog-card:hover .blog-img img{
    transform:scale(1.08);
}

.blog-content{
    padding:30px;
}

.blog-date{
    font-size:14px;
    color:#888;
    margin-bottom:10px;
    display:block;
}

.blog-content h3{
    font-size:24px !important;
    line-height:1.4;
    margin-bottom:15px;
    font-weight:700;
}

.blog-content p {
    color: #666;
    line-height: 1.8;
    margin-bottom: 25px;
    height: 180px;
    overflow-y: scroll;
}

.blog-btn{
    display:inline-block;
    background:#000;
    color:#fff;
    padding:12px 26px;
    border-radius:50px;
    text-decoration:none;
    transition:0.4s;
}

.blog-btn:hover{
    background:#d70000;
    color:#fff;
}

@media(max-width:991px){

    .blog-main{
        padding:60px 0;
    }

    .blog-content h3{
        font-size:20px;
    }

}

</style>

<!-- Banner Sec Start -->
<section class="inn-banner">
    <div class="container">
        <div class="inn-slide-cap">
            <h2>Blogs</h2>
        </div>
    </div>
</section>
<!-- Banner Sec End -->


<!-- Blog Section Start -->
<section class="blog-main">
    <div class="container">

        <div class="row">

            <?php foreach($posts as $post){ ?>

                <div class="col-lg-4 col-md-6">

                    <div class="blog-card">

                        <?php if(isset($post['feature_image'])){ ?>

                            <div class="blog-img">
                                <img src="<?php echo $post['feature_image']; ?>" alt="">
                            </div>

                        <?php } ?>

                        <div class="blog-content">

                            <span class="blog-date">
                                <?php echo date("F d, Y", strtotime($post['published_at'])); ?>
                            </span>

                            <h3>
                                <?php echo $post['title']; ?>
                            </h3>

                            <p>
                                <?php echo $post['excerpt']; ?>
                            </p>

                            <a href="<?php echo $post['url']; ?>" target="_blank" class="blog-btn">
                                Read More
                            </a>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>
</section>
<!-- Blog Section End -->


<?php include 'include/footer.php';?>
<?php include 'include/links.php';?>
```
