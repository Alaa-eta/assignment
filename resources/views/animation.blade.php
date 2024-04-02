<!DOCTYPE html>
<html>
<head>
    <title>CSS Assignment</title>
</head>
<style>
    @keyframes mask-move {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(300px);
        }
    }
    @keyframes mask-inner-move {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-300px);
        }
    }
    *, *:before, *:after {
        box-sizing: border-box;
    }
    body, html {
        height: 100%;
    }
    body {
        padding: 0;
        margin: 0;
        background: #000;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .focus {
        font-size: 2rem;
        color: white;
        letter-spacing: 0.2rem;
        line-height: 50px;
        position: relative;
        text-align: center;
        height: 60px;
        display: flex;
    }
    .focus:before {
        content: 'Welcome To ARPM!';
    }
    .focus--mask {
        overflow: hidden;
        position: absolute;
        width: 60px;
        height: 100%;
        top: 0;
        left: 0;
        background: #ffffff;
        color: #000;
        animation: mask-move 3s linear infinite alternate;
        border-radius: 100px;
    }
    .focus--mask-inner {
        animation: mask-inner-move 3s linear infinite alternate;
        width: 100vh;
        text-align: left;
    }

</style>
<body>
{{--Welcome To ARPM!--}}
<div class="focus">
    <div class="focus--mask">
        <div class="focus--mask-inner">Welcome To ARPM!</div>
    </div>
</div>
</body>
</html>
