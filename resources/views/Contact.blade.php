@extends('home')
@section('content')
@section('title', 'Contact')
<link rel="stylesheet" href="{{ url('Font awsome MRX/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ url('Font awsome MRX/css/font-awesome.css') }}">
<style>
          ::-webkit-scrollbar{
    width: 7px;
}
::-webkit-scrollbar-track{
    background: #000000;
    border-radius: 50px;
}
::-webkit-scrollbar-thumb{
    background: rgb(255, 230, 0);
    border-radius: 50px;
}
    body {
        width: 100%;
        height: 110vh;
        background: #000000;
        border-radius: 40px;
        box-shadow: none;
    }

    .navbar {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        background: #e0e0e0;
        padding-left: 15px;
        padding-right: 15px;
        box-shadow: none;
        border-radius: 60px;

    }

    video {
        width: 100%;
        height: 100%;
    }


    a {
        text-decoration: none;
        color: inherit;
        cursor: pointer;
    }

    section {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 110px 100px;
    }

    @media (max-width: 1000px) {
        section {
            padding: 100px 50px;
        }
    }

    @media (max-width: 600px) {
        section {
            padding: 125px 30px;
        }
    }




    .box {
        position: relative;
        justify-content: center;
        min-height: 100vh;
        color: #fff;
        text-align: center;
    }

    .box video {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: -1;
    }

    .box h1 {
        margin-bottom: 15px;
        font-size: 65px;
        color: #ffd900;
        text-transform: uppercase;
        text-shadow: 0 2px 2px rgba(0, 0, 0, 0.5);
    }

    .box h3 {
        margin-bottom: 40px;
        font-size: 25px;
    }



    @media (max-width: 800px) {
        .box {
            min-height: 600px;
        }

        .box h1 {
            font-size: 32px;
        }

        .box h3 {
            font-size: 20px;
        }

    }

    .lin {
        text-decoration: none;
        color: #B7B7B7;
        margin: 10px;
        width: 50px;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        background: rgba(28, 28, 28, 0);
        border-radius: 10px;
        position: relative;
        transform: 0.4s;

    }


    .lin:hover {
        transform: rotate(45deg);
    }

    .lin::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        background-color: #b7b7b7;
        border-radius: 10px;
        transition: opacity 0.2s;
    }

    .lin:hover::before {
        opacity: 0.4;
    }

    .lin:nth-child(1)::before {
        background: #ff3884;
    }

    .lin:nth-child(2)::before {
        background: #3eff0e;
    }

    .lin:nth-child(3)::before {
        background: #0051ff;
    }

    .lin:nth-child(4)::before {
        background: #fbff00;
    }

    .lin:hover::before {
        transform: translate(-4px, -4px);
        filter: blur(10px);
    }

    .lin i {
        font-size: 1.7em;
        transition: all 0.4s;
    }

    .lin:hover i {
        color: #c8c8c8;
        transform: rotate(-45deg);
    }

    .lin:hover i.instagram {
        color: #c32aa3;
    }

    .lin:hover img.wtsp {
        color: #3eff0e;
    }

    .lin:hover img.fb {
        color: #0051ff;
    }

    .lin:hover img.snap {
        color: #fbff00;
    }

    .media {
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding-top: 20px;
    }
</style>
<div>



    <section class="box">
        <video src="/vid.mp4" autoplay muted loop></video>
        <h1>X MOBILE MARKET</h1>
        <h3>Find your preferable phone to buy</h3>
        <div class="p">
            <p>
                Welcome to our website, where we offer the latest iPhones and Samsung Galaxy phones at competitive
                prices. We are committed to providing our customers with the best possible shopping experience, from the
                moment they enter our site to the time they receive their order. <br>
                Our team consists of tech enthusiasts who are passionate about staying up-to-date with the latest trends
                and advancements in smartphone technology. We carefully select and test every product we offer to ensure
                that they meet our high standards for quality and performance. <br>
                At our website, we believe that everyone should have access to the latest smartphones, regardless of
                their budget. That's why we offer a wide range of options to suit every need and preference. Whether
                you're looking for a high-end flagship device or a more budget-friendly option, we've got you covered.
                <br>
                In addition to offering top-quality products, we pride ourselves on providing excellent customer
                service. If you have any questions or concerns about your order, our friendly and knowledgeable support
                team is always here to help.<br>
                Thank you for choosing our website for your smartphone needs. We look forward to serving you and
                providing you with the best possible shopping experience.
            </p>
            <div class="media">
                <a href="https://instagram.com/the.great.x?igshid=YmMyMTA2M2Y=" class="lin">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
                <a href="https://www.whatsapp.com/+212710107296" class="lin">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </a>
                <a href="https://www.facebook.com/THEMRX12" class="lin">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="https://www.snapchat.com/add/the12mrx?share_id=XfcDUm2SFPw&locale=en-GB" class="lin">
                    <i class="fa fa-snapchat" aria-hidden="true"></i>
                </a>
            </div>
        </div>

    </section>
</div>
</div>
@endsection
