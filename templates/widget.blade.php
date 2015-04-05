<style>
    .feature-post-widget{
        margin-bottom: 10px;
    }

    .feature-post-widget h1{
        padding-bottom: 5px;
        margin-bottom: 5px;
        border-bottom: 4px #0098CF solid;
        font-size: 20px;
    }  

    .feature-post-widget .feature-post .post-title{
        width: 100%;
        font-size: 18px;
        font-weight: bold;
    }

    .feature-post-widget .feature-post .post-date{
        float: left;
    }

    .feature-post-widget .feature-post .post-author{
        float: right;
    }

    .feature-post{
        clear: both;
        padding-bottom: 10px;
        float: left;
        width: 100%;
    }
</style>

<div class="feature-post-widget">
    
    <h1>精選文章</h1>
    @for($i = 0; $i <= 5; $i++)
        <div class="feature-post">
            <h2 class="post-title">
                重新思考松山機場遷建事宜
            </h2>
            <span class="post-date">
                2015-02-03
            </span>
            <span class="post-author">
                XXX
            </span>
        </div>
    @endfor
</div>
<div class="clearfix" style="clear:both;"></div>