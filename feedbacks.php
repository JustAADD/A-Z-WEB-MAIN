<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A-Z Peptides PH</title>
    <link href="./output.css" rel="stylesheet">

    <style>
    @keyframes slide {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }

    .logos {
        overflow: hidden;
        padding: 10px 10px;
        background: #ffffff;
        height: auto;
        white-space: nowrap;
        position: relative;
        text-align: center;
    }

    #contact p {
        color: #ecf3fe;
        font-size: 20px;
    }


    .logos:before,
    .logos:after {
        position: absolute;
        top: 0;
        width: 300px;
        height: 100%;
        content: "";
        z-index: 2;
    }

    /* .logos:before {
            left: 0;
            background: linear-gradient(to left, rgba(255, 255, 255, 0), #000000);
        }

        .logos:after {
            right: 0;
            background: linear-gradient(to right, rgba(255, 255, 255, 0), #000000);
        } */

    .logos:hover .logos-slide {
        animation-play-state: paused;
    }

    .logos-slide {
        display: inline-block;
        animation: 35s slide infinite linear;
        display: flex;
    }

    .logos-slide img {
        height: 250px;
        width: auto;
        margin: 0 20px;
    }
    </style>
</head>

<body>

    <div class="w-full h-auto bg-[#ffffff] text-center">
        <div class="logos w-full bg-[#ffffff] flex justify-center items-center">
            <div class="logos-slide">
                <img src="./src/img/feedbacks/fb-1.jpg">
                <img src="./src/img/feedbacks/fb-2.jpg">
                <img src="./src/img/feedbacks/fb-3.jpg">
                <img src="./src/img/feedbacks/fb-4.jpg">
            </div>
        </div>
    </div>


</body>

</html>