<div class='container'>
    <div class='post-module hover'>
        <div class='thumbnail'>
            <img src='http://media.lakto.org/picture/error.jpg'>
        </div>
        <div class='post-content'>
            <div class='category'>Error 404</div>
            <h1 class='title'>This is not the page you are looking for.</h1>
            <h2 class='sub_title'>404 (Page Not Found) Error</h2>
            <p class='description'>

            </p>
            <div class='post-meta'>
        <span class='comments'>
          <a onclick="goBack()" href="">&#8592; Go to the back page</a>
        </span>
            </div>
        </div>
    </div>
</div>



<style>
    body {
        background: #f2f2f2;
        font-family: 'proxima-nova-soft', sans-serif;
        font-size: 16px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }
    .post-module {
        position: relative;
        z-index: 1;
        display: block;
        background: #ffffff;
        min-width: 270px;
        width: 340px;
        height: 470px;
        -webkit-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 1px 2px 0px rgba(0, 0, 0, 0.15);
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
        margin-left: auto;
        margin-right: auto;
        margin-top: 80px;
    }

    .post-module:hover,
    .hover {
        -webkit-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
        box-shadow: 0px 1px 35px 0px rgba(0, 0, 0, 0.3);
    }

    .post-module:hover .thumbnail img,
    .hover .thumbnail img {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        transform: scale(1.1);
        opacity: 1;
    }

    .post-module .thumbnail {
        background: #000000;
        height: 400px;
        overflow: hidden;
    }

    .post-module .thumbnail img {
        display: block;
        width: 110%;
        -webkit-transition: all 0.3s linear 0s;
        -moz-transition: all 0.3s linear 0s;
        -ms-transition: all 0.3s linear 0s;
        -o-transition: all 0.3s linear 0s;
        transition: all 0.3s linear 0s;
    }

    .post-module .post-content {
        position: absolute;
        bottom: 0;
        background: #e0e0e0;
        width: 100%;
        padding: 30px;
        -webkti-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        -webkit-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        -moz-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        -ms-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        -o-transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
    }

    .post-module .post-content .category {
        position: absolute;
        top: -34px;
        left: 0;
        background: #e74c3c;
        padding: 10px 15px;
        color: #ffffff;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .post-module .post-content .title {
        margin: 0;
        padding: 0 0 10px;
        color: #333333;
        font-size: 26px;
        font-weight: 700;
    }

    .post-module .post-content .sub_title {
        margin: 0;
        padding: 0 0 20px;
        color: #e74c3c;
        font-size: 20px;
        font-weight: 400;
    }

    .post-module .post-content .description {
        display: none;
        color: #666666;
        font-size: 14px;
        line-height: 1.8em;
    }

    .post-module .post-content .post-meta {
        margin: 30px 0 0;
        color: #999999;
    }

    .post-module .post-content .post-meta .timestamp {
        margin: 0 16px 0 0;
    }

    .post-module .post-content .post-meta a {
        color: #999999;
        text-decoration: none;
    }

    .hover .post-content .description {
        display: block !important;
        height: auto !important;
        opacity: 1 !important;
    }

    .container {
        max-width: 800px;
        min-width: 640px;
        margin: 0 auto;
    }

    .container:before,
    .container:after {
        content: '';
        display: block;
        clear: both;
    }

    .container .column {
        width: 50%;
        padding: 0 25px;
        -webkti-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;

    }

    .container .column .demo-title {
        margin: 0 0 15px;
        color: #666666;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .container .info {
        width: 300px;
        margin: 50px auto;
        text-align: center;
    }

    .container .info h1 {
        margin: 0 0 15px;
        padding: 0;
        font-size: 24px;
        font-weight: 400;
        color: #333333;
    }

    .container .info span {
        color: #666666;
        font-size: 12px;
    }

    .container .info span a {
        color: #000000;
        text-decoration: none;
    }

    .container .info span .fa {
        color: #e74c3c;
    }

</style>



<script>
    function goBack() {
        window.history.back();
    }
</script>